<?php

namespace App\Http\Controllers;


use App\Models\ExternalModel;

class ExternalController extends Controller
{
    public function index()
    {
        $data = ExternalModel::select('id', 'fullname', 'idnumber', 'startdate', 'enddate')->get();

        return view('estudiante', compact('data'));
    }
}

