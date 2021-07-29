<?php

include_once('db_connect.php');

$examCode = $_POST['examCode'];
$subjectName = $_POST['subName'];


$q = "select * from questiondetails where exam_code = '".$examCode."' and subject_name = '".$subjectName."'";

$query = mysqli_query($con, $q);

$numberOfQtn= mysqli_num_rows($query);

    
if ( $numberOfQtn > 0) {

    for($i=1; $i<= $numberOfQtn; $i++) {
        while($result = mysqli_fetch_array($query)) {

?>


            <tr id="trID_<?php echo $result['id'] ?>">
                <td id= "tdSno_<?php echo $result['id'] ?> "> <?php echo $i ?> </td>
                <td id= "tdQtn_<?php echo $result['id'] ?>"> <?php echo $result['question'] ?> </td>
                <td id= "tdOptionOne_<?php echo $result['id'] ?>"> <?php echo $result['option_1'] ?> </td>
                <td id= "tdOptionTwo_<?php echo $result['id'] ?>"> <?php echo $result['option_2'] ?> </td>
                <td id= "tdOptionThree_<?php echo $result['id'] ?>"> <?php echo $result['option_3'] ?> </td>
                <td id= "tdOptionFour_<?php echo $result['id'] ?>"> <?php echo $result['option_4'] ?>  </td>
                <td id= "tdAns_<?php echo $result['id'] ?>"> <?php echo $result['answer'] ?> </td>
                
            </tr>


<?php   
            break;
        }

    }
}

?>
