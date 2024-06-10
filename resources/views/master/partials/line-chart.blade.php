<html>
<link rel=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>

<body>
    <p class="text-center">Man Power Summary</p>
    <canvas id="myChart"></canvas>

    <script>
        let presencesData = {!! json_encode($presences1) !!};

        let today = new Date();
        let year = today.getFullYear();
        let month = today.getMonth() + 1;
        let daysInMonth = new Date(year, month, 0).getDate();

        let totalValues = {};

        for (let i = 1; i <= daysInMonth; i++) {
            let currentDate = year + '-' + month.toString().padStart(2, '0') + '-' + i.toString().padStart(2, '0');
            totalValues[currentDate] = 0;
        }

        presencesData.forEach(presence => {
            let date = presence.presence_date;
            let isPermission = presence.presence_date ? 1 : 0;

            if (date in totalValues) {
                totalValues[date] += isPermission;
            }
        });

        let labels = [];
        let dayNames = [];
        for (let i = 1; i <= daysInMonth; i++) {
            let currentDate = new Date(year, month - 1, i);
            let dayOfWeek = currentDate.getDay();

            // Mendapatkan nama harinya (dalam bahasa Inggris)
            let dayName = new Intl.DateTimeFormat('en-US', {
                weekday: 'short'
            }).format(currentDate);

            labels.push(i);
            dayNames.push(dayName);
        }

        // Data total nilai pada setiap tanggal untuk chart
        let dataValues = [];
        for (let i = 1; i <= daysInMonth; i++) {
            let currentDate = year + '-' + month.toString().padStart(2, '0') + '-' + i.toString().padStart(2, '0');
            dataValues.push(totalValues[currentDate]);
        }

        // Mendapatkan hari untuk setiap tanggal
        let days = [];
        for (let i = 1; i <= daysInMonth; i++) {
            let currentDate = new Date(year, month - 1, i);
            let dayOfWeek = currentDate.getDay();
            days.push(dayOfWeek);
        }

        // Mengubah warna untuk hari Sabtu dan Minggu menjadi merah
        let backgroundColors = days.map(day => (day === 0 || day === 6) ? 'rgba(255, 0, 0, 0.6)' :
            'rgba(54, 162, 235, 0.6)');

        // Script Chart.js untuk membuat bar chart
        let ctx = document.getElementById('myChart').getContext('2d');
        let myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Presences',
                    data: dataValues,
                    backgroundColor: backgroundColors,
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

        // Menambahkan nama hari di bawah setiap tanggal
        let xLabels = document.querySelector('.chartjs-x-axis');
        labels.forEach((label, index) => {
            xLabels.children[index].textContent = `${label}\n${dayNames[index]}`;
        });
    </script>





</body>

</html>
