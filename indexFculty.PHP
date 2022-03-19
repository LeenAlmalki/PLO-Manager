<?php
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['Username'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Program Learning Outcomes Atchievments</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="images/effatlogoc.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/stylewelcome.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
              <center>
          			<img src='images/effatlogo.png' width='25%' height='25%' alt="Logo"> </a>
          		</center>
                <div class="list-group list-group-flush">
                  <div class= "welcome">
                  <p >Welcome, <?php echo $_SESSION['Name']; ?></p>
                </div>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="indexFculty.PHP">Home</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="ReportsFaculty.PHP">Reports</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Open Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="logout.PHP">Logout</a></li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                  <form method="Post" action="" id="mainForm">
                     <fieldset>
                        <table>
                           <tr>
                              <td>
                                 <p>
                                   <label>Semester</label><br/>
                                   <select name="Semester" id="Semester">
                                      <option>Choose Semester</option>
                                      <option>Fall</option>
                                      <option>Winter</option>
                                      <option>Spring</option>
                                   </select>
                                 </p>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <p>
                                   <label>Year</label><br/>
                                   <select name="year" id="year">
                                      <option>Choose Year</option>
                                      <option>2020</option>
                                      <option>2021</option>
                                      <option>2022</option>
                                      <option>2023</option>
                                      <option>2024</option>
                                      <option>2025</option>
                                      <option>2026</option>
                                      <option>2027</option>
                                      <option>2028</option>
                                      <option>2029</option>
                                      <option>2030</option>
                                   </select>
                                 </p>
                              </td>
                           </tr>

                           <tr>
                              <td colspan="2">
                                 <div class="rectangle centered">
                                   <button type="submit" class="rounded" onclick="myFunction()"><a href="#">Go</a></button>
                                 </div>
                              </td>
                           </tr>
                        </table>
                     </fieldset>
                  </form>

                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php
}else{
     header("Location: loginIndex.PHP");
     exit();
}
 ?>
