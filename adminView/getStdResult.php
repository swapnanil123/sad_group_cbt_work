<?php

include_once("db_connect.php");

$examCode =$_POST['examCode'];
// $subjectName =$_POST['subjecName'];

$qrr = 'SELECT * FROM questiondetails WHERE exam_code = "'.$examCode.'" ' ;

$sql = mysqli_query($con, $qrr);
$totalQtn = mysqli_num_rows($sql);
echo $totalQtn;



// $q = 'SELECT * FROM studentlogindata WHERE exam_serial_no = "'.$examCode.'" ' ;

// $query = mysqli_query($con, $q);
// $allQuestions = mysqli_num_rows($query);
// $result = mysqli_fetch_array($query);

// $stdRoll = $result[3];
// // echo $allQuestions;

// if ($allQuestions > 0) {
//     for($i=0; $i< $allQuestions; $i++) {
        

//         $exD = "select * from examanswer where stdRoll = '".$stdRoll."' ";
//         $run = mysqli_query($con, $exD);
//         $totaldata = mysqli_num_rows($run);
//         $ExdRes = mysqli_fetch_array($run);
//         $count = 0;
//         if ($ExdRes[6] == $ExdRes[7]) {
//             $count += 1;
//         }else {
//             $count += 0;
//         }
//         // echo $count;
      
//     }
// }else {
//     console.log("Not Found");
// }

// ?>
