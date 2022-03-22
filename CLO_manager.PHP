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
                  <a class="list-group-item list-group-item-action list-group-item-light p-3" href="ManageFacultyIndex.PHP">Manage Faculty</a>
                  <a class="list-group-item list-group-item-action list-group-item-light p-3" href="SemesterOfferingsIndex.PHP">Semester Offerings</a>
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
                  <form method="get" action="" id="mainForm">
                     <fieldset>
                        <legend>Clo manager</legend>
                        <table>
                           <tr>
                              <td colspan="2">
                                 <p>
                                 <label>Clo number</label><br/>
                                 <input type="number" name="Clo number" id="Clo_num" min="1" max="20" class="required" />
                                 </p>
                                 <p>
                                 <label>Clo Text</label><br/>
                                 <input type="text" name="Clo Text" id="Clo_Text" class="required" />
                                 </p>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <p>
                                 <label>Clo Category</label><br/>
                                 <select name="CLO Category" id="CLO_Category">
                                    <option>Choose Category</option>
                                    <option>Knowledge</option>
                                    <option>Skills</option>
                                    <option>Practice</option>
                                 </select>
                                 </p>
                              </td>
                           </tr>
                           <td>
                              <p>
                              <label>Clo to Plo</label><br/>
                              <select name="ClotoPlo" id="ClotoPlo">
                                 <option>Choose PLO</option>
                                 <option>idk:)</option>
                              </select>
                              </p>
                           </td>
                           </tr>

                           <tr>
                              <td colspan="2">
                                 <div class="rectangle centered">
                                   <button type="button" id = "add" class="rounded">Add</button>
                                    <input type="reset" value="Clear" class="rounded">
                                 </div
                              </td>
                           </tr>
                        </table>
                     </fieldset>
                  </form>

                  <?php
                  include "db_connect_plo.PHP";

                      $sql = "select * from CLO";
                      $results = mysqli_query($conn,$sql);
                      echo "<table class='gridtable'>";


        echo "<tr> <th>  CLO Number </th> <th> CLO Text </th> <th> CLO Category </th><th> PLO Number </th> <th> Delete CLO </th><th> Update CLO </th></tr>";

        while( $row = mysqli_fetch_assoc($results) )
        {
          echo '<tr>

           <td>'.$row['ID'].'</td>
           <td>'.$row['text'].'</td>
           <td>'.$row['category'].'</td>
           <td>'.$row['ploID'].'</td>
           <td><a href="deleteCLO.PHP?deleteID='.$row['ID'].'">Delete</a></td>
           <td><a href="Update.php">Update</a></td>
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
