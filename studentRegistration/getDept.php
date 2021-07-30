<?php 

include_once("db_connect.php");


$q = "select * from examcreatedetails";
$query = mysqli_query($con, $q);
$totalRow = mysqli_num_rows($query);

// echo $totalRow;
if ($totalRow > 0) {
    for ($i=1; $i<=$totalRow; $i++) {
        while($result = mysqli_fetch_row($query)) {
    ?>

            <option value="<?php echo $result[1] ?>"> <?php echo $result[1] ?> </option>    
        
    <?php
        }
    }
} else {
    echo "error";
}

?>