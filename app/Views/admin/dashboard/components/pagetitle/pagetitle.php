<div class="container-fluid mt-3">
          <div class="page-title">
                  <div class="row">
                      <div class="col-6">
                          <h4>E-Ticaret</h4>
                      </div>
                      <div class="col-6">
                          <ol class="breadcrumb">
                              <div class="form-check form-switch">
                                  <?php if ($auth["tatil_modu"] == 0): ?>
                                  <input class="form-check-input" onclick="toggleTatilMode()" type="checkbox" role="switch"
                                      id="flexSwitchCheckChecked">
                                  <label class="form-check-label" id="tatilModLabel" for="flexSwitchCheckChecked">Tatil Mod</label>
                                  <?php else: ?>
                                  <input class="form-check-input" onclick="toggleTatilMode()" type="checkbox" role="switch"
                                      id="flexSwitchCheckChecked" checked>
                                  <label class="form-check-label" id="tatilModLabel" for="flexSwitchCheckChecked">Tatil Modundan
                                      Çık</label>
                                  <?php endif; ?>
                              </div>
                          </ol>
                      </div>
                  </div>
              </div>



              <script>
              const toggleTatilMode = () => {
                  let message = document.getElementById("flexSwitchCheckChecked").checked
                      ? 'Tatil Moduna Alırsanız Tüm Ürünleriniz Aktif Modu Deactive Olacak Kabul Ediyormusunuz'
                      : 'Tekrardan Hoşgeldiniz Satışa Kaldığınız Yerden Devam Edebilirsiniz';

                  if (confirm(message)) {
                      $.ajax({
                          type: "get",
                          url: "/tatilmodeapi",
                          success: function (response) {
                              if (response.tatil_modu == 1) {
                                  document.getElementById("tatilModLabel").innerText = "Tatil Modundan Çık";
                              } else {
                                  document.getElementById("tatilModLabel").innerText = "Tatil Modu";
                              }
                          }
                      });
                  } else {
                      // Eğer kullanıcı iptal ederse checkbox'ın durumunu eski haline getir
                      document.getElementById("flexSwitchCheckChecked").checked = !document.getElementById("flexSwitchCheckChecked").checked;
                  }
              }
          </script>
 </div>