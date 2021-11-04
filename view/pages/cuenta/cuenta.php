<?php if (isset($_GET[NO_ACCESS])): ?>
  <h3> ACCESS DENIED TO ADMIN PANEL </h3>
  <hr>
<?php endif; ?>
<!-- <a href="?<?=ADMIN_VIEW?>"> Go To Admin </a> -->
<div class="row page-titles">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Budgets</a></li>
  </ol>
</div>

<div class="row ">
  <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Payments Queue</h4>
        <div class="col-md-12 mb-5 justify-content-end">
          <button type="button" id="add_account_btn" class="btn btn-success mb-2 float-right" ><i class="fas fa-plus"></i>  Add</button>
          <button type="button" id="add_category" class="btn btn-warning mb-2 float-right" ><i class="fas fa-plus"></i>  Add Category </button>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">

          <table class="table display mb-4 dataTablesCard job-table table-responsive-xl card-table" id="contenedor_cuentas" style="width:100%">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Account</th>
                <th scope="col">Made By</th>
                <th scope="col">Date</th>
                <th scope="col">Ammount</th>
                <th scope="col">Type</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="account_modal">

</div>
