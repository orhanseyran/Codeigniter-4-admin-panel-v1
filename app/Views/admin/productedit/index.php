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
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/dropzone.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
</head>
<style>
  .dropzone {
    border: 2px dashed #007BFF;
    border-radius: 5px;
    padding: 20px;
    text-align: center;
    color: #007BFF;
    font-family: Arial, sans-serif;
    transition: background-color 0.3s;
    margin-bottom: 10px;
  }

  .dropzone:hover {
    background-color: #f1f1f1;
  }

  .preview img {
    width: 150px;
    height: 100px;
    margin: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
  }


  input[type="file"] {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
  }
</style>

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
  <div class="page-wrapper default-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?= view("globalcomponents/header/header") ?>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper default-menu default-menu">
      <!-- Page Sidebar Start-->
      <?= view("globalcomponents/sidebar/sidebar") ?>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-6">
                <h3>
                  Üren Düzenle</h3>
              </div>
              <div class="col-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                      </svg></a></li>
                  <li class="breadcrumb-item">E-Ticaret Modülü (Test Case)</li>
                  <li class="breadcrumb-item active">Ürün Ekle </li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <form action="/product-edit-<?= $product["id"]?>" method="post" enctype="multipart/form-data">
         

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
                <div class="card">
                  <div class="card-body">
                    <div class="form theme-form">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label for="name">Ürün Başlığı</label>
                            <input class="form-control" name="name" id="name" type="text" value="<?=$product["name"]?>" placeholder="Ürün adı *" require>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label>Ürün Fiyatı</label>
                            <input class="form-control" name="price" type="number" value="<?=$product["price"]?>" placeholder="Ürün fiyatını girin" require> 
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="mb-3">
                            <label>Stok Miktarı</label>
                            <input class="form-control" name="qty" type="number" value="<?=$product["qty"]?>" placeholder="Stok Miktarı" require> 
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="mb-3">
                            <label>Kategori</label>
                            <select name="category" class="form-select" require>
                              <?php foreach($category as $get):?>
                                <option selected value="<?=$product["category"]?>"><?=$product["category"]?></option>
                                <option value="<?= $get["ad"] ?>"><?= $get["ad"] ?></option>
                              <?php endforeach?>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="mb-3">
                            <label>Gönderilecek Kargo </label>
                            <select name="cargo" class="form-select" require>
                            <?php foreach($cargo as $get):?>
                              <option selected value="<?=$product["cargo"]?>"><?=$product["cargo"]?></option>
                                <option value="<?= $get["ad"] ?>"><?= $get["ad"] ?></option>
                              <?php endforeach?>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="mb-3">
                            <label>Marka</label>
                            <select name="brand" class="form-select" require>
                            <?php foreach($brand as $get):?>
                              <option selected value="<?=$product["brand"]?>"><?=$product["brand"]?></option>
                                <option value="<?= $get["ad"] ?>"><?= $get["ad"] ?></option>
                              <?php endforeach?>
                            </select>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label>Detayları Girin</label>
                          <textarea class="form-control" id="exampleFormControlTextarea4" name="description" rows="6"><?=$product["description"]?></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label>Ürün Resminizi Yükleyin</label>
                          <div class="dropzone" id="dropzone1">
                            <p>Sürükleyip bırakarak dosya yükleyin veya tıklayın.</p>
                            <input type="file" name="image" id="fileInput1" hidden>
                          </div>
                          

                          <div id="preview1" class="preview">
                            <?php if ($product["image"] == null):?>
                            
                            <?php else:?>
                              <img src="<?= base_url()?>/uploads/<?= $product["image"]?>" alt="">
                              <?php endif?>
                          </div>

                        <input type="file">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label>Ürün Galeri Resimlerinizi Yükleyin</label>
                          <div class="dropzone" id="dropzone2">
                            <p>Sürükleyip bırakarak dosya yükleyin veya tıklayın.</p>
                            <input type="file" name="images[]" id="fileInput2" multiple hidden>
                          </div>
                          <div id="preview2" class="preview">
                          <?php foreach ($images as $key => $get):?>
                          <?php if ($get == null):?>
                          <?php else:?>  
                          <img src="<?= base_url()?>/uploads/<?= $get?>" alt="">
                          <?php endif?>
                          <?php endforeach?>
                          </div>
                          <input type="file">
   
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="text-end">
                          <button type="submit" class="btn btn-success me-3">Düzenle</button>
                          <!-- <a class="btn btn-danger" onclick=" confirm('İşlemi Onaylıyor musunuz?');" href="/product">İptal</a> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      </form>

      <!-- Container-fluid starts-->


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
  <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
  <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
  <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
  <script src="../assets/js/typeahead/handlebars.js"></script>
  <script src="../assets/js/typeahead/typeahead.bundle.js"></script>
  <script src="../assets/js/typeahead/typeahead.custom.js"></script>
  <script src="../assets/js/typeahead-search/handlebars.js"></script>
  <script src="../assets/js/typeahead-search/typeahead-custom.js"></script>
  <script>
    function setupDropzone(dropzoneId, fileInputId, previewId) {
      const dropzone = document.getElementById(dropzoneId);
      const fileInput = document.getElementById(fileInputId);
      const preview = document.getElementById(previewId);

      function updatePreview(files) {
        preview.innerHTML = ''; // Önceki önizlemeleri temizle
        Array.from(files).forEach(file => {
          const reader = new FileReader();
          reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            preview.appendChild(img);
          };
          reader.readAsDataURL(file);
        });
      }

      dropzone.addEventListener('click', function() {
        fileInput.click();
      });

      dropzone.addEventListener('dragover', function(e) {
        e.preventDefault();
        dropzone.style.backgroundColor = '#f1f1f1';
      });

      dropzone.addEventListener('dragleave', function() {
        dropzone.style.backgroundColor = 'transparent';
      });

      dropzone.addEventListener('drop', function(e) {
        e.preventDefault();
        dropzone.style.backgroundColor = 'transparent';
        if (e.dataTransfer.files.length) {
          fileInput.files = e.dataTransfer.files;
          updatePreview(e.dataTransfer.files);
        }
      });

      fileInput.addEventListener('change', function() {
        updatePreview(fileInput.files);
      });
    }

    // Dropzoneları kur
    setupDropzone("dropzone1", "fileInput1", "preview1");
    setupDropzone("dropzone2", "fileInput2", "preview2");
  </script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="../assets/js/script.js"></script>
  <script>
            setTimeout(() => {

              document.getElementById("onay").style.display = "none";
              document.getElementById("hata").style.display = "none";
              
            }, 3000);
          </script>
  <script src="../assets/js/theme-customizer/customizer.js"></script>
</body>

</html>