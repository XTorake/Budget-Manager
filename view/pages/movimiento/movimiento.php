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
        <div class="table-responsive">

          <table class="table display mb-4 dataTablesCard job-table table-responsive-xl card-table" id="lista_movimientos" style="width:100%">
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
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="movement_modal">

</div>
<!-- <div class="table-responsive">
  <table class="table table-sm mb-0">
    <thead>
      <tr>
        <th class="align-middle">#</th>
        <th class="align-middle pe-7">Account</th>
        <th class="align-middle">Date</th>
        <th class="align-middle text-end">Type</th>
        <th class="align-middle text-end">Ammount</th>

        <th class="no-sort"></th>
      </tr>
    </thead>
    <tbody id="orders">
      <tr class="btn-reveal-trigger">
        <td class="py-2">
          <strong>#181</strong>
          by
          <strong>Ricky Antony</strong>
          <br />
          <a href="mailto:ricky@example.com">ricky@example.com</a>
        </td>
        <td class="py-2">Casita#1</td>
        <td class="py-2">20/04/2020</td>
        <td class="py-2 text-end">
          <span class="badge badge-success">Income<span class="ms-1 fa fa-check"></span></span>
        </td>
        <td class="py-2 text-end">$99</td>

        <td class="py-2 text-end">

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
        </td>
      </tr>
      <tr class="btn-reveal-trigger">
        <td class="py-2">
          <strong>#181</strong>
          by
          <strong>Ricky Antony</strong>
          <br />
          <a href="mailto:ricky@example.com">ricky@example.com</a>
        </td>
        <td class="py-2">Casita#1</td>
        <td class="py-2">20/04/2020</td>
        <td class="py-2 text-end">
          <span class="badge badge-success">Income<span class="ms-1 fa fa-check"></span></span>
        </td>
        <td class="py-2 text-end">$99</td>

        <td class="py-2 text-end">

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
        </td>
      </tr>
    </tbody>
  </table>
</div> -->
