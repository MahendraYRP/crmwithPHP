<?php
// editid
include "connection.php";


$idone = $_GET['editid'];
$sql = "SELECT * FROM `quotes` WHERE id = $idone";
$result = mysqli_query($con, $sql);


$row = mysqli_fetch_assoc($result);

$subject = $row['subject'];
$customer_id = $row['customer_id'];
$address = $row['address'];
$quote_prefix = $row['quote_prefix'];
$gst_number = $row['gst_number'];
$date_created = $row['date_created'];
$expiry_date = $row['expiry_date'];
$stage = $row['stage'];
$sales_tax_id = $row['sales_tax_id'];
$text = $row['ckeditor2'];
$message = $row['message'];
$input1 = $row['input1'];
$input2 = $row['input2'];
$option = $row['option'];
$totalamount = $row['totalamount'];


if (isset($_POST['submit'])) {

  $subject = $_POST['subject'];
  $customer_id = $_POST['cid'];
  $address = $_POST['address'];
  $quote_prefix = $_POST['invoicenum'];
  $gst_number = $_POST['cn'];
  $date_created = $_POST['idate'];
  $expiry_date = $_POST['edate'];
  $stage = $_POST['stage'];
  $sales_tax_id = $_POST['tid'];
  $text = $_POST['editor_val1'];
  // Retrieve the form data
  $message = $_POST['message'];
  $input1 = $_POST['input1'];
  $input2 = $_POST['input2'];
  $option = $_POST['option'];
  $totalamount = $_POST['totalamount'];


  $sql = "UPDATE `quotes`
 SET subject = '$subject',
    customer_id = '$customer_id',
    address = '$address',
    quote_prefix = '$quote_prefix',
    gst_number = '$gst_number',
    date_created = '$date_created',
    expiry_date = '$expiry_date',
    stage = '$stage',
    sales_tax_id = '$sales_tax_id',
    ckeditor2 = '$text',
    message = '$message',
    input1 = '$input1',
    input2 = '$input2',
    option = '$option',
    totalamount = '$totalamount'
    WHERE id = $idone";


  $result = mysqli_query($con, $sql);

  if ($result) {
    // echo "data not inseterd";
    header('location:tables.php');
  } else {
    die(mysqli_error($con));
  }

}




