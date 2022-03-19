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
        <link href="css/style2.css" rel="stylesheet" />
        <link href="css/styleTable.css" rel="stylesheet" />
        <script type="text/javascript" src="js/table.js"></script>
        <script type="text/javascript" src="js/formValidator.js"></script>

    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
              <center>
          			<img src='images/effatlogo.png' width='25%' height='25%' alt="Logo"> </a>
          		</center>
                <div class="list-group list-group-flush">
                  <a class="list-group-item list-group-item-action list-group-item-light p-3" href="indexMain.PHP">Home</a>
                  <a class="list-group-item list-group-item-action list-group-item-light p-3" href="PLO_managerIndex.PHP">Manage PLOs</a>
                  <a class="list-group-item list-group-item-action list-group-item-light p-3" href="ManageCourseIndex.PHP">Manage Course</a>
                  <a class="list-group-item list-group-item-action list-group-item-light p-3" href="SemesterOfferingsIndex.PHP">Semester Offerings</a>
                  <a class="list-group-item list-group-item-action list-group-item-light p-3" href="CLO_manager.PHP">Manage CLO</a>
                  <a class="list-group-item list-group-item-action list-group-item-light p-3" href="ReportsMain.PHP">Reports</a>
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
                  <form method="Post" action="ManageFaculty.PHP" id="mainForm">
                     <fieldset>
                        <legend>Faculty Manager</legend>
                        <table>
                           <tr>
                              <td colspan="2">
                                 <p>
                                 <label>Faculty ID</label><br/>
                                 <input  name="Faculty_ID" id="Faculty_ID" class="required" />
                                 </p>
                                 <p>
                                 <label>Faculty Name</label><br/>
                                 <input name="Faculty_Name" id="Faculty_Name" class="required" />
                                 </p>
                              </td>
                           </tr>
                           <tr>
                              <td colspan="2">
                                 <p>
                                 <label>Phone Number</label><br/>
                                 <input  name="Phone_Number" id="Phone_Number" class="required" />
                                 </p>
                                 <p>
                                 <label>Specialization</label><br/>
                                 <input  name="Specialization" id="Specialization" class="required" />
                                 </p>
                              </td>
                           </tr>
                           <tr>
                              <td colspan="2">
                                 <div class="rectangle centered">

                                   <button type="submit" id = "add" href="#" class="rounded">Add</button>

                                    <input type="reset" value="Clear" class="rounded">
                                 </div
                              </td>
                           </tr>
                        </table>
                     </fieldset>
                  </form>

                  <?php
                  include "db_connect_plo.PHP";

                      $sql = "select * from Faculty";
                      $results = mysqli_query($conn,$sql);
                      echo "<table class='gridtable'>";


        echo "<tr> <th>  ID </th> <th> Name </th> <th> Specialization </th> <th> Phone Number</th><th> Delete Faculty</th><th> Update Faculty</th></tr>";

        while( $row = mysqli_fetch_assoc($results) )
        {
          echo '<tr>
           <td>'.$row['ID'].'</td>
           <td>'.$row['name'].'</td>
           <td>'.$row['specilization'].'</td>
           <td>'.$row['phone'].'</td>
           <td><a href="deleteFaculty.php?deleteID='.$row['ID'].'">Delete</a></td>
           <td><a href="updateFaculty.php?updateID='.$row['ID'].'">update</a></td>
          </tr>';

        }

        echo "</table>";
                   ?>


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
