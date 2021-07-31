<?php 

include_once("db_connect.php");


$q = "SELECT DISTINCT subject_name FROM examcreatedetails";
$query = mysqli_query($con, $q);
$totalRow = mysqli_num_rows($query);

// echo $totalRow;
if ($totalRow > 0) {
    for ($i=1; $i<=$totalRow; $i++) {
        while($result = mysqli_fetch_row($query)) {
            
?>

            <option class="option" value="<?php echo $result[0] ?>"> <?php echo $result[0] ?> </option>    
        
<?php

            break;
        }
    }
} else {
    echo "error";
}

?>