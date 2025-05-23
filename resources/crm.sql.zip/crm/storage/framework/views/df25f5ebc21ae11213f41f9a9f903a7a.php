
<?php $__env->startSection('contant'); ?>

<div class="content" >
<div class="row gy-3 mb-6 justify-content-between">
  <div class="col-md-9 col-auto">
    <h2 class="mb-2 text-1100">Projects Dashboard</h2>
    <h5 class="text-700 fw-semi-bold">Here’s what’s going on at your business right now</h5>
  </div>
  <div class="col-md-3 col-auto">
    <div class="flatpickr-input-container">
      <input class="form-control ps-6 datetimepicker" data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' id="datepicker1" type="text" /><span class="uil uil-calendar-alt flatpickr-icon text-700"></span>
    </div>
  </div>
</div>

<div class="row mb-3 gy-6">
  <div class="col-12 col-xxl-2">
    <div class="row align-items-center g-3 g-xxl-0 h-100 align-content-between">
      <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
        <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-books text-primary-500"></span>
          <div class="ms-2">
            <div class="d-flex align-items-end">
              <h2 class="mb-0 me-2">5</h2><span class="fs-1 fw-semi-bold text-900">Projects</span>
            </div>
            <p class="text-800 fs--1 mb-0">Awating processing</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
        <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-users-alt text-success-500"></span>
          <div class="ms-2">
            <div class="d-flex align-items-end">
              <h2 class="mb-0 me-2">94</h2><span class="fs-1 fw-semi-bold text-900">Members</span>
            </div>
            <p class="text-800 fs--1 mb-0">Working hard</p>
          </div>
        </div>
      </div>
               
      <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
        <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-invoice text-warning-500"></span>
          <div class="ms-2">
            <div class="d-flex align-items-end">
              <h2 class="mb-0 me-2"><a href="view_to_day.php?date"></a>0</h2><span class="fs-1 fw-semi-bold text-900">Invoices</span>
            </div>
            <p class="text-800 fs--1 mb-0">Soon to be cleared</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
        <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-refresh text-danger-500"></span>
          <div class="ms-2">
            <div class="d-flex align-items-end">
              <h2 class="mb-0 me-2"><a href="../apps/e-commerce/admin/view_orders.php?date"></a>0</h2><span class="fs-1 fw-semi-bold text-900">Gate Entry</span>
            </div>
            <p class="text-800 fs--1 mb-0">Fresh start</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-xl-6 col-xxl-5">
    <div class="mx-xxl-0">
      <h3>Project: zero Roadmap</h3>
      <p class="text-700">Phase 2 is now ongoing</p>
      <div class="gantt-zero-roadmap">
        <div class="row g-2 flex-between-center mb-3">
          <div class="col-12 col-sm-auto">
            <div class="d-flex">
              <div class="d-flex align-items-end me-3">
                <label class="form-check-label mb-0 me-2 lh-1 text-900" for="progress">Progress</label>
                <div class="form-check form-switch min-h-auto mb-0">
                  <input class="form-check-input" id="progress" type="checkbox" checked="" data-gantt-progress="data-gantt-progress" />
                </div>
              </div>
              <div class="d-flex align-items-end flex-1">
                <label class="form-check-label mb-0 me-2 lh-1 text-900" for="links">Links</label>
                <div class="form-check form-switch min-h-auto flex-1 mb-0">
                  <input class="form-check-input" id="links" type="checkbox" checked="" data-gantt-links="data-gantt-links" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-auto">
            <div class="btn-group" role="group" data-gantt-scale="data-gantt-scale">
              <input class="btn-check" id="weekView" type="radio" name="scaleView" value="week" checked="" />
              <label class="btn btn-phoenix-secondary hover-bg-100 fs--2 py-1 mb-0" for="weekView">Week</label>
              <input class="btn-check" id="monthView" type="radio" name="scaleView" value="month" />
              <label class="btn btn-phoenix-secondary hover-bg-100 fs--2 py-1 mb-0" for="monthView">Month</label>
              <input class="btn-check" id="yearView" type="radio" name="scaleView" value="year" />
              <label class="btn btn-phoenix-secondary hover-bg-100 fs--2 py-1 mb-0" for="yearView">Year</label>
            </div>
          </div>
        </div>
        <div class="gantt-zero-roadmap-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-12 col-xl-6 col-xxl-5">
    <div class="card border border-300 h-100 w-100 overflow-hidden">
      <div class="bg-holder d-block bg-card" style="background-image:url(../assets/img/spot-illustrations/32.png);background-position: top right;">
      </div>
      <!--/.bg-holder-->

      <div class="d-dark-none">
        <div class="bg-holder d-none d-sm-block d-xl-none d-xxl-block bg-card" style="background-image:url(../assets/img/spot-illustrations/21.png);background-position: bottom right; background-size: auto;">
        </div>
        <!--/.bg-holder-->

      </div>
      <div class="d-light-none">
        <div class="bg-holder d-none d-sm-block d-xl-none d-xxl-block bg-card" style="background-image:url(../assets/img/spot-illustrations/dark_21.png);background-position: bottom right; background-size: auto;">
        </div>
        <!--/.bg-holder-->

      </div>
      <div class="card-body px-5 position-relative">
        <div class="badge badge-phoenix fs--2 badge-phoenix-warning mb-4"><span class="fw-bold">Coming soon</span><span class="fa-solid fa-award ms-1"></span></div>
        <h3 class="mb-5">Early bird gets the warm leads!</h3>
        <p class="text-700 fw-semi-bold">Panchisoft CRM Dashboard is coming to <br class="d-none d-sm-block" />market soon for fulfilling your every <br class="d-none d-sm-block" />CRM related needs. </p>
      </div>
      <div class="card-footer border-0 py-0 px-5 z-index-1">
        <p class="text-700 fw-semi-bold">Follow <a href="https://panchisoft.com/">panchisoft </a> for <br class="d-none d-xxl-block" />Web Site & Web Development</p>
      </div>
    </div>
  </div>
