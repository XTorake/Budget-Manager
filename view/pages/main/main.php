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
<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
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
      </div>



<div class="row ">
<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
  <div class="widget-stat card bg-danger">
    <div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="la la-dollar"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Fees Collect</p>
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
  <div class="widget-stat card bg-success">
    <div class="card-body p-4">
  								<div class="media">
  									<span class="me-3">
  										<i class="la la-dollar"></i>
  									</span>
  									<div class="media-body text-white">
  										<p class="mb-1">Fees Collect</p>
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
  <div class="widget-stat card bg-primary">
    <div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="la la-dollar"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Fees Collect</p>
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
  <div class="widget-stat card bg-info">
    <div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="la la-dollar"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Fees Collect</p>
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

<div class="col-xl-12">
  <div class="card">
    <div class="card-header border-0 pb-0">
      <h4 class="fs-20 font-w600">Profile Stregth</h4>
    </div>
    <div class="card-body">
      <div class="row align-items-center">
        <div class="col-xl-6 col-sm-6">
          <div class="progress default-progress">
            <div class="progress-bar bg-vigit progress-animated" style="width: 90%; height:13px;" role="progressbar">
              <span class="sr-only">90% Complete</span>
            </div>
          </div>
          <div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
            <span class="fs-14 font-w500">Visitor</span>
            <span class="fs-16"><span class="text-black pe-2"></span>90%</span>
          </div>
          <div class="progress default-progress">
            <div class="progress-bar bg-contact progress-animated" style="width: 68%; height:13px;" role="progressbar">
              <span class="sr-only">45% Complete</span>
            </div>
          </div>
          <div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
            <span class="fs-14 font-w500">Contact</span>
            <span class="fs-16"><span class="text-black pe-2"></span>68%</span>
          </div>
          <div class="progress default-progress">
            <div class="progress-bar bg-follow progress-animated" style="width: 85%; height:13px;" role="progressbar">
              <span class="sr-only">85% Complete</span>
            </div>
          </div>
          <div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
            <span class="fs-14 font-w500">Follow</span>
            <span class="fs-16"><span class="text-black pe-2"></span>85%</span>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6">
          <div id="pieChart3"></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
