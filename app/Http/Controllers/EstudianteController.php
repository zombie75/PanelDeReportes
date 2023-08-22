<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    public function listar()
    {
        $registros = DB::table('mo_course AS c')
            ->join('mo_context AS ctx', 'ctx.instanceid', '=', 'c.id')
            ->join('mo_role_assignments AS ra', 'ra.contextid', '=', 'ctx.id')
            ->join('mo_user AS u', 'u.id', '=', 'ra.userid')
            ->select(
                'u.id AS StudentId',
                DB::raw("CONCAT(u.firstname, ' ', u.lastname) AS StudentName"),
                DB::raw("LEFT(u.idnumber, LENGTH(u.idnumber) - 2) AS StudentRut"),
                DB::raw("RIGHT(u.idnumber, 1) AS StudentDV"),
                'u.phone2 AS StudentPhone',
                'u.email AS StudentMail',
                DB::raw("FROM_UNIXTIME(u.timecreated, '%d-%m-%Y') AS StudentActivationDate"),
                DB::raw("FROM_UNIXTIME(enddate, '%d-%m-%Y') AS FechaTermino"),
                'c.id AS CourseId'
            )
            ->where('c.id', 12)
            ->where('ra.roleid', 5)
            ->get();

        
        return view('estudiante', compact('registros'));
    }
}