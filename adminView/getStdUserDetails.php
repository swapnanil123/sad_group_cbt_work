<?php 

include_once("db_connect.php");


$examCode = $_POST['examCode'];

$q = 'select * from studentlogindata where exam_serial_no = "'.$examCode.'" ';

$query = mysqli_query($con, $q);
$allQuestions = mysqli_num_rows($query);

for ($i=1; $i<=$allQuestions; $i++) {
    while($result = mysqli_fetch_array($query)) {

?>

                <tr id="trID_<?php echo $result['exam_serial_no'] ?>">

                    <td id= "tdExamCode_<?php echo $result['exam_serial_no'] ?> "> <?php echo $i ?> </td>
                    <td id= "tdSub_<?php echo $result['exam_serial_no'] ?>"> <?php echo $result['std_name'] ?> </td>
                    <td id= "tdCourse_<?php echo $result['exam_serial_no'] ?>"> <?php echo $result['std_roll'] ?> </td>
                    <td id= "tdTotQtn_<?php echo $result['exam_serial_no'] ?>"> <?php echo $result['stdUserId'] ?> </td>
                    
                </tr>
            

<?php

        break;
        
    }

}

?>

