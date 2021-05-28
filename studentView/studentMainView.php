<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="studentMainView.css">
    <title>Home</title>
    
</head>
<body>
    <div class="container-fluid headerPart">
        <span>Computer Based Test</span>
    </div>


    <div class="container-fluid questionArea" >
        <div class="headContent container-fluid">
            <span id="deptName">Computer Science</span>
            <span>Time Left : <span id="timer" ></span> </span>
        </div>

        <div class="typeOfQuestion container-fluid">
            Question Type :Multiple Choice Question
        </div>

        <!-- question start -->

        <div class="questions container-fluid" id="questions">
            <form id="questionForm" name="form">

            </form>
        </div>

        <div class="container-fluid controlBtns">
            <div class=" studentName">
                <i class="fa fa-user-graduate"></i>
                <span id="stdName">Swapnanil Paul</span>
            </div>
            <input type="submit" class="btn btn-primary shadow-none conrtroler submitButton" id="ansSubmit" value="Submit" >
        </div>
    </div>

    <div class="successArea">
        <div class="successmsg">
            <table class="">
                <thead>
                    <tr>
                        <th>Total No. Questions</th>
                        <th>Totale Attempted</th>
                        <th>Totale Not Attempted</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td id="totQ">00</td>
                    <td id="totAQ">00</td>
                    <td id="totNAQ">00</td>
                    </tr>
                </tbody>
            </table>

            <div class="btnArea">
                <input type="submit" class="closeBTN" name="closeBtn" id="closeBtn" value="Close">
            </div>
        </div> 
    </div>


</body>
</html>


<script>

    // var pass = document.getElementsByName('option')

    $(document).ready(function() {
        // var form = $('#questionForm')

        $.ajax({

            url: 'questionFetch.php',
            type: 'post',
            success: function(data) {
                $('#questionForm').html(data);
            }
        })


        // timmer functio

        // timmerValueMin = $('#timerMin').text()
        // timmerValueSec = $('#timerSec').text()
        // console.log(timmerValueMin, timmerValueSec)

        const totalTime = 2
        let time = totalTime * 60

        const countDownEl = document.getElementById('timer');

        function countDown() {
            let min = Math.floor(time / 60)
            let sec = time % 60

            min = min < 10 ? '0' + min : min
            sec = sec < 10 ? '0' + sec : sec

            if ( min == 00 && sec == 00 ) {
                clearInterval(updateCount)
                min = '00'
                sec = '00'
                console.log("Time Up")

                // FormSubmit();
            }else if (min == 0) {
                $('#timer').addClass('blinking')
            }

            countDownEl.innerHTML = `${min}:${sec}`;
            time --;
            
           
        }

        let updateCount = setInterval(countDown, 1000); 
        

        // timmer function

    })


    url = $(location).attr('href');
    console.log(url)
    splitUrl = url.split('/')
    roll = splitUrl[splitUrl.length - 1]
    dept = splitUrl[splitUrl.length - 2].replace("%20", " ")
    name = splitUrl[splitUrl.length - 3].replace("%20", " ")
    
    console.log(dept, name)


    dept = dept.toLowerCase().replace(/\b[a-z]/g, function(letter) {
        return letter.toUpperCase();
    });
    name = name.toLowerCase().replace(/\b[a-z]/g, function(letter) {
        return letter.toUpperCase();
    });
    // console.log(dept, name)



    stdName = $('#stdName').text(name)
    detpName = $('#deptName').text(dept)
    console.log("std name => " + name + "\n" + "dept name =>" + dept)


    // form submit function

    function FormSubmit() {

        formData = $('form').serializeArray()
        console.log(formData)

        $.each(formData, function(i, field){
            // $("#results").append(field.name + ":" + field.value + " ");
            splitValue = field.value.split('#')
            id = splitValue[1]
            value = splitValue[0]
            question = $("#questionsText_" + id).text()

            console.log(id + " " + value)
            console.log(question)

            $.ajax({
                url: 'ansSubmit.php',
                method: 'POST',
                data: {
                    "id": id,
                    "question": question,
                    "answer": value,
                    "roll": roll,
                    "stdName": name,
                    "dpet": dept
                },
                success: function(data) {
                    console.log('Currect Ans => ' + data)

                    if (data == "success") {

                        $(".questionArea").fadeOut(1200);
                        $(".successArea").fadeIn(1200);
                    
                    } else {
                        
                    }
                }
            })
            
        });

    }


    // form submit function

    $('#ansSubmit').on('click', FormSubmit) 


    $('#closeBtn').on('click', function() {
        window.location.href = "studentLogin.php";
    })

</script>