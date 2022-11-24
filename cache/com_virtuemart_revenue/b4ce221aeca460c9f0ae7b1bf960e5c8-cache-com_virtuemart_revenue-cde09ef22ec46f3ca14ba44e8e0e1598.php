<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";a:2:{s:6:"report";a:0:{}s:2:"js";s:1417:"
  google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'Orders', 'Total Items sold', 'Revenue net'], ['2022-10-02', 0,0,0], ['2022-10-03', 0,0,0], ['2022-10-04', 0,0,0], ['2022-10-05', 0,0,0], ['2022-10-06', 0,0,0], ['2022-10-07', 0,0,0], ['2022-10-08', 0,0,0], ['2022-10-09', 0,0,0], ['2022-10-10', 0,0,0], ['2022-10-11', 0,0,0], ['2022-10-12', 0,0,0], ['2022-10-13', 0,0,0], ['2022-10-14', 0,0,0], ['2022-10-15', 0,0,0], ['2022-10-16', 0,0,0], ['2022-10-17', 0,0,0], ['2022-10-18', 0,0,0], ['2022-10-19', 0,0,0], ['2022-10-20', 0,0,0], ['2022-10-21', 0,0,0], ['2022-10-22', 0,0,0], ['2022-10-23', 0,0,0], ['2022-10-24', 0,0,0], ['2022-10-25', 0,0,0], ['2022-10-26', 0,0,0], ['2022-10-27', 0,0,0], ['2022-10-28', 0,0,0], ['2022-10-29', 0,0,0], ['2022-10-30', 0,0,0]  ]);
        var options = {
          title: 'Report for the period from Sunday, 02 October 2022 to Monday, 31 October 2022',
            series: {0: {targetAxisIndex:0},
                   1:{targetAxisIndex:0},
                   2:{targetAxisIndex:1},
                  },
                  colors: ["#00A1DF", "#A4CA37","#E66A0A"],
        };

        var chart = new google.visualization.LineChart(document.getElementById('vm_stats_chart'));

        chart.draw(data, options);
      }
";}s:6:"output";s:0:"";}