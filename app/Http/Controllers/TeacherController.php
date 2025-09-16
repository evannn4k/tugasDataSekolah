<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public static function index()
    {
        return view("teacher.index");
    }
}
