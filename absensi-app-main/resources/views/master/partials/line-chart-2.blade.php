<html>
<link rel=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>

<body>
    <div class="container">
        <p class="text-center">4M Analyze Summary</p>
        <canvas id="myChartLine"></canvas>
    </div>

    <script>
        // Assuming $problem1 is an array of objects with 'date' and 'type' properties
        let presencesData1 = {!! json_encode($problem1) !!};
        let today1 = new Date();
        let year1 = today1.getFullYear();
        let month1 = today1.getMonth() + 1;
        let daysInMonth1 = new Date(year1, month1, 0).getDate();

        let totalValues1 = Array.from({
            length: daysInMonth1
        }, () => 0);

        presencesData1.forEach(presence1 => {
            let date1 = new Date(presence1.date);
            let day1 = date1.getDate();

            if (day1 >= 1 && day1 <= daysInMonth1) {
                totalValues1[day1 - 1]++;
            }
        });

        let labels1 = Array.from({
            length: daysInMonth1
        }, (_, i) => i + 1);

        // Script Chart.js untuk membuat chart
        let ctx1 = document.getElementById('myChartLine').getContext('2d');
        let myChart1 = new Chart(ctx1, {
            type: 'line',
            data: {
                labels: labels1,
                datasets: [{
                    label: 'Total 4M',
                    data: totalValues1,
                    backgroundColor: 'rgba(153, 205, 1, 0.6)',
                }],
            },
            options: {
                scales: {
                    xAxes: [{
                        ticks: {
                            fontSize: 5 // Ukuran font untuk sumbu x
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            fontSize: 10 // Ukuran font untuk sumbu y
                        }
                    }]
                }
            }
        });
    </script>
</body>

</html>
