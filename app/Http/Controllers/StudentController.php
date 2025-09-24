<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public static function index()
    {
        $students = Student::all();

        return view("student.index", compact(["students"]));
    }

    public static function create()
    {
        return view("student.create");
    }

    public static function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "nisn" => "required|integer",
            "email" => "required|email",
            "major" => "required",
            "photo" => "required|image|max:2048|mimes:jpg,png,jpeg,gif,webp",
        ]);

        $imageName = time() . "." . $request->photo->getClientOriginalExtension();

        $request->photo->storeAs("images/" . $imageName);

        try {
            Student::create([
                "name" => $request->name,
                "nisn" => $request->nisn,
                "email" => $request->email,
                "major" => $request->major,
                "photo" => $imageName,
            ]);
        } catch (\Exception $e) {

        }

        return redirect(route("student.index"));
    }
}
