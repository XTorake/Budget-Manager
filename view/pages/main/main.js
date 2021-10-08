var pieChart3 = function(){
   var options = {
        series: [90, 68, 85],
        chart: {
        type: 'donut',
    height:230
      },
  dataLabels:{
    enabled: false
  },
  stroke: {
        width: 0,
      },
  colors:['#F6AD2E', 'var(--primary)', '#412EFF'],
  legend: {
            position: 'bottom',
      show:false
          },
      responsive: [{
        breakpoint: 768,
        options: {
         chart: {
      height:200
    },
        }
      }]
      };

      var chart = new ApexCharts(document.querySelector("#pieChart3"), options);
      chart.render();

}

pieChart3();
