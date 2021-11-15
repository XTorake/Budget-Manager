/********************** Definicion de variables globales ****************************/

let g__movimientos = [];
let g__cuentas = [];
let g__movimientos_datatable = null;
/********************** Final Definicion de variables globales ****************************/


/********************** Funcion de inicio ****************************/
function init() {
  cargarMovimientos();
  cargarCuentas();
}
init();
/********************** Final Funcion de inicio ****************************/

/********************** Datatable ****************************/
function cagarTablaMovimientos() {
  if (g__movimientos_datatable) {
    g__movimientos_datatable.destroy();
  }
  g__movimientos_datatable = $('#lista_movimientos').DataTable({
    data: g__movimientos,
    destroy: true,
    responsive: true,
    pagingType: 'full',
    columns: [{
        data: '_id'
      },
      {
        data: 'cuenta'
      },
      {
        data: 'nombre'
      },
      {
        data: 'fecha',
        render:function(data){
          return data.split(' ')[0]
        }
      },
      {
        data: 'monto',
        render: function(data, type, row) {
          let num = parseFloat(data).format(2, 3, '.', ',');
          return '$' + num;
        }
      },
      {
        data: 'es_gasto',
        render: function(data, type, row) {
          if (data == '1') {
            return `<span readonly class="badge badge-danger badge-lg light">Payment</span>`;
          } else {
            return `<span readonly class="badge badge-success badge-lg light">Initial Balance</span>`;
          }
        }
      },
      {
        data: 'funciones',
        render: function(data, type, row) {
          if (row.activo == "1") {
            return `
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
            </div>`;
          } else {
            return `El acabado se encuentra eliminado.`;
          }

        }
      }
    ],
    columnDefs: [{
      targets: 6,
      className: 'action-btn wspace-no'
    }]
  });
}



/********************** FInal  Datatable ****************************/



