<?php

include "connection.php";


if (isset($_POST['save'])) {


  $email = $_POST['email'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $contact = $_POST['contact'];
  $gender = $_POST['gender'];
  $position = $_POST['position'];
  $gross = $_POST['gross'];


  $sql = "INSERT INTO `employees` (email,fname,lname,contact,gender,position,gross) VALUES ('$email','$fname','$lname','$contact','$gender','$position','$gross')";

  $result = mysqli_query($con, $sql);

  if ($result) {
    header("location:employees.php");
    exit;
  } else {
    echo "data not inserted";
  }

}



?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">

  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <script src="./JS/table2excel.js"></script>
  <script src="./JS/tableToExcel.js"></script>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/employee.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
        target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="../pages/tables.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Quotes</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white active bg-primary" href="../pages/employees.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Employees</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="../pages/customers.php">
            <div class="text-white text-center me-2 d-flex align-items-center  justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Customers</span>
          </a>
        </li>

        <link rel="stylesheet" href="./css/sidebar.css">
        <div class="droupdown">
          <div class="sidenav text-white">
            <button class="dropdown-btn">
              <i class="fa-solid fa-gear"></i>
              Settings

              <i class="fa fa-caret-down"></i>
            </button>

            <div class="dropdown-container">
              <!-- <a class="text-white" href="../pages/settingsEmail.php">Add Email</a> -->
              <a class="text-white" href="../pages/TableSettings.php">Email Details</a>
              <a class="text-white" href="../pages/staff.php">User</a>
            </div>

          </div>

        </div>
        <script src="./JS/TableSettings.js"></script>

      </ul>
    </div>

  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-dark" aria-current="page">Employees</li>
          </ol>
          <!-- <h6 class="font-weight-bolder mb-0">Employees</h6> -->
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">

          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <a href="../pages/login.html" class="sign-in"> &nbsp;<span class="d-sm-inline d-none">Sign
                    out</span></a>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg"
                          class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background"
                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                    opacity="0.593633743"></path>
                                  <path class="color-background"
                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                  </path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- End Navbar -->


    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      navbar-scroll="true">
      <div class="container-fluid btnimp py-1 px-3 ">


        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa-solid fa-plus icn">
          </i> Add Employees
        </button>



        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Employees</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">


                <form method="post">
                  <div class="form-group">
                    <div>
                      <label>Emp Id</label>
                      <input type="text" id="FullName" name="email" class="ibox">
                    </div>
                  </div>
                  <div class="form-group">
                    <div>
                      <label>First Name</label>
                      <input type="text" id="FullName" name="fname" class="ibox">
                    </div>
                  </div>
                  <div class="form-group">
                    <div>
                      <label>Last Name</label>
                      <input type="text" id="FullName" name="lname" class="ibox">
                    </div>
                  </div>
                  <div class="form-group">
                    <div>
                      <label>Contact</label>
                      <input type="number" id="FullName" name="contact" class="ibox">
                    </div>
                  </div>
                  <div class="form-group">
                    <div>
                      <label>Gender</label>
                      <select name="gender" id="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div>
                      <label>Position</label>
                      <select name="position" id="position">
                        <option value="Trainee">Trainee</option>
                        <option value="HR">HR</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div>
                      <label>Gross</label>
                      <input type="number" id="FullName" name="gross" class="ibox">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="save" onclick="addUser(e)" class="btn btn-primary">Save</button>
                  </div>

                </form>
              </div>


            </div>
          </div>
        </div>



        <div class="ms-md-auto pe-md-3 d-flex align-items-center search_bar">
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>
          </div>
        </div>
      </div>
    </nav>




    <!-- table -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Employees Table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class=" text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Employee Id
                      </th>

                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                        Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Contact No.</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Position
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Member
                        Since
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Tools</th>

                    </tr>
                  </thead>
                  <tbody>

                    <?php

                    $sql = "SELECT * FROM `employees`";

                    $result = mysqli_query($con, $sql);

                    if ($result) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $empid = $row['email'];
                        $fname = $row['fname'];
                        $lname = $row['lname'];
                        $contact = $row['contact'];
                        $gender = $row['gender'];
                        $position = $row['position'];
                        $gross = $row['gross'];
                        

                        echo '<tr class="table-hover" id="myTable">
                            <td class="align-middle text-center text-sm">
                              <p class="text-xs font-weight-bold mb-0">' . $empid . '</p>
                            </td>
       
                            <td class="align-middle text-center text-sm">
                              <p class="text-xs font-weight-bold mb-0">' . $fname . '  ' . $lname . '</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <p class="text-xs font-weight-bold mb-0">' . $contact . '</p>
                            </td>
                            <td class="align-middle text-center">
                              <p class="text-xs font-weight-bold mb-0">' . $position . '</p>
                            </td>
                            <td class="align-middle text-center">
                              <p class="text-xs font-weight-bold mb-0">' . date("Y/m/d") . '</p>
                            </td>
                       
                            <td>

                              <div class="btn-holder">
                               <a> <button type="button" name='.$id.'  class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal'.$id.'" onclick="update(' . $id . ')">
                                  <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                </a>

                                <div class="modal fade" id="editModal'.$id.'" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Employees</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <form method="post">
                                          <div class="form-group">
                                            <div>
                                              <label>Emp Id</label>
                                              <input type="text" id="FullName" name="email" value='.$empid.' class="ibox">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div>
                                              <label>First Name</label>
                                              <input type="text" id="FullName" name="fname" value='.$fname.' class="ibox">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div>
                                              <label>Last Name</label>
                                              <input type="text" id="FullName"  value='.$lname.' name="lname" class="ibox">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div>
                                              <label>Contact</label>
                                              <input type="number" id="FullName" value='.$contact.' name="contact" class="ibox">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div>
                                              <label>Gender</label>
                                              <select name="gender" value='.  $gender .' id="gender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div>
                                              <label>Position</label>
                                              <select  name="position" value='.$position.' id="position">
                                                <option value="Trainee">Trainee</option>
                                                <option value="HR">HR</option>
                                              </select>
                                            </div>
                                          </div> 
                                          <div class="form-group">
                                            <div>
                                              <label>Gross</label>
                                              <input type="number" value='. $gross.' name="gross" id="FullName" class="ibox">
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="submit" name="update" class="btn btn-primary">Save</button>
                                        </div>
                                        </form>
                                      </div>
                                     
                                    </div>
                                  </div>
                                </div>
                               <a href="deleteemployee.php?deleteid=' . $id . '"> <button type="button" class="btn btn-danger btn-sm btn-m2"><i
                                    class="fa-solid fa-trash"></i></button></a>
                              </div>
                            </td>
                          </tr>
                          ';
                      }
                    }

                  //   $id = $_GET['$id'];
                  //   $sql = "SELECT * FROM `employees` WHERE id = $id";

                  // $result = mysqli_query($con, $sql);

                  // $row = mysqli_fetch_assoc($result);

                  //     $empid = $row['email'];
                  //     $fname = $row['fname'];
                  //     $lname = $row['lname'];
                  //     $contact = $row['contact'];
                  //     $gender = $row['gender'];
                  //     $position = $row['position'];
                  //     $gross = $row['gross'];
                          
                    ?>

                    <?php 
                   

                    

                   
                    if (isset($_POST['update'])) {

                      $empid = $_POST['email'];
                      $fname = $_POST['fname'];
                      $lname = $_POST['lname'];
                      $contact = $_POST['contact'];
                      $gender = $_POST['gender'];
                      $position = $_POST['position'];
                      $gross = $_POST['gross'];
                    
                    
                      $sql = "UPDATE `employees` SET email = '$empid', fname = '$fname', lname = '$lname', contact ='$contact',
                      gender = '$gender', position = '$position', gross='$gross' WHERE id = '$id'";
                    
                      $result1 = mysqli_query($con, $sql);
                    
                      if ($result1) {
                        echo '<script>window.location.href = "employees.php";</script>';
                        exit;
                      } else {
                        echo "date not inseted";
                      }
                    
                    }

                    
                    
                    ?>

                    
                    
                  </tbody>
                </table>
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-end">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End tabel-->
      <!-- footer -->
      <!-- <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                copyright ©
                <script>
                  document.write(new Date().getFullYear())
                </script>,
          
                <a href="https://yrpitsolutions.com/" class="font-weight-bold" target="_blank">YRP IT SOLUTIONS</a>

              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
               
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">About
                    Us</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link pe-0 text-muted"
                    target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer> -->
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="container copy-right-container">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                  copyright ©
                  <script>
                    document.write(new Date().getFullYear())
                  </script>,

                  <a href="https://yrpitsolutions.com/" class="font-weight-bold  texthovercolor" target="_blank">YRP IT
                    SOLUTIONS</a>

                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">

                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">About
                    Us</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

  <div class="fixed-plugin">
    <!-- <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>     -->
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary"
              onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
            onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
            onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
            onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn btn-outline-dark w-100" href="">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard"
            data-icon="octicon-star" data-size="large" data-show-count="true"
            aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
  <script type="text/javascript" src="../pages/table2excel.js"></script>
  <script type="text/javascript" src="../pages/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>





</body>

</html>