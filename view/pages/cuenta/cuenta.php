<?php if (isset($_GET[NO_ACCESS])): ?>
  <h3> ACCESS DENIED TO ADMIN PANEL </h3>
  <hr>
<?php endif; ?>
<!-- <a href="?<?=ADMIN_VIEW?>"> Go To Admin </a> -->
<?php

if(isset($_GET['category'])){
  ?>
  
  <div class="alert alert-warning">
    Showing budgets in the category of: <?=$_GET['cat_name']?>
    <a href="?p=cuenta" class="btn btn-primary">Remove Filter</a>
  </div>

  <?php
}

?>

<div class="row page-titles">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Budgets</a></li>
  </ol>
</div>

<div class="row ">
  <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Budget List</h4>
          <button type="button" id="add_account_btn" class="btn btn-success mb-2 float-right" ><i class="fas fa-plus"></i>  Add</button>
          <button type="button" id="add_category" class="btn btn-warning mb-2 float-right" ><i class="fas fa-plus"></i>  Add Category </button>
      </div>
      <div class="card-body">
        <div class="table-responsive">

          <table class="table display mb-4 dataTablesCard job-table table-responsive-xl card-table" id="contenedor_cuentas" style="width:100%">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Account</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
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
