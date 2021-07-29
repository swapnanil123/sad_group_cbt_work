<?php

include_once("db_connect.php");

$examCode =$_POST['examCode'];
// $subjectName =$_POST['subjecName'];

$qrr = 'SELECT * FROM questiondetails WHERE exam_code = "'.$examCode.'" ' ;

$sql = mysqli_query($con, $qrr);
$totalMakrs = mysqli_num_rows($sql);
// echo $totalMakrs; 


$q = 'SELECT * FROM studentlogindata WHERE exam_serial_no = "'.$examCode.'" ';
$query = mysqli_query($con, $q);
$totalstd = mysqli_num_rows($query);

for ($i=1; $i<=$totalstd; $i++) {
    while($stdData = mysqli_fetch_array($query)) {
        $stdRoll = $stdData['std_roll'];
        $count = 0;
        $blankStr ="";

        $stdRes = 'SELECT * FROM examanswer WHERE stdRoll = "'.$stdRoll.'" and exam_code = "'.$examCode.'" ';
        $Quer = mysqli_query($con, $stdRes);
        $stdResDetails = mysqli_num_rows($Quer);
        for($j=1; $j<=$stdResDetails; $j++) {
            while($stdRD = mysqli_fetch_array($Quer)) {
                $givenAns = $stdRD['stdGivenAnswer'];
                $rightAns = $stdRD['currectAnswer'];
                $tableSerial = $stdRD['id'];

                $tableId = $blankStr.$tableSerial;

                if ($givenAns == $rightAns) {
                    $count += 1;
                }else {
                    $count += 0;
                }

                break;

            }
        }
        
        echo $count;

        $stdQ = 'SELECT * FROM studentpersonalinfo WHERE roll = "'.$stdRoll.'" ';
        $sq = mysqli_query($con, $stdQ);
        $stdDetails = mysqli_num_rows($sq);
        while($stdDet = mysqli_fetch_array($sq)) {
            $stdName = $stdDet['stdName'];
            $stdDepartment = $stdDet['dept'];
            $stdSemester = $stdDet['semester'];

?>

            <tr id="trID_ <?php echo $examCode ?>">


                <td id= "tdSeial_ <?php echo $examCode ?>"> <?php echo $i?> </td>
                <td id= "tdStdName_ <?php echo $examCode ?>"> <?php echo $stdName ?> </td>
                <td id= "tdStdRoll_ <?php echo $examCode ?>"> <?php echo $stdRoll ?> </td>
                <td id= "tdStdDept_ <?php echo $examCode ?>"> <?php echo $stdDepartment ?> </td>
                <td id= "tdStdSem_ <?php echo $examCode ?>"> <?php echo $stdSemester ?> </td>
                <td id= "tdStdMard_ <?php echo $examCode ?>"> <?php echo $totalMakrs ?> </td>
                <td id= "tdStdCount_ <?php echo $examCode ?>"> <?php echo $count ?> </td>
            
            
            </tr>


<?php
        }
        

        break;
    }
} 


?>
