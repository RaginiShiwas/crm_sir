
<?php $__env->startSection('contant'); ?>

      <div class="content">
       
        <div class="mb-9">
          <div class="row g-3 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Customer Contact List</h2>
            </div>
          </div>
         
          <div id="orderTable" data-list='{"valueNames":["party_name","print_name","party_code","under_group","address1","address2","city","pincode","state","country","pan_number","cell_number","email","edit"],"page":10,"pagination":true}'>
      <div class="mb-4">
        <div class="row g-3">
          <div class="col-auto">
            <div class="search-box">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                <input class="form-control search-input search" type="search" placeholder="Search contacts" aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
              </form>
            </div>
          </div>
          <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
            <div class="btn-group position-static" role="group">
            </div>
          </div>
          <div class="col-auto">
            <button class="btn btn-link text-900 me-4 px-0"><span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button>
            <a href="<?php echo e(url('/customer_cont')); ?>" class="btn btn-primary">Add Customer Contact</a>
          </div>
        </div>
      </div>

            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
        <div class="table-responsive scrollbar mx-n1 px-1">
          <table class="table table-sm fs--1 mb-0">
            <thead>
              <tr>
                <th class="white-space-nowrap fs--1 align-middle ps-0" style="width:26px;">
                  <div class="form-check mb-0 fs-0">
                    <input class="form-check-input" id="checkbox-bulk-order-select" type="checkbox" data-bulk-select='{"body":"order-table-body"}' />
                  </div>
                </th>
                <th class="sort white-space-nowrap align-middle pe-3" scope="col" data-sort="party_name">Party Name</th>
                <th class="sort align-middle text-end" scope="col" data-sort="print_name">Print Name</th>
                <th class="sort align-middle ps-8" scope="col" data-sort="party_code">Party Code</th>
                <th class="sort align-middle pe-3" scope="col" data-sort="under_group">Under Group</th>
                <th class="sort align-middle text-start pe-3" scope="col" data-sort="address1">Address</th>
                <th class="sort align-middle text-start" scope="col" data-sort="address2">Address1</th>
                <th class="sort align-middle text-end pe-0" scope="col" data-sort="city">City</th>
                <th class="sort align-middle text-end pe-0" scope="col" data-sort="pincode">Enter Pin</th>
                <th class="sort align-middle text-end pe-0" scope="col" data-sort="state">State</th>
                <th class="sort align-middle text-end pe-0" scope="col" data-sort="country">Country</th>
                <th class="sort align-middle text-end pe-0" scope="col" data-sort="pan_number">PAN No.</th>
                <th class="sort align-middle text-end pe-0" scope="col" data-sort="cell_number">Cell Number</th>
                <th class="sort align-middle text-end pe-0" scope="col" data-sort="email">E-mail</th>
                <th class="sort align-middle text-end pe-0" scope="col" data-sort="edit">Edit</th>
              </tr>
            </thead>

            <tbody class="list" id="order-table-body">
              <?php $__currentLoopData = $parties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $party): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                <td class="fs--1 align-middle px-0 py-3"></td>
                <td class="party_name align-middle"><?php echo e($party->vendorname); ?></td>
                <td class="print_name align-middle text-end"><?php echo e($party->printname); ?></td>
                <td class="party_code align-middle text-end"><?php echo e($party->vendorcode); ?></td>
                <td class="under_group align-middle text-end"><?php echo e($party->groupid); ?></td>
                <td class="address1 align-middle text-end"><?php echo e($party->address1); ?></td>
                <td class="address2 align-middle text-end"><?php echo e($party->address2); ?></td>
                <td class="city align-middle text-end"><?php echo e($party->city); ?></td>
                <td class="pincode align-middle text-end"><?php echo e($party->pincode); ?></td>
                <td class="state align-middle text-end"><?php echo e($party->state); ?></td>
                <td class="country align-middle text-end"><?php echo e($party->countryid); ?></td>
                <td class="pan_number align-middle text-end"><?php echo e($party->pan_number); ?></td>
                <td class="cell_number align-middle text-end"><?php echo e($party->cellnumber); ?></td>
                <td class="email align-middle text-end"><?php echo e($party->email); ?></td>
                <td class="credit_days align-middle text-end"><?php echo e($party->creditdays); ?></td>
                <td class="align-middle text-end">
                  <a href="<?php echo e(url('/edit_customer_cont', $party->id)); ?>" class="text-900 me-4"><span class="fa-solid fa-pen-to-square"></span></a>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
          <div class="col-auto d-flex">
            <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
          </div>
          <div class="col-auto d-flex">
            <button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
            <ul class="mb-0 pagination"></ul>
            <button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
          </div>
        </div>
      </div>
          </div>
        </div>

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


   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\gipl\crm\resources\views/customer_cont_list.blade.php ENDPATH**/ ?>