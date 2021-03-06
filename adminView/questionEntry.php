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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.0/umd/popper.min.js"></script>
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
            <div id="layoutSidenav_content" class="m-4 container-fluid">
                <main>
                    <div class="shadow-lg p-3  bg-body rounded">
                        <form id="qtnForm" autocomplete="off">

                            <div class="d-flex p-2 justify-content-between bd-highlight bg-warning rounded">
                                <div>Subject : <strong><span id="subName"></span></strong></div>
                                <div>Semester Name : <strong><span id="semName"></span></strong></div>
                                <div>Paper Code : <strong><span id="PapCode"></span></strong></div>
                            </div><br>
                        
                            <div class="mb-1">
                            
                            <label for="examQtnInp" class="mb-1">Question</label>
                            <input type="text" class="form-control" id="examQtnInp"  placeholder="Type a question here..." required>
                          </div>
                          <div class="mb-1">
                            <label for="option_one" class="form-label">Option 1</label>
                            <input type="text" class="form-control" id="option_one" required>
                          </div>
                          <div class="mb-1">
                            <label for="option_two" class="form-label">Option 2</label>
                            <input type="text" class="form-control" id="option_two" required>
                          </div>
                          <div class="mb-1">
                            <label for="option_three" class="form-label">Option 3</label>
                            <input type="text" class="form-control" id="option_three" required>
                          </div>
                          <div class="mb-1">
                            <label for="option_four" class="form-label">Option 4</label>
                            <input type="text" class="form-control" id="option_four" required>
                          </div>
                          <div class="mb-3">
                            <label for="qtn_ans" class="form-label">Answer</label>
                            <input type="text" class="form-control" id="qtn_ans" required>
                          </div>
                          <div class="d-grid ">
                            <input class="btn btn-success" type="submit" value="Submit">
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
    console.log(url)
    splitUrl = url.split('/')


    subjectName = splitUrl[splitUrl.length - 3].replace("#", " ").toLowerCase()
    semName = splitUrl[splitUrl.length - 2].replace("#", " ").toLowerCase()
    paperCode = splitUrl[splitUrl.length - 1].replace("#", " ")

    // console.log(subjectName, paperName, paperCode)


    capStraing = (str) => str[0].toUpperCase() + str.slice(1).toLowerCase()
    word = subjectName.split(" ").map(capStraing)
    capitalSub = word.join(" ")

    capStraing = (str) => str[0].toUpperCase() + str.slice(1).toLowerCase()
    word = semName.split(" ").map(capStraing)
    capitalSem = word.join(" ")



    $("#subName").text(capitalSub)
    $("#semName").text(capitalSem)
    $("#PapCode").text(paperCode)

    


    $("#qtnForm").on("submit", function(e) {
        e.preventDefault()

        question = $("#examQtnInp").val().toLowerCase()
        option_one = $("#option_one").val().toLowerCase()
        option_two = $("#option_two").val().toLowerCase()
        option_three = $("#option_three").val().toLowerCase()
        option_four = $("#option_four").val().toLowerCase()
        qtn_ans = $("#qtn_ans").val().toLowerCase()


        sub = $("#subName").text().toLowerCase()
        semName = $("#semName").text().toLowerCase()
        paperCode = $("#PapCode").text().toLowerCase()

        console.log(sub, semName, paperCode)
        console.log(question, option_one, option_two, option_three, option_four, qtn_ans)

        $.ajax({
            url: "uploadQtn.php",
            type: "POST",
            data: {
                "subName": sub,
                "semName": semName,
                "paperCode" : paperCode,
                "qtn": question,
                "op_one": option_one,
                "op_two": option_two,
                "op_three": option_three,
                "op_four": option_four,
                "qtnn_ans": qtn_ans,
            },
            success: function(data) {
                console.log(data)
                if(data == "Success") {

                    $('#qtnForm').trigger("reset");
                    alert("Question Insert Successfully")
                }
            },
            error: function(err) {
                console.log(err)
            }
        })

    })

</script>