<?php if (isset($_GET[NO_ACCESS])): ?>
  <h3> ACCESS DENIED TO ADMIN PANEL </h3>
  <hr>
<?php endif; ?>
<!-- <a href="?<?=ADMIN_VIEW?>"> Go To Admin </a> -->
<!--
<div class="row page-titles">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Users</a></li>
  </ol>
</div> -->

<div class="d-flex align-items-center flex-wrap search-job bg-white px-0 mb-4 row">
  <div class="col-xl-2 col-xxl-3 search-dropdown d-flex align-items-center">
    <select class="form-control border-0 default-select style-1 h-auto">
      <option>Filter by Permissions</option>
      <option>Admin</option>
      <option>Read</option>
      <option>View</option>
      <option>Delete</option>
    </select>
  </div>
  <div class="col-xl-2 col-xxl-3 search-dropdown d-flex align-items-center">
    <select class="form-control border-0 default-select style-1 h-auto">
      <option>Order by</option>
      <option>Name ↑</option>
      <option>Name ↓</option>
      <option>Expenses ↑</option>
      <option>Expenses ↓</option>
      <option>Incomes ↑</option>
      <option>Incomes ↓</option>

    </select>
  </div>
  <div class="col-xl-8 col-xxl-6 d-md-flex job-title-search pe-0">
    <div class="input-group search-area">
      <input type="text" class="form-control h-auto" placeholder="search user here...">
    <span class="input-group-text"><a href="javascript:void(0)" class="btn btn-primary btn-rounded">Search<i class="flaticon-381-search-2 ms-2"></i></a></span>
    </div>
  </div>
</div>
<div class="d-flex align-items-center justify-content-between my-5 flex-wrap">
  <div>
    <div class="d-flex align-items-center">
      <button type="button" id="add_movement_btn" class="btn btn-primary mb-2 float-right" ><i class="fas fa-plus"></i>  Add</button>

    <!--   <span class="me-4">

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path id="List" d="M13.143,14.857H9.714A1.716,1.716,0,0,1,8,13.143V9.714A1.716,1.716,0,0,1,9.714,8h3.429a1.716,1.716,0,0,1,1.714,1.714v3.429A1.716,1.716,0,0,1,13.143,14.857ZM9.714,9.714v3.429h3.43V9.714ZM32,11.429a.857.857,0,0,0-.857-.857H17.429a.857.857,0,1,0,0,1.714H31.143A.857.857,0,0,0,32,11.429Zm-18.857,12H9.714A1.716,1.716,0,0,1,8,21.714V18.286a1.716,1.716,0,0,1,1.714-1.714h3.429a1.716,1.716,0,0,1,1.714,1.714v3.429A1.716,1.716,0,0,1,13.143,23.429ZM9.714,18.286v3.429h3.43V18.286ZM32,20a.857.857,0,0,0-.857-.857H17.429a.857.857,0,1,0,0,1.714H31.143A.857.857,0,0,0,32,20ZM13.143,32H9.714A1.716,1.716,0,0,1,8,30.286V26.857a1.716,1.716,0,0,1,1.714-1.714h3.429a1.716,1.716,0,0,1,1.714,1.714v3.429A1.716,1.716,0,0,1,13.143,32ZM9.714,26.857v3.429h3.43V26.857ZM32,28.571a.857.857,0,0,0-.857-.857H17.429a.857.857,0,1,0,0,1.714H31.143A.857.857,0,0,0,32,28.571Z" transform="translate(-8 -8)" fill="#848484"/>
        </svg>
      </span>
      <span class="me-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <g id="_012-menu-1" data-name="012-menu-1" transform="translate(-1 -1)">
          <path id="Path_1965" data-name="Path 1965" d="M10.818,1H2.091A1.091,1.091,0,0,0,1,2.091v8.727a1.091,1.091,0,0,0,1.091,1.091h8.727a1.091,1.091,0,0,0,1.091-1.091V2.091A1.091,1.091,0,0,0,10.818,1ZM9.727,9.727H3.182V3.182H9.727Z" fill="#f93a0b"/>
          <path id="Path_1966" data-name="Path 1966" d="M22.818,1H14.091A1.091,1.091,0,0,0,13,2.091v8.727a1.091,1.091,0,0,0,1.091,1.091h8.727a1.091,1.091,0,0,0,1.091-1.091V2.091A1.091,1.091,0,0,0,22.818,1ZM21.727,9.727H15.182V3.182h6.545Z" transform="translate(1.091)" fill="#f93a0b"/>
          <path id="Path_1967" data-name="Path 1967" d="M10.818,13H2.091A1.091,1.091,0,0,0,1,14.091v8.727a1.091,1.091,0,0,0,1.091,1.091h8.727a1.091,1.091,0,0,0,1.091-1.091V14.091A1.091,1.091,0,0,0,10.818,13ZM9.727,21.727H3.182V15.182H9.727Z" transform="translate(0 1.091)" fill="#f93a0b"/>
          <path id="Path_1968" data-name="Path 1968" d="M22.818,13H14.091A1.091,1.091,0,0,0,13,14.091v8.727a1.091,1.091,0,0,0,1.091,1.091h8.727a1.091,1.091,0,0,0,1.091-1.091V14.091A1.091,1.091,0,0,0,22.818,13Zm-1.091,8.727H15.182V15.182h6.545Z" transform="translate(1.091 1.091)" fill="#f93a0b"/>
          </g>
        </svg>
      </span>
      <div>
        <select class="default-select dashboard-select border-0 bg-transparent">
          <option data-display="newest">newest</option>

          <option value="2">oldest</option>
        </select>
      </div>-->
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-12">
    <div class="row" id="contenedor_usuarios">

    </div>
  </div>
</div>
<div class="d-flex align-items-center justify-content-between flex-wrap">

  <nav>
    <ul class="pagination pagination-circle">
      <li class="page-item page-indicator">
        <a class="page-link" href="javascript:void(0)">Prev</a>
      </li>
      </li>
      <li class="page-item page-indicator">
        <a class="page-link" href="javascript:void(0)">Next</a>
      </li>
    </ul>
  </nav>
</div>
