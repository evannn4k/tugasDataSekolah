<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public static function index()
    {
        return view("student-index");
    }
}
