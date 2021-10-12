var pieChart3 = function(){
   var options = {
        series: [90, 68, 85, 40],
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
  colors:['#68e365', '#f72b50', '#d653c1','#ffa755'],
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
