/********************** Definicion de variables globales ****************************/

let g__cuentas = [];
let g__categorias = [];


/********************** Final Definicion de variables globales ****************************/


/********************** Funcion de inicio ****************************/
function init() {
  cargarCategorias();
  cargarCuentas();
}

init();
/********************** Final Funcion de inicio ****************************/

/********************** Datatable ****************************/
function renderCuentas() {
  let content = '';
  g__cuentas.forEach((c, i) => {
    content += `
      <div class="col-xl-3 col-xxl-4  col-md-4 col-sm-6">
        <div class="card">
          <div class="Accounts2 card-body">
            <div class="text-center">
              <span>
                <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                  <g  transform="translate(-457 -443)">
                  <rect  width="71" height="71" rx="12" transform="translate(457 443)" fill="${c.color}"></rect>
                  <g  transform="translate(457 443)">
                    <rect  data-name="placeholder" width="71" height="71" rx="12" fill="${c.color}"></rect>
                    <circle  data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
                    <circle  data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
                  </g>
                  </g>
                </svg>
              </span>
              <h4 class="fs-20 mb-0">${c.cuenta}</h4>
              <span class="text-primary mb-3 d-block">${c.categoria}</span>
            </div>
            <div class="">
              <span class="d-block mb-1"><i class="fas fa-info me-2"></i>${c.descripcion}</span>
            </div>

          </div>
          <div class="card-footer text-center border-0 pt-0">
            <a href="javascript:void(0);" class="btn btn-info light mr-2 view_account_btn" data-id="${c._id}">
              <svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px" viewBox="0 0 32 32" x="0px" y="0px"><g data-name="Layer 21"><path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"></path><circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"></circle></g></svg>
            </a>
            <a href="javascript:void(0);" class="btn btn-secondary light mr-2 edit_account_btn" data-id="${c._id}">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24"></rect>
                  <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                  <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                </g>
              </svg>
            </a>
            <a href="javascript:void(0);" class="btn btn-danger light delete_account_btn" data-id="${c._id}">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24"></rect>
                  <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                  <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                </g>
              </svg>
            </a>
            <a href="javascript:void(0);" class="btn btn-success light mr-2 add_movement_btn" data-id="${c._id}">
              <span style="font-size: 1.6em;">
                <i class="fas fa-plus-circle"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      `;
  });

  $('#contenedor_cuentas').html(content);
}
/********************** FInal  Datatable ****************************/
$('body').off();

