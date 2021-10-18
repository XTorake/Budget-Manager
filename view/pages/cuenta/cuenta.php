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

<div class="col-md-12 justify-content-end">
  <button type="button" id="add_account_btn" class="btn btn-success mb-2 float-right" ><i class="fas fa-plus"></i>  Add</button>
</div>

<div class="d-flex d-none align-items-center flex-wrap search-Account bg-white px-0 mb-4">
  <div class="col-xl-2 col-xxl-3 col-lg-3 col-sm-6 col-12 search-dropdown d-flex align-items-center">
  </div>
  <div class="col-xl-2 col-xxl-3 col-lg-3 col-sm-6 col-12 search-dropdown d-flex align-items-center">
    <select class="form-control border-0 default-select style-1 h-auto">
      <option>Sort by</option>
      <option>Budget ↑</option>
      <option>Budget ↓</option>
      <option>Name ↑</option>
      <option>Name ↓</option>
    </select>
  </div>
  <div class="col-xl-8 col-xxl-6 col-lg-6 col-12 d-md-flex Account-title-search pe-0">
    <div class="input-group search-area">
      <input type="text" class="form-control h-auto" placeholder="search Account here...">
      <span class="input-group-text">
        <a href="javascript:void(0)" class="btn btn-primary btn-rounded">
          Search
          <i class="flaticon-381-search-2 ms-2"></i>
        </a>
      </span>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-12">

      <div class="d-flex d-none align-items-center mb-4">
        <div class="default-tab Account-tabs">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#Boxed">
                <i class="fas fa-th-large"></i>
              </a>
            </li>
          </ul>
        </div>
        <div>
          <select class="default-select dashboard-select border-0 bg-transparent">
            <option data-display="newest">newest</option>

            <option value="2">oldest</option>
          </select>
        </div>
      </div>
    </div>
    <div class="tab-content">

      <div class="tab-pane fade show active" id="Boxed" role="tabpanel">
        <div class="row" id="contenedor_cuentas">

        </div>

        <div class="d-flex align-items-center justify-content-between flex-wrap">
          <div class="mb-sm-0 mb-3 d-none">
            <h5 class="mb-0">Showing 5 of 102 Data</h5>
          </div>
          <nav>
            <ul class="pagination pagination-circle">
              <li class="page-item page-indicator Account-search-page">
                <a class="page-link" href="javascript:void(0)">Prev</a>
              </li>
              <li class="page-item page-indicator Account-search-page">
                <a class="page-link" href="javascript:void(0)">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>


    </div>
  </div>
</div>
<div class="modal fade" id="account_modal">

</div>
