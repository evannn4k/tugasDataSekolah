<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public static function index(Request $request)
    {
        $search = $request->search;

        $aklCount = Student::where("major", "AKL")->count();
        $mplbCount = Student::where("major", "MPLB")->count();
        $pplgCount = Student::where("major", "PPLG")->count();
        $tbCount = Student::where("major", "TB")->count();
        $students = Student::all();

        if (!empty($search)) {
            $students = Student::where("name", "like", "%{$search}%")->get();
        } else {
            $students = Student::all();
        }

        return view("student.index", compact(["students", "aklCount", "mplbCount", "pplgCount", "tbCount"]));
    }

    public static function major($major)
    {
        $aklCount = Student::where("major", "AKL")->count();
        $mplbCount = Student::where("major", "MPLB")->count();
        $pplgCount = Student::where("major", "PPLG")->count();
        $tbCount = Student::where("major", "TB")->count();
        $students = Student::all()->where("major", $major);

        return view("student.index", compact(["students", "aklCount", "mplbCount", "pplgCount", "tbCount"]));
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

        return redirect(route("student.index"))->with("success", "Data added successfully");
    }

    public static function edit($id)
    {
        $student = Student::find($id);

        return view("student.edit", compact(["student"]));
    }

    public static function update(Request $request, $id)
    {
        if ($request->photo) {
            $request->validate([
                "name" => "required",
                "nisn" => "required|integer",
                "email" => "required|email",
                "major" => "required",
                "photo" => "required|image|max:2048|mimes:jpg,png,jpeg,gif,webp"
            ]);

            $student = Student::find($id);
            $imageNameOld = $student->photo;

            Storage::delete("images/" . $imageNameOld);

            $imageName = time() . "." . $request->photo->getClientOriginalExtension();
            $request->photo->storeAs("images/" . $imageName);

            Student::where("id", $id)->update([
                "name" => $request->name,
                "nisn" => $request->nisn,
                "email" => $request->email,
                "major" => $request->major,
                "photo" => $imageName
            ]);
        } else {

            $request->validate([
                "name" => "required",
                "nisn" => "required|integer",
                "email" => "required|email",
                "major" => "required",
                // "photo" => "required|image|max:2048|mimes:jpg,png,jpeg,gif,webp",
            ]);

            Student::where("id", $id)->update([
                "name" => $request->name,
                "nisn" => $request->nisn,
                "email" => $request->email,
                "major" => $request->major
            ]);
        }

        return redirect(route("student.index"))->with("success", "Successfully updated the data");
    }

    public static function destroy($id)
    {
        $student = Student::find($id);

        $fileName = $student["photo"];
        Storage::delete("images/" . $fileName);

        Student::destroy($id);

        return redirect(route("student.index"))->with("success", "Data has been successfully deleted");
    }

    //     public static function search(Request $request)
    //     {
    //         dd(Student::all());
    //         $search = $request->search;

    //         $aklCount = Student::where("major", "AKL")->count();
    //         $mplbCount = Student::where("major", "MPLB")->count();
    //         $pplgCount = Student::where("major", "PPLG")->count();
    //         $tbCount = Student::where("major", "TB")->count();
    //         $students = Student::where("name", "like", "%{$search}%")->get();

    //         return view("student.index", compact(["students", "aklCount", "mplbCount", "pplgCount", "tbCount"]));
    //     }
}
