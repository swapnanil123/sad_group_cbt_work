<?php 

include_once("db_connect.php");


$q = 'select * from examcreatedetails';

$query = mysqli_query($con, $q);
$allQuestions = mysqli_num_rows($query);


if ( $allQuestions > 0) {

    while($result = mysqli_fetch_array($query)) {
        
?>
        
        <tr id="trID_<?php echo $result['exam_serial_no'] ?>">
            <td id= "tdExamCode_<?php echo $result['exam_serial_no'] ?> "> <?php echo $result['exam_serial_no'] ?>&nbsp; <i style="cursor: pointer" class="fa fa-eye showIcon" id="show_<?php echo $result['exam_serial_no'] ?>" onclick="fetchQtn(this.id)"></i> </td>
            <td id= "tdSub_<?php echo $result['exam_serial_no'] ?>"> <?php echo $result['subject_name'] ?> </td>
            <td id= "tdsemName_<?php echo $result['exam_serial_no'] ?>"> <?php echo $result['sem_name'] ?> </td>
            <td id= "tdPapeprCode_<?php echo $result['exam_serial_no'] ?>"> <?php echo $result['paper_code'] ?> </td>
            <td id= "tdCourse_<?php echo $result['exam_serial_no'] ?>"> <?php echo $result['course'] ?> </td>
            <td id= "tdDuration_<?php echo $result['exam_serial_no'] ?>"> <?php echo $result['exam_duration'] ?>  </td>
            <td id= "tdTotQtn_<?php echo $result['exam_serial_no'] ?>"> <?php echo $result['number_of_question'] ?> </td>
            
            <td >
                <div style="paddin:0;display: flex;">
                    <input type="button" class="btn btn-success btn-sm shadow-none " id="startBtn_<?php echo $result['exam_serial_no'] ?>" onclick="getData(this.id)" value="Start">
                    <input type="button" id="stopBtn_<?php echo $result['exam_serial_no'] ?>" onclick="stopBtnId(this.id)" class="btn btn-secondary btn-sm shadow-none" disabled value="Stop">
                    <input type="button" id="delBtn_<?php echo $result['exam_serial_no'] ?>" onclick="getDelBtnId(this.id)" class="btn btn-danger btn-sm shadow-none" value="Delete">
                </div>
            </td>

            <td class= "examCodeID" hidden > <?php echo $result['exam_serial_no'] ?> </td>
            
        </tr>
        
<?php

    }
}

?>

