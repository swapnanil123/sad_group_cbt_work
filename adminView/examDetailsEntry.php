<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Exam Details</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.0/umd/popper.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Admin Panel</a>
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
            <div id="layoutSidenav_content" class="m-5 mt-0 container-fluid">
                <div class=" mt-4 p-1 alert alert-secondary" style="font-size:22px" ><strong> Subject : <span id="SubName"></span></strong></div>
                <main>
                    <div class="shadow-lg p-3 mb-3 bg-body rounded">
                        <form id="examCreateForm" autocomplete="off">
                          <!--<div class="mb-1">
                            <div class="d-flex  bd-highlight bg-warning rounded">
                                <label for="exampleInputEmail1" class="form-label">Subject : </label>
                            </div><br>
                            <label class="form-label fs-6"><b>Paper</b></label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type a question here...">
                          </div>-->
                            <div class="mb-3">
                                <label for="paperCode" class="form-label fs-6"><b>Paper Code </b></label>
                                <input type="text" class="form-control" id="paperCode" aria-describedby="emailHelp" required>
                            </div>
                    
                            <div class="mb-3">
                            <label class="form-label fs-6"><b>Course</b></label>
                            <select class="form-select form-select-sm " aria-label=".form-select-lg example" id="course">
                                    <option selected disabled>Select</option>
                                    <option value="Core Course" id="Core Course">Core Course (CC)</option>
                                    <option value="General" id="General">General</option>
                                    <option value="General Elective" id="General Elective">General Elective (GE)</option>
                                    <option value="Skill Enhancement Course" id="SEC">Skill Enhancement Course (SEC)</option>
                                    <option value="Discipline Specific Elective" id="DSE">Discipline Specific Elective (DSE)</option>
                                    <option value="Ability Enhancement Compulsory Course" id="AECC">Ability Enhancement Compulsory Course (AECC)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fs-6"><b>Semester</b></label>
                                <select class="form-select form-select-sm " aria-label=".form-select-lg example" id="semName">
                                    <option selected disabled>Select</option>
                                    <option value="Semester 1" id="1">Semester 1</option>
                                    <option value="Semester 2" id="2">Semester 2</option>
                                    <option value="Semester 3" id="3">Semester 3</option>
                                    <option value="Semester 4" id="4">Semester 4</option>
                                    <option value="Semester 5" id="5">Semester 5</option>
                                    <option value="Semester 6" id="6">Semester 6</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fs-6"><b>Total number of questions</b></label>
                                <select class="form-select form-select-sm " aria-label=".form-select-lg example" id="totalNoQtn">
                                    <option selected disabled>Select</option>
                                    <option value="10" id="10">10</option>
                                    <option value="20" id="20">20</option>
                                    <option value="30" id="30">30</option>
                                    <option value="40" id="40">40</option>
                                    <option value="50" id="50">50</option>
                                    <option value="60" id="60">60</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fs-6"><b>Total time allotted (in minutes)</b></label>
                                <select class="form-select form-select-sm " aria-label=".form-select-lg example" id="duration">
                                    <option selected disabled>Select</option>
                                    <option value="10" id="10">10</option>
                                    <option value="20" id="20">20</option>
                                    <option value="30" id="30">30</option>
                                    <option value="40" id="40">40</option>
                                    <option value="50" id="50">50</option>
                                    <option value="60" id="60">60</option>
                                </select>                          
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <input class="btn btn-primary" type="submit" value="Create">
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>




<script>

url = $(location).attr('href');
    // console.log(url)
    splitUrl = url.split('/')
    subject= splitUrl[splitUrl.length - 1]
    subName = subject.replace("#"," ").toLowerCase()
    // console.log(subName)


    capStraing = (str) => str[0].toUpperCase() + str.slice(1).toLowerCase()
    word = subName.split(" ").map(capStraing)
    capitalSent = word.join(" ")
    $("#SubName").text(capitalSent)


    $("#examCreateForm").on("submit", function(e) {
        e.preventDefault()


        course = $("#course").val().toLowerCase().toLowerCase()
        semName = $("#semName").val().toLowerCase()
        paperCode = $("#paperCode").val().toLowerCase()
        totalNumberOfQtn = $("#totalNoQtn").val().toLowerCase()
        examDuration = $("#duration").val().toLowerCase()

        console.log(course, semName, paperCode, totalNumberOfQtn, examDuration)

        if (totalNumberOfQtn === null || examDuration === null || course === null || semName === null) {

            alert("Please Enter All the Fields Properly")

        } else {
            $.ajax({
                url: "examCreate.php",
                type: "POST",
                data: {
                    "subject": subName,
                    "course": course,
                    "semName": semName,
                    "paperCode" : paperCode,
                    "totNoQtn": totalNumberOfQtn,
                    "duration": examDuration,
                },
                success: function(data) {
                    console.log(data)
                    if ( data == "successfully") {
                        $('#examCreateForm').trigger("reset");
                        alert("Exam Create Successfully")

                        subjectName = subName.replace(" ","#")
                        semName = semName.replace(" ","#")
                        paperCode = paperCode.replace(" ","#")

                        window.location.href = "questionEntry.php?"+ "/" +subjectName + "/" + semName + "/" + paperCode ;


                    }else {
                        alert("Exam Create Unsuccessfull")
                    }
                },
                error: function(err) {
                    console.log(err)
                }
            })
        }
    })

</script>