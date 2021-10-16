//Variables globales
let g__cuentas;
let total_count_cuentas = 0;







//Execute the page script
Init();



//script entrypoint
function Init(){
  loadCuentas()
}



// Carga de datos desde el API
function loadCuentas(){

  fetch('<?=API_PATH?>cuenta/read.php')
  .then( r => r.json())
  .then( r =>{
    g__cuentas = r.data.records
    total_count_cuentas = r.data.total_count
  })
  .then( () => {
    renderCuentas()
  })


}




function renderCuentas(){

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
          <div class="d-none">
            <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
            <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
          </div>
        </div>
      </div>
    </div>
    `;
  });



  $('#contenedor_cuentas').html(content);

}