</div>
<div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-7 pb-3 border-y border-300">
  <div class="row">
    <div class="col-12 col-xl-7 col-xxl-6">
      <div class="row g-3 mb-3">
        <div class="col-12 col-md-6">
          <h3 class="text-1100 text-nowrap">Issues Discovered</h3>
          <p class="text-700 mb-md-7">Newly found and yet to be solved</p>
          <div class="d-flex align-items-center justify-content-between">
            <p class="mb-0 fw-bold">Issue type </p>
            <p class="mb-0 fs--1">Total count <span class="fw-bold">257</span></p>
          </div>
          <hr class="bg-200 mb-2 mt-2" />
          <div class="d-flex align-items-center mb-1"><span class="d-inline-block bg-info-300 bullet-item me-2"></span>
            <p class="mb-0 fw-semi-bold text-900 lh-sm flex-1">Product design</p>
            <h5 class="mb-0 text-900">78</h5>
          </div>
          <div class="d-flex align-items-center mb-1"><span class="d-inline-block bg-warning-300 bullet-item me-2"></span>
            <p class="mb-0 fw-semi-bold text-900 lh-sm flex-1">Development</p>
            <h5 class="mb-0 text-900">63</h5>
          </div>
          <div class="d-flex align-items-center mb-1"><span class="d-inline-block bg-danger-300 bullet-item me-2"></span>
            <p class="mb-0 fw-semi-bold text-900 lh-sm flex-1">QA &amp; Testing</p>
            <h5 class="mb-0 text-900">56</h5>
          </div>
          <div class="d-flex align-items-center mb-1"><span class="d-inline-block bg-success-300 bullet-item me-2"></span>
            <p class="mb-0 fw-semi-bold text-900 lh-sm flex-1">Customer queries</p>
            <h5 class="mb-0 text-900">36</h5>
          </div>
          <div class="d-flex align-items-center"><span class="d-inline-block bg-primary bullet-item me-2"></span>
            <p class="mb-0 fw-semi-bold text-900 lh-sm flex-1">R &amp; D</p>
            <h5 class="mb-0 text-900">24</h5>
          </div>
          <button class="btn btn-outline-primary mt-5">See Details<span class="fas fa-angle-right ms-2 fs--2 text-center"></span></button>
        </div>
        <div class="col-12 col-md-6">
          <div class="position-relative mb-sm-4 mb-xl-0">
            <div class="echart-issue-chart" style="min-height:390px;width:100%"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-xl-5 col-xxl-6">
      <h3>Project: eleven Progress</h3>
      <p class="text-700 mb-0 mb-xl-3">Deadline &amp; progress</p>
      <div class="echart-zero-burnout-chart" style="min-height:320px;width:100%"></div>
    </div>
  </div>
