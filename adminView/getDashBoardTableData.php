<?php 

include_once("db_connect.php");


$q = 'select * from examcreatedetails';

$query = mysqli_query($con, $q);
$allQuestions = mysqli_num_rows($query);


if ( $allQuestions > 0) {

    while($result = mysqli_fetch_array($query)) {
        
?>

        
        <tr id="trID_<?php echo $result['exam_serial_no'] ?>">
            <td id= "tdExamCode_<?php echo $result['exam_serial_no'] ?> "> <?php echo $result['exam_serial_no'] ?> </td>
            <td id= "tdSub_<?php echo $result['exam_serial_no'] ?>"> <?php echo $result['sem_name'] ?> </td>
            <td id= "tdsemName_<?php echo $result['exam_serial_no'] ?>"> <?php echo $result['subject_name'] ?> </td>
            <td id= "tdPapeprCode_<?php echo $result['exam_serial_no'] ?>"> <?php echo $result['paper_code'] ?> </td>
            <td id= "tdCourse_<?php echo $result['exam_serial_no'] ?>"> <?php echo $result['number_of_question'] ?> </td>
            <!-- <td id= "tdDuration_<?php echo $result['exam_serial_no'] ?>"> <?php echo $result['exam_duration'] ?>  </td> -->
            <td>
                <span id="exStatus_<?php echo $result['exam_serial_no'] ?>" class="badge bg-danger">Not Started</span>
            </td>
            <td class= "examCodeID" hidden > <?php echo $result['exam_serial_no'] ?> </td>
            
        </tr>



<?php

    }
}

?>