?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
  <script src="./JS/script.js"></script>
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--     Fonts and icons     -->
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
  <link href="./css/edit.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .navbar-vertical .navbar-nav>.nav-item .nav-link.active {
      background-color: #e91e63 !important;
    }
  </style>
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
          <a class="nav-link text-white active bg-gradient-primary" href="../pages/tables.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Quotes</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="../pages/employees.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Employees</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="./customers.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
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
              <!-- <a class="text-white" href="../pages/settingsEmail.html">Add Email</a> -->
              <a class="text-white" href="../pages/TableSettings.php">Email Details</a>
              <a class="text-white" href="../pages/staff.phpd">User</a>
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark dashnav"
                href="./dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-dark " aria-current="page"><a class="pagenav"
                href="./tables.php">Quotes</a></li>
            <li class="breadcrumb-item text-sm text-dark " aria-current="page">Edit Quotes</li>
          </ol>
          <!-- <h6 class="font-weight-bolder mb-0">Create Quotes</h6> -->
        </nav>

        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1" aria-hidden="true"></i>
              </a><a href="../pages/login.html" class="sign-in"> &nbsp;<span class="d-sm-inline d-none">Sign
                  out</span></a>

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
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer" aria-hidden="true"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa fa-bell cursor-pointer" aria-hidden="true"></i>
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
                          <i class="fa fa-clock me-1" aria-hidden="true"></i>
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
                          <i class="fa fa-clock me-1" aria-hidden="true"></i>
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
                          <i class="fa fa-clock me-1" aria-hidden="true"></i>
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

    <div>
      <div class="container-fluid">
        <div>
          <div class="fillsbox">

            <div class="textfills p-3 ">
              <div class="Quotescalculator">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Quotes Calculator
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Quotes Calculator</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <div class="addemployee">
                          <button id="add-employee-btn" class="btn btn-primary">Add Employee</button>
                        </div>

                        <div class="formone" id="employee-forms-container">
                          <div class="employee-form">

                            <form class="p-2">

                              <div id="removebtn" class="" onclick="remove(0)">
                                <i class="fa-solid fa-xmark"></i>
                              </div>

                              <div class="mb-3">
                                <label for="employee-name" class="form-label">Employee name:</label>
                                <input type="text" class="form-control" id="employee-name" name="employee-name"
                                  onfocus="focused(this)" onfocusout="defocused(this)">
                              </div>

                              <div class="mb-3">
                                <label for="gross-salary" class="form-label">Gross Salary:</label>
                                <input type="number" class="form-control" id="gross-salary" name="gross-salary"
                                  onfocus="focused(this)" onfocusout="defocused(this)">
                              </div>

                              <div class="mb-3">
                                <label for="gross-salary" class="form-label">Monthly</label>
                                <input type="number" class="form-control Monthly" id="gross-salary" name="gross-salary"
                                  onfocus="focused(this)" onfocusout="defocused(this)">
                              </div>

                              <div class="mb-3 form-check checkboxfill">
                                <label class="form-check-label checkboxfillLable" for="daily-salary-checkbox">Daily
                                  salary?</label>
                                <input type="checkbox" class="form-check-input" id="daily-salary-checkbox"
                                  name="daily-salary-checkbox" onchange="showDaysInput()">

                              </div>

                              <div id="days-input-container" style="display: none;">
                                <div class="mb-3">
                                  <label for="days-worked" class="form-label">Number of days worked:</label>
                                  <input type="number" class="form-control" id="days-worked" name="days-worked"
                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                              </div>

                              <button type="button" class="btn btn-primary" value="calculate"
                                onclick="myCalculate()">calculate</button>
                            </form>



                          </div>
                        </div>



                        <div class="merge">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">MERGE</button>
                        </div>

                        <form class="QuotesCalculatorfills">
                          <div class="QuotesCalculatorform">
                            <label>Sub Amount</label>
                            <input type="text" id="subAmount">
                          </div>
                          <div class="QuotesCalculatorform">
                            <label>percentage</label>
                            <input type="text" id="percentageinput">
                            <button class="btn-sm btn-danger" id="percentage">
                              <i class="fa-solid fa-plus"></i>
                            </button>
                          </div>
                          <div class="QuotesCalculatorform">
                            <label>Total Amount</label>
                            <input type="text" name="totalamount" id="totalamount">
                          </div>

                          <div class="QuotesCalculatorbtn">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          </div>

                        </form>

                      </div>
                      <div id="merge">
                        <div class="modal-footer">









                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <form method="post">
                <input type="text" id="editor_val1" name="editor_val1" style="display:none">
                <input type="text" id="editor_val2" name="editor_val2" style="display:none">
                <h6 class="font-weight-bolder headertext">Edit Quotes</h6>
                <div class="Subject">
                  <label>Subject</label>
                  <input type="text" name="subject" value="<?php echo $subject ?>">
                </div>


                <div class="row mediacol">


                  <div class="col-md-6">
                    <div class="form-horizontal">

                      <div class="form-group">
                        <label for="cid" class="col-sm-4 control-label">Customer</label>

                        <div class="col-sm-8 selectCustomer">
                          <select id="cid" name="cid" class="select2-hidden-accessible" tabindex="-1"
                            aria-hidden="true">
                            <option value="<?php echo $customer_id ?>"> <?php echo $customer_id ?></option>
                            <option value="John">John </option>
                            <option value="Conor Nolan">Conor Nolan </option>
                            <option value="Adrienne Zamora ">Adrienne Zamora </option>

                          </select><span
                            class="select2 select2-container select2-container--bootstrap select2-container--below"
                            dir="ltr" style="width: 313px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-cid-container"><span class="select2-selection__rendered"
                                  id="select2-cid-container" title="test12 "> </span><span
                                  class="select2-selection__arrow" role="presentation"><b
                                    role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                              aria-hidden="true"></span></span>
                          <span class="help-block"><a href="./view.html" id="contact_add"> <br>
                            </a> </span>
                        </div>
                      </div>



                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4">Address</label>

                        <div class="col-sm-8 selectCustomer">
                          <textarea id="address" name="address" class="textarea"><?php echo $address ?></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="invoicenum" class="col-sm-4 control-label">Quote Prefix</label>

                        <div class="col-sm-8">
                          <input type="text" id="invoicenum" name="invoicenum" disabled
                            value="<?php echo $quote_prefix ?>">

                        </div>
                      </div>

                      <div class="form-group">
                        <label for="cn" class="col-sm-4 control-label">GST Number</label>

                        <div class="col-sm-8">
                          <input type="text" id="cn" name="cn" value="<?php echo $gst_number ?>"><br>

                        </div>
                      </div>


                    </div>
                  </div>

                  <div class="col-md-6 mediacol2">
                    <div class="form-horizontal  ">

                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Date Created</label>

                        <div class="col-sm-8">
                          <input type="date" id="idate" name="idate" datepicker="" data-date-format="yyyy-mm-dd"
                            data-auto-close="true" value="<?php echo $date_created ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="edate" class="col-sm-4 control-label">Expiry Date</label>

                        <div class="col-sm-8">
                          <input type="date" id="edate" name="edate" datepicker="" data-date-format="yyyy-mm-dd"
                            data-auto-close="true" value="<?php echo date("Y/m/d") ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="stage" class="col-sm-4 control-label">Stage</label>

                        <div class="col-sm-8 selectCustomer">

                          <select class="" name="stage" id="stage">
                            <option>
                              <?php echo $stage ?>
                            </option>
                            <option value="Draft">Draft</option>
                            <option value="Delivered">Delivered</option>
                            <option value="Accepted">Accepted</option>
                            <option value="Lost">Lost</option>
                            <option value="Dead">Dead</option>
                          </select>
                        </div>

                      </div>
                      <div class="form-group">
                        <label for="tid" class="col-sm-4 control-label">Sales TAX</label>

                        <div class="col-sm-8 selectCustomer">
                          <select id="tid" name="tid" class="">
                            <option value="<?php echo $sales_tax_id ?>"><?php echo $sales_tax_id ?></option>
                            <option value="0">None</option>

                            <option value="18.00%">SGST , CGST
                              (18.00%)
                            </option>
                            <option value="18.00%">SGST
                              (18.00%)
                            </option>


                          </select>
                          <input type="hidden" id="stax" name="stax" value="18.00">
                          <input type="hidden" id="discount_amount" name="discount_amount" value="0.00">
                          <input type="hidden" id="discount_type" name="discount_type" value="p">

                        </div>
                      </div>




                    </div>

                  </div>

                </div>

                <div class="Table" id="itemcode">
                  <table>

                    <thead>
                      <tr>
                        <th>Item Code</th>
                        <th>Item Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>TAX</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr id="myList2">
                        <td>1</td>
                        <td> <textarea class="textarea" name="message"><?php echo $message ?></textarea></td>
                        <td><input type="text" name="input1" value="<?php echo $input1 ?>"></td>
                        <td><input type="text" name="input2" value="<?php echo $input2 ?>"></td>
                        <td>

                          <input type="text" id="option">
                        </td>
                        <td><input type="text" name="totalamount" value="<?php echo $totalamount ?>"></td>

                      </tr>


                      <tr id="myList1">

                      </tr>

                    </tbody>

                    <tbody>

                    </tbody>
                  </table>

                  <div class="Tablebtn">
                    <button type="button" class="btn btn-info" id="addBlankLine">Add blank Line</button>
                    <button type="button" class="btn btn-primary" onclick="Delete()">Delete</button>
                  </div>

                  <div class="bill">
                    <div>
                      <p>Sub Total :</p>
                      <p>
                        <?php echo $input2 ?>
                      </p>
                    </div>
                    <div>

                      <p>TAX :</p>
                      <p>00</p>

                    </div>
                    <div>

                      <p>Total</p>
                      <p>00</p>

                    </div>
                  </div>

                </div>

                <!-- <input type="text" name="ckeditor2"/> -->

                <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

                <div class="editorone">
                  <b>Project Description</b>
                  <div id="editor" name="ckeditor2">

                    <?php echo $text ?>

                  </div>
                  <script>

                    function getdata() {

                      console.log(CKEDITOR.instances.editor1.document);
                      var htmldata = CKEDITOR.instances.editor1.getData();

                      document.getElementById("editor_val1").value = htmldata;
                      console.log(htmldata);

                    }

                    ClassicEditor
                      .create(document.querySelector('#editor'))
                      .then(editor => {
                        console.log(editor);
                        console.log("data");
                      })
                      .catch(error => {
                        console.error(error);
                      });
                  </script>






                  <div class="editclose">
                    <button type="button" class="btn btn-primary">close</button>
                    <button type="submit" name="submit" onclick="getdata()" class="btn btn-info">Save</button>
                    <!-- <button type="submit" name="submit" class="btn btn-info">Save</button> -->
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


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
  </main>
  <div class="container">

  </div>

  <div class="fixed-plugin">
    <!-- <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a> -->
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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="./JS/QuotesCalculator.js"></script>

</body>

</html>