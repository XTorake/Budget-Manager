<?php if (isset($_GET[NO_ACCESS])): ?>
  <h3> ACCESS DENIED TO ADMIN PANEL </h3>
  <hr>
<?php endif; ?>
<!-- <a href="?<?=ADMIN_VIEW?>"> Go To Admin </a> -->

<div class="row page-titles">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
  </ol>
</div>

<div class="row ">
  <div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-3">
    <div class="widget-stat card">
      <div class="card-body  p-4">
        <div class="media ai-icon">
          <span class="me-3 bgl-danger text-danger">
            <svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
              <line x1="12" y1="1" x2="12" y2="23"></line>
              <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
            </svg>
          </span>
          <div class="media-body">
            <p class="mb-1">Sales</p>
            <h4 class="mb-0">364.50K</h4>
            <span class="badge badge-danger">-3.5%</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-3">
    <div class="widget-stat card">
<div class="card-body p-4">
<div class="media ai-icon">
<span class="me-3 bgl-warning text-warning">
<svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
  <polyline points="14 2 14 8 20 8"></polyline>
  <line x1="16" y1="13" x2="8" y2="13"></line>
  <line x1="16" y1="17" x2="8" y2="17"></line>
  <polyline points="10 9 9 9 8 9"></polyline>
</svg>
</span>
<div class="media-body">
<p class="mb-1">Outstanding</p>
<h4 class="mb-0">2570</h4>
<span class="badge badge-warning">+3.5%</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-3">
  <div class="widget-stat card">
    <div class="card-body  p-4">
      <div class="media ai-icon">
        <span class="me-3 bgl-danger text-danger">
          <svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
            <line x1="12" y1="1" x2="12" y2="23"></line>
            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
          </svg>
        </span>
        <div class="media-body">
          <p class="mb-1">Revenue</p>
          <h4 class="mb-0">364.50K</h4>
          <span class="badge badge-danger">-3.5%</span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-3">
  <div class="widget-stat card">
