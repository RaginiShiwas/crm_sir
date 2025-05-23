<footer class="footer position-absolute" style="height:30px;background-color: black; color: white;">
        <div class="row g-0 justify-content-between align-items-center h-100">
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 mt-2 mt-sm-0 text-900" style="color:white!important;">Copyright &copy; 2020-<?php echo $year = date("Y"); ?><span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" /><a class="mx-1" href="https://themewagon.com"><a href="https://panchisoft.com/" target="_blank">panchisoft </a></a></p>
          </div>
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-600"  style="color:white!important;">Version 2.06</p>
          </div>
        </div>
      </footer>
    </div>
    <script>
      var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
      var navbarTop = document.querySelector('.navbar-top');
      if (navbarTopStyle === 'darker') {
        navbarTop.classList.add('navbar-darker');
      }

      var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
      var navbarVertical = document.querySelector('.navbar-vertical');
      if (navbarVertical && navbarVerticalStyle === 'darker') {
        navbarVertical.classList.add('navbar-darker');
      }
    </script>
    <div class="support-chat-container">
      <div class="container-fluid support-chat">
        <div class="card bg-white">
          <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom">
            <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span class="fa-solid fa-circle text-success fs--3"></span></h5>
            <div class="btn-reveal-trigger">
              <button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-900"></span></button>
              <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item" href="#!">Search in chat</a><a class="dropdown-item" href="#!">Show history</a><a class="dropdown-item" href="#!">Report to Admin</a><a class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
            </div>
          </div>
          <div class="card-body chat p-0">
            <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
              <div class="text-end mt-6"><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                  <p class="mb-0 fw-semi-bold fs--1">I need help with something</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                  <p class="mb-0 fw-semi-bold fs--1">I can’t reorder a product I previously ordered</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                  <p class="mb-0 fw-semi-bold fs--1">How do I place an order?</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                </a><a class="false d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                  <p class="mb-0 fw-semi-bold fs--1">My payment method not working</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                </a>
              </div>
              <div class="text-center mt-auto">
                <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-white" src="../assets/img/team/30.webp" alt="" /></div>
                <h5 class="mt-2 mb-3">Eric</h5>
                <p class="text-center text-black mb-0">Ask us anything – we’ll get back to you here or by email within 24 hours.</p>
              </div>
            </div>
          </div>
          <div class="card-footer d-flex align-items-center gap-2 border-top ps-3 pe-4 py-3">
            <div class="d-flex align-items-center flex-1 gap-3 border rounded-pill px-4">
              <input class="form-control outline-none border-0 flex-1 fs--1 px-0" type="text" placeholder="Write message" />
              <label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatPhotos"><span class="fa-solid fa-image"></span></label>
              <input class="d-none" type="file" accept="image/*" id="supportChatPhotos" />
              <label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label>
              <input class="d-none" type="file" id="supportChatAttachment" />
            </div>
            <button class="btn p-0 border-0 send-btn"><span class="fa-solid fa-paper-plane fs--1"></span></button>
          </div>
        </div>
      </div>
      <button class="btn p-0 border border-200 btn-support-chat"><span class="fs-0 btn-text text-primary text-nowrap">Chat demo</span><span class="fa-solid fa-circle text-success fs--1 ms-2"></span><span class="fa-solid fa-chevron-down text-primary fs-1"></span></button>
    </div>
  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->


  <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
    <div class="offcanvas-header align-items-start border-bottom flex-column">
      <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
        <div>
          <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-0"></span>Theme Customizer</h5>
          <p class="mb-0 fs--1">Explore different styles according to your preferences</p>
        </div>
        <button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fas fa-times fs-0"> </span></button>
      </div>
      <button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span class="fas fa-arrows-rotate me-2 fs--2"></span>Reset to default</button>
    </div>
    <div class="offcanvas-body scrollbar px-card" id="themeController">
      <div class="setting-panel-item mt-0">
        <h5 class="setting-panel-item-title">Color Scheme</h5>
        <div class="row gx-2">
          <div class="col-6">
            <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="phoenixTheme" />
            <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../assets/img/generic/default-light.png" alt=""/></span><span class="label-text">Light</span></label>
          </div>
          <div class="col-6">
            <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="phoenixTheme" />
            <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../assets/img/generic/default-dark.png" alt=""/></span><span class="label-text"> Dark</span></label>
          </div>
        </div>
      </div>
      <div class="border rounded-3 p-4 setting-panel-item bg-white">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="setting-panel-item-title mb-1">RTL </h5>
          <div class="form-check form-switch mb-0">
            <input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixIsRTL" />
          </div>
        </div>
        <p class="mb-0 text-700">Change text direction</p>
      </div>
      <div class="border rounded-3 p-4 setting-panel-item bg-white">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
          <div class="form-check form-switch mb-0">
            <input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixSupportChat" />
          </div>
        </div>
        <p class="mb-0 text-700">Toggle support chat</p>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Navigation Type</h5>
        <div class="row gx-2">
          <div class="col-6">
            <input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio" value="vertical" data-theme-control="phoenixNavbarPosition" data-page-url="../documentation/layouts/vertical-navbar.html" disabled="disabled" />
            <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionVertical"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/default-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/default-dark.png" alt=""/></span><span class="label-text">Vertical</span></label>
          </div>
          <div class="col-6">
            <input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition" data-page-url="../documentation/layouts/horizontal-navbar.html" disabled="disabled" />
            <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionHorizontal"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/top-default-dark.png" alt=""/></span><span class="label-text"> Horizontal</span></label>
          </div>
          <div class="col-6">
            <input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio" value="combo" data-theme-control="phoenixNavbarPosition" disabled="disabled" data-page-url="../documentation/layouts/combo-navbar.html" />
            <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionCombo"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/nav-combo-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/nav-combo-dark.png" alt=""/></span><span class="label-text"> Combo</span></label>
          </div>
          <div class="col-6">
            <input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio" value="dual-nav" data-theme-control="phoenixNavbarPosition" disabled="disabled" data-page-url="../documentation/layouts/dual-nav.html" />
            <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionTopDouble"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/dual-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/dual-dark.png" alt=""/></span><span class="label-text"> Dual nav</span></label>
          </div>
        </div>
        <p class="text-warning-500 font-medium"> <span class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update navigation type in this page</p>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
        <div class="row gx-2">
          <div class="col-6">
            <input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle" disabled="disabled" />
            <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-default"> <img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none"> Default</span><span class="label-text d-light-none">Default</span></label>
          </div>
          <div class="col-6">
            <input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker" data-theme-control="phoenixNavbarVerticalStyle" disabled="disabled" />
            <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-dark"> <img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/vertical-darker.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none"> Darker</span><span class="label-text d-light-none">Lighter</span></label>
          </div>
        </div>
        <p class="text-warning-500 font-medium"> <span class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update vertical navbar appearance type in this page</p>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
        <div class="row gx-2">
          <div class="col-6">
            <input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio" value="default" data-theme-control="phoenixNavbarTopShape" data-page-url="../documentation/layouts/horizontal-navbar.html" disabled="disabled" />
            <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-default-dark.png" alt=""/></span><span class="label-text">Default</span></label>
          </div>
          <div class="col-6">
            <input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim" data-theme-control="phoenixNavbarTopShape" data-page-url="../documentation/layouts/horizontal-navbar.html#horizontal-navbar-slim" disabled="disabled" />
            <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../assets/img/generic/top-slim.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-slim-dark.png" alt=""/></span><span class="label-text"> Slim</span></label>
          </div>
        </div>
        <p class="text-warning-500 font-medium"> <span class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update vertical navbar appearance type in this page</p>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
        <div class="row gx-2">
          <div class="col-6">
            <input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio" value="default" data-theme-control="phoenixNavbarTopStyle" />
            <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-style-darker.png" alt=""/></span><span class="label-text">Default</span></label>
          </div>
          <div class="col-6">
            <input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle" />
            <label class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDarker"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../assets/img/generic/navbar-top-style-light.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-style-lighter.png" alt=""/></span><span class="label-text d-dark-none">Darker</span><span class="label-text d-light-none">Lighter</span></label>
          </div>
        </div>
      </div><a class="bun btn-primary d-grid mb-3 text-white dark__text-100 mt-5 btn btn-primary" href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase template</a>
    </div>
  </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">

  </a>
 

  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="<?php echo e(asset('vendors/select2/select2.full.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/popper/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/bootstrap/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/anchorjs/anchor.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/is/is.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/fontawesome/all.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/lodash/lodash.min.js')); ?>"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="<?php echo e(asset('vendors/list.js/list.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/feather-icons/feather.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/dayjs/dayjs.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/choices/choices.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/echarts/echarts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/dhtmlx-gantt/dhtmlxgantt.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/phoenix.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/crm-analytics.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/projectmanagement-dashboard.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/crm-dashboard.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/crm-analytics.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/dropzone/dropzone.min.js')); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" integrity="sha256-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX" crossorigin="anonymous"></script>
  <script src="<?php echo e(asset('vendors/tinymce/tinymce.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendors/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/isotope-packery/packery-mode.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/bigpicture/BigPicture.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/countup/countUp.umd.js')); ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbaQGvhe7Af-uOMJz68NWHnO34UjjE7Lo&callback=initMap" async></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>

</body>

</html>

    <?php /**PATH E:\xampp\htdocs\CRM_1\resources\views\layouts\footer.blade.php ENDPATH**/ ?>