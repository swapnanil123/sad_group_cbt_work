<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="studentMainView.css">
    <title>Home</title>
    
</head>
<body>
    <div class="container-fluid headerPart">
        <span>Computer Based Test</span>
    </div>

    <!-- <div class="container sideArea">
        <div class="profilePic container-fluid">
            <img src="./../biologo.jpg" alt="dp" width="90px" height="90px" class="dp">
            <span>Swapnanil Paul</span>
        </div>
        <div class="subjectNameArea container-fluid">
            <span>Data Structure</span>
        </div>
        <div class="container-fluid questionInst">
            <div class="instWrapper">
                <div class="instnumbers">
                    <span>0</span>
                </div> &nbsp;
                <span> Answered</span>
            </div>
            <div class="instWrapper">
                <div class="instnumbers1">
                    <span>0</span>
                </div> &nbsp;
                <span> Not Answered </span>
            </div>
        </div>
        <div class="questionNumHead container-fluid">
            <span>Choose Question Here</span>
        </div>
       
        <div class="submitArea container-fluid">
            <input type="submit" class="btn btn-primary shadow-none submitBtn" id="submit" value="Submit" disabled>
        </div>
    </div> -->



    <div class="container-fluid questionArea">
        <div class="headContent container-fluid">
            <span id="deptName">Computer Science</span>
            <span>Time Left : 00:00</span>
        </div>

        <div class="typeOfQuestion container-fluid">
            Question Type :Multiple Choice Question
        </div>

        <!-- question start -->

        <div class="questions container-fluid" id="questions">
            
        </div>

        <!-- question end -->

        <!-- <div class="container-fluid controlBtns">
            <input type="submit" class="btn btn-primary shadow-none conrtroler" id="clearResponse" value="Clear Respone">
            <input type="submit" class="btn btn-primary shadow-none conrtroler" id="ansSubmit" value="Save & Next">
        </div> -->

        <div class="container-fluid controlBtns">
            <div class=" studentName">
                <i class="fa fa-user-graduate"></i>
                <span id="stdName">Swapnanil Paul</span>
            </div>
            <input type="submit" class="btn btn-primary shadow-none conrtroler submitButton" id="ansSubmit" value="Submit" disabled>
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
                $('#questions').html(data);
            }
        })
    })


    url = $(location).attr('href');
    console.log(url)
    splitUrl = url.split('/')
    dept = splitUrl[splitUrl.length - 1].replace("%20", " ")
    name = splitUrl[splitUrl.length - 2].replace("%20", " ")
    console.log(dept, name)

    dept = dept.toLowerCase().replace(/\b[a-z]/g, function(letter) {
        return letter.toUpperCase();
    });
    name = name.toLowerCase().replace(/\b[a-z]/g, function(letter) {
        return letter.toUpperCase();
    });
    console.log(dept, name)



    stdName = $('#stdName').text(name)
    detpName = $('#deptName').text(dept)
    console.log(stdName)


</script>