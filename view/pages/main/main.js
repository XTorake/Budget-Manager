let g__categorias = [];
let g__cuentas = [];
let g__movimientos = [];

function Init() {
  loadInfo();



}

Init();

function totals() {
  let totalBudget = 0;
  let totalSpent = 0;
  let totalAvailable = 0;
  g__categorias.forEach((c) => {

    totalBudget = totalBudget + Number(c.balance_categoria);
    totalSpent = totalSpent + Number(c.pagos_categoria);
    totalAvailable = totalBudget - totalSpent;
  });
  $('#total_budget').text('$' + formatNum(totalBudget));
  $('#total_spent').text('$' + formatNum(totalSpent));
  $('#total_available').text('$' + formatNum(totalAvailable));
}

function accounts() {
  let content = ``;
  let percentage = 0;
  g__cuentas.forEach((c) => {

    percentage = ((c.balance_cuenta- c.pagos_cuenta) / (c.balance_cuenta)) * 100;
    percentage = percentage.toFixed(0);
    available = c.balance_cuenta - c.pagos_cuenta ;
    content += `
    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6 col-md-6">
      <div class="widget-stat card" style="background-color:white;">
        <div class="card-body p-4">
          <div class="media">
            <span class="me-3 " style="background-color:${c.color}30;">
              <i class="la la-dollar"  style="color:${c.color};"></i>
            </span>
            <div class="media-body ">
              <p class="mb-1">${c.cuenta}</p>
              <h4 style="color:#555;">${'$'+formatNum(c.balance_cuenta)}</h4>
              <h5 class="text-muted">${'Left: $'+formatNum(available)}</h5>
              <div class="progress mb-2"  style="background-color:${c.color}40;">
                <div class="progress-bar progress-animated " style="width: ${percentage+'%'};background-color:${c.color}"></div>
              </div>
              <small> ${percentage+'%'} left</small>
            </div>
          </div>
        </div>
      </div>
    </div>`;
  });
  $('#accounts').html(content);
}

function summary() {
  let content = `
  <li class="list-group-item d-flex px-0 justify-content-between">
    <strong>Category</strong>
    <strong>Initial Value</strong>
    <strong>Payments</strong>
  </li>`;

  let overall = 0;
  let expenses = 0;
  let count_expenses = g__movimientos.total_count;
  g__categorias.forEach((c) => {
    overall = overall + Number(c.balance_categoria);
    expenses = expenses + Number(c.pagos_categoria);
    content += `
    <li class="list-group-item d-flex px-0 justify-content-between">
      <strong>${c.categoria}</strong>
      <span class="mb-0">${'$'+formatNum(c.balance_categoria)}</span>
      <span class="mb-0">${'$'+formatNum(c.pagos_categoria)}</span>
    </li>
    `;
  });
  $('#summary_list').html(content);
  $('#count_expenses').text(count_expenses);
  $('#Overall').text('$' + formatNum(overall));
  $('#summary_expenses').text('$' + formatNum(expenses));

}

function loadInfo() {
  fetch('API/dashboard/read.php')
    .then(r => r.json())
    .then(r => {
      g__categorias = r.data.categorias;
      g__cuentas = r.data.cuentas;
      totals();
      accounts();
    })
    .then(()=>{
      fetch('API/movimiento/read.php')
      .then(r =>r.json())
      .then(r => {
        g__movimientos = r.data;
        summary();
      })
    });
}


function formatNum(n) {
  return parseFloat(n).format(2, 3, '.', ',');
};

Number.prototype.format = function(n, x, s, c) {
  var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
    num = this.toFixed(Math.max(0, ~~n));
  return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
};
