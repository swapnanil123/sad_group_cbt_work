<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Exam Details</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.0/umd/popper.min.js"></script>
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="./../adminView/adminHome.php">Admin Panel</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="login.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!--<div class="sb-sidenav-menu-heading"></div> for any option -->
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <!--<div class="sb-sidenav-menu-heading">Interface</div>for any option -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Components
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Result</a>
                                    <a class="nav-link" href="#">User List</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="questionInput.php" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Questions
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <!--page 1 collpse content
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    -->
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Page 2
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <!--page 2 collpse content
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                    -->
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        &copy; S.A.D.
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main><br><br><br>
                    <div class="m-2">
                    <table class="table table-striped text-center">
                      <thead style="background: rgba(0,0,0,0.4); color:#fff; font-family: arial; font-size: 15px">
                        <tr>
                          <th scope="col" >Exam Code</th>
                          <th scope="col" >Subject</th>
                          <th scope="col" >Semester Name</th>
                          <th scope="col" >Paper Code</th>
                          <th scope="col" >Course</th>
                          <th scope="col" >Duration (in min)</th>
                          <th scope="col" >Total Question</th>
                          <th scope="col" >Action</th>
                        </tr>
                      </thead>
                      <tbody id="tableBody">
                        <!-- <tr>
                          <th scope="row" class="text-center">1</th>
                          <td class="">Mark</td>
                          <td class="" >Otto</td>
                          <td class="" >@mdo</td>
                          <td class="" >20</td>
                          <td class="" >20</td>
                          <td class="">
                                <button type="button" class="btn btn-success btn-sm shadow-none">Start</button>
                                <button type="button" class="btn btn-danger btn-sm shadow-none">Delete</button>
                          </td>
                        </tr> -->
                        
                      </tbody>
                    </table>
                </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; S.A.D.</div>
                            <div>
                                <a href="#" id="result">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>




<script>

    $(document).ready(function() {
        arr =[]

        $.ajax({

            url: "examInfoFetch.php",
            method: "POSt",
            success: function(data) {
                // console.log(data)
                $("#tableBody").append(data)

                x = document.querySelectorAll(".examCodeID")
                for (i = 0; i < x.length; i++) {
                    tex = x[i].innerHTML; 
                    arr.push(tex)
                }
                
                // console.log(arr)

                for (i=0; i<arr.length; i++) {


                    $.ajax({

                        url: "checkOnginExam.php",
                        method: "POSt",
                        data: {
                            "code": arr[i].replace(" ", ""),
                        },
                        success: function(data) {
                            console.log(data)

                            
                            if (data != "error") {
                                // var obj = $.parseJSON(data);
                            
                                // console.log(obj)
                                tr = $("#startBtn_"+data).val()
                                // console.log(tr)
                                $("#startBtn_"+data).val("Running...")
                                $("#startBtn_"+data).prop('disabled', true)
                                $("#stopBtn_"+data).prop('disabled', false)
                            }
                            
                            
                        },
                        error: function(err) {
                            console.log(err)
                        }
                    }) 

                }
                

            },
            error: function(err) {
                console.log(err)
            }
        })

        // console.log(arr)

    })


    function getDelBtnId(btnId) {
        console.log(btnId)
        splitData = btnId.split("_")
        exam_code = splitData[1]
        console.log(exam_code)

        $.ajax({

            url: "deletExam.php",
            method: "POSt",
            data: {
                "exam_code": exam_code,
            },
            success: function(data) {
                console.log(data)
                if (data == "successfully") {
                    $("#trID_"+exam_code).remove()
                }
            },
            error: function(err) {
                console.log(err)
            }
        })
    }


    function getData(btnId) {
        console.log(btnId)
        splitData = btnId.split("_")
        exam_code = splitData[1]
        console.log(exam_code)

        $("#startBtn_"+exam_code).val("Running...")
        $("#startBtn_"+exam_code).prop('disabled', true)
        $("#stopBtn_"+exam_code).prop('disabled', false)

        examRCode = exam_code
        subject = $("#tdSub_"+exam_code).text()
        semName = $("#tdsemName_"+exam_code).text()
        paperCode = $("#tdPapeprCode_"+exam_code).text()
        duration = $("#tdDuration_"+exam_code).text()
        totQtn = $("#tdTotQtn_"+exam_code).text()

        console.log(examRCode, subject, semName, semName, duration, totQtn)


        $.ajax({

            url: "startExam.php",
            method: "POSt",
            data: {

                "examCode": examRCode,
                "subjectNam": subject,
                "semName": semName,
                "paperCode": paperCode,
                "duration": duration,
                "totQtn": totQtn,
            },
            success: function(data) {
                console.log(data)
                if (data == "successfully") {
                    alert("Exam is Started...")
                }
            },
            error: function(err) {
                console.log(err)
            }
        })
    }


    function stopBtnId(btnId) {
        console.log(btnId)
        splitData = btnId.split("_")
        exam_code = splitData[1]
        console.log(exam_code)

        $.ajax({

            url: "deletOnginExam.php",
            method: "POSt",
            data: {
                "exam_code": exam_code,
            },
            success: function(data) {
                console.log(data)
                if (data == "successfully") {

                    $("#startBtn_"+exam_code).val("Complete")
                    $("#startBtn_"+exam_code).prop('disabled', false)
                }
            },
            error: function(err) {
                console.log(err)
            }
        })

    }



    function fetchQtn(id) {
        
        examCode = id.split("_")[1]
        subjectName = $("#tdSub_"+examCode).text()
        trimSub = $.trim(subjectName).replace(" ", "#")
        console.log(examCode, trimSub)

        window.location.href = "questionAnswer.php?"+ "/" + examCode + "/" + trimSub;

        


    }



</script>