<!DOCTYPE html>
<html>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
</head>

<body>

    <canvas id="myChartbar" style="width:100%; height:240px"></canvas>

    <script>
        const xValues = @json($xValues);
        const yValues = @json($yValues);
        const barColors = @json($barColors);

        new Chart("myChartbar", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                plugins: {
                    datalabels: {
                        anchor: 'end',
                        align: 'end',
                        formatter: function(value, context) {
                            return value.toFixed(2) + '%';
                        }
                    }
                },
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "4M ANALYZE"
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            max: 100,
                            stepSize: 20
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            fontSize: 11 // Set the font size for x-axis labels
                        }
                    }]
                }
            }
        });
    </script>

</body>

</html>
