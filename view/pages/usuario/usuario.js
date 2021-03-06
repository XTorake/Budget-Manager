//Variables globales
let g__usuarios;
let total_count_cuentas = 0;







//Execute the page script
Init();
$('#add_usuario_btn').on('click', addUser)

//script entrypoint
function Init(){
  loadUsuarios()
}



// Carga de datos desde el API
function loadUsuarios(){

  fetch('<?=API_PATH?>usuario/read.php')
  .then( r => r.json())
  .then( r =>{
    g__usuarios = r.data.records
    total_count_cuentas = r.data.total_count
  })
  .then( () => {
    renderUsuarios()
  })


}




function renderUsuarios(){

  let content = '';
  g__usuarios.forEach((u, i) => {
    content += `
    <div class="col-xl-4 col-md-6">
      <div class="card">
        <div class="card-body">
          <div style="position:relative; padding-bottom:30px;" class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-flex">
              <span class="Studios-info">
                <svg xmlns="http://www.w3.org/2000/svg" width="97" height="97" viewBox="0 0 97 97">
                  <g  transform="translate(-0.785)">
                  <rect  width="97" height="97" rx="12" transform="translate(0.785)" fill="#c5c5c5"/>
                  <g  transform="translate(0.348)">
                    <rect  data-name="placeholder" width="97" height="97" rx="12" transform="translate(0.438)" fill="${ (u.admin == 1) ? '#2769ee' : '#90EE90' }"/>
                    <ellipse  data-name="Ellipse 12" cx="24.359" cy="24.702" rx="24.359" ry="24.702" transform="translate(20.2 27.447)" fill="#fff"/>
                    <ellipse  data-name="Ellipse 11" cx="14.853" cy="15.096" rx="14.853" ry="15.096" transform="translate(49.907 20.585)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                  </g>
                  </g>
                </svg>
              </span>
              <div>
                <h4 class="fs-20 mb-3">${u.nombre}</h4>
                <span class="mb-3 d-block">${ (u.admin == 1) ? 'ADMIN' : 'READONLY' }</span>
                <span class="d-block"><i class="fas fa-envelope me-2"></i>${u.correo}</span>
              </div>
            </div>
            <div style="position:absolute; right:0px; bottom:-10px; padding-bottom:0;" class="action-buttons d-flex justify-content-end">
              <a href="javascript:void(0);" class="btn btn-secondary light mr-2" onclick="editUser(${Number(u._id)})" data-id="${Number(u._id)}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24"></rect>
                    <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                    <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                  </g>
                </svg>
              </a>
              <a href="javascript:void(0);" class="btn btn-danger light" onclick="deleteUser(${Number(u._id)})" data-id="${Number(u._id)}">
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
    `;
  });

  $('#contenedor_usuarios').html(content);

}




function addUser(){
  let content = `
    <div class="form-group mb-4">
      <label for="">User name:</label>
      <input type="text" class="form-control" id="add_user-nombre" value="" placeholder="John Doe">
    </div>
    <div class="form-group mb-4">
      <label for="">User Email:</label>
      <input type="email" class="form-control" id="add_user-correo" value="" placeholder="john.doe@el-lugar.com">
    </div>
    <div class="form-group mb-4">
      <label for="">User access:</label>
      <div class="input-group mb-3">
        <input type="text" class="form-control" id="add_user-login_password" value="E!LugarBudget2021">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" onclick="generatePassword('add_user-login_password')" type="button">Generate Password</button>
        </div>
      </div>
    </div>
    <div class="form-group mb-4">
      <label for="">User access:</label>
      <select id="add_user-admin" class="form-control">
        <option value="1">All Access</option>
        <option value="2">Readonly</option>
      </select>
    </div>
  `
  let actions = `
    <button class="btn btn-success" id="add_user-confirm"> Add User </button>
  `;
  __showModal('<h3>Add User</h3>', content, actions)


  $('#add_user-confirm').on('click', function(){

    const NEW = {
      nombre:$('#add_user-nombre').val(),
      correo:$('#add_user-correo').val(),
      admin:$('#add_user-admin').val(),
      activo:1,
      login_salt:'',
      login_password:$('#add_user-login_password').val()
    }

    //console.log(NEW)
    if (NEW.nombre == '' || NEW.correo == '') {
      swal('Ooops!', 'Please fill in all of the required fields!', 'error')
      return;
    }

    fetch('<?=API_PATH?>usuario/create.php', {
      method:'POST',
      body:JSON.stringify(NEW)
    })
    .then( r => r.json())
    .then( r =>{
      if (!r.code) {
        swal('Ooops!', r.message , 'error')
        return;
      }
      swal('YAY!', 'Users added succesfully!', 'success');
      loadUsuarios()
      __hideModal();
    })

  })
}



function generatePassword(container){
  $(`#${container}`).val(makeid(10))
}



function editUser(id){
  const USER = g__usuarios.find( x => x._id == id )
  console.log(USER)

  let content = `
    <div class="form-group mb-4">
      <label for="">User name:</label>
      <input type="text" class="form-control" id="edit_user-nombre" value="${USER.nombre}" placeholder="John Doe">
    </div>
    <div class="form-group mb-4">
      <label for="">User Email:</label>
      <input type="email" class="form-control" id="edit_user-correo" value="${USER.correo}" placeholder="john.doe@el-lugar.com">
    </div>
    <div class="form-group mb-4">
      <label for="">User access:</label>
      <select id="edit_user-admin" class="form-control">
        <option value="1" ${(USER.admin == 1)? "selected" : '' }>All Access</option>
        <option value="2" ${(USER.admin == 2)? "selected" : '' }>Readonly</option>
      </select>
    </div>
  `
  let actions = `
    <button class="btn btn-success" id="edit_user-confirm"> Save Changes </button>
  `;

  __showModal('<h3>Edit User</h3>', content, actions)


  //
  $('#edit_user-confirm').on('click', function(){

    USER.nombre = $('#edit_user-nombre').val();
    USER.correo = $('#edit_user-correo').val();
    USER.admin = $('#edit_user-admin').val();

    fetch('<?=API_PATH?>usuario/update.php', {
      method:"POST",
      body:JSON.stringify(USER)
    })
    .then( r => r.json())
    .then( r =>{

      if(!r.code){
        swal('Ooops!', r.message, 'error')
        return;
      }
      swal('YAY!', 'Done, user updated!', 'success')
      loadUsuarios()
      __hideModal()

    })

  })

}


function deleteUser(id){
  const USER = g__usuarios.find( x => x._id == id )
  swal({
    title: "Are you sure to delete?",
    text: "You will not be able to recover information!!",
    type: "warning",
    showCancelButton: !0,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, delete it !!"
  }).then((result) => {
    if (result.value == true) {
      fetch('<?=API_PATH?>usuario/delete.php', {
        method: 'post',
        body: JSON.stringify({_id:id})
      })
      .then(res => res.json())
      .then(() => {
        loadUsuarios();
        swal("Deleted !!", "The user has been deleted!", "success")
      });
    }
  });
}
