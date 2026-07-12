<?php
$students=[
    [
        "student_id"=>1,
        "first_name"=>"omar",
        "last_name"=>"Mohammad",
        "subjects"=>[
            "Math"=>30,
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

for($i=0 ; $i<5 ; $i++) {
     $passedCount = 0;     //counting successful subject
    foreach($students[$i]["subjects"] as $subject=>$grade){
        if ($grade>= 60) 
         $passedCount++;
    }
      echo $students[$i]["first_name"]." ". $students[$i]["last_name"]." (passedCount is"." " .$passedCount.")".":";

      //var_dump($students[$i]["first_name"], $students[$i]["last_name"],"(passedCount is"." " .$passedCount.")".":");
      
      switch ($passedCount) {
        case 0:
            echo "Failed All Subjects"."\n";
            break;
             case 1:
            echo "Passed One Subject"."\n";
            break;
        case 2:
            echo "Passed Two Subjects"."\n";
            break;
        case 3:
            echo "All Subjects Passed"."\n";
            break;
    }
}

?>