/********************** Funciones del CRUD ***************************/
function crearCuenta() {
  let data = {
    id_categoria: $("#categoria_add").val(),
    cuenta: $("#cuenta_add").val(),
    descripcion: $("#descripcion_add").val(),
    color: $("#color_add").val(),
    activo: '1'
  };
  if (validaciones(data)) {
    fetch('<?=API_PATH?>cuenta/create.php', {
        method: 'post',
        headers: {
          'Accept': 'application/json, text/plain, */*',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
      }).then(res => res.json())
      .then(() => {
        swal("Creation successfull!!", "The record has been created!!", "success")
        cargarCuentas();
        $('#account_modal').modal('hide');

      });
  } else {
    sweetAlert("Oops...", "Incomplete Information !!", "error")
  }
}

function editarCuenta() {
  let data = {
    _id: $("#id_add").val(),
    id_categoria: $("#categoria_add").val(),
    cuenta: $("#cuenta_add").val(),
    descripcion: $("#descripcion_add").val(),
    color: $("#color_add").val(),
    activo: '1'
  };
  if (validaciones(data)) {
    fetch('<?=API_PATH?>cuenta/update.php', {
        method: 'post',
        headers: {
          'Accept': 'application/json, text/plain, */*',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
      }).then(res => res.json())
      .then(() => {
        swal("update successfull!!", "The record has been updated!!", "success")
        cargarCuentas();
        $('#account_modal').modal('hide');

      });
  } else {
    sweetAlert("Oops...", "Incomplete Information !!", "error")
  }
}

function eliminarCuenta(id) {

  let data = {
    _id: id
  };
  swal({
    title: "Are you sure to delete ?",
    text: "You will not be able to recover information!!",
    type: "warning",
    showCancelButton: !0,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, delete it !!"
  }).then((result) => {
    if (result.value == true) {
      fetch('<?=API_PATH?>cuenta/delete.php', {
          method: 'post',
          headers: {
            'Accept': 'application/json, text/plain, */*',
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(data)
        }).then(res => res.json())
        .then(() => {
          cargarCuentas();
          swal("Deleted !!", "The Budget has been deleted !!", "success")

        });
    }
  });


}

function crearMovimiento() {
  let data = {
    id_cuenta: $("#cuenta_select_add").val(),
    id_usuario: '1',
    fecha: $("#fecha_add").val(),
    monto: $("#monto_add").val(),
    descripcion: $("#descripcion_add").val(),
    es_gasto: $("#es_gasto_select_add").val(),
    visto: '2',
    activo: '1'
  };
  if (validacionM(data)) {
    fetch('<?=API_PATH?>movimiento/create.php', {
        method: 'post',
        headers: {
          'Accept': 'application/json, text/plain, */*',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
      }).then(res => res.json())
      .then(() => {
        swal("Creation successfull!!", "The record has been created!!", "success")
        $('#account_modal').modal('hide');

      });
  } else {
    sweetAlert("Oops...", "Incomplete Information !!", "error")
  }
}
/********************** Final Funciones del CRUD ***************************/



/********************** Otras Funciones ***************************/

$('body').on('click', '.add_movement_btn', function(e) {
  let content = `
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Add movement</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal">
              </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="mb-3 col-md-6">
                <label class="form-label">Type of Record</label>
                <select class="default-select form-control wide" id="es_gasto_select_add">
                  <option selected value="1">Expense</option>
                  <option value="2">Income</option>
                </select>
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label">Budget</label>
                <select disabled class="default-select form-control wide" id="cuenta_select_add">
                  <option >Choose...</option>`;

  g__cuentas.forEach((cuenta) => {
    if (cuenta._id == $(this).data('id')){
      content += `<option selected value="${cuenta._id}">${cuenta.cuenta}</option>`
    }else {
      content += `<option  value="${cuenta._id}">${cuenta.cuenta}</option>`

    }

  });

  content += `</select>
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-md-12">
                <label class="form-label">Ammount</label>
                <div class="col-auto">
                  <div class="input-group mb-2 input-success">
                    <div class="input-group-text">$</div>
                    <input id="monto_add" class="form-control" min="1" step="0.01" placeholder="100,000,000" type="number" value=""/>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <label class="form-label">Description</label>
              <div class="mb-12">
                <textarea id="descripcion_add" class="form-control" rows="4" value=""></textarea>
              </div>
            </div>
          </br>
          <div class="row">
            <div class="mb-3 col-md-4">
              <label class="form-label">Date</label>
              <input id="fecha_add" type="datetime-local" class="form-control" placeholder="Saturday 24 June 2017 - 21:44" >
            </div>
            <div class="mb-3 col-md-8">
              <label class="form-label">Voucher</label>
              <div class="input-group input-info">
                <span class="input-group-text">Upload</span>
                <div class="form-file">
                  <input type="file" id="voucher_add" class="form-file-input form-control" value="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
          <button type="button" id="add_movement_btn" class="btn btn-success">Save</button>
          </div>
      </div>
  </div>
  `;
  $('#account_modal').html(content);
  // $('#fecha_add').bootstrapMaterialDatePicker({
  //     format: 'dddd DD MMMM YYYY - HH:mm'
  // });
  $('#account_modal').modal('show');
});
$('body').on('click', '#add_account_btn', function(e) {
  let content = `
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Create Budget </h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label">Budget Name</label>
                <input id="cuenta_add" class="form-control" type="text" value="" placeholder="Casita..." />
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label">Category</label>
              <select class="default-select form-control wide" id="categoria_add">
                <option selected>Choose...</option>`;
  g__categorias.forEach((c) => {
    content += `<option value="${c._id}">${c.categoria}</option>`
  });
  content += `</select>
            </div>
          </div>
          <div class="row">
            <label class="form-label">Description</label>
            <div class="mb-12">
                <textarea id="descripcion_add" class="form-control" rows="4"></textarea>
            </div>
          </div>
          </br>
          <div class="row">
            <div class="col-xl-4 col-lg-6 mb-3"">
              <div class="example">
                <p class="mb-1">Color</p>
                <input type="color" id="color_add" class="form-control"  value="#000">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
          <button type="button" id="add_confirm_btn" class="btn btn-success">Save</button>
        </div>
      </div>
    </div>
    `;
  $('#account_modal').html(content);


  // $('#fecha_edit').bootstrapMaterialDatePicker({
  //     format: 'dddd DD MMMM YYYY - HH:mm'
  // });

  $('#account_modal').modal('show');


});
$('body').on('click', '.view_account_btn', function(e) {
  var data = g__cuentas.find(x => x._id == $(this).data('id'));
  let content = `
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Budget #${data._id}</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label">Budget Name</label>
                <input id="cuenta_add" class="form-control" readonly type="text" value="${data.cuenta}"/>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label">Category</label>
              <input id="categoria_add" class="form-control" readonly type="text" value="${data.categoria}"/>
            </div>
          </div>
          <div class="row">
            <label class="form-label">Description</label>
            <div class="mb-12">
                <textarea id="descripcion_add" readonly class="form-control" rows="4">${data.descripcion}</textarea>
            </div>
          </div>
          </br>
          <div class="row">
            <div class="col-xl-4 col-lg-6 mb-3"">
              <div class="example">
                <p class="mb-1">Color</p>
                <input type="text" class="as_colorpicker form-control" disabled value="#7ab2fa">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    `;
  $('#account_modal').html(content);
  $(".as_colorpicker").asColorPicker();


  // $('#fecha_edit').bootstrapMaterialDatePicker({
  //     format: 'dddd DD MMMM YYYY - HH:mm'
  // });

  $('#account_modal').modal('show');

});
$('body').on('click', '.delete_account_btn', function(e) {
  eliminarCuenta($(this).data('id'));
});
$('body').on('click', '.edit_account_btn', function(e) {
  var data = g__cuentas.find(x => x._id == $(this).data('id'));
  let content = `
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Budget #${data._id}</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <input id="id_add" type="hidden" value="${data._id}"/>

      <div class="modal-body">
        <div class="row">
          <div class="mb-3 col-md-6">
            <label class="form-label">Budget Name</label>
              <input id="cuenta_add" class="form-control" type="text" value="${data.cuenta}" placeholder="Casita..." />
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">Category</label>
            <select class="default-select form-control wide" id="categoria_add">
              <option>Choose...</option>`;
  g__categorias.forEach((c) => {
    if (c._id == data.id_categoria) {
      content += `<option selected value="${c._id}">${c.categoria}</option>`
    } else {
      content += `<option value="${c._id}">${c.categoria}</option>`
    }
  });
  content += `</select>
          </div>
        </div>
        <div class="row">
          <label class="form-label">Description</label>
          <div class="mb-12">
              <textarea id="descripcion_add" class="form-control" rows="4">${data.descripcion}</textarea>
          </div>
        </div>
        </br>
        <div class="row">
          <div class="col-xl-12 col-lg-12 mb-12">
            <div class="example">
              <p class="mb-1">Color</p>
              <input type="color" id="color_add" class="form-control"  value="${data.color}">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
        <button type="button" id="edit_confirm_btn" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
    `;
  $('#account_modal').html(content);

  $('#account_modal').modal('show');
  //$("#color_add").asColorPicker();

});
$('body').on('click', '#add_confirm_btn', function(e) {
  crearCuenta();
});
$('body').on('click', '#edit_confirm_btn', function(e) {
  editarCuenta();
});
$('body').on('click', '#add_movement_btn', function(e) {
  crearMovimiento();
});

function formatNum(n) {
  return parseFloat(n).format(2, 3, '.', ',');
};

Number.prototype.format = function(n, x, s, c) {
  var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
    num = this.toFixed(Math.max(0, ~~n));
  return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
};
/********************** Final Funciones ***************************/


/********************** Carga de catalogos ***************************/



function cargarCuentas() {
  fetch(`<?=API_PATH?>cuenta/read.php`)
    .then(response => response.json())
    .then(r => {
      g__cuentas = r.data.records
    })
    .then(() => renderCuentas());
}

function cargarCategorias() {
  fetch(`<?=API_PATH?>cat_categoria/read.php`)
    .then(response => response.json())
    .then(r => {
      g__categorias = r.data.records
    });
}
/********************** Final Carga de catalogos ***************************/


/********************** Validaciones ***************************/


function validaciones(data) {
  if (data.id_categoria != '' && data.color != '' && data.cuenta != '' && data.descripcion != '') {
    return true;
  } else {
    return false
  }
}
function validacionM(data) {
  if (data.id_cuenta != '' && data.id_usuario != '' && data.fecha != '' && data.monto != '' && Number(data.monto) > 0 && data.descripcion != '' && data.es_gasto != '') {
    return true;
  } else {
    return false
  }
}

function checkValidNumber(dato) {
  return (!!dato.match(/^[0-9]+$/));
}

/********************** Final  Validaciones ***************************/
