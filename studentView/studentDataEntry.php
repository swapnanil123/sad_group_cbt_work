<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Student Registration Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="studentDataEntry.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <div class="text">
            Student Registration Form
        </div>
        <form id="stdForm">
            <div class="form-row">
            <div class="input-data">
                <input type="text" name="stdName" required>
                <div class="underline"></div>
                <label for="">Full Name</label>
            </div>
            <div class="input-data">
                <input type="text" name="stdRoll" required>
                <div class="underline"></div>
                <label for="">Roll Number</label>
            </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="stdDept" required>
                    <div class="underline"></div>
                    <label for="">Department</label>
                </div>
                <div class="input-data">
                    <input type="text" name="stdCourse" required>
                    <div class="underline"></div>
                    <label for="">Course</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="stdSem" required>
                    <div class="underline"></div>
                    <label for="">Semester</label>
                </div>
                <div class="input-data">
                    <input type="text" name="stdSess" required>
                    <div class="underline"></div>
                    <label for="">Session</label>
                </div>
            </div>
            <div class="form-row submit-btn">
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="submit" value="submit" id="subBtn">
                </div>
            </div>
            
        </form>
    </div>
</body>
</html>



<script>

    var formData = $("#stdForm").serializeArray();

    $('#subBtn').on("click", function(e) {
        e.preventDefault();
        console.log(formData)
    })


</script>
