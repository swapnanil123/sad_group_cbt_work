<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.0/umd/popper.min.js"></script> -->
    <link rel="stylesheet" href="studentReg.css">
</head>
<body>
    
    <div class="outerContainer container">
        <div class="mainContainer container">
            <form id="stdRegForm" autocomplete="off">

                <div class="header">
                    <h1>Student Registration Form</h1>
                    <hr>
                </div>

                <div class="">
                    <div class="form-group">
                        <label for="stdname">Name</label>
                        <input type="text" name="stdname" class="form-control shadow-none outline-none border-none" id="stdname" placeholder=" " required>
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                        <!-- <input type="text" name="stddept" class="form-control shadow-none outline-none border-none" id="stdDept" placeholder=" " required> -->
                        <select name="stddept" id="stdDept" class="form-control shadow-none outline-none border-none" onchange="getSubject()" required>
                            <option value="" selected disabled>Selecte Semester </option>    
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Roll No.</label>
                        <input type="text" name="stdroll" class="form-control shadow-none outline-none border-none" id="stdRoll" placeholder=" " required>
                    </div>
                    <div class="form-group">
                        <label >Semester</label>
                        <select name="stdsem" id="stdSem" class="form-control shadow-none outline-none border-none" onchange="getSem()" required>
                            <option value="" id="defaultSem" selected >Selecte Semester </option>    
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Course</label>
                        <select name="stdcourse" id="stdCourse" class="form-control shadow-none outline-none border-none" required>
                            <option  value="" selected>Selecte Course </option>

                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Session</label>
                        <input type="text" name="stdses" class="form-control shadow-none outline-none border-none" id="stdSes" placeholder=" " required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submitbtn" class="form-control shadow-none outline-none border-none btn btn-success" id="submitBtn" placeholder=" ">
                    </div>
                </div>

            </form>
        </div>
    </div>

</body>
</html>

<script>

    $(document).ready(function() {

        try {
            $.ajax ({
                url: "getDept.php",
                success: function(data) {

                    // console.log(data)
                    if ( data != "error") {
                        
                        $("#stdDept").append(data)
                    } else {
                        $("#submitBtn").prop('disabled', true)
                    }
                    // detp = jQuery.parseJSON(data)
                    // console.log(dept)
                    
                },
                error: function(err) {
                    console.log(err)
                }
            })
        } catch (error) {
            console.log(error)
        }
        
    })

    var subject;

    function getSubject() {

        // $(".option").each(function() {
        //     $(this).remove();
        // });

        subName = $("#stdDept").val()
        // console.log(subName)

        subject = subName
        
        
        $("#stdSem").text("")
        
        $.ajax ({
            url: "getSemData.php",
            type: "POST",
            data: {
                "subName": subName,
            },
            success: function(data) {
                // console.log(data)
                if (data != "error") {
                    // defaultSem = $("#defaultSem").text()
                    // $("#stdSem").text(defaultSem)
                    
                    $("#stdSem").append('<option value="" selected disabled>Select Semester</option>')
                    $("#stdSem").append(data)
                }
            },
            error: function(err) {
                console.log(err)
            }

        })

        // $.ajax ({
        //     url: "getCourseData.php",
        //     type: "POST",
        //     data: {
        //         "subName": subName,
        //     },
        //     success: function(data) {
        //         // console.log(data)
                
        //         $("#stdCourse").append(data)
        //     },
        //     error: function(err) {
        //         console.log(err)
        //     }
        // })

    }

    function getSem() {
        semName = $("#stdSem").val()
        console.log(semName, subject)

        $("#stdCourse").text(" ")

        $.ajax ({
            url: "getCourseData.php",
            type: "POST",
            data: {
                "subName": subName,
                "semName": semName,
            },
            success: function(data) {
                // console.log(data)
                $("#stdCourse").append('<option value="" selected disabled>Select Courese</option>')
                $("#stdCourse").append(data)
            },
            error: function(err) {
                console.log(err)
            }
        })
    }




    $("#stdRegForm").on("submit",function(e) {    
        e.preventDefault()

        name = $("#stdname").val().toLowerCase()
        dept = $("#stdDept").val().toLowerCase()
        roll = $("#stdRoll").val().toLowerCase()
        course = $("#stdCourse").val().toLowerCase()
        sem = $("#stdSem").val().toLowerCase()
        session = $("#stdSes").val().toLowerCase()
        // console.log(name, dept, roll, course, sem, session)

        if(name != "" && dept != "" && roll != "" && course != "" && sem != "" && session != "") {


            $.ajax({
                url: "studentRegistration.php",
                type: "POST",
                data: {
                    "name" : name,
                    "dept" : dept,
                    "roll" : roll,
                    "course": course,
                    "sem": sem,
                    "session": session,
                },
                success: function(data) {
                    console.log(data)
                    if (data == "successfully") {
                        $('#stdRegForm').trigger("reset");
                        console.log(data)
                        alert("Successfully Registered")
                        // $("#submitBtn").prop('disabled', true);
                    } else {
                        $('#stdRegForm').trigger("reset");
                        alert("Registration Unsuccessful");
                    }
                },
                error: function(err) {
                    console.log(err)
                }
            })

        } else {
            $("#msg").text("Please Enter all the Fields properly")
            $("#msg").addClass("alert-danger")
            $("#msg").removeClass("d-none")
        }
    })



</script>