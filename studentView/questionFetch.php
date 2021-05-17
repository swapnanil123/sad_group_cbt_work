<?php

include_once("db_connect.php");

$q = 'select * from questions';

$query = mysqli_query($con, $q);
$allQuestions = mysqli_num_rows($query);


if ( $allQuestions > 0) {

    for($i=1; $i<= $allQuestions; $i++) {
        while($result = mysqli_fetch_array($query)) {
        
?>
            <div class="formContent" id="questionNumber_<?php echo $result['id'] ?>">
                <div class="qst">
                    <div class="questionContent" id="qstArea">
                        <strong> Q<?php echo $i ?>. <span id="questionsText_<?php echo $result['id']?>"> <?php echo $result['questionName'] ?> </span></strong>
                    </div>
                    <div class="clearContent">
                        <div id="clearResponse_<?php echo $result['id'] ?>" class="clearBtn"> 
                            <span>Clear Respone</span>
                        </div>
                    </div>
                    <div id="questionId" hidden><?php echo $result['id'] ?></div>
                </div>
                <div class="options">
                    
                    <div>
                        <input type="radio" name="option_<?php echo $result['id'] ?>" id="optionsOne_<?php echo $result['id'] ?>" class="fromWrapper" value="<?php echo $result['optionOne'] ?>#<?php echo $result['id'] ?>"> 
                        <label for="optionsOne_<?php echo $result['id'] ?>" class="fromWrapper" id="questionsLable"><?php echo $result['optionOne'] ?></label>
                    </div>
                    <div>
                        <input type="radio" name="option_<?php echo $result['id'] ?>" id="optionsTwo_<?php echo $result['id'] ?>" class="fromWrapper" value="<?php echo $result['optionTwo'] ?>#<?php echo $result['id'] ?>"> 
                        <label for="optionsTwo_<?php echo $result['id'] ?>" class="fromWrapper" id="questionsLable"><?php echo $result['optionTwo'] ?></label>
                    </div>
                    <div>
                        <input type="radio" name="option_<?php echo $result['id'] ?>" id="optionsThree_<?php echo $result['id'] ?>" class="fromWrapper" value="<?php echo $result['optionThree'] ?>#<?php echo $result['id'] ?>"> 
                        <label for="optionsThree_<?php echo $result['id'] ?>" class="fromWrapper" id="questionsLable"><?php echo $result['optionThree'] ?></label>
                    </div>
                    <div>
                        <input type="radio" name="option_<?php echo $result['id'] ?>" id="optionsFour_<?php echo $result['id'] ?>" class="fromWrapper" value="<?php echo $result['optionFour'] ?>#<?php echo $result['id'] ?>"> 
                        <label for="optionsFour_<?php echo $result['id'] ?>" class="fromWrapper" id="questionsLable"><?php echo $result['optionFour'] ?></label>
                    </div>
                
                </div>
            </div>


            <script>

                $('#clearResponse_<?php echo $result['id'] ?>').on("click", () => {
                    console.log("Working Properly")

                    $('input:radio[name=option_<?php echo $result['id'] ?>]:checked').prop('checked', false);
                })

            </script>

            

<?php   
            break;
        }

    }
}

?>

