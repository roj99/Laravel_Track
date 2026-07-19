<?php

$employes=[
    [
        "first_name"=>"Mark",
        "last_name"=>"Swaid",
         "type"=>"manager",
         "task"=>[
            "name"=>"Data Analysis",
            "status"=>true
         ]
    ],
    [
        "first_name"=> "Imad",
        "last_name"=>"Hasan",
         "type"=>"Jonir",
         "task"=>[
            "name"=>"Data Analysis",
            "status"=>true
         ]
    ],
    [
        "first_name"=>"sali",
        "last_name"=>"Saied",
         "type"=>"intern",
         "task"=>[
            "name"=>"BackEnd",
            "status"=>false
         ]
    ]
];
    /*for($i=0;$i<3;$i++){
    if($employes[$i]["first_name"]==="Imad" && $employes[$i]["last_name"]==="Hasan"){
         continue;
    }
    echo $employes[$i]["first_name"]." ".$employes[$i]["last_name"]."\n";
}*/for($i=0;$i<3;$i++){
    $is_dataAnalysis=false;
        foreach($employes[$i]["task"] as $employe=>$task){
            if($task==="Data Analysis") {
        $is_dataAnalysis=true;
            }
        }
    if($is_dataAnalysis)
    echo $employes[$i]["first_name"]." ".$employes[$i]["last_name"]."\n";
    }
?>