<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
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
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/js-datatables/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/owlcarousel.css">
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
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h4>
                     Product list</h4>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       
                        <svg class="stroke-icon">
                          <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">ECommerce</li>
                    <li class="breadcrumb-item active">Product list</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Container-fluid starts-->
          <div class="container-fluid">
          <?php if(session()->get('success')): ?>
                  <div id="onay" class="alert alert-success">
                      <?= session()->get('success') ?>
                  </div>
                <?php endif; ?>

                <?php  if(session()->get('error')): ?>
                    <div id="hata" class="alert alert-danger">
                        <?= session()->get('error') ?>
                    </div>
                <?php endif; ?>
            <div class="row"> 
              <div class="col-sm-12"> 
                <div class="row text-end">
                  <div class="col-md-12 mb-3">
                  <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">Kategori Ekle</button>

                  </div>

                </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <form>
                        <div class="modal-content">
                          <div class="modal-body">
                            <div class="modal-toggle-wrapper"> 
                              <div class="modal-img"> <img src="../assets/images/gif/online-shopping.gif" alt="online-shopping"></div>
                                <h3 class="mb-3">Kategori Ekle</h3>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Kategori Adı</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                  <div id="emailHelp" class="form-text">Lütfen İlgili Kategori Adını Giriniz</div>
                                </div>
           
                                
                            

                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">İptal Et</button>
                                <button class="btn btn-primary" type="button">Kategori Ekle</button>
                            </div>
                          </div>
                        </div>
                        </form>
                      </div>
                    </div>
      
                <div class="card"> 
                  <div class="card-body">

                    <div class="list-product">
                      <table class="table" id="project-status">
                        <thead> 
                          <tr> 
                            <th>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </th>
                            <th> <span class="f-light f-w-600">Product Name</span></th>
                            <th> <span class="f-light f-w-600">SKU</span></th>
                            <th> <span class="f-light f-w-600">Category</span></th>
                            <th> <span class="f-light f-w-600">Price</span></th>
                            <th> <span class="f-light f-w-600">Qty</span></th>
                            <th> <span class="f-light f-w-600">Status</span></th>
                            <th> <span class="f-light f-w-600">Rating</span></th>
                            <th> <span class="f-light f-w-600">Action</span></th>
                          </tr>
                        </thead>
                        <tbody> 
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/laptop.png" alt="laptop"></div>
                                <p>Apple Desktop 2023</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">02145YK796</p>
                            </td>
                            <td> 
                              <p class="f-light">Laptops</p>
                            </td>
                            <td> 
                              <p class="f-light">56000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">13</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star f-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          
                          </tr>
                        </tbody>
                      </table>
                    </div>
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
    <script src="../assets/js/js-datatables/simple-datatables@latest.js"></script>
    <script src="../assets/js/custom-list-product.js"></script>
    <script src="../assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="../assets/js/ecommerce.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <script src="../assets/js/modalpage/validation-modal.js"></script>

    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <script>
            setTimeout(() => {

              document.getElementById("onay").style.display = "none";
              document.getElementById("hata").style.display = "none";
              
            }, 3000);
          </script>
  </body>
</html>