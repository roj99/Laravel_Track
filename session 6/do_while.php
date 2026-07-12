<?php
$students=[
    [
        "student_id"=>1,
        "first_name"=>"omar",
        "last_name"=>"Mohammad",
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
        "subjects"=>[
            "Math"=>70,
            "Php"=>55,
            "English"=>45,
        ]
    ]
];

$i = 0;
do {
    $student = $students[$i];
    $sum = $student["subjects"]["Math"] + $student["subjects"]["Php"] + $student["subjects"]["English"];
    $average = $sum /3;
    var_dump($student["first_name"]."'s " ."average is:".$average) ;
    $i++;
} 
while ($i<count($students));

?>
