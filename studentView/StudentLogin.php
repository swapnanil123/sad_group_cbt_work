


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="StudentLogin.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Student Login</title>
</head>
<body>
    <div class="container-fluid headerPart">
        <span>Computer Based Test</span>
    </div>


    <div class="container-fluid headArea">
        <div class="instructionArea container-fluid">
            <div class="sysName">
                <span>Depertment :</span>
                <span>Paper Name :</span>
            </div>
            <div class="numberAndName container-fluid">
                <span class="SysNo">Computer Science</span>
                <span>Data structure</span>
            </div>
        </div>
    </div>


    <div class="container-fluid maincontainer">
       <form autocomplete="off" id="stuloginForm">
           <div class="form-group userInfo">
                <i class="fa fa-user"></i>
                <input type="text" class="shadow-none form-control userInp" name="username" id="user" placeholder="Username">
           </div>
           <div class="form-group userInfo">
                <i class="fa fa-lock"></i>
                <input type="password" class="shadow-none form-control userInp" name="password" id="pass" placeholder="Password">
           </div>
           <div class="form-group submitArea">
                <input type="button" class="form-control subBtn border border-secondary shadow-none" name="submit" id="submitBtn" value="Sign in">
                <!-- <button type="submit" class="form-control subBtn border-none shadow-none" name="submit" id="submitBtn">Sign in</button> -->
           </div>
       </form>
       <div class="msg">
           <strong> <span id="massage"></span> </strong>
       </div>
    </div>
</body>
</html>


<script>

$(document).ready(function() {
    $('#submitBtn').on('click', function(){
        var user = $('#user').val();
        var pass = $('#pass').val();

        if(user.length == "") {

            $('#massage').text("Please Enter Username and Password");
            setTimeout(function(){ 
                $('#massage').fadeOut();
            }, 10000);

        }else if(pass.length == "") {

            $('#massage').text("Please Enter Password");
            setTimeout(function(){ 
                $('#massage').fadeOut();
            }, 10000);

        }else {

            $.ajax({
                url: 'StudentLoginAuth.php',
                method: 'POST',
                data: {
                    username: user,
                    password: pass
                },
                success: function(data){
                    // alert(data)
                    var res = data.split("#");
                    console.log(res[0], res[1], res[2], res[3])

                    if (res[0] == 'success') {
                        window.location.href = "instructionPage.php?"+ "/" +res[1]+ "/" +res[2]+ "/" +res[3];
                        // alert(data)
                    } else {
                        $('#massage').text(data);
                        setTimeout(function(){ 
                            $('#massage').fadeOut();
                        }, 10000);
                    }

                    $('#stuloginForm')[0].reset();
                },
                error: function(err) {
                    console.log(err);
                }
            });

        } 

    });
});


</script>
