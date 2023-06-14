<?php
$details_tabledata = $this->db->query("select * from customize_table where id='1'")->result()[0];
?>
<!DOCTYPE html>
<html lang="en">
<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $details_tabledata->web_name ?></title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/components.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">

  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='<?= base_url() ?>assets/img/logo2.png' />
</head>

<body style=" background-image:url(<?= base_url() ?>assets/img/background.jpg)">
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky" style="background-image:url(<?= base_url() ?>assets/img/back.jpg)">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li>
            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
              <i data-feather="align-justify" style="color:white"></i>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link nav-link-lg fullscreen-btn">
              <i data-feather="maximize" style="color:white"></i>
            </a>
          </li>
          <li style="background-color: white;">
            <form class="form-inline mr-auto">
              <div class="search-element">
                <input style="background-color: white;" class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                <button class="btn" type="submit" style="background-color: white;">
                  <i class="fas fa-search" style="background-color: white;"></i>
                </button>
              </div>
            </form>
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="<?= base_url() ?>assets/img/userlogo2.png" class="user-img-radious-style" style=" width: 38px;">
              <span class="d-sm-none d-lg-inline-block"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title" style="color: green;">
                ADMIN
              </div>
              <a href="<?= base_url() ?>Profile" class="dropdown-item has-icon">
                <i class="far fa-user"></i>
                Profile
              </a>
              <a href="<?= base_url() ?>Customer_contacts" class="dropdown-item has-icon">
                <i class="fas fa-comment-dots"></i>
                Messages
              </a>
              <a href="<?= base_url() ?>Customize" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Customize
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url() ?>Login/logout" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        
      </nav>
    
      <div class="main-sidebar sidebar-style-2" style="background-color: white">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand" style=" background-image:url(<?= base_url() ?>assets/img/back.jpg)">
            <a href="<?= base_url() ?>Dashboard"> <img alt="image" src="<?= base_url() ?>assets/img/logo2.png" class="header-logo" style="width:25px; height: 30px;" />
              <span class="logo-name" style="color: white;">Admin Board</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="<?= base_url() ?>Dashboard" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <!-- Admin Session  -->
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown">
                <i data-feather="slack"></i>
                <span>Registrations</span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="nav-link" href="<?= base_url() ?>City">City</a>
                </li>
                <li>
                  <a class="nav-link" href="<?= base_url() ?>Seasons">Seasons</a>
                </li>
                <li>
                  <a href="<?= base_url() ?>Nurseries_data" class="nav-link"><span>Nurseries</span></a>
                </li>
                <li>
                  <a class="nav-link" href="<?= base_url() ?>PlantType">Product Types</a>
                </li>
                <li>
                  <a class="nav-link" href="<?= base_url() ?>Plants">Products</a>
                </li>
                <li>
                  <a class="nav-link" href="<?= base_url() ?>Blogs">Blogs</a>
                </li>
              </ul>
            </li>
            <li class="">
              <a href="<?= base_url() ?>Orders" class="nav-link"><i data-feather="shopping-cart"></i><span>Orders</span></a>
            </li>
            <li class="menu-header">Website Pages</li>
            <li class="">
              <a href="<?= base_url() ?>Customer_contacts" class="nav-link"><i data-feather="mail"></i><span>Customer Contacts</span></a>
            </li>
            <li class="">
              <a href="<?= base_url() ?>Customer_comments" class="nav-link"><i data-feather="file-text"></i><span>Customer Comments</span></a>
            </li>
            <li class="menu-header">Edit Website Details</li>
            <li class="">
              <a href="<?= base_url() ?>Notepad" class="nav-link"><i data-feather="clipboard"></i><span>Notepad</span></a>
            </li>
            <li class="menu-header">Locker</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown">
                <i data-feather="user"></i>
                <span>Auth</span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="nav-link" href="<?= base_url() ?>Users">Users</a>
                </li>
                <li>
                  <a class="nav-link" href="<?= base_url() ?>Login">Login</a>
                </li>
                <li>
                  <a class="nav-link" href="<?= base_url() ?>Signup">Signup</a>
                </li>
              </ul>
            </li>
          </ul>
          </li>
          </ul>
        </aside>
      </div>

      <body style=" background-image:url(<?= base_url() ?>assets/img/background.jpg)">
        <!--style="background-color: #85c799" -->
        <div class="loader"></div>
        <div id="app">
          <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky" style="background-image:url(<?= base_url() ?>assets/img/back.jpg)">
              <div class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">

                  <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                    collapse-btn"> <i data-feather="align-justify" style="color:white"></i></a></li>
                  <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                      <i data-feather="maximize" style="color:white"></i>
                    </a>
                  </li>

                  <li style="background-color: white;">
                    <form class="form-inline mr-auto">
                      <div class="search-element">
                        <input style="background-color: white;" class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                        <button class="btn" type="submit" style="background-color: white;">
                          <i class="fas fa-search" style="background-color: white;"></i>
                        </button>
                      </div>
                    </form>
                  </li>

                  <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="<?= base_url() ?>assets/img/userlogo2.png" class="user-img-radious-style" style=" width: 38px;"> <span class="d-sm-none d-lg-inline-block"></span></a>
                    <div class="dropdown-menu dropdown-menu-right pullDown">
                      <div class="dropdown-title" style="color: green;">User</div>
                      <a href="<?= base_url() ?>Profile" class="dropdown-item has-icon"> <i class="far
                      fa-user"></i> Profile
                      </a> <a href="<?= base_url() ?>Customer_contacts" class="dropdown-item has-icon"> <i class="fas fa-comment-dots"></i>
                        Messages
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url() ?>Login/logout" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                          Sign Out
                        </a>
                    </div>
                  </li>
                </ul>
            </nav>