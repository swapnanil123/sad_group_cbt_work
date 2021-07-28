<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="instructionPage.css">

    <title>Instruction</title>
</head>
<body>
    
    <div class="container-fluid headerPart">
        <span>Computer Based Test</span>
    </div>


    <div class="container-fluid mainContainer">
        <div class=" insts">
            <!-- <strong> -->
                <span>1. Total duration of examination: <strong>10 minutes</strong></span> <br>
                <span>2. Number of questions: <strong>5</strong></span><br>
                <span>3. All questions are of objective type. Four options are given to each question out of which only one will be the correct answer.</span>
            <!-- </strong> -->
        </div>
    </div>

    <div class="container-fluid controlers">
        
        <div class="container-fluid checkOptions">
            <div class="checkBoxArea">
                <input type="checkbox" name="check" id="readyCheck" class="controlCheck">
            </div>
            <div class="instArea ml-2">
                <span class="inst">I have read and understood the instructions. All computer hardware allotted to me are in proper working condition.
                    I agree in case of not adhering to the instructions, I shall be liable to be debarred from this Test.
                </span>
            </div>
            
        </div>
        <div class=" container-fluid submitBtn">
            <form>
                <input type="button" class="readyButton" name="readyBtn" id="readyBTN" value="I am ready to begin" disabled>
            </form>
        </div>
    </div>

</body>
</html>



<script>

    $(document).ready(function() {
        console.log("Working Properly")

        url = $(location).attr('href');
        console.log(url)
        splitUrl = url.split('/')
        roll= splitUrl[splitUrl.length - 1]
        console.log(roll)


        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                console.log("Checkbox is checked.");
                $('#readyBTN').removeAttr('disabled');
                $('#readyBTN').css('background', '#11698b', 'color', '#fff');

            }
            else if($(this).prop("checked") == false){
                console.log("Checkbox is unchecked.");
                $('#readyBTN').attr("disabled", true);
                $('#readyBTN').css('background', '#4bccff77', 'color', '#fff');
            }
        });


        $('#readyBTN').on('click', function() {
            console.log('Working')

            try {
                
                console.log("Hi");
                $.ajax({
                    url: 'instructionFetch.php',
                    method: 'POST',
                    data: {
                        stdroll: roll
                    },
                    success: function(data) {
                        stdInfo = jQuery.parseJSON(data)
                        console.log(stdInfo)
                        subjectName = stdInfo["dept"].replace(" ", "#")
                        window.location.href = "studentMainView.php?"+ "/"  + stdInfo["exam_code"] + "/" + stdInfo["name"] + "/" + subjectName + "/" +roll ;
                        $('input[type="checkbox"]').prop('checked', false);                        
                    },
                    
                })

            } catch (error) {
                console.log(error)
            }
        })

    })


</script>

