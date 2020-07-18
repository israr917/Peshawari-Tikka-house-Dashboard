
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&display=swap" rel="stylesheet">
    <script src="./js/all.js"></script>
    <link rel="stylesheet" href="./js/">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="legend.css">
</head>

<body>
   



  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="sidebar.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-3 mr-0" href="#">Peshawari Kabab Center</a>
    <input class="form-control form-control-dark " type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#">Sign out</a>
      </li>
    </ul>
  </nav>

  
  <div class="container-fluid" style="margin-top:50px" >
    <div class="row">
      <nav class="col-md-3 d-none d-md-block  bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php" >
                <span data-feather="file"></span>
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="inventorymgt.php">
                <span data-feather="shopping-cart"></span>
                Inventory
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="users"></span>
                Orders
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                Manage Customers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Suppliers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link has-children" href="#">
                  <span data-feather="shopping-cart"></span>
                  Purchase Orders
                  <span data-feather="chevron-right" class="float-right"></span>
              </a>
              <ul>
                  <li class="nav-item">
                      <a class="nav-link" href="#">
                          <span data-feather="plus"></span>
                          Add Hotel
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">
                          <span data-feather="settings"></span>
                          Manage Hotel
                      </a>
                  </li>
              </ul>
          </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Current month
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last quarter
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
              </a>
            </li>
          </ul>
        </div>
      </nav>
  

      <div class="col-md-9 mt-5 ">
    
<div class="col-md-12">    
  
    
    <div class="col-md-12" >

  <form method="#" class="mt-3">
    <fieldset class="scheduler-border" style="border-radius: 1%;" >
      <legend class="w-auto" > &nbsp; Inventory Items &nbsp; </legend>
    <div class="form-group row "> 
      
      <div class="col-md-2">

      </div>
      <div class="col-md-8">
        <input type="text" class="form-control" id="name" placeholder="Name">
      </div>
      <div class="col-md-2">

      </div>
    </div>
    
    <div class="form-group row">
      <div class="col-md-2">

      </div>
      <div class="col-md-8">
        <input type="text" class="form-control" id="Reordering" placeholder="Re_Ordering Level">
      </div>
    <div class="col-md-2">

    </div>
    </div>
    <div class="form-group row">
        <div class="col-md-2">
  
        </div>
        <div class="col-md-8">
          <input type="text" class="form-control" id="unit" placeholder="Unit">
        </div>
      <div class="col-md-2">
  
      </div>
      </div>
      

      <div class="form-group row">
        <div class="col-md-2">
  
        </div>
        <div class="col-md-8">
          <input type="text" class="form-control" id="unitprice" placeholder="Unit Price">
        </div>
      <div class="col-md-2">
  
      </div>
      </div>
      

      <div class="form-group row">
        <div class="col-md-2">
  
        </div>
        <div class="col-md-8">
          <input type="text" class="form-control" id="quantity" placeholder="Quantity">
        </div>
      <div class="col-md-2">
  
      </div>
      </div>




    <div class="form-group row">

      <div class="col-md-2">

      </div>

      <div class="col-md-3">
        <select class="custom-select" placeholder="default">
          <option disable selected>Branch</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      
      <div class="col-md-5 col-xs-5 d-flex " >
        <button class="btn btn-outline-primary " style="margin-left: auto;">Add Inventory</button>
      </div>
      
    </div>
    </fieldset>
  </div>
  
  </form>



    </div>
 


 

  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
  <script src="sidebar.js"></script>
  <script>
    feather.replace()
  </script>




    <!--Jquery-->
    <script src="./js/jquery-3.5.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>





    <!--Bootstrap-->
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>