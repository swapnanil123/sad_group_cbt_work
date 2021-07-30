<?php 

include_once("db_connect.php");

$examCode = $_POST['examCode'];


$qrr = "select * from studentlogindata where exam_serial_no = '".$examCode."' ";
$sql = mysqli_query($con, $qrr);
$allStdRoll = mysqli_num_rows($sql);

for($i=1; $i<=$allStdRoll; $i++) {
    while($res = mysqli_fetch_array($sql)) {
        echo "$i => ".$res['std_roll']."   ";

        $q = "select * from studentpersonalinfo where roll = '".$res['std_roll']."' ";
        $query = mysqli_query($con, $q);
        $allStdDetail = mysqli_num_rows($query);
        if ($allStdDetail > 0) {
            while($result = mysqli_fetch_array($query)){

?>

                <tr id="trdata_<?php echo $result['id'] ?>">
                    <th id="tdStdSerial_<?php echo $result['id'] ?>"class="text-center"> <?php echo $i ?> </th>
                    <td id="tdStdName_<?php echo $result['id'] ?>"> <?php echo $result['stdName'] ?> </td>
                    <td id="tdStdRoll_<?php echo $result['id'] ?>" > <?php echo $result['roll'] ?> </td>
                    <td id="tdStdDept_<?php echo $result['id'] ?>" > <?php echo $result['dept'] ?> </td>
                    <td id="tdStdCourse_<?php echo $result['id'] ?>" > <?php echo $result['course'] ?> </td>
                    <td id="tdStdSem_<?php echo $result['id'] ?>" > <?php echo $result['semester'] ?> </td>
                    <td id="tdStdSess_<?php echo $result['id'] ?>"> <?php echo $result['sessionStd'] ?> </td>
                </tr>


<?php
            }
        }
        break;
    }
}


?>
