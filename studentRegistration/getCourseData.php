<?php 

include_once("db_connect.php");

$subName = $_POST['subName'];

$q = "select * from examcreatedetails where subject_name = '".$subName."' ";
$query = mysqli_query($con, $q);
$totalRow = mysqli_num_rows($query);

// echo $totalRow;
if ($totalRow > 0) {
    for ($i=1; $i<=$totalRow; $i++) {
        while($result = mysqli_fetch_row($query)) {
    ?>

            <option value="<?php echo $result[4] ?>"> <?php echo $result[4] ?> </option>    
        
    <?php
        }
    }
} else {
    echo "error";
}

?>