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
        <link href="css/styleTable.css" rel="stylesheet" />
        <link href="css/style2.css" rel="stylesheet" />
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
                  <a class="list-group-item list-group-item-action list-group-item-light p-3" href="ManageFacultyIndex.PHP">Manage Faculty</a>
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
                  <form method="Post" action="php/ManageCourse.PHP" id="mainForm">
                     <fieldset>
                        <legend>Course</legend>
                        <table>
                           <tr>
                              <td colspan="2">
                                 <p>
                                 <label>Course code</label><br/>
                                 <input type= "text" name="Course_code" id="Course_code" class="required" />
                                 </p>
                                 <p>
                                 <label>Course title</label><br/>
                                 <textarea type= "text" name="Course_title" rows="3" id ="Course_title" cols="61" class="required"></textarea>
                                 </p>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <p>
                                 <label>Course level</label><br/>
                                 <select name="Course_level" id="Course_level">
                                    <option>Choose Category</option>
                                    <option>Freshman</option>
                                    <option>Sophmore</option>
                                    <option>Junior</option>
                                    <option>Senior</option>
                                 </select>
                                 </p>
                              </td>
                           </tr>


                           <tr>
                              <td colspan="2">
                                 <div class="rectangle centered">
                                   <button type="submit" id = "add" class="rounded">Add</button>
                                    <input type="reset" value="Clear" class="rounded">
                                 </div>
                              </td>
                           </tr>
                        </table>
                     </fieldset>
                  </form>



                  <?php
                  include "db_connect_plo.PHP";

                      $sql = "select * from courses";
                      $results = mysqli_query($conn,$sql);
                      echo "<table class='gridtable'>";


        echo "<tr> <th>  Course Code </th> <th> Course Title </th> <th> Course Level </th> <th> Delete Course</th><th> Update Course</th></tr>";

        while( $row = mysqli_fetch_assoc($results) )
        {
          echo '<tr>

           <td>'.$row['code'].'</td>
           <td>'.$row['title'].'</td>
           <td>'.$row['level'].'</td>
           <td><a href="deleteCourse.PHP?deleteID='.$row['code'].'">Delete</a></td>
           <td><a href="updateCourse.PHP?edit='.$row['code'].'">Update</a></td>
          </tr>';

        }

        echo "</table>";
                   ?>

                    <tr>
                      <td></td>
                      <td></td>
                    </tr>

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
