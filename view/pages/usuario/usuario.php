<?php if (isset($_GET[NO_ACCESS])): ?>
  <h3> ACCESS DENIED TO ADMIN PANEL </h3>
  <hr>
<?php endif; ?>
<!-- <a href="?<?=ADMIN_VIEW?>"> Go To Admin </a> -->

<div class="row page-titles">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Users</a></li>
  </ol>
</div>

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
  <div class="sm-mb-0 mb-3">
    <h5>Showing 12 of 124 Users Results</h5>
    <span>Based your preferences</span>
  </div>
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
    <div class="row">
      <div class="col-xl-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex">
                <span class="Studios-info">
                  <svg xmlns="http://www.w3.org/2000/svg" width="97" height="97" viewBox="0 0 97 97">
                    <g  transform="translate(-0.785)">
                    <rect  width="97" height="97" rx="12" transform="translate(0.785)" fill="#c5c5c5"/>
                    <g  transform="translate(0.348)">
                      <rect  data-name="placeholder" width="97" height="97" rx="12" transform="translate(0.438)" fill="#2769ee"/>
                      <ellipse  data-name="Ellipse 12" cx="24.359" cy="24.702" rx="24.359" ry="24.702" transform="translate(20.2 27.447)" fill="#fff"/>
                      <ellipse  data-name="Ellipse 11" cx="14.853" cy="15.096" rx="14.853" ry="15.096" transform="translate(49.907 20.585)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                    </g>
                    </g>
                  </svg>
                </span>
                <div>
                  <h4 class="fs-20 mb-1">Edwin Zuñiga</h4>
                  <span class="mb-3 d-block">Admin</span>
                  <span class="d-block"><i class="fas fa-envelope me-2"></i>email@domain.com</span>
                </div>
              </div>
              <div class="action-buttons d-flex justify-content-end">
                <a href="javascript:void(0);" class="btn btn-info light mr-2 view_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px" viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"></path><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"></circle></g></svg>
                </a>
                <a href="javascript:void(0);" class="btn btn-secondary light mr-2 edit_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                      <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                    </g>
                  </svg>
                </a>
                <a href="javascript:void(0);" class="btn btn-danger light delete_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                      <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex">
                <span class="Studios-info">
                  <svg xmlns="http://www.w3.org/2000/svg" width="97" height="97" viewBox="0 0 97 97">
                    <g  transform="translate(-0.785)">
                    <rect  width="97" height="97" rx="12" transform="translate(0.785)" fill="#c5c5c5"/>
                    <g  transform="translate(0.348)">
                      <rect  data-name="placeholder" width="97" height="97" rx="12" transform="translate(0.438)" fill="#47ae3b"/>
                      <ellipse  data-name="Ellipse 12" cx="24.359" cy="24.702" rx="24.359" ry="24.702" transform="translate(20.2 27.447)" fill="#fff"/>
                      <ellipse  data-name="Ellipse 11" cx="14.853" cy="15.096" rx="14.853" ry="15.096" transform="translate(49.907 20.585)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                    </g>
                    </g>
                  </svg>
                </span>
                <div>
                  <h4 class="fs-20 mb-1">Edwin Zuñiga</h4>
                  <span class="mb-3 d-block">Admin</span>
                  <span class="d-block"><i class="fas fa-envelope me-2"></i>email@domain.com</span>
                </div>
              </div>
              <div class="action-buttons d-flex justify-content-end">
                <a href="javascript:void(0);" class="btn btn-info light mr-2 view_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px" viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"></path><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"></circle></g></svg>
                </a>
                <a href="javascript:void(0);" class="btn btn-secondary light mr-2 edit_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                      <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                    </g>
                  </svg>
                </a>
                <a href="javascript:void(0);" class="btn btn-danger light delete_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                      <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex">
                <span class="Studios-info">
                  <svg xmlns="http://www.w3.org/2000/svg" width="97" height="97" viewBox="0 0 97 97">
                    <g  transform="translate(-0.785)">
                    <rect  width="97" height="97" rx="12" transform="translate(0.785)" fill="#c5c5c5"/>
                    <g  transform="translate(0.348)">
                      <rect  data-name="placeholder" width="97" height="97" rx="12" transform="translate(0.438)" fill="#8030d0"/>
                      <ellipse  data-name="Ellipse 12" cx="24.359" cy="24.702" rx="24.359" ry="24.702" transform="translate(20.2 27.447)" fill="#fff"/>
                      <ellipse  data-name="Ellipse 11" cx="14.853" cy="15.096" rx="14.853" ry="15.096" transform="translate(49.907 20.585)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                    </g>
                    </g>
                  </svg>
                </span>
                <div>
                  <h4 class="fs-20 mb-1">Sergio Chang</h4>
                  <span class="mb-3 d-block">Admin</span>
                  <span class="d-block"><i class="fas fa-envelope me-2"></i>email@domain.com</span>
                </div>
              </div>
              <div class="action-buttons d-flex justify-content-end">
                <a href="javascript:void(0);" class="btn btn-info light mr-2 view_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px" viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"></path><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"></circle></g></svg>
                </a>
                <a href="javascript:void(0);" class="btn btn-secondary light mr-2 edit_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                      <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                    </g>
                  </svg>
                </a>
                <a href="javascript:void(0);" class="btn btn-danger light delete_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                      <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex">
                <span class="Studios-info">
                  <svg xmlns="http://www.w3.org/2000/svg" width="97" height="97" viewBox="0 0 97 97">
                    <g  transform="translate(-0.785)">
                    <rect  width="97" height="97" rx="12" transform="translate(0.785)" fill="#c5c5c5"/>
                    <g  transform="translate(0.348)">
                      <rect  data-name="placeholder" width="97" height="97" rx="12" transform="translate(0.438)" fill="#e1b746"/>
                      <ellipse  data-name="Ellipse 12" cx="24.359" cy="24.702" rx="24.359" ry="24.702" transform="translate(20.2 27.447)" fill="#fff"/>
                      <ellipse  data-name="Ellipse 11" cx="14.853" cy="15.096" rx="14.853" ry="15.096" transform="translate(49.907 20.585)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                    </g>
                    </g>
                  </svg>
                </span>
                <div>
                  <h4 class="fs-20 mb-1">David Kubes</h4>
                  <span class="mb-3 d-block">Admin</span>
                  <span class="d-block"><i class="fas fa-envelope me-2"></i>email@domain.com</span>
                </div>
              </div>
              <div class="action-buttons d-flex justify-content-end">
                <a href="javascript:void(0);" class="btn btn-info light mr-2 view_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px" viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"></path><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"></circle></g></svg>
                </a>
                <a href="javascript:void(0);" class="btn btn-secondary light mr-2 edit_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                      <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                    </g>
                  </svg>
                </a>
                <a href="javascript:void(0);" class="btn btn-danger light delete_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                      <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex">
                <span class="Studios-info">
                  <svg xmlns="http://www.w3.org/2000/svg" width="97" height="97" viewBox="0 0 97 97">
                    <g  transform="translate(-0.785)">
                    <rect  width="97" height="97" rx="12" transform="translate(0.785)" fill="#c5c5c5"/>
                    <g  transform="translate(0.348)">
                      <rect  data-name="placeholder" width="97" height="97" rx="12" transform="translate(0.438)" fill="#314c82"/>
                      <ellipse  data-name="Ellipse 12" cx="24.359" cy="24.702" rx="24.359" ry="24.702" transform="translate(20.2 27.447)" fill="#fff"/>
                      <ellipse  data-name="Ellipse 11" cx="14.853" cy="15.096" rx="14.853" ry="15.096" transform="translate(49.907 20.585)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                    </g>
                    </g>
                  </svg>
                </span>
                <div>
                  <h4 class="fs-20 mb-1">Marta Sobalvarro</h4>
                  <span class="mb-3 d-block">View, Edit</span>
                  <span class="d-block"><i class="fas fa-envelope me-2"></i>email@domain.com</span>
                </div>
              </div>
              <div class="action-buttons d-flex justify-content-end">
                <a href="javascript:void(0);" class="btn btn-info light mr-2 view_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px" viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"></path><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"></circle></g></svg>
                </a>
                <a href="javascript:void(0);" class="btn btn-secondary light mr-2 edit_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                      <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                    </g>
                  </svg>
                </a>
                <a href="javascript:void(0);" class="btn btn-danger light delete_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                      <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex">
                <span class="Studios-info">
                  <svg xmlns="http://www.w3.org/2000/svg" width="97" height="97" viewBox="0 0 97 97">
                    <g  transform="translate(-0.785)">
                    <rect  width="97" height="97" rx="12" transform="translate(0.785)" fill="#c5c5c5"/>
                    <g  transform="translate(0.348)">
                      <rect  data-name="placeholder" width="97" height="97" rx="12" transform="translate(0.438)" fill="#2769ee"/>
                      <ellipse  data-name="Ellipse 12" cx="24.359" cy="24.702" rx="24.359" ry="24.702" transform="translate(20.2 27.447)" fill="#fff"/>
                      <ellipse  data-name="Ellipse 11" cx="14.853" cy="15.096" rx="14.853" ry="15.096" transform="translate(49.907 20.585)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                    </g>
                    </g>
                  </svg>
                </span>
                <div>
                  <h4 class="fs-20 mb-1">Michael Brenes</h4>
                  <span class="mb-3 d-block">View Only</span>
                  <span class="d-block"><i class="fas fa-envelope me-2"></i>email@domain.com</span>
                </div>
              </div>
              <div class="action-buttons d-flex justify-content-end">
                <a href="javascript:void(0);" class="btn btn-info light mr-2 view_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px" viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"></path><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"></circle></g></svg>
                </a>
                <a href="javascript:void(0);" class="btn btn-secondary light mr-2 edit_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                      <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                    </g>
                  </svg>
                </a>
                <a href="javascript:void(0);" class="btn btn-danger light delete_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                      <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex">
                <span class="Studios-info">
                  <svg xmlns="http://www.w3.org/2000/svg" width="97" height="97" viewBox="0 0 97 97">
                    <g  transform="translate(-0.785)">
                    <rect  width="97" height="97" rx="12" transform="translate(0.785)" fill="#c5c5c5"/>
                    <g  transform="translate(0.348)">
                      <rect  data-name="placeholder" width="97" height="97" rx="12" transform="translate(0.438)" fill="#2769ee"/>
                      <ellipse  data-name="Ellipse 12" cx="24.359" cy="24.702" rx="24.359" ry="24.702" transform="translate(20.2 27.447)" fill="#fff"/>
                      <ellipse  data-name="Ellipse 11" cx="14.853" cy="15.096" rx="14.853" ry="15.096" transform="translate(49.907 20.585)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                    </g>
                    </g>
                  </svg>
                </span>
                <div>
                  <h4 class="fs-20 mb-1">Karla Boniche</h4>
                  <span class="mb-3 d-block">Create Only</span>
                  <span class="d-block"><i class="fas fa-envelope me-2"></i>email@domain.com</span>
                </div>
              </div>
              <div class="action-buttons d-flex justify-content-end">
                <a href="javascript:void(0);" class="btn btn-info light mr-2 view_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px" viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"></path><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"></circle></g></svg>
                </a>
                <a href="javascript:void(0);" class="btn btn-secondary light mr-2 edit_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                      <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                    </g>
                  </svg>
                </a>
                <a href="javascript:void(0);" class="btn btn-danger light delete_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                      <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex">
                <span class="Studios-info">
                  <svg xmlns="http://www.w3.org/2000/svg" width="97" height="97" viewBox="0 0 97 97">
                    <g  transform="translate(-0.785)">
                    <rect  width="97" height="97" rx="12" transform="translate(0.785)" fill="#c5c5c5"/>
                    <g  transform="translate(0.348)">
                      <rect  data-name="placeholder" width="97" height="97" rx="12" transform="translate(0.438)" fill="#2769ee"/>
                      <ellipse  data-name="Ellipse 12" cx="24.359" cy="24.702" rx="24.359" ry="24.702" transform="translate(20.2 27.447)" fill="#fff"/>
                      <ellipse  data-name="Ellipse 11" cx="14.853" cy="15.096" rx="14.853" ry="15.096" transform="translate(49.907 20.585)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                    </g>
                    </g>
                  </svg>
                </span>
                <div>
                  <h4 class="fs-20 mb-1">Edwin Zuñiga</h4>
                  <span class="mb-3 d-block">Admin</span>
                  <span class="d-block"><i class="fas fa-envelope me-2"></i>email@domain.com</span>
                </div>
              </div>
              <div class="action-buttons d-flex justify-content-end">
                <a href="javascript:void(0);" class="btn btn-info light mr-2 view_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px" viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"></path><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"></circle></g></svg>
                </a>
                <a href="javascript:void(0);" class="btn btn-secondary light mr-2 edit_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                      <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                    </g>
                  </svg>
                </a>
                <a href="javascript:void(0);" class="btn btn-danger light delete_movement_btn" data-id="${Number(row._id)}">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                      <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="d-flex align-items-center justify-content-between flex-wrap">
  <div class="sm-mb-0 mb-3">
    <h5 class="mb-0">Showing 5 of 102 Data</h5>
  </div>
  <nav>
    <ul class="pagination pagination-circle">
      <li class="page-item page-indicator">
        <a class="page-link" href="javascript:void(0)">Prev</a>
      </li>
      <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
      </li>
      <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
      <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
      <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
      <li class="page-item page-indicator">
        <a class="page-link" href="javascript:void(0)">Next</a>
      </li>
    </ul>
  </nav>
</div>
