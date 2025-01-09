<?php
require_once "./User.php";
require_once "./Role.php";
require_once "./Admin.php";


require_once "./../core/config/Database.php";
require_once "./../core/config/Found.php";
require_once "./../core/config/Crud.php";
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Bootstrap Dashboard and Admin Template - ByteWebster</title>
  <link rel="stylesheet" href="./style.css">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <style>
  
@import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);


@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");
  </style>
</head>
<!-- bytewebster.com -->
<!-- bytewebster.com -->
<!-- bytewebster.com -->
<body>
<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                <h3 class="text-success"><img src="https://bytewebster.com/img/logo.png" width="40"><span class="text-info">BYTE</span>WEBSTER</h3> 
            </a>
            <!-- User menu (mobile) -->
            <div class="navbar-user d-lg-none">
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Toggle -->
                    <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-parent-child">
                            <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar- rounded-circle">
                            <span class="avatar-child avatar-badge bg-success"></span>
                        </div>
                    </a>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                        <a href="#" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="#" class="dropdown-item">Billing</a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-house"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-bar-chart"></i> Analitycs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-chat"></i> Messages
                            <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">6</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-bookmarks"></i> Collections
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-people"></i> Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-globe-americas"></i> Ranking
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-file-text"></i> Posts
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="navbar-divider my-5 opacity-20">
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-4">
                    <li>
                        <div class="nav-link text-xs font-semibold text-uppercase text-muted ls-wide" href="#">
                            Contacts
                            <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-4">13</span>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link d-flex align-items-center">
                            <div class="me-4">
                                <div class="position-relative d-inline-block text-white">
                                    <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar rounded-circle">
                                    <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-success rounded-circle"></span>
                                </div>
                            </div>
                            <div>
                                <span class="d-block text-sm font-semibold">
                                    Daisy johnson
                                </span>
                                <span class="d-block text-xs text-muted font-regular">
                                    Paris, FR
                                </span>
                            </div>
                            <div class="ms-auto">
                                <i class="bi bi-chat"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link d-flex align-items-center">
                            <div class="me-4">
                                <div class="position-relative d-inline-block text-white">
                                    <span class="avatar bg-soft-warning text-warning rounded-circle">JW</span>
                                    <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-success rounded-circle"></span>
                                </div>
                            </div>
                            <div>
                                <span class="d-block text-sm font-semibold">
                                    Michael Jordan
                                </span>
                                <span class="d-block text-xs text-muted font-regular">
                                    Bucharest, RO
                                </span>
                            </div>
                            <div class="ms-auto">
                                <i class="bi bi-chat"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link d-flex align-items-center">
                            <div class="me-4">
                                <div class="position-relative d-inline-block text-white">
                                    <img alt="..." src="https://images.unsplash.com/photo-1610899922902-c471ae684eff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar rounded-circle">
                                    <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-danger rounded-circle"></span>
                                </div>
                            </div>
                            <div>
                                <span class="d-block text-sm font-semibold">
                                    Heather Wright
                                </span>
                                <span class="d-block text-xs text-muted font-regular">
                                    London, UK
                                </span>
                            </div>
                            <div class="ms-auto">
                                <i class="bi bi-chat"></i>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- Push content down -->
                <div class="mt-auto"></div>
                <!-- User (md) -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-person-square"></i> Account
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="return confirm('Are you sure you want to logout?')">
                            <i class="bi bi-box-arrow-left"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight">
                                <img src="https://bytewebster.com/img/logo.png" width="40"> ByteWebster Application</h1>
                        </div>
                        <!-- Actions -->
                        <div class="col-sm-6 col-12 text-sm-end">
                            <div class="mx-n1">
                                <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-pencil"></i>
                                    </span>
                                    <span>Edit</span>
                                </a>
                                <a id="create" style="visibility:hidden" onclick="showmodal" href="#" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span>Create</span>
                                </a>
                                <a href="#" class="btn d-inline-flex btn-sm btn-warning mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-gear-wide-connected"></i>
                                    </span>
                                    <span>Manage</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="modal" tabindex="-1">
  <div id="modal" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                    <!-- Nav -->
                    <ul class="nav nav-tabs mt-4 overflow-x border-0">
                       
                        <li class="nav-item">
                            <a onclick="showBOOks('books')"  href="#" class="nav-link font-regular">Books</a>
                        </li>
                        <li class="nav-item">
                            <a onclick="showReservations()" href="#" class="nav-link font-regular">Reservation</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <!-- Card stats -->
              
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">All Books</span>
                                        <span class="h3 font-bold mb-0"><?php
                                         $kama = new Livre();
                                       echo count($kama->read())?></span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-success text-success me-2">
                                        <i class="bi bi-arrow-up me-1"></i>80%
                                    </span>
                                    <span class="text-nowrap text-xs text-muted">Since last month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table  class="table table-hover table-nowrap">
          <thead  class="thead-light">
          <tr>
          <th scope="col">Name</th>
          <th scope="col">Auteur</th>
          <th scope="col">Category</th>
          <th scope="col">Meeting</th>
          <th></th>
          </tr>
          </thead>
          <tbody>
          
          <?php
        $kama = new Livre();
    
        
        $kama->read();
        ($kama->read());
        foreach($kama->read() as $livre){
            $kama->setAttributes($livre->name,$livre->auteur);
            $kama->setId($livre->id);
            $kama->SetcategoryId($livre->id_Category);
            ?>   
                                     <tr>
                                     <td>
                                     
                                     
                                     <a class="text-heading font-semibold" href="#">
                                     <?php
                                           echo $kama->getname();
                                           ?>
                                        </a>
                                    </td>
                                    <td>
                                    <?php
                                       echo $kama->getAuteur();
                                       ?>
                                    </td>
                                    <td>
                                    <img alt="..." src="https://bytewebster.com/img/logo.png" class="avatar avatar-xs rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="https://www.bytewebster.com/">
                                    <?php
                                       echo $kama->getCategory()->getName(); 
                                       ?>
                                        </a>
                                        </td>
                                        
                                        <td class="text-end">|
                                        <a onclick="CreateReservation()" href="#" class="btn btn-sm btn-neutral">Reserve</a>
                                      
                                        
                                        </td>
                                        </tr> <?php  } ?> 
                                        
                                        </tbody>
                                        </table> 
                                        </div>`
                    <!-- <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total hours</span>
                                        <span class="h3 font-bold mb-0">4.100</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                                            <i class="bi bi-clock-history"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-danger text-danger me-2">
                                        <i class="bi bi-arrow-down me-1"></i>-5%
                                    </span>
                                    <span class="text-nowrap text-xs text-muted">Since last month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Work load</span>
                                        <span class="h3 font-bold mb-0">88%</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white text-lg rounded-circle">
                                            <i class="bi bi-minecart-loaded"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-success text-success me-2">
                                        <i class="bi bi-arrow-up me-1"></i>10%
                                    </span>
                                    <span class="text-nowrap text-xs text-muted">Since last month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
           
                    <?php
                //    $livre = new Livre("musirable","hamid");
                //    var_dump($livre);
                //    $livre->setCategory("action");
                //    echo "<pre>";
                //    var_dump($livre);
                //    $livre->tablename();
                //    $livre->column();
                //    $livre->add(); 
                //   $livre->setId($livre->add());
                //    echo "</pre>";
                //    echo "<pre>";
                //    var_dump($livre);
                //    echo "</pre>";
                //    $admin = new admin();
                //    $admin->setattribute("asasc","las;lasl","ascascascas@gmail.com","ascasc");
                //    $admin->setRolename("admin");
                //    $admin->tablename();
                //    $admin->column();
                //    $admin->add();
                //    $admin->setId($admin->add());
                  





                //    $admin->setlivre($livre);
                  

                //    $admin->getlivre()->setCategory("action");
                //    $admin->getlivre()->tablename();
                //    $admin->getlivre()->column();
                //    $admin->getlivre()->add(); 
                //   $admin->getlivre()->setId($livre->add());
                //    $admin->getlivre()->getAuteur();
                 



                    


                    ?>
                    <div class="card-footer border-0 py-5">
                        <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item"><a class="page-link disabled" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link bg-info text-white" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </main>
    </div>
   
</div>
       
 <script>
    function CreateReservation(){
       
        
}
      document.getElementById("create").style.visibility = "hidden";
    function showBOOks(value){
      if(value == "books"){
        document.getElementById("create").style.visibility = "visible";
          let Books=  ` <table  class="table table-hover table-nowrap">
          <thead  class="thead-light">
          <tr>
          <th scope="col">Name</th>
          <th scope="col">Auteur</th>
          <th scope="col">Category</th>
          <th scope="col">Meeting</th>
          <th></th>
          </tr>
          </thead>
          <tbody>
          
          <?php
        $kama = new Livre();
    
        
        $kama->read();
        ($kama->read());
        foreach($kama->read() as $livre){
            $kama->setAttributes($livre->name,$livre->auteur);
            $kama->setId($livre->id);
            $kama->SetcategoryId($livre->id_Category);
            ?>   
                                     <tr>
                                     <td>
                                     
                                     
                                     <a class="text-heading font-semibold" href="#">
                                     <?php
                                           echo $kama->getname();
                                           ?>
                                        </a>
                                    </td>
                                    <td>
                                    <?php
                                       echo $kama->getAuteur();
                                       ?>
                                    </td>
                                    <td>
                                    <img alt="..." src="https://bytewebster.com/img/logo.png" class="avatar avatar-xs rounded-circle me-2">
                                    <a class="text-heading font-semibold" href="https://www.bytewebster.com/">
                                    <?php
                                       echo $kama->getCategory()->getName(); 
                                       ?>
                                        </a>
                                        </td>
                                        
                                        <td class="text-end">|
                                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                                        <form action="Generater.php" method="get">
                                        <input type="hidden" value="<?php echo $kama->getId()?>" name="livreid" >
                                        
                                        <button type="submit" name="submit" onclick="showSweetAlert()" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                        </button>
                                        </form>
                                        
                                        </td>
                                        </tr> <?php  } ?> 
                                        
                                        </tbody>
                                        </table> 
                                        </div>` ;
                                        
                                        document.getElementById("books").innerHTML = Books  ;
                                    }
                                }
       

       
            
        

      
                   
  
</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>
</html>