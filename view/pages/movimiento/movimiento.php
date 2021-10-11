<?php if (isset($_GET[NO_ACCESS])): ?>
  <h3> ACCESS DENIED TO ADMIN PANEL </h3>
  <hr>
<?php endif; ?>
<!-- <a href="?<?=ADMIN_VIEW?>"> Go To Admin </a> -->

<div class="row page-titles">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Movements</a></li>
  </ol>
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
