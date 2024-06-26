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
                     Ürün Listesi</h4>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       
                        <svg class="stroke-icon">
                          <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">E Ticaret Modül (Test Case Project)</li>
                    <li class="breadcrumb-item active">Ürün Listesi</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row"> 
              <div class="col-sm-12"> 
                <div class="card"> 
                  <div class="card-body">
                    <div class="list-product-header">
                      <div> 
                        <div class="light-box"><a data-bs-toggle="collapse" href="#collapseProduct" role="button" aria-expanded="false" aria-controls="collapseProduct"><i class="filter-icon show" data-feather="filter"></i><i class="icon-close filter-close hide"></i></a></div><a class="btn btn-primary" href="/product"><i class="fa fa-plus"></i>Ürün Ekle</a>
                      </div>
                      <div class="collapse" id="collapseProduct">
                        <div class="card card-body list-product-body">
                          <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 g-3"> 
                            <div class="col"> 
                              <select class="form-select" aria-label="Default select example">
                                <option selected="">Choose Product</option>
                                <option value="1">Apple iphone 13 Pro</option>
                                <option value="2">Wood Chair</option>
                                <option value="3">M185 Compact Wireless Mouse</option>
                              </select>
                            </div>
                            <div class="col"> 
                              <select class="form-select" aria-label="Default select example">
                                <option selected="">Choose Category</option>
                                <option value="1">Furniture</option>
                                <option value="2">Smart Gadgets</option>
                                <option value="3">Electrics</option>
                              </select>
                            </div>
                            <div class="col"> 
                              <select class="form-select" aria-label="Default select example">
                                <option selected="">Choose Sub Category</option>
                                <option value="1">Smart Phones</option>
                                <option value="2">Smart Watches</option>
                                <option value="3">Wireless headphone</option>
                              </select>
                            </div>
                            <div class="col"> 
                              <select class="form-select" aria-label="Default select example">
                                <option selected="">Status</option>
                                <option value="1">Sold Out </option>
                                <option value="2">In Stock</option>
                                <option value="3">Pre Order</option>
                                <option value="4">Limited Stock </option>
                              </select>
                            </div>
                            <div class="col"> 
                              <select class="form-select" aria-label="Default select example">
                                <option selected="">Price</option>
                                <option value="1">56000.00</option>
                                <option value="2">19000.00</option>
                                <option value="3">10000.00</option>
                                <option value="3">15000.00</option>
                                <option value="3">99000.00</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="list-product">
                      <table class="table" id="project-status">
                        <thead> 
                          <tr> 
                            <th>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </th>
                            <th> <span class="f-light f-w-600">Ürün Adı</span></th>
                            <th> <span class="f-light f-w-600">SKU</span></th>
                            <th> <span class="f-light f-w-600">Kategori</span></th>
                            <th> <span class="f-light f-w-600">Fiyat</span></th>
                            <th> <span class="f-light f-w-600">Stok Sayısı</span></th>
                            <th> <span class="f-light f-w-600">Stok Durum</span></th>
                            <th> <span class="f-light f-w-600">Ürün Durumu</span></th>
          
                            <th> <span class="f-light f-w-600">Aksiyon</span></th>
                          </tr>
                        </thead>
                        <tbody> 
                          <?php foreach($products as $product): ?>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <?php if($product['image'] == "Resim Yok" ):?>
                                <div class="light-product-box"><img class="img-fluid" src="images/logo.png" alt="laptop"></div>
                                <?php elseif($product['image']): ?>
                                  <div class="light-product-box"><img class="img-fluid" src="uploads/<?= htmlspecialchars($product['image']) ?>" alt="laptop"></div>
                                <?php endif?>  
                                <p><?= $product["name"] ?></p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light"><?= $product["stock_code"] == null ? "Stok Kodu Yok" : $product["stock_code"]   ?></p>
                            </td>
                            <td> 
                              <p class="f-light"><?= $product["category"] ?></p>
                            </td>
                            <td> 
                              <p class="f-light"><?= number_format($product["price"]) ?></p>
                            </td>
                            <td> 
                              <p class="f-light"><?= number_format($product["qty"]) ?></p>
                            </td>
                            <?php if ($product["qty"] == null): ?>
                              <td> <span class="btn btn-outline-danger">Stok Bitmiş</span></td>
                            <?php elseif($product["qty"] < 10):?>
                              <td> <span class="btn btn-outline-info">Tükenmek Üzere</span></td>
                            <?php elseif($product["qty"] > 10):?>
                              <td> <span class="btn btn-outline-success">Stokta</span></td>
                            <?php endif?>

                            <?php if ($product["durum"] == 1): ?>
                              <td> <span class="btn btn-outline-success">Aktif</span></td>
                            <?php elseif($product["durum"] == 0):?>
                              <td> <span class="btn btn-outline-danger">Tatil Modunda</span></td>
     
                            <?php endif?>
                            

                            <!-- <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star f-light"></i></div>
                            </td> -->
                            <td> 
                              <div class="product-action"><a href="admin-productedit-<?= $product["id"] ?>"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <?php endforeach?>
                         
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
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
  </body>
</html>