<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Chartjs, PHP dan MySQL Demo Grafik Lingkaran (Doughnut)</title>
    <!--<script src="http://kop-tunaskencana/assets/jsChart.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.umd.js" integrity="sha512-vCUbejtS+HcWYtDHRF2T5B0BKwVG/CLeuew5uT2AiX4SJ2Wff52+kfgONvtdATqkqQMC9Ye5K+Td0OTaz+P7cw==" crossorigin="anonymous" type="module" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js" integrity="sha512-v3ygConQmvH0QehvQa6gSvTE2VdBZ6wkLOlmK7Mcy2mZ0ZF9saNbbk19QeaoTHdWIEiTlWmrwAL4hS8ElnGFbA==" crossorigin="anonymous" type="module" referrerpolicy="no-referrer"></script>
    <style type="text/css">

    </style>
</head>

<body>

    <div class="container">
        <canvas id="myChart" height="100px"></canvas>
    </div>

</body>

</html>

<script type="text/javascript">
    var nom = <?= json_encode($arrayNom) ?>;
    const data = {
      labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desembber'],
      datasets: [
        {
          label: 'Pengeluaran',
          data: nom,
          pointStyle: 'circle',
          pointRadius: 10,
          pointHoverRadius: 15
        },
        {
          label: 'Pemasukan',
          data: nom,
          pointStyle: 'circle',
          pointRadius: 10,
          pointHoverRadius: 15
        }
      ]
    };
    // var ctx = document.getElementById("piechart").getContext("2d");
    const config = {
      type: 'line',
      data: data,
      options: {
        responsive: true,
        plugins: {
          title: {
            display: true,
            text: (ctx) => 'Point Style: ' + ctx.chart.data.datasets[0].pointStyle,
          }
        }
      }
    };
    // var data = {
    //     labels: ["Pengeluaran", "Pemasukan"],
    //     datasets: [{
    //         label: "Penjualan Barang",
    //         data: nom,
    //         backgroundColor: [
    //             'rgb(194, 0, 0)',
    //             'rgb(0, 194, 58)',
    //         ]
    //     }]
    // };

    // var myPieChart = new Chart(ctx, {
    //     type: 'doughnut',
    //     data: data,
    //     options: {
    //         responsive: true
    //     }
    // });
</script>
