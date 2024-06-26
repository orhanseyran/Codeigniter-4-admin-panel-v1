<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>E Ticaret Modül (Test Case Project)</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="loader-index"> <span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
       <?= view("globalcomponents/header/header") ?>

      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
       <?= view("globalcomponents/sidebar/sidebar") ?>


        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <?= view("admin/dashboard/components/pagetitle/pagetitle") ?>
      
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row size-column">
              <div class="col-xxl-10 col-md-12 box-col-8 grid-ed-12">
                <div class="row">
                  <div class="col-xxl-5 col-md-7 box-col-7">
                    <div class="row"> 
                      <div class="col-sm-12"> 
                        <div class="card o-hidden">             
                          <div class="card-body balance-widget"><span class="f-w-500 f-light" style="color: white;">Ürünlerim</span>
                            <h4 class="mb-3 mt-1 f-w-500 mb-0 f-22" style="color: white;">Adet <span class="counter" style="color: white;"><?php echo count($product); ?>
                            <div class="mobile-right-img"><img class="left-mobile-img" src="images/ürün.jpg" alt=""><img class="mobile-img" src="images/ürün.jpg" alt="mobile with coin"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-6"> 
                        <div class="card small-widget"> 
                          <div class="card-body primary"> <span class="f-light">Toplam Ürünler</span>
                            <div class="d-flex align-items-end gap-1">
                              <h4><?php echo count($allproduct) ?></h4><span class="font-primary f-12 f-w-500"><i class="icon-arrow-up"></i><span>+50%</span></span>
                            </div>
                            <div class="bg-gradient"> 
                              <svg class="stroke-icon svg-fill">
                                <use href="../assets/svg/icon-sprite.svg#new-order"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-6"> 
                        <div class="card small-widget"> 
                          <div class="card-body warning"><span class="f-light">Toplam Satıcı</span>
                            <div class="d-flex align-items-end gap-1">
                              <h4><?php echo count($category) ?></h4><span class="font-warning f-12 f-w-500"><i class="icon-arrow-up"></i><span>+20%</span></span>
                            </div>
                            <div class="bg-gradient"> 
                              <svg class="stroke-icon svg-fill">
                                <use href="../assets/svg/icon-sprite.svg#customers"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-6"> 
                        <div class="card small-widget"> 
                          <div class="card-body secondary"><span class="f-light">Toplam Marka</span>
                            <div class="d-flex align-items-end gap-1">
                              <h4><?php echo count($brands) ?></h4><span class="font-secondary f-12 f-w-500"><i class="icon-arrow-down"></i><span>-10%</span></span>
                            </div>
                            <div class="bg-gradient"> 
                              <svg class="stroke-icon svg-fill">
                                <use href="../assets/svg/icon-sprite.svg#sale"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-6"> 
                        <div class="card small-widget"> 
                          <div class="card-body success"><span class="f-light">Anlaşmalı Kargo Şirketlerim</span>
                            <div class="d-flex align-items-end gap-1">
                              <h4><?php echo count($cargo) ?></h4><span class="font-success f-12 f-w-500"><i class="icon-arrow-up"></i><span>+80%</span></span>
                            </div>
                            <div class="bg-gradient"> 
                              <svg class="stroke-icon svg-fill">
                                <use href="../assets/svg/icon-sprite.svg#profit"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-7 col-md-5 col-sm-6 box-col-5"> 
                    <div class="appointment">
                      <div class="card">
                        <div class="card-header card-no-border">
                          <div class="header-top">
                            <h5 class="m-0">En Son Eklenen Satıcılar</h5>
                            <div class="card-header-right-icon">
                              <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-body pt-0">
                          <div class="appointment-table customer-table table-responsive">
                            <table class="table table-bordernone">
                              <tbody>
                                <?php foreach($user as $get) :?>
                                <tr>
                                  <td><img class="img-fluid img-40 rounded-circle me-2" src="images/vendor.png" alt="user"></td>
                                  <td class="img-content-box"><a class="f-w-500" href="user-profile.html"><?= $get["name"] ?></a><span class="f-light"><?= $get["email"] ?></span></td>
                                </tr>

                                <?php endforeach?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-xxl-4 col-sm-6 box-col-6">
                    <div class="card"> 
                      <div class="card-header card-no-border">
                        <div class="header-top">
                          <h5 class="m-0">Order this month</h5>
                          <div class="card-header-right-icon">
                            <div class="dropdown icon-dropdown">
                              <button class="btn dropdown-toggle" id="orderButton" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orderButton"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body pt-0">
                        <div class="light-card balance-card d-inline-block">
                          <h4 class="mb-0">$12,000 <span class="f-light f-14">(15,080 To Goal)</span></h4>
                        </div>
                        <div class="order-wrapper"> 
                          <div id="order-goal"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-3 col-md-6 box-col-6">
                    <div class="card"> 
                      <div class="card-header card-no-border"> 
                        <h5>Monthly Profits</h5><span class="f-light f-w-500 f-14">(Total profit growth of 30%)</span>
                      </div>
                      <div class="card-body pt-0"> 
                        <div class="monthly-profit">
                          <div id="profitmonthly"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-9 box-col-12">
                    <div class="card">
                      <div class="card-header card-no-border"> 
                        <h5>Order Overview</h5>
                      </div>
                      <div class="card-body pt-0">
                        <div class="row m-0 overall-card overview-card">
                          <div class="col-xl-9 col-md-8 col-sm-7 p-0 box-col-7">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                            <div class="chart-right">
                              <div class="row">
                                <div class="col-xl-12">
                                  <div class="card-body p-0">
                                    <ul class="balance-data"> 
                                      <li><span class="circle bg-secondary"></span><span class="f-light ms-1">Refunds</span></li>
                                      <li><span class="circle bg-primary"> </span><span class="f-light ms-1">Earning</span></li>
                                      <li><span class="circle bg-success"> </span><span class="f-light ms-1">Order</span></li>
                                    </ul>
                                    <div class="current-sale-container order-container">
                                      <div class="overview-wrapper" id="orderoverview"></div>
                                      <div class="back-bar-container"> 
                                        <div id="order-bar"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-3 col-md-4 col-sm-5 p-0 box-col-5">
                            <div class="row g-sm-3 g-2">
                              <div class="col-md-12">
                                <div class="light-card balance-card widget-hover">
                                  <div class="svg-box">
                                    <svg class="svg-fill">
                                      <use href="../assets/svg/icon-sprite.svg#orders"></use>
                                    </svg>
                                  </div>
                                  <div> <span class="f-light">Orders</span>
                                    <h6 class="mt-1 mb-0">10,098 </h6>
                                  </div>
                                  <div class="ms-auto text-end">
                                    <div class="dropdown icon-dropdown">
                                      <button class="btn dropdown-toggle" id="orderdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orderdropdown"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday </a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="light-card balance-card widget-hover">
                                  <div class="svg-box">
                                    <svg class="svg-fill">
                                      <use href="../assets/svg/icon-sprite.svg#expense"></use>
                                    </svg>
                                  </div>
                                  <div> <span class="f-light">Earning</span>
                                    <h6 class="mt-1 mb-0">$12,678</h6>
                                  </div>
                                  <div class="ms-auto text-end">
                                    <div class="dropdown icon-dropdown">
                                      <button class="btn dropdown-toggle" id="earningdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningdropdown"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday </a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="light-card balance-card widget-hover">
                                  <div class="svg-box">
                                    <svg class="svg-fill">
                                      <use href="../assets/svg/icon-sprite.svg#doller-return"></use>
                                    </svg>
                                  </div>
                                  <div> <span class="f-light">Refunds</span>
                                    <h6 class="mt-1 mb-0">3,001</h6>
                                  </div>
                                  <div class="ms-auto text-end">
                                    <div class="dropdown icon-dropdown">
                                      <button class="btn dropdown-toggle" id="incomedropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="incomedropdown"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-3 col-xl-4 col-sm-6 box-col-6 wow zoomIn">
                    <div class="card purchase-card discover"><img class="img-fluid" src="../assets/images/dashboard-2/discover.png" alt="vector discover">
                      <div class="card-body pt-3"> 
                        <h5 class="mb-1">Discover Pro</h5>
                        <p class="f-light">Amet minim mollit non deserunt ullamco est sit aliqua dolor </p><a class="purchase-btn btn btn-hover-effect btn-primary f-w-500" href="https://1.envato.market/3GVzd" target="_blank">Update Now</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-sm-6 box-col-6">
                    <div class="card visitor-card"> 
                      <div class="card-header card-no-border">
                        <div class="header-top">
                          <h5 class="m-0">Visitors<span class="f-14 font-primary f-w-500 ms-1">
                              <svg class="svg-fill me-1">
                                <use href="../assets/svg/icon-sprite.svg#user-visitor"></use>
                              </svg>(+2.8)</span></h5>
                          <div class="card-header-right-icon">
                            <div class="dropdown icon-dropdown">
                              <button class="btn dropdown-toggle" id="visitorButton" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="visitorButton"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body pt-0">
                        <div class="visitors-container">
                          <div id="visitor-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-5 col-xl-4 box-col-12"> 
                    <div class="card recent-order">
                      <div class="card-header card-no-border">
                        <div class="header-top">
                          <h5 class="m-0">Recent Orders</h5>
                          <div class="card-header-right-icon">
                            <div class="dropdown icon-dropdown">
                              <button class="btn dropdown-toggle" id="recentButton" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="recentButton"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body pt-0"> 
                        <div class="recent-sliders">
                          <div class="nav nav-pills" id="v-pills-tab" role="tablist">
                            <button class="active frame-box" id="v-pills-shirt-tab" data-bs-toggle="pill" data-bs-target="#v-pills-shirt" type="button" role="tab" aria-controls="v-pills-shirt" aria-selected="true"><span class="frame-image"><img src="../assets/images/dashboard-2/order/1.png" alt="vector T-shirt"></span></button>
                            <button class="frame-box" id="v-pills-television-tab" data-bs-toggle="pill" data-bs-target="#v-pills-television" type="button" role="tab" aria-controls="v-pills-television" aria-selected="false"><span class="frame-image"><img src="../assets/images/dashboard-2/order/2.png" alt="vector television"></span></button>
                            <button class="frame-box" id="v-pills-headphone-tab" data-bs-toggle="pill" data-bs-target="#v-pills-headphone" type="button" role="tab" aria-controls="v-pills-headphone" aria-selected="false"><span class="frame-image"><img src="../assets/images/dashboard-2/order/3.png" alt="vector headphone"></span></button>
                            <button class="frame-box" id="v-pills-chair-tab" data-bs-toggle="pill" data-bs-target="#v-pills-chair" type="button" role="tab" aria-controls="v-pills-chair" aria-selected="false"><span class="frame-image"><img src="../assets/images/dashboard-2/order/4.png" alt="vector chair"></span></button>
                            <button class="frame-box" id="v-pills-lamp-tab" data-bs-toggle="pill" data-bs-target="#v-pills-lamp" type="button" role="tab" aria-controls="v-pills-lamp" aria-selected="false"><span class="frame-image"><img src="../assets/images/dashboard-2/order/5.png" alt="vector lamp"></span></button>
                          </div>
                          <div class="tab-content" id="v-pills-tabContent"> 
                            <div class="tab-pane fade show active" id="v-pills-shirt" role="tabpanel" aria-labelledby="v-pills-shirt-tab"> 
                              <div class="recent-table table-responsive"> 
                                <table class="table"> 
                                  <thead> 
                                    <tr> 
                                      <th class="f-light">Item</th>
                                      <th class="f-light">Qty</th>
                                      <th class="f-light">Price</th>
                                      <th class="f-light">Status</th>
                                      <th class="f-light">Total Price</th>
                                    </tr>
                                  </thead>
                                  <tbody> 
                                    <tr> 
                                      <td>
                                        <div class="product-content">
                                          <div class="order-image"><img src="../assets/images/dashboard-2/order/sub-product/4.png" alt="t-shirt"></div>
                                          <div> 
                                            <h6 class="f-14 mb-0"><a href="order-history.html">T-shirt</a></h6><span class="f-light f-12">Id : #CFDE-2163</span>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="f-w-500">X1</td>
                                      <td class="f-w-500">$56.00</td>
                                      <td class="f-w-500">
                                        <div class="recent-status font-success"> 
                                          <svg class="me-1">
                                            <use href="../assets/svg/icon-sprite.svg#24-hour"> </use>
                                          </svg>Verified
                                        </div>
                                      </td>
                                      <td class="f-w-500">$100.00</td>
                                    </tr>
                                    <tr> 
                                      <td>
                                        <div class="product-content">
                                          <div class="order-image"><img src="../assets/images/dashboard-2/order/sub-product/3.png" alt="t-shirt"></div>
                                          <div> 
                                            <h6 class="f-14 mb-0"><a href="order-history.html">Pink T-shirt</a></h6><span class="f-light f-12">Id : #CFDE-2780</span>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="f-w-500">X2</td>
                                      <td class="f-w-500">$156.00</td>
                                      <td class="f-w-500">
                                        <div class="recent-status font-danger">
                                          <svg class="me-1">
                                            <use href="../assets/svg/icon-sprite.svg#24-hour"> </use>
                                          </svg>Rejected
                                        </div>
                                      </td>
                                      <td class="f-w-500">$870.00</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-television" role="tabpanel" aria-labelledby="v-pills-television-tab">
                              <div class="recent-table table-responsive"> 
                                <table class="table"> 
                                  <thead> 
                                    <tr> 
                                      <th class="f-light">Item</th>
                                      <th class="f-light">Qty</th>
                                      <th class="f-light">Price</th>
                                      <th class="f-light">Status</th>
                                      <th class="f-light">Total Price</th>
                                    </tr>
                                  </thead>
                                  <tbody> 
                                    <tr> 
                                      <td>
                                        <div class="product-content">
                                          <div class="order-image"><img src="../assets/images/dashboard-2/order/sub-product/5.png" alt="television"></div>
                                          <div> 
                                            <h6 class="f-14 mb-0"><a href="order-history.html">Sony</a></h6><span class="f-light f-12">Id : #CFDE-2163</span>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="f-w-500">X1</td>
                                      <td class="f-w-500">$56.00</td>
                                      <td class="f-w-500">
                                        <div class="recent-status font-danger">
                                          <svg class="me-1">
                                            <use href="../assets/svg/icon-sprite.svg#24-hour"> </use>
                                          </svg>Rejected
                                        </div>
                                      </td>
                                      <td class="f-w-500">$390.00</td>
                                    </tr>
                                    <tr> 
                                      <td>
                                        <div class="product-content">
                                          <div class="order-image"><img src="../assets/images/dashboard-2/order/sub-product/6.png" alt="television"></div>
                                          <div> 
                                            <h6 class="f-14 mb-0"><a href="order-history.html">Samsung</a></h6><span class="f-light f-12">Id : #CFDE-2780</span>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="f-w-500">X2</td>
                                      <td class="f-w-500">$100.00</td>
                                      <td class="f-w-500">
                                        <div class="recent-status font-success"> 
                                          <svg class="me-1">
                                            <use href="../assets/svg/icon-sprite.svg#24-hour"> </use>
                                          </svg>Verified
                                        </div>
                                      </td>
                                      <td class="f-w-500">$870.00</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-headphone" role="tabpanel" aria-labelledby="v-pills-headphone-tab">
                              <div class="recent-table table-responsive"> 
                                <table class="table"> 
                                  <thead> 
                                    <tr> 
                                      <th class="f-light">Item</th>
                                      <th class="f-light">Qty</th>
                                      <th class="f-light">Price</th>
                                      <th class="f-light">Status</th>
                                      <th class="f-light">Total Price</th>
                                    </tr>
                                  </thead>
                                  <tbody> 
                                    <tr> 
                                      <td>
                                        <div class="product-content">
                                          <div class="order-image"><img src="../assets/images/dashboard-2/order/sub-product/1.png" alt="headephones"></div>
                                          <div> 
                                            <h6 class="f-14 mb-0"><a href="order-history.html">Sony</a></h6><span class="f-light f-12">Id : #CFDE-2163</span>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="f-w-500">X1</td>
                                      <td class="f-w-500">$56.00</td>
                                      <td class="f-w-500">
                                        <div class="recent-status font-success"> 
                                          <svg class="me-1">
                                            <use href="../assets/svg/icon-sprite.svg#24-hour"> </use>
                                          </svg>Verified
                                        </div>
                                      </td>
                                      <td class="f-w-500">$100.00</td>
                                    </tr>
                                    <tr> 
                                      <td>
                                        <div class="product-content">
                                          <div class="order-image"><img src="../assets/images/dashboard-2/order/sub-product/2.png" alt="headephones"></div>
                                          <div> 
                                            <h6 class="f-14 mb-0"><a href="order-history.html">Sennheiser</a></h6><span class="f-light f-12">Id : #CFDE-2780</span>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="f-w-500">X2</td>
                                      <td class="f-w-500">$156.00</td>
                                      <td class="f-w-500">
                                        <div class="recent-status font-danger">
                                          <svg class="me-1">
                                            <use href="../assets/svg/icon-sprite.svg#24-hour"> </use>
                                          </svg>Rejected
                                        </div>
                                      </td>
                                      <td class="f-w-500">$100.00</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-chair" role="tabpanel" aria-labelledby="v-pills-chair-tab">
                              <div class="recent-table table-responsive"> 
                                <table class="table"> 
                                  <thead> 
                                    <tr> 
                                      <th class="f-light">Item</th>
                                      <th class="f-light">Qty</th>
                                      <th class="f-light">Price</th>
                                      <th class="f-light">Status</th>
                                      <th class="f-light">Total Price</th>
                                    </tr>
                                  </thead>
                                  <tbody> 
                                    <tr> 
                                      <td>
                                        <div class="product-content">
                                          <div class="order-image"><img src="../assets/images/dashboard-2/order/sub-product/7.png" alt="chair"></div>
                                          <div> 
                                            <h6 class="f-14 mb-0"><a href="order-history.html">Chair</a></h6><span class="f-light f-12">Id : #CFDE-2163</span>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="f-w-500">X1</td>
                                      <td class="f-w-500">$48.00</td>
                                      <td class="f-w-500">
                                        <div class="recent-status font-success"> 
                                          <svg class="me-1">
                                            <use href="../assets/svg/icon-sprite.svg#24-hour"> </use>
                                          </svg>Verified
                                        </div>
                                      </td>
                                      <td class="f-w-500">$50.00</td>
                                    </tr>
                                    <tr> 
                                      <td>
                                        <div class="product-content">
                                          <div class="order-image"><img src="../assets/images/dashboard-2/order/sub-product/8.png" alt="chair"></div>
                                          <div> 
                                            <h6 class="f-14 mb-0"><a href="order-history.html">Office chair</a></h6><span class="f-light f-12">Id : #CFDE-2780</span>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="f-w-500">X2</td>
                                      <td class="f-w-500">$73.00</td>
                                      <td class="f-w-500">
                                        <div class="recent-status font-danger">
                                          <svg class="me-1">
                                            <use href="../assets/svg/icon-sprite.svg#24-hour"> </use>
                                          </svg>Rejected
                                        </div>
                                      </td>
                                      <td class="f-w-500">$75.00</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-lamp" role="tabpanel" aria-labelledby="v-pills-lamp-tab">
                              <div class="recent-table table-responsive"> 
                                <table class="table"> 
                                  <thead> 
                                    <tr> 
                                      <th class="f-light">Item</th>
                                      <th class="f-light">Qty</th>
                                      <th class="f-light">Price</th>
                                      <th class="f-light">Status</th>
                                      <th class="f-light">Total Price</th>
                                    </tr>
                                  </thead>
                                  <tbody> 
                                    <tr> 
                                      <td>
                                        <div class="product-content">
                                          <div class="order-image"><img src="../assets/images/dashboard-2/order/sub-product/9.png" alt="lamp"></div>
                                          <div> 
                                            <h6 class="f-14 mb-0"><a href="order-history.html">Lamp</a></h6><span class="f-light f-12">Id : #CFDE-2163</span>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="f-w-500">X1</td>
                                      <td class="f-w-500">$20.00</td>
                                      <td class="f-w-500">
                                        <div class="recent-status font-success"> 
                                          <svg class="me-1">
                                            <use href="../assets/svg/icon-sprite.svg#24-hour"> </use>
                                          </svg>Verified
                                        </div>
                                      </td>
                                      <td class="f-w-500">$25.00</td>
                                    </tr>
                                    <tr> 
                                      <td>
                                        <div class="product-content">
                                          <div class="order-image"><img src="../assets/images/dashboard-2/order/sub-product/10.png" alt="lamp"></div>
                                          <div> 
                                            <h6 class="f-14 mb-0"><a href="order-history.html">Bedside lamp</a></h6><span class="f-light f-12">Id : #CFDE-2780</span>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="f-w-500">X2</td>
                                      <td class="f-w-500">$70.00</td>
                                      <td class="f-w-500">
                                        <div class="recent-status font-danger">
                                          <svg class="me-1">
                                            <use href="../assets/svg/icon-sprite.svg#24-hour"> </use>
                                          </svg>Rejected
                                        </div>
                                      </td>
                                      <td class="f-w-500">$88.00</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
              <div class="col-xxl-2 col-xl-3 col-md-4 grid-ed-none box-col-4e d-xxl-block d-none">
                <div class="card">
                  <div class="card-header card-no-border"> 
                    <h5>Kategoriler</h5>
                  </div>
                  <div class="card-body pt-0"> 
                    <ul class="categories-list">
                      <?php foreach($category as $get ):?>
                      <li class="d-flex"> 
                        <div class="bg-light"> <img src="images/kategori.png" alt="vector burger"></div>
                        <div> 
                          <h6 class="mb-0"><a href="#"><?= $get["ad"] ?></a></h6><span class="f-light f-12 f-w-500">(0)</span>
                        </div>
                      </li>
                      <?php endforeach?>
                     
                    </ul>
                    <!-- <div class="recent-activity notification">
                      <h5>Recent Activity</h5>
                      <ul> 
                        <li class="d-flex">
                          <div class="activity-dot-primary"></div>
                          <div class="w-100 ms-3">
                            <p class="d-flex justify-content-between mb-2"><span class="date-content light-background">8th March, 2022 </span></p>
                            <h6>Added Bew Items<span class="dot-notification"></span></h6><span class="f-light">Quisque a consequat ante sit amet magna...</span>
                            <div class="recent-images"> 
                              <ul> 
                                <li> 
                                  <div class="recent-img-wrap"><img src="../assets/images/dashboard-2/product/1.png" alt="chair"></div>
                                </li>
                                <li> 
                                  <div class="recent-img-wrap"><img src="../assets/images/dashboard-2/product/2.png" alt="chair"></div>
                                </li>
                                <li> 
                                  <div class="recent-img-wrap"><img src="../assets/images/dashboard-2/product/3.png" alt="men t-shirt"></div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="activity-dot-warning"></div>
                          <div class="w-100 ms-3">
                            <p class="d-flex justify-content-between mb-2"><span class="date-content light-background">2nd Sep, Today</span></p>
                            <h6>Anamika Comments this Poducts<span class="dot-notification"></span></h6><span>Quisque a consequat ante sit amet magna...</span>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="activity-dot-secondary"></div>
                          <div class="w-100 ms-3">
                            <p class="d-flex justify-content-between mb-2"><span class="date-content light-background">3nd Sep, 2022</span></p>
                            <h6>Jacksion Purchase <span class="dot-notification"></span></h6><span>Quisque a consequat ante sit amet magna...</span>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="activity-dot-success"></div>
                          <div class="w-100 ms-3">
                            <p class="d-flex justify-content-between mb-2"><span class="date-content light-background">2nd Sep, Today</span></p>
                            <h6>Anamika Comments this Poducts<span class="dot-notification"></span></h6><span>Quisque a consequat ante sit amet magna...</span>
                          </div>
                        </li>
                      </ul>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <?= view("globalcomponents/footer/footer") ?>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/sidebar-pin.js"></script>
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/header-slick.js"></script>
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="../assets/js/counter/jquery.counterup.min.js"></script>
    <script src="../assets/js/counter/counter-custom.js"></script>
    <script src="../assets/js/dashboard/dashboard_2.js"></script>
    <script src="../assets/js/animation/wow/wow.min.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <script>new WOW().init();</script>
  </body>
</html>