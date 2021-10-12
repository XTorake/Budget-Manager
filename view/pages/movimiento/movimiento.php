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
        <h4 class="card-title">Payments Queue</h4>
        <button type="button" id="add_movement_btn" class="btn btn-success mb-2 float-right" ><i class="fas fa-plus"></i> Add</button>

      </div>
      <div class="card-body">

          <table class="table table-bordered table-responsive-sm" id="lista_movimientos" style="width:100%">
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
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="movement_modal">

</div>
