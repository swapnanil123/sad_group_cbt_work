<?php

include_once("db_connect.php");

$examCode =$_POST['exam_code'];
$subjectName =$_POST['subjecName'];

$q = 'select * from questiondetails where exam_code = "'.$examCode.'" and subject_name = "'.$subjectName.'" ' ;

$query = mysqli_query($con, $q);
$allQuestions = mysqli_num_rows($query);




if ( $allQuestions > 0) {

    for($i=1; $i<= $allQuestions; $i++) {
        while($result = mysqli_fetch_array($query)) {
        
?>
            <div class="formContent" id="questionNumber_<?php echo $result['id'] ?>">
                <div class="qst">
                    <div class="questionContent" id="qstArea">
                        <strong> Q<?php echo $i ?>. <span id="questionsText_<?php echo $result['id']?>"> <?php echo $result['question'] ?> </span></strong>
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
                        <input type="radio" name="option_<?php echo $result['id'] ?>" id="optionsOne_<?php echo $result['id'] ?>" class="fromWrapper" value="<?php echo $result['option_1'] ?>#<?php echo $result['id'] ?>"> 
                        <label for="optionsOne_<?php echo $result['id'] ?>" class="fromWrapper" id="questionsLable"><?php echo $result['option_1'] ?></label>
                    </div>
                    <div>
                        <input type="radio" name="option_<?php echo $result['id'] ?>" id="optionsTwo_<?php echo $result['id'] ?>" class="fromWrapper" value="<?php echo $result['option_2'] ?>#<?php echo $result['id'] ?>"> 
                        <label for="optionsTwo_<?php echo $result['id'] ?>" class="fromWrapper" id="questionsLable"><?php echo $result['option_2'] ?></label>
                    </div>
                    <div>
                        <input type="radio" name="option_<?php echo $result['id'] ?>" id="optionsThree_<?php echo $result['id'] ?>" class="fromWrapper" value="<?php echo $result['option_3'] ?>#<?php echo $result['id'] ?>"> 
                        <label for="optionsThree_<?php echo $result['id'] ?>" class="fromWrapper" id="questionsLable"><?php echo $result['option_3'] ?></label>
                    </div>
                    <div>
                        <input type="radio" name="option_<?php echo $result['id'] ?>" id="optionsFour_<?php echo $result['id'] ?>" class="fromWrapper" value="<?php echo $result['option_4'] ?>#<?php echo $result['id'] ?>"> 
                        <label for="optionsFour_<?php echo $result['id'] ?>" class="fromWrapper" id="questionsLable"><?php echo $result['option_4'] ?></label>
                    </div>
                
                </div>
            </div>


            <script>

                $('#clearResponse_<?php echo $result['id'] ?>').on("click", () => {
                    console.log("Working Properly")

                    $('input:radio[name=option_<?php echo $result['id'] ?>]:checked').prop('checked', false);
                })


                questions = $("#questionsText_<?php echo $result['id'] ?>").text()
                

                firstLatter = questions.charAt(1)
                capFirstLAtter = firstLatter.toUpperCase()
                console.log("Question => => =>"+firstLatter)

                final_questionName = questions.replace(firstLatter, capFirstLAtter)

                $("#questionsText_<?php echo $result['id'] ?>").text(final_questionName)

            </script>

            

<?php   
            break;
        }

    }
}

?>

