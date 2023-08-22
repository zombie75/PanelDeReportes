<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SegundaPantallaController extends Controller
{
    public function mostrarEstudiantes($courseId)
    {
        $registros = DB::table('mo_course AS c')
            ->join('mo_context AS ctx', 'ctx.instanceid', '=', 'c.id')
            ->join('mo_role_assignments AS ra', 'ctx.id', '=', 'ra.contextid')
            ->join('mo_user AS u', 'ra.userid', '=', 'u.id')
            ->select(
                'u.id AS StudentId',
                DB::raw("CONCAT(u.firstname, ' ', u.lastname) AS StudentName"),
                DB::raw("LEFT(u.idnumber, LENGTH(u.idnumber) - 2) AS StudentRut"),
                DB::raw("RIGHT(u.idnumber, 1) AS StudentDV"),
                'u.phone2 AS StudentPhone',
                'u.email AS StudentMail',
                DB::raw("FROM_UNIXTIME(u.timecreated, '%d-%m-%Y') AS StudentActivationDate"),
                DB::raw("FROM_UNIXTIME(c.enddate, '%d-%m-%Y') AS FechaTermino"),
                'c.id AS CourseId'
            )
            ->where('c.id', $courseId)
            ->where('ra.roleid', 5)
            ->get();

        return view('segunda_pantalla', ['registros' => $registros]);
    }
}
