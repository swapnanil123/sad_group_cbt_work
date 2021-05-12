<?php

include_once("db_connect.php");

$q = 'select * from questions';

$query = mysqli_query($con, $q);
$allQuestions = mysqli_num_rows($query);

if ( $allQuestions > 0) {

    for($i=1; $i<= $allQuestions; $i++) {
        while($result = mysqli_fetch_array($query)) {
        
?>

            <div class="qst">
                <div class="questionContent" >
                    <strong> Q<?php echo $i ?>. <span id="questionsText_<?php echo $result['id'] ?>"> <?php echo $result['questionName'] ?></span></strong>
                </div>
                <div class="clearContent">
                    <div id="clearResponse_<?php echo $result['id'] ?>" class="clearBtn"> 
                        <span>Clear Respone</span>
                    </div>
                </div>
            </div>
            <div class="options">
                <form action="#" method="post" id="questionForm">
                    <div>
                        <input type="radio" name="option_<?php echo $result['id'] ?>" id="optionsOne_<?php echo $result['id'] ?>" class="fromWrapper"> 
                        <label for="optionsOne_<?php echo $result['id'] ?>" class="fromWrapper" id="questionsLable"><?php echo $result['optionOne'] ?></label>
                    </div>
                    <div>
                        <input type="radio" name="option_<?php echo $result['id'] ?>" id="optionsTwo_<?php echo $result['id'] ?>" class="fromWrapper"> 
                        <label for="optionsTwo_<?php echo $result['id'] ?>" class="fromWrapper" id="questionsLable"><?php echo $result['optionTwo'] ?></label>
                    </div>
                    <div>
                        <input type="radio" name="option_<?php echo $result['id'] ?>" id="optionsThree_<?php echo $result['id'] ?>" class="fromWrapper"> 
                        <label for="optionsThree_<?php echo $result['id'] ?>" class="fromWrapper" id="questionsLable"><?php echo $result['optionThree'] ?></label>
                    </div>
                    <div>
                        <input type="radio" name="option_<?php echo $result['id'] ?>" id="optionsFour_<?php echo $result['id'] ?>" class="fromWrapper"> 
                        <label for="optionsFour_<?php echo $result['id'] ?>" class="fromWrapper" id="questionsLable"><?php echo $result['optionFour'] ?></label>
                    </div>
                </form>
            </div>

            <script>

                $('#clearResponse_<?php echo $result['id'] ?>').on("click", () => {
                    console.log("Working Properly")

                    $('input:radio[name=option_<?php echo $result['id'] ?>]:checked').prop('checked', false);
                })

                lable = $('#questionsText_<?php echo $result['id'] ?>').text()
                // console.log(lable)

                res = lable[1].toUpperCase() + lable.slice(2).toLowerCase()
                console.log(res)

                $('#questionsText_<?php echo $result['id'] ?>').text(res)
                

            </script>

<?php   
            break;
        }

    }
}

?>