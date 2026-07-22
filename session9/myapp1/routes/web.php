<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/hello', function () {
    $data=[
        "name"=>"mias",
        "age"=>20,
        "school"=>[
            "name"=>"shams AlAsiel",
            "Location"=>"Aleppo"
        ]
    ];

    return view('hello',$data);
});*/

Route::get('/student', function () {
$students=[
    [
        "student_id"=>1,
        "first_name"=>"omar",
        "last_name"=>"Mohammad",
        "age"=>20,
        "subjects"=>[
            "Math"=>60,
            "Php"=>40,
            "English"=>40,
        ]
    ],
    [
        "student_id"=>2,
        "first_name"=>"Sara",
        "last_name"=>"Ahmad",
        "age"=>22,
        "subjects"=>[
            "Math"=>80,
            "Php"=>60,
            "English"=>70,
        ]
    ],
    [
        "student_id"=>3,
        "first_name"=>"Sali",
        "last_name"=>"Swaid",
        "age"=>18,
        "subjects"=>[
            "Math"=>50,
            "Php"=>85,
            "English"=>60,
        ]
    ],
    [
        "student_id"=>4,
        "first_name"=>"Khaled",
        "last_name"=>"Omar",
        "age"=>24,
        "subjects"=>[
            "Math"=>90,
            "Php"=>80,
            "English"=>100,
        ]
    ],
        [
        "student_id"=>5,
        "first_name"=>"Imad",
        "last_name"=>"Hasan",
        "age"=>23,
        "subjects"=>[
            "Math"=>70,
            "Php"=>55,
            "English"=>45,
        ]
    ]
];
 return view('students',['students' => $students]);
});

Route::get('/student/filter', function () {
    $students=[
    [
        "student_id"=>1,
        "first_name"=>"omar",
        "last_name"=>"Mohammad",
        "age"=>20,
        "subjects"=>[
            "Math"=>60,
            "Php"=>40,
            "English"=>40,
        ]
    ],
    [
        "student_id"=>2,
        "first_name"=>"Sara",
        "last_name"=>"Ahmad",
        "age"=>22,
        "subjects"=>[
            "Math"=>80,
            "Php"=>60,
            "English"=>70,
        ]
    ],
    [
        "student_id"=>3,
        "first_name"=>"Sali",
        "last_name"=>"Swaid",
        "age"=>18,
        "subjects"=>[
            "Math"=>50,
            "Php"=>85,
            "English"=>60,
        ]
    ],
    [
        "student_id"=>4,
        "first_name"=>"Khaled",
        "last_name"=>"Omar",
        "age"=>24,
        "subjects"=>[
            "Math"=>90,
            "Php"=>80,
            "English"=>100,
        ]
    ],
        [
        "student_id"=>5,
        "first_name"=>"Imad",
        "last_name"=>"Hasan",
        "age"=>23,
        "subjects"=>[
            "Math"=>70,
            "Php"=>55,
            "English"=>45,
        ]
    ]
];
$name= request('name');
$filtered = array_filter($students, function ($student) use ($name) {
        return $student['first_name'] == $name;
    });
        return view('students', ['students' => $filtered]);
});

Route::get('/student/filter2', function () {
    $students=[
    [
        "student_id"=>1,
        "first_name"=>"omar",
        "last_name"=>"Mohammad",
        "age"=>20,
        "subjects"=>[
            "Math"=>60,
            "Php"=>40,
            "English"=>40,
        ]
    ],
    [
        "student_id"=>2,
        "first_name"=>"Sara",
        "last_name"=>"Ahmad",
        "age"=>22,
        "subjects"=>[
            "Math"=>80,
            "Php"=>60,
            "English"=>70,
        ]
    ],
    [
        "student_id"=>3,
        "first_name"=>"Sali",
        "last_name"=>"Swaid",
        "age"=>20,
        "subjects"=>[
            "Math"=>50,
            "Php"=>85,
            "English"=>60,
        ]
    ],
    [
        "student_id"=>4,
        "first_name"=>"Khaled",
        "last_name"=>"Omar",
        "age"=>24,
        "subjects"=>[
            "Math"=>90,
            "Php"=>80,
            "English"=>100,
        ]
    ],
        [
        "student_id"=>5,
        "first_name"=>"Imad",
        "last_name"=>"Hasan",
        "age"=>23,
        "subjects"=>[
            "Math"=>70,
            "Php"=>55,
            "English"=>45,
        ]
    ]
];
$age= request('age');
$filtered = array_filter($students, function ($student) use ($age) {
        return $student['age']>$age ;
    });
        return view('students', ['students' => $filtered]);
});

Route::get('/student/filter3', function () {
    $students=[
    [
        "student_id"=>1,
        "first_name"=>"omar",
        "last_name"=>"Mohammad",
        "age"=>20,
        "subjects"=>[
            "Math"=>60,
            "Php"=>40,
            "English"=>40,
        ]
    ],
    [
        "student_id"=>2,
        "first_name"=>"Sara",
        "last_name"=>"Ahmad",
        "age"=>22,
        "subjects"=>[
            "Math"=>80,
            "Php"=>60,
            "English"=>70,
        ]
    ],
    [
        "student_id"=>3,
        "first_name"=>"Sali",
        "last_name"=>"Swaid",
        "age"=>20,
        "subjects"=>[
            "Math"=>50,
            "Php"=>85,
            "English"=>60,
        ]
    ],
    [
        "student_id"=>4,
        "first_name"=>"Khaled",
        "last_name"=>"Omar",
        "age"=>24,
        "subjects"=>[
            "Math"=>90,
            "Php"=>80,
            "English"=>100,
        ]
    ],
        [
        "student_id"=>5,
        "first_name"=>"Imad",
        "last_name"=>"Hasan",
        "age"=>23,
        "subjects"=>[
            "Math"=>70,
            "Php"=>55,
            "English"=>45,
        ]
    ]
];
$Math= request('Math');
$filtered = array_filter($students, function ($student) use ($Math) {
        return $student['subjects']['Math']>$Math ;
    });
        return view('students', ['students' => $filtered]);
});
