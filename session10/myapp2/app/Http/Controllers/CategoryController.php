<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listFun(Request $request){
       $students=[
            [ "name" => "Firas","age" => 20 ],
            [ "name" => "Ayham","age" => 22 ],
            [ "name" => "maria","age" => 22 ],
            [ "name" => "sali","age" => 20 ],
            [ "name" => "Ziad","age" => 27 ],
            [ "name" => "Nada","age" => 21 ],
            [ "name" => "Omar","age" => 24 ],
            [ "name" => "Ali","age" => 30 ],
            [ "name" => "Faten","age" => 23 ],
            [ "name" => "Nadia","age" => 22 ],
            [ "name" => "Ibrahim","age" => 34 ],
            [ "name" => "Shadeen","age" => 32 ],
            [ "name" => "Karim","age" => 25 ],
            [ "name" => "Ayman","age" => 29 ],
            [ "name" => "Karam","age" => 32 ],
            [ "name" => "Qais","age" => 37 ],
            [ "name" => "Khloud","age" => 25 ],
            [ "name" => "Rita","age" => 29 ],
            [ "name" => "Mai","age" => 26 ],
            [ "name" => "Miran","age" => 28 ],
        ];
         $ageFrom = $request->query('age_from');
         $ageTo = $request->query('age_to');

    $filtered = array_filter($students, function ($student) use ($ageFrom, $ageTo) {
        if ($ageFrom && $student['age'] < $ageFrom) {
            return false;
        }
        if ($ageTo && $student['age'] > $ageTo) {
            return false;
        }
        return true;
    });

    return view('students', ['students' => $filtered]);
}

    public function filterFun(Request $request){
    $students = [
        [ "name" => "Firas", "age" => 20 ],
        [ "name" => "Ayham", "age" => 22 ],
        [ "name" => "maria", "age" => 22 ],
        [ "name" => "sali", "age" => 20 ],
        [ "name" => "Ziad", "age" => 27 ],
        [ "name" => "Nada", "age" => 21 ],
        [ "name" => "Omar", "age" => 24 ],
        [ "name" => "Ali", "age" => 30 ],
        [ "name" => "Faten", "age" => 23 ],
        [ "name" => "Nadia", "age" => 22 ],
        [ "name" => "Ibrahim", "age" => 34 ],
        [ "name" => "Shadeen", "age" => 32 ],
        [ "name" => "Karim", "age" => 25 ],
        [ "name" => "Ayman", "age" => 29 ],
        [ "name" => "Karam", "age" => 32 ],
        [ "name" => "Qais", "age" => 37 ],
        [ "name" => "Khloud", "age" => 25 ],
        [ "name" => "Rita", "age" => 29 ],
        [ "name" => "Mai", "age" => 26 ],
        [ "name" => "Miran", "age" => 28 ],
    ];
    $name = $request->query('name');

    $filtered = array_filter($students, function ($student) use ($name) {
        if ($name && !str_contains(strtolower($student['name']), strtolower($name))) {
            return false;
        }
        return true;
    });

    return view('students', ['students' => $filtered]);
}
}