/********************** Funciones del CRUD ***************************/
function crearMovimiento() {
  console.log($("#fecha_add").val());
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


  if (!validaciones(data)) {
    sweetAlert("Oops...", "Incomplete Information !!", "error")
    return;
  }


  fetch('<?=API_PATH?>movimiento/create.php', {
      method: 'post',
      headers: {
        'Accept': 'application/json, text/plain, */*',
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    }).then(res => res.json())
    .then( res => {



      // UPLOAD FILE HERE.
      const FILE = document.querySelector('#voucher_add')
      let fd = new FormData();
      fd.append('file', FILE.files[0])

      if (FILE.files.length > 0) {

        $('#preloader').removeClass('d-none')

        fetch(`<?=API_PATH?>files/uploadfile.php?id=${res.data.inserted_id}`,{
          method:'POST',
          body:fd
        }).then( r => r.json() )
        .then( r => {
          swal("Creation successfull!!", "The record has been created!!", "success")
          cargarMovimientos();
          $('#movement_modal').modal('hide');
          $('#preloader').addClass('d-none')
        })


      }else{
        swal("Creation successfull!!", "The record has been created!!", "success")
        cargarMovimientos();
        $('#movement_modal').modal('hide');
      }

  });

}

function editarMovimiento() {
  let data = {
    id: $("#id_add").val(),
    id_cuenta: $("#cuenta_select_add").val(),
    id_usuario: '1',
    fecha: $("#fecha_add").val(),
    monto: $("#monto_add").val(),
    descripcion: $("#descripcion_add").val(),
    es_gasto: $("#es_gasto_select_add").val(),
    visto: '2',
    activo: '1'
  };
  if (validaciones(data)) {
    fetch('<?=API_PATH?>movimiento/update.php', {
        method: 'post',
        headers: {
          'Accept': 'application/json, text/plain, */*',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
      }).then(res => res.json())
      .then( res => {


        // UPLOAD FILE HERE.
        const FILE = document.querySelector('#voucher_edit')
        let fd = new FormData();
        fd.append('file', FILE.files[0])

        if (FILE.files.length > 0) {

          $('#preloader').removeClass('d-none')

          fetch(`<?=API_PATH?>files/uploadfile.php?id=${$("#id_add").val()}`,{
            method:'POST',
            body:fd
          }).then( r => r.json() )
          .then( r => {
            swal("update successfull!!", "The record has been updated!!", "success")
            cargarMovimientos();
            $('#movement_modal').modal('hide');
            $('#preloader').addClass('d-none')
          })


        }else{
          swal("update successfull!!", "The record has been updated!!", "success")
          cargarMovimientos();
          $('#movement_modal').modal('hide');
        }



      });
  } else {
    sweetAlert("Oops...", "Incomplete Information !!", "error")
  }
}

function eliminarMovimiento(id) {

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
    if (result.value === true) {
      fetch('<?=API_PATH?>movimiento/delete.php', {
          method: 'post',
          headers: {
            'Accept': 'application/json, text/plain, */*',
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(data)
        }).then(res => res.json())
        .then(() => {
          cargarMovimientos();
          swal("Deleted !!", "The movement has been deleted !!", "success")

        });
    }
  });


}
/********************** Final Funciones del CRUD ***************************/



/********************** Otras Funciones ***************************/

$('body').on('click', '#add_movement_btn', function(e) {

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
                <select class="default-select form-control wide" disabled  id="es_gasto_select_add">
                  <option selected value="1">Payment</option>
                  <option value="2">Income</option>
                </select>
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label">Account</label>
                <select class="default-select form-control wide" id="cuenta_select_add">
                  <option selected>Choose...</option>
  `;

  g__cuentas.forEach((cuenta) => {
    content += `<option value="${cuenta._id}">${cuenta.cuenta}</option>`
  });

  content += `  </select>
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
                <input id="fecha_add" type="date" class="form-control" placeholder="Saturday 24 June 2017 - 21:44" >
              </div>
              <div class="mb-3 col-md-8">
                <label class="form-label">Voucher</label>
                <div class="input-group input-info">
                  <span class="input-group-text">Upload</span>
                  <div class="form-file">
                    <input type="file" id="voucher_add" class="form-file-input form-control" value="" accept="application/pdf">
                  </div>
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
  $('#movement_modal').html(content);
  // $('#fecha_add').bootstrapMaterialDatePicker({
  //     format: 'dddd DD MMMM YYYY - HH:mm'
  // });
  $('#fecha_add').val(new Date().toISOString().slice(0, 10));

  $('#movement_modal').modal('show');
});

$('body').on('click', '.view_movement_btn', async function(e) {
  var data = g__movimientos.find(x => x._id == $(this).data('id'));
  let content = `
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Movement #${data._id}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <label class="form-label">Description</label>
                <div class="mb-12">
                  <textarea id="descripcion_add" readonly class="form-control" rows="4">${data.descripcion}</textarea>
                </div>
              </div>
            </br>
            <div class="row">
              <div class="mb-3 col-md-12">
                <label class="form-label">Voucher</label>
                <div id="voucher_viewer_container">
                  <p>Loading file...</p>
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
  $('#movement_modal').html(content);
  // $('#fecha_edit').bootstrapMaterialDatePicker({
  //     format: 'dddd DD MMMM YYYY - HH:mm'
  // });
  $('#movement_modal').modal('show');
  checkFileStatus(data._id)
});



function checkFileStatus(id){
  fetch(`<?=API_PATH?>files/upload/${id}.pdf`)
  .then( r => {
    if ( r.status == 404 ) {
      $('#voucher_viewer_container').html('<h2>There is no file attatched here...</h2>')
      return;
    }
    $('#voucher_viewer_container').html(`<iframe id="view_voucher_embedded" src="<?=API_PATH?>files/upload/${id}.pdf" width="100%" height="500px">`)
  })
}





$('body').on('click', '.delete_movement_btn', function(e) {
  eliminarMovimiento($(this).data('id'));
});


$('body').on('click', '.edit_movement_btn', function(e) {
  var data = g__movimientos.find(x => x._id == $(this).data('id'));
  let content = `
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Movement #${data._id}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
            <input id="id_add" type="hidden" value="${data._id}"/>

              <div class="row">
                <div class="mb-3 col-md-6">
                  <label class="form-label">Type of Record</label>
                  <select disabled class="default-select form-control wide" id="es_gasto_select_add">
                    <option>Choose...</option>`;
  if (data.es_gasto == '1') {
    content += `
                      <option selected value="1">Expense</option>
                      <option value="2">Income</option>`;
  } else {
    content += `
                      <option value="1">Expense</option>
                      <option selected value="2">Income</option>`;
  }
  content += `</select>
                </div>
                <div class="mb-3 col-md-6">
                  <label class="form-label">Account</label>
                  <select class="default-select form-control wide" id="cuenta_select_add">
                    <option>Choose...</option>`;
  g__cuentas.forEach((cuenta) => {
    if (data.id_cuenta == cuenta._id) {
      content += `<option selected value="${cuenta._id}">${cuenta.cuenta}</option>`;
    } else {
      content += `<option value="${cuenta._id}">${cuenta.cuenta}</option>`;
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
                      <input id="monto_add" class="form-control" min="1" step="0.01" placeholder="100,000,000" type="number" value="${data.monto}"/>
                    </div>
                  </div>
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
              <div class="mb-3 col-md-4">
                <label class="form-label">Date</label>
                <input id="fecha_add" type="date" class="form-control" placeholder="Saturday 24 June 2017 - 21:44" value="${data.fecha}">
              </div>
              <div class="mb-3 col-md-8">
                <label class="form-label">Voucher</label>
                <div class="input-group input-info">
                  <span class="input-group-text">Upload</span>
                  <div class="form-file">
                    <input type="file" id="voucher_edit" class="form-file-input form-control" value="" accept="application/pdf">
                  </div>
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

  $('#movement_modal').html(content);
  $('#fecha_add').val(new Date().toISOString().slice(0, 10));
  $('#movement_modal').modal('show');

});


$('body').on('click', '#add_confirm_btn', function(e) {
  crearMovimiento();
});


$('body').on('click', '#edit_confirm_btn', function(e) {
  editarMovimiento();
});

/********************** Final Funciones ***************************/


/********************** Carga de catalogos ***************************/

function cargarMovimientos() {
  fetch(`<?=API_PATH?>movimiento/read.php?pagesize=999999999`)
    .then(response => response.json())
    .then(r => {
      g__movimientos = r.data.records
    })
    .then(() => cagarTablaMovimientos());
}

function cargarCuentas() {
  fetch(`<?=API_PATH?>cuenta/read.php`)
    .then(response => response.json())
    .then(r => {
      g__cuentas = r.data.records
    });
}
/********************** Final Carga de catalogos ***************************/


/********************** Validaciones ***************************/


function validaciones(data) {
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