</div>
<div class="mx-lg-n4 mt-3">
  <div class="row g-3">
    <div class="col-12 col-xl-6 col-xxl-7">
      <div class="card todo-list h-100">
        <div class="card-header border-bottom-0 pb-0">
          <div class="row justify-content-between align-items-center mb-4">
            <div class="col-auto">
              <h3 class="text-1100">To do</h3>
              <p class="mb-0 text-700">Task assigned to me</p>
            </div>
            <div class="col-auto w-100 w-md-auto">
              <div class="row align-items-center g-0 justify-content-between">
                <div class="col-12 col-sm-auto">
                  <div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                      <input class="form-control search-input search" type="search" placeholder="Search tasks" aria-label="Search" />
                      <span class="fas fa-search search-box-icon"></span>

                    </form>
                  </div>
                </div>
                <div class="col-auto d-flex">
                  <p class="mb-0 ms-sm-3 fs--1 text-700 fw-bold"><span class="fas fa-filter me-1 fw-extra-bold fs--2"></span>23 tasks</p>
                  <button class="btn btn-link p-0 ms-3 fs--1 text-primary fw-bold"><span class="fas fa-sort me-1 fw-extra-bold fs--2"></span>Sorting</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body py-0 scrollbar to-do-list-body">
          <div class="d-flex hover-actions-trigger py-3 border-top">
            <input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-0" data-event-propagation-prevent="data-event-propagation-prevent" />
            <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="mb-1 mb-md-0 d-flex align-items-center lh-1">
                  <label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900 cursor-pointer">Designing the dungeon</label><span class="badge badge-phoenix ms-auto fs--2 badge-phoenix-primary">DRAFT</span>
                </div>
              </div>
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="d-flex lh-1 align-items-center"><a class="text-700 fw-bold fs--2 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>2</a>
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                  <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                    <p class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">12:00 PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
              <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                <button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
              </div>
            </div>
          </div>
          <div class="d-flex hover-actions-trigger py-3 border-top">
            <input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-1" data-event-propagation-prevent="data-event-propagation-prevent" />
            <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="mb-1 mb-md-0 d-flex align-items-center lh-1">
                  <label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900 cursor-pointer">Hiring a motion graphic designer</label><span class="badge badge-phoenix ms-auto fs--2 badge-phoenix-warning">URGENT</span>
                </div>
              </div>
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="d-flex lh-1 align-items-center"><a class="text-700 fw-bold fs--2 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>2</a><a class="text-warning fw-bold fs--2 me-2" href="#!"><span class="fas fa-tasks me-1"></span>3</a>
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                  <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                    <p class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">12:00 PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
              <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                <button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
              </div>
            </div>
          </div>
          <div class="d-flex hover-actions-trigger py-3 border-top">
            <input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-2" data-event-propagation-prevent="data-event-propagation-prevent" />
            <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="mb-1 mb-md-0 d-flex align-items-center lh-1">
                  <label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900 cursor-pointer">Daily Meetings Purpose, participants</label><span class="badge badge-phoenix ms-auto fs--2 badge-phoenix-info">ON PROCESS</span>
                </div>
              </div>
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="d-flex lh-1 align-items-center"><a class="text-700 fw-bold fs--2 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>4</a>
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Dec, 2021</p>
                  <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                    <p class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">05:00 AM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
              <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                <button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
              </div>
            </div>
          </div>
          <div class="d-flex hover-actions-trigger py-3 border-top">
            <input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-3" data-event-propagation-prevent="data-event-propagation-prevent" />
            <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="mb-1 mb-md-0 d-flex align-items-center lh-1">
                  <label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900 cursor-pointer">Finalizing the geometric shapes</label>
                </div>
              </div>
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="d-flex lh-1 align-items-center"><a class="text-700 fw-bold fs--2 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>3</a>
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                  <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                    <p class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">12:00 PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
              <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                <button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
              </div>
            </div>
          </div>
          <div class="d-flex hover-actions-trigger py-3 border-top">
            <input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-4" data-event-propagation-prevent="data-event-propagation-prevent" />
            <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="mb-1 mb-md-0 d-flex align-items-center lh-1">
                  <label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900 cursor-pointer">Daily meeting with team members</label>
                </div>
              </div>
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="d-flex lh-1 align-items-center">
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">1 Nov, 2021</p>
                  <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                    <p class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">12:00 PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
              <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                <button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
              </div>
            </div>
          </div>
          <div class="d-flex hover-actions-trigger py-3 border-top">
            <input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-5" data-event-propagation-prevent="data-event-propagation-prevent" />
            <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="mb-1 mb-md-0 d-flex align-items-center lh-1">
                  <label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900 cursor-pointer">Daily Standup Meetings</label>
                </div>
              </div>
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="d-flex lh-1 align-items-center"><a class="text-warning fw-bold fs--2 me-2" href="#!"><span class="fas fa-tasks me-1"></span>4</a>
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">13 Nov, 2021</p>
                  <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                    <p class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">10:00 PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
              <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                <button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
              </div>
            </div>
          </div>
          <div class="d-flex hover-actions-trigger py-3 border-top">
            <input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-6" data-event-propagation-prevent="data-event-propagation-prevent" />
            <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="mb-1 mb-md-0 d-flex align-items-center lh-1">
                  <label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900 cursor-pointer">Procrastinate for a month</label><span class="badge badge-phoenix ms-auto fs--2 badge-phoenix-info">ON PROCESS</span>
                </div>
              </div>
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="d-flex lh-1 align-items-center"><a class="text-700 fw-bold fs--2 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>3</a>
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                  <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                    <p class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">12:00 PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
              <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                <button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
              </div>
            </div>
          </div>
          <div class="d-flex hover-actions-trigger py-3 border-top">
            <input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-7" data-event-propagation-prevent="data-event-propagation-prevent" />
            <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="mb-1 mb-md-0 d-flex align-items-center lh-1">
                  <label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900 cursor-pointer">warming up</label><span class="badge badge-phoenix ms-auto fs--2 badge-phoenix-secondary">CLOSE</span>
                </div>
              </div>
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="d-flex lh-1 align-items-center"><a class="text-700 fw-bold fs--2 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>3</a>
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                  <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                    <p class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">12:00 PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
              <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                <button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
              </div>
            </div>
          </div>
          <div class="d-flex hover-actions-trigger py-3 border-top">
            <input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-8" data-event-propagation-prevent="data-event-propagation-prevent" />
            <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="mb-1 mb-md-0 d-flex align-items-center lh-1">
                  <label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900 cursor-pointer">Make ready for release</label>
                </div>
              </div>
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="d-flex lh-1 align-items-center"><a class="text-700 fw-bold fs--2 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>2</a><a class="text-warning fw-bold fs--2 me-2" href="#!"><span class="fas fa-tasks me-1"></span>2</a>
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">2o Nov, 2021</p>
                  <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                    <p class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">1:00 AM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
              <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                <button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
              </div>
            </div>
          </div>
          <div class="d-flex hover-actions-trigger py-3 border-top">
            <input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-9" data-event-propagation-prevent="data-event-propagation-prevent" />
            <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="mb-1 mb-md-0 d-flex align-items-center lh-1">
                  <label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900 cursor-pointer">Modify the component</label>
                </div>
              </div>
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="d-flex lh-1 align-items-center"><a class="text-700 fw-bold fs--2 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>4</a>
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">22 Nov, 2021</p>
                  <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                    <p class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">1:00 AM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
              <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                <button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
              </div>
            </div>
          </div>
          <div class="d-flex hover-actions-trigger py-3 border-top border-bottom">
            <input class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-10" data-event-propagation-prevent="data-event-propagation-prevent" />
            <div class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1 cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="mb-1 mb-md-0 d-flex align-items-center lh-1">
                  <label class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900 cursor-pointer">Delete overlapping tasks and articles</label><span class="badge badge-phoenix ms-auto fs--2 badge-phoenix-secondary">CLOSE</span>
                </div>
              </div>
              <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                <div class="d-flex lh-1 align-items-center"><a class="text-700 fw-bold fs--2 me-2" href="#!"><span class="fas fa-paperclip me-1"></span>2</a>
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">25 Nov, 2021</p>
                  <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                    <p class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">1:00 AM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;" data-event-propagation-prevent="data-event-propagation-prevent">
              <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button>
                <button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-trash"></span></button>
              </div>
            </div>
          </div>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content bg-soft overflow-hidden">
                <div class="modal-header px-6 py-5 border-300 pe-sm-5 px-md-6 dark__bg-1100">
                  <h3 class="text-1000 fw-bolder mb-0">Designing the Dungeon Blueprint</h3>
                  <button class="btn btn-phoenix-secondary btn-icon btn-icon-xl flex-shrink-0" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fa-solid fa-xmark"></span></button>
                </div>
                <div class="modal-body bg-100 px-6 py-0">
                  <div class="row gx-14">
                    <div class="col-12 col-lg-7 border-end-lg border-300">
                      <div class="py-6">
                        <div class="mb-7">
                          <div class="d-flex align-items-center mb-3">
                            <h4 class="text-900 me-3">Description</h4><a class="btn btn-link text-decoration-none p-0" href="#!"><span class="fa-solid fa-pen"></span></a>
                          </div>
                          <p class="text-1000 mb-0">The female circus horse-rider is a recurring subject in Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus. They visited Paris’s historic Cirque d’Hiver Bouglione together; Vollard lent Chagall his private box seats. Chagall completed 19 gouaches Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus.</p>
                        </div>
                        <div class="mb-7">
                          <h4 class="mb-3">Subtasks</h4>
                          <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                            <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto">
                              <input class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtaskundefined1" />
                              <label class="form-check-label mb-0 fs-0" for="subtaskundefined1">Study Dragons</label>
                            </div>
                            <div class="hover-actions end-0">
                              <button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button>
                              <button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button>
                            </div>
                          </div>
                          <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                            <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto">
                              <input class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtaskundefined2" />
                              <label class="form-check-label mb-0 fs-0" for="subtaskundefined2">Procrastinate a bit</label>
                            </div>
                            <div class="hover-actions end-0">
                              <button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button>
                              <button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button>
                            </div>
                          </div>
                          <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top border-bottom mb-3">
                            <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto">
                              <input class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtaskundefined3" />
                              <label class="form-check-label mb-0 fs-0" for="subtaskundefined3">Staring at the notebook for 5 mins</label>
                            </div>
                            <div class="hover-actions end-0">
                              <button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button>
                              <button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button>
                            </div>
                          </div><a class="fw-bold fs--1" href="#!"><span class="fas fa-plus me-1"></span>Add subtask</a>
                        </div>
                        <div class="mb-3">
                          <div>
                            <h4 class="mb-3">Files</h4>
                          </div>
                          <div class="border-top border-300 px-0 pt-4 pb-3">
                            <div class="me-n3">
                              <div class="d-flex flex-between-center">
                                <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-700 fs--1"></span>
                                  <p class="text-1000 mb-0 lh-1">Silly_sight_1.png</p>
                                </div>
                                <div class="font-sans-serif btn-reveal-trigger">
                                  <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                </div>
                              </div>
                              <div class="d-flex fs--1 text-700 mb-2 flex-wrap"><span>768 kb</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></div><img class="rounded-2" src="../assets/img/generic/40.png" alt="" style="max-width:230px" />
                            </div>
                          </div>
                          <div class="border-top border-300 px-0 pt-4 pb-3">
                            <div class="me-n3">
                              <div class="d-flex flex-between-center">
                                <div>
                                  <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-image me-2 fs--1 text-700"></span>
                                    <p class="text-1000 mb-0 lh-1">All_images.zip</p>
                                  </div>
                                  <div class="d-flex fs--1 text-700 mb-0 flex-wrap"><span>12.8 mb</span><span class="text-400 mx-1">| </span><a href="#!">Yves Tanguy </a><span class="text-400 mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></div>
                                </div>
                                <div class="font-sans-serif btn-reveal-trigger">
                                  <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="border-top border-bottom border-300 px-0 pt-4 pb-3">
                            <div class="me-n3">
                              <div class="d-flex flex-between-center">
                                <div>
                                  <div class="d-flex align-items-center mb-1 flex-wrap"><span class="fa-solid fa-file-lines me-2 fs--1 text-700"></span>
                                    <p class="text-1000 mb-0 lh-1">Project.txt</p>
                                  </div>
                                  <div class="d-flex fs--1 text-700 mb-0 flex-wrap"><span>123 kb</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">12th Dec, 12:56 PM</span></div>
                                </div>
                                <div class="font-sans-serif btn-reveal-trigger">
                                  <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><a class="fw-bold fs--1" href="#!"><span class="fas fa-plus me-1"></span>Add file(s)</a>
                      </div>
                    </div>
                    <div class="col-12 col-lg-5">
                      <div class="py-6">
                        <h4 class="mb-4 text-black">Others Information</h4>
                        <h5 class="text-1000 mb-2">Status</h5>
                        <select class="form-select mb-4" aria-label="Default select example">
                          <option selected="">Select</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <h5 class="text-1000 mb-2">Due Date</h5>
                        <div class="flatpickr-input-container mb-4">
                          <input class="form-control datetimepicker ps-6" type="text" placeholder="Set the due date" data-options='{"disableMobile":true}' /><span class="uil uil-calendar-alt flatpickr-icon text-700"></span>
                        </div>
                        <h5 class="text-1000 mb-2">Reminder</h5>
                        <div class="flatpickr-input-container mb-4">
                          <input class="form-control datetimepicker ps-6" type="text" placeholder="Reminder" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"static":true}' /><span class="uil uil-bell-school flatpickr-icon text-700"></span>
                        </div>
                        <h5 class="text-1000 mb-2">Tag</h5>
                        <div class="choices-select-container mb-6">
                          <select class="form-select" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Select organizer...</option>
                            <option>Massachusetts Institute of Technology</option>
                            <option>University of Chicago</option>
                            <option>GSAS Open Labs At Harvard</option>
                            <option>California Institute of Technology</option>
                          </select><span class="uil uil-tag-alt choices-icon text-700" style="top: 26%;"></span>
                        </div>
                        <div class="text-end mb-9">
                          <button class="btn btn-phoenix-danger">Delete Task</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer border-0"><a class="fw-bold fs--1 mt-4" href="#!"><span class="fas fa-plus me-1"></span>Add new task</a></div>
      </div>
    </div>
    <div class="col-12 col-xl-6 col-xxl-5">
      <div class="card h-100">
        <div class="card-body">
          <div class="card-title mb-1">
            <h3 class="text-1100">Activity</h3>
          </div>
          <p class="text-700 mb-4">Recent activity across all projects</p>
          <div class="timeline-vertical timeline-with-details">
            <div class="timeline-item position-relative">
              <div class="row g-md-3">
                <div class="col-12 col-md-auto d-flex">
                  <div class="timeline-item-date order-1 order-md-0 me-md-4">
                    <p class="fs--2 fw-semi-bold text-600 text-end">01 DEC, 2023<br class="d-none d-md-block" /> 10:30 AM</p>
                  </div>
                  <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                    <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100"><span class="fa-solid fa-chess text-primary-600 fs--2 dark__text-primary-300"></span></div><span class="timeline-bar border-end border-dashed border-400"></span>
                  </div>
                </div>
                <div class="col">
                  <div class="timeline-item-content ps-6 ps-md-3">
                    <h5 class="fs--1 lh-sm">Phoenix Template: Unleashing Creative Possibilities</h5>
                    <p class="fs--1">by <a class="fw-semi-bold" href="#!">Shantinon Mekalan</a></p>
                    <p class="fs--1 text-800 mb-5">Discover limitless creativity with the Phoenix template! Our latest update offers an array of innovative features and design options.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="timeline-item position-relative">
              <div class="row g-md-3">
                <div class="col-12 col-md-auto d-flex">
                  <div class="timeline-item-date order-1 order-md-0 me-md-4">
                    <p class="fs--2 fw-semi-bold text-600 text-end">05 DEC, 2023<br class="d-none d-md-block" /> 12:30 AM</p>
                  </div>
                  <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                    <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100"><span class="fa-solid fa-dove text-primary-600 fs--2 dark__text-primary-300"></span></div><span class="timeline-bar border-end border-dashed border-400"></span>
                  </div>
                </div>
                <div class="col">
                  <div class="timeline-item-content ps-6 ps-md-3">
                    <h5 class="fs--1 lh-sm">Empower Your Digital Presence: The Phoenix Template Unveiled</h5>
                    <p class="fs--1">by <a class="fw-semi-bold" href="#!">Bookworm22</a></p>
                    <p class="fs--1 text-800 mb-5">Unveiling the Phoenix template, a game-changer for your digital presence. With its powerful features and sleek design,</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="timeline-item position-relative">
              <div class="row g-md-3">
                <div class="col-12 col-md-auto d-flex">
                  <div class="timeline-item-date order-1 order-md-0 me-md-4">
                    <p class="fs--2 fw-semi-bold text-600 text-end">15 DEC, 2023<br class="d-none d-md-block" /> 2:30 AM</p>
                  </div>
                  <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                    <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100"><span class="fa-solid fa-dungeon text-primary-600 fs--2 dark__text-primary-300"></span></div>
                  </div>
                </div>
                <div class="col">
                  <div class="timeline-item-content ps-6 ps-md-3">
                    <h5 class="fs--1 lh-sm">Phoenix Template: Simplified Design, Maximum Impact</h5>
                    <p class="fs--1">by <a class="fw-semi-bold" href="#!">Sharuka Nijibum</a></p>
                    <p class="fs--1 text-800 mb-0">Introducing the Phoenix template, where simplified design meets maximum impact. Elevate your digital presence with its sleek and intuitive features.</p>
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
<div class="row mt-3">
  <div class="col-12">
    <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-6 border-top border-300">
      <div id="projectSummary" data-list='{"valueNames":["project","assigness","start","deadline","calculation","projectprogress","status","action"],"page":6,"pagination":true}'>
        <div class="row align-items-end justify-content-between pb-4 g-3">
          <div class="col-auto">
            <h3>Projects</h3>
            <p class="text-700 lh-sm mb-0">Brief summary of all projects</p>
          </div>
        </div>
        <div class="table-responsive ms-n1 ps-1 scrollbar">
          <table class="table fs--1 mb-0 border-top border-200">
            <thead>
              <tr>
                <th class="sort white-space-nowrap align-middle ps-0" scope="col" data-sort="project" style="width:30%;">PROJECT NAME</th>
                <th class="sort align-middle ps-3" scope="col" data-sort="assigness" style="width:10%;">ASSIGNESS</th>
                <th class="sort align-middle ps-3" scope="col" data-sort="start" style="width:10%;">START DATE</th>
                <th class="sort align-middle ps-3" scope="col" data-sort="deadline" style="width:15%;">DEADLINE</th>
                <th class="sort align-middle ps-3" scope="col" data-sort="calculation" style="width:12%;">CALCULATION</th>
                <th class="sort align-middle ps-3" scope="col" data-sort="projectprogress" style="width:5%;">PROGRESS</th>
                <th class="sort align-middle ps-8" scope="col" data-sort="status" style="width:10%;">STATUS</th>
                <th class="sort align-middle text-end" scope="col" style="width:10%;"></th>
              </tr>
            </thead>
            <tbody class="list" id="project-summary-table-body">
              
               <tr class="position-static">

                <td class="align-middle time white-space-nowrap ps-0 project"><a class="fw-bold fs-0" href="project_details.php?branchid"></a></td>
                <td class="align-middle white-space-nowrap assigness ps-3">
                  <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                      <div class="avatar avatar-s  rounded-circle">
                        <img class="rounded-circle " src="../assets/img/team/9.webp" alt="" />

                      </div>
                    </a>
                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                      <div class="position-relative">
                        <div class="bg-holder z-index--1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                        </div>
                        <!--/.bg-holder-->

                        <div class="p-3">
                          <div class="text-end">
                            <button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white light"></span></button>
                            <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white light"></span></button>
                          </div>
                          <div class="text-center">
                            <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-white" src="../assets/img/team/9.webp" alt="" /></div>
                            <h6 class="text-white light">Michael Jenkins</h6>
                            <p class="text-600 fw-semi-bold fs--2 mb-2">@tyrion222</p>
                            <div class="d-flex flex-center mb-3">
                              <h6 class="text-white light mb-0">224 <span class="fw-normal text-300">connections</span></h6><span class="fa-solid fa-circle text-700 mx-1" data-fa-transform="shrink-10 up-2"></span>
                              <h6 class="text-white light mb-0">23 <span class="fw-normal text-300">mutual</span></h6>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="bg-white">
                        <div class="p-3 border-bottom">
                          <div class="d-flex justify-content-between">
                            <div class="d-flex">
                              <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                              <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                              <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                            </div>
                            <button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                          </div>
                        </div>
                        <ul class="nav d-flex flex-column py-3 border-bottom">
                          <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-900 d-inline-block" data-feather="clipboard"></span><span class="text-1000 flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs--3"></span></a></li>
                          <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-900" data-feather="pie-chart"></span><span class="text-1000 flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs--3"></span></a></li>
                        </ul>
                      </div>
                      <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                      <div class="avatar avatar-s  rounded-circle">
                        <img class="rounded-circle " src="../assets/img/team/25.webp" alt="" />

                      </div>
                    </a>
                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                      <div class="position-relative">
                        <div class="bg-holder z-index--1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                        </div>
                        <!--/.bg-holder-->

                        <div class="p-3">
                          <div class="text-end">
                            <button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white light"></span></button>
                            <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white light"></span></button>
                          </div>
                          <div class="text-center">
                            <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-white" src="../assets/img/team/25.webp" alt="" /></div>
                            <h6 class="text-white light">Ansolo Lazinatov</h6>
                            <p class="text-600 fw-semi-bold fs--2 mb-2">@tyrion222</p>
                            <div class="d-flex flex-center mb-3">
                              <h6 class="text-white light mb-0">224 <span class="fw-normal text-300">connections</span></h6><span class="fa-solid fa-circle text-700 mx-1" data-fa-transform="shrink-10 up-2"></span>
                              <h6 class="text-white light mb-0">23 <span class="fw-normal text-300">mutual</span></h6>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="bg-white">
                        <div class="p-3 border-bottom">
                          <div class="d-flex justify-content-between">
                            <div class="d-flex">
                              <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                              <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                              <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                            </div>
                            <button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                          </div>
                        </div>
                        <ul class="nav d-flex flex-column py-3 border-bottom">
                          <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-900 d-inline-block" data-feather="clipboard"></span><span class="text-1000 flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs--3"></span></a></li>
                          <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-900" data-feather="pie-chart"></span><span class="text-1000 flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs--3"></span></a></li>
                        </ul>
                      </div>
                      <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                      <div class="avatar avatar-s  rounded-circle">
                        <img class="rounded-circle " src="../assets/img/team/32.webp" alt="" />

                      </div>
                    </a>
                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                      <div class="position-relative">
                        <div class="bg-holder z-index--1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                        </div>
                        <!--/.bg-holder-->

                        <div class="p-3">
                          <div class="text-end">
                            <button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white light"></span></button>
                            <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white light"></span></button>
                          </div>
                          <div class="text-center">
                            <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-white" src="../assets/img/team/32.webp" alt="" /></div>
                            <h6 class="text-white light">Jennifer Schramm</h6>
                            <p class="text-600 fw-semi-bold fs--2 mb-2">@tyrion222</p>
                            <div class="d-flex flex-center mb-3">
                              <h6 class="text-white light mb-0">224 <span class="fw-normal text-300">connections</span></h6><span class="fa-solid fa-circle text-700 mx-1" data-fa-transform="shrink-10 up-2"></span>
                              <h6 class="text-white light mb-0">23 <span class="fw-normal text-300">mutual</span></h6>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="bg-white">
                        <div class="p-3 border-bottom">
                          <div class="d-flex justify-content-between">
                            <div class="d-flex">
                              <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                              <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                              <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                            </div>
                            <button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                          </div>
                        </div>
                        <ul class="nav d-flex flex-column py-3 border-bottom">
                          <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-900 d-inline-block" data-feather="clipboard"></span><span class="text-1000 flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs--3"></span></a></li>
                          <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-900" data-feather="pie-chart"></span><span class="text-1000 flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs--3"></span></a></li>
                        </ul>
                      </div>
                      <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                    </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                      <div class="avatar avatar-s  rounded-circle">
                        <img class="rounded-circle avatar-placeholder" src="../assets/img/team/avatar.webp" alt="" />
                      </div>
                    </a>
                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                      <div class="position-relative">
                        <div class="bg-holder z-index--1" style="background-image:url(../assets/img/bg/bg-32.png);background-size: auto;">
                        </div>
                        <!--/.bg-holder-->

                        <div class="p-3">
                          <div class="text-end">
                            <button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white light"></span></button>
                            <button class="btn p-0"><span class="fa-solid fa-ellipsis text-white light"></span></button>
                          </div>
                          <div class="text-center">
                            <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-white" src="../assets/img/team/avatar.webp" alt="" /></div>
                            <h6 class="text-white light">Kristine Cadena</h6>
                            <p class="text-600 fw-semi-bold fs--2 mb-2">@tyrion222</p>
                            <div class="d-flex flex-center mb-3">
                              <h6 class="text-white light mb-0">224 <span class="fw-normal text-300">connections</span></h6><span class="fa-solid fa-circle text-700 mx-1" data-fa-transform="shrink-10 up-2"></span>
                              <h6 class="text-white light mb-0">23 <span class="fw-normal text-300">mutual</span></h6>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="bg-white">
                        <div class="p-3 border-bottom">
                          <div class="d-flex justify-content-between">
                            <div class="d-flex">
                              <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button>
                              <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button>
                              <button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button>
                            </div>
                            <button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                          </div>
                        </div>
                        <ul class="nav d-flex flex-column py-3 border-bottom">
                          <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-900 d-inline-block" data-feather="clipboard"></span><span class="text-1000 flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs--3"></span></a></li>
                          <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-900" data-feather="pie-chart"></span><span class="text-1000 flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs--3"></span></a></li>
                        </ul>
                      </div>
                      <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                    </div>
                    <div class="avatar avatar-s  rounded-circle">
                      <div class="avatar-name rounded-circle "><span>+3</span></div>
                    </div>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap start ps-3">
                  <p class="mb-0 fs--1 text-900">Dec 12, 2018</p>
                </td>
                <td class="align-middle white-space-nowrap deadline ps-3">
                  <p class="mb-0 fs--1 text-900">Dec 12, 2026</p>
                </td>
                <td class="align-middle white-space-nowrap calculation ps-3">
                  <p class="fw-bold text-1100 fs--1 mb-0">$4</p>
                  <p class="fw-semi-bold fs--2 text-700 mb-0">Cost</p>
                </td>
                <td class="align-middle white-space-nowrap ps-3 projectprogress">
                  <p class="text-800 fs--2 mb-0">145 / 145</p>
                  <div class="progress" style="height:3px;">
                    <div class="progress-bar bg-success" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap ps-8 status">
                  <div class="progress progress-stack mt-3" style="height:3px;">
                    <div class="progress-bar bg-info" style="width:30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" role="progressbar"></div>
                    <div class="progress-bar bg-danger" style="width:5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage" role="progressbar"></div>
                    <div class="progress-bar bg-warning" style="width:45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage" role="progressbar"></div>
                    <div class="progress-bar bg-success" style="width:15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage" role="progressbar"></div>
                  </div>
                </td>
                <td class="align-middle text-end white-space-nowrap pe-0 action">
                  <div class="font-sans-serif btn-reveal-trigger position-static">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </td>
               

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\CRM_1\resources\views/dashboard.blade.php ENDPATH**/ ?>