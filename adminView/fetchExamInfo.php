<?php 

include_once("db_connect.php");


$q = 'select * from examcreatedetails';

$query = mysqli_query($con, $q);
$allQuestions = mysqli_num_rows($query);

if ( $allQuestions > 0) {

    while($result = mysqli_fetch_array($query)) {

        $qrr = "SELECT * from studentlogindata WHERE exam_serial_no = '".$result['exam_serial_no']."'";
        $sql = mysqli_query($con, $qrr);
        $totalStd = mysqli_num_rows($sql);
        $res = mysqli_fetch_array($sql);
        
?>
        
        <tr id="trID_<?php echo $result['exam_serial_no'] ?>">
            <td id= "tdExamCode_<?php echo $result['exam_serial_no'] ?> "> <?php echo $result['exam_serial_no'] ?>&nbsp; <i style="cursor: pointer" class="fa fa-eye showIcon" id="show_<?php echo $result['exam_serial_no'] ?>" onclick="fetchQtn(this.id)"></i> </td>
            <td id= "tdSub_<?php echo $result['exam_serial_no'] ?>"> <?php echo $result['subject_name'] ?> </td>
            <td id= "tdCourse_<?php echo $result['exam_serial_no'] ?>"> <?php echo $result['course'] ?> </td>
            <td id= "tdTotQtn_<?php echo $result['exam_serial_no'] ?>"> <?php echo $totalStd ?> </td>
            
            <td >
                <div style="paddin:0;display: flex; color: #fff">
                    <input type="button" id="delBtn_<?php echo $result['exam_serial_no'] ?>" onclick="viewRes(this.id)" class="btn btn-warning btn-sm shadow-none" value="View">
                </div>
            </td>

            <td class= "examCodeID" hidden > <?php echo $result['exam_serial_no'] ?> </td>
            
        </tr>
        
<?php

    }
}

?>