<div class="card-body p-4">
<div class="media ai-icon">
<span class="me-3 bgl-warning text-warning">
<svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
<polyline points="14 2 14 8 20 8"></polyline>
<line x1="16" y1="13" x2="8" y2="13"></line>
<line x1="16" y1="17" x2="8" y2="17"></line>
<polyline points="10 9 9 9 8 9"></polyline>
</svg>
</span>
<div class="media-body">
<p class="mb-1">Bills</p>
<h4 class="mb-0">2570</h4>
<span class="badge badge-warning">+3.5%</span>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row ">
  <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
    <div class="widget-stat card bg-success">
      <div class="card-body p-4">
        <div class="media">
          <span class="me-3">
            <i class="la la-dollar"></i>
          </span>
          <div class="media-body text-white">
            <p class="mb-1">Account 1</p>
            <h3 class="text-white">250$</h3>
            <div class="progress mb-2 bg-secondary">
              <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
            </div>
            <small>30% Increase in 30 Days</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
    <div class="widget-stat card bg-danger">
      <div class="card-body p-4">
        <div class="media">
          <span class="me-3">
            <i class="la la-dollar"></i>
          </span>
          <div class="media-body text-white">
            <p class="mb-1">Account 2</p>
            <h3 class="text-white">1000$</h3>
            <div class="progress mb-2 bg-secondary">
              <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
            </div>
            <small>30% Increase in 30 Days</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
    <div class="widget-stat card bg-info">
      <div class="card-body p-4">
        <div class="media">
          <span class="me-3">
            <i class="la la-dollar"></i>
          </span>
          <div class="media-body text-white">
            <p class="mb-1">Account 3</p>
            <h3 class="text-white">250$</h3>
            <div class="progress mb-2 bg-secondary">
              <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
            </div>
            <small>30% Increase in 30 Days</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
    <div class="widget-stat card bg-warning">
      <div class="card-body p-4">
        <div class="media">
          <span class="me-3">
            <i class="la la-dollar"></i>
          </span>
          <div class="media-body text-white">
            <p class="mb-1">Account 4</p>
            <h3 class="text-white">250$</h3>
            <div class="progress mb-2 bg-secondary">
              <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
            </div>
            <small>30% Increase in 30 Days</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row ">
  <div class="col-xl-6">
    <div class="card">
      <div class="card-header border-0 pb-0">
        <h4 class="fs-20 font-w600">Budget Consumption</h4>
      </div>
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-xl-6 col-sm-6">
            <div class="progress default-progress">
              <div class="progress-bar progress-animated" style="width: 90%; height:13px;background:#68e365;" role="progressbar">
                <span class="sr-only">90% Complete</span>
              </div>
            </div>
            <div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
              <span class="fs-14 font-w500">Account 1</span>
              <span class="fs-16"><span class="text-black pe-2"></span>90%</span>
            </div>
            <div class="progress default-progress">
              <div class="progress-bar  progress-animated" style="width: 68%; height:13px;background:#f72b50;" role="progressbar">
                <span class="sr-only">45% Complete</span>
              </div>
            </div>
            <div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
              <span class="fs-14 font-w500">Account 2</span>
              <span class="fs-16"><span class="text-black pe-2"></span>68%</span>
            </div>
            <div class="progress default-progress">
              <div class="progress-bar progress-animated" style="width: 85%; height:13px;background:#d653c1;" role="progressbar">
                <span class="sr-only">85% Complete</span>
              </div>
            </div>
            <div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
              <span class="fs-14 font-w500">Account 3</span>
              <span class="fs-16"><span class="text-black pe-2"></span>85%</span>
            </div>
            <div class="progress default-progress">
              <div class="progress-bar  progress-animated" style="width: 40%; height:13px;background:#ffa755;" role="progressbar">
                <span class="sr-only">40% Complete</span>
              </div>
            </div>
            <div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
              <span class="fs-14 font-w500">Account 4</span>
              <span class="fs-16"><span class="text-black pe-2"></span>40%</span>
            </div>
          </div>
          <div class="col-xl-6 col-sm-6">
            <div id="pieChart3"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-lg-12 col-sm-12">
          <div class="card">
                          <div class="card-header border-0 pb-0">
              <h2 class="card-title">Summary</h2>
            </div>
            <div class="card-body pb-0">
              <p>Overall Status Summary</p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex px-0 justify-content-between">
                  <strong>Accounts</strong>
                  <strong>Incomes</strong>
                  <strong>Expenses</strong>

                </li>
                <li class="list-group-item d-flex px-0 justify-content-between">
                  <strong>Account 1</strong>
                  <span class="mb-0">$200</span>
                  <span class="mb-0">$100</span>
                </li>
                <li class="list-group-item d-flex px-0 justify-content-between">
                  <strong>Account 2</strong>
                  <span class="mb-0">$200</span>
                  <span class="mb-0">$100</span>
                </li>
                <li class="list-group-item d-flex px-0 justify-content-between">
                  <strong>Account 3</strong>
                  <span class="mb-0">$200</span>
                  <span class="mb-0">$100</span>
                </li>
                <li class="list-group-item d-flex px-0 justify-content-between">
                  <strong>Account 4</strong>
                  <span class="mb-0">$200</span>
                  <span class="mb-0">$100</span>
                </li>
              </ul>
                          </div>
                          <div class="card-footer pt-0 pb-0 text-center">
                              <div class="row">
                <div class="col-3 pt-3 pb-3 border-end">
                  <h3 class="mb-1 text-primary">150</h3>
                  <span>Total Incomes</span>
                </div>
                <div class="col-3 pt-3 pb-3 border-end">
                  <h3 class="mb-1 text-primary">140</h3>
                  <span>Total Expenses</span>
                </div>
                <div class="col-3 pt-3 pb-3 border-end">
                  <h3 class="mb-1 text-primary">$8500</h3>
                  <span>Ammount Incomes</span>
                </div>
                <div class="col-3 pt-3 pb-3">
                  <h3 class="mb-1 text-primary">$9000</h3>
                  <span>Ammount Expenses</span>
                </div>
                              </div>
                          </div>
                      </div>
        </div>
</div>

<div class="row ">
  <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Recent Payments Queue</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive recentOrderTable">
          <table class="table verticle-middle table-responsive-md">
            <thead>
              <tr>
                <th scope="col">Ward No.</th>
                <th scope="col">Patient</th>
                <th scope="col">Dr Name</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Bills</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>12</td>
                <td>Mr. Bobby</td>
                <td>Dr. Jackson</td>
                <td>01 August 2020</td>
                <td><span class="badge badge-rounded badge-primary">Checkin</span></td>
                <td>$120</td>
                <td>
                  <div class="dropdown custom-dropdown mb-0">
                    <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="javascript:void();;">Details</a>
                      <a class="dropdown-item text-danger" href="javascript:void();;">Cancel</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
