<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Home Page</title>
    <link rel="icon" type="image/x-icon" href="../tracktag/img/favi.png">
    <style>
        .title-container {
            text-align: center;
            padding: 20px;
            position: relative;
            top: -300px;
        }

        .titles-container {
            text-align: center;
            padding: 20px;
            position: relative;
            top: 0px;
        }

        .banner img {
            width: 100%;
        }

        .content-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 30px;
            margin-top: -300px;
        }

        .map-container {
            width: 10%;
            text-align: center;
        }

        .chart-container {
            width: 20%;
            /* ปรับความกว้างของ chart-container ตามความต้องการ */
        }

        .chart-container canvas {
            width: 100%;
            height: auto;
            margin-bottom: 100px;
            /* เพิ่มระยะห่างด้านล่างของ canvas */
        }

        .table-container {
            width: 80%;
            margin: 0 auto;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
            border-radius: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            background-color: #FFF8D6;
            border: none;
            border-radius: 20px;
        }

        th,
        td {
            padding: 10px;
            border: none;
            /* ลบเส้นขอบของเซลล์ทั้งหมด */
        }

        th {
            background-color: #FFF8D6;
        }

        .citie-text {
            color: #C2AF76;
            /* รหัสสีของเมืองที่คุณต้องการ */
        }
    </style>
</head>

<body class="dark-mode">
    <?php include './component/navbar.php'; ?>

    <div class="banner">
        <img src="../tracktag/img/bbj.png" alt="Banner Image">
    </div>

    <div class="title-container">
        <h1><span class="citie-text">CITY</span> PROFILE DASHBOARD</h1>
    </div>

    <div class="content-container">
        <div class="map-container">
            <img id="map" src="../tracktag/img/map2.png" alt="แผนที่ประเทศไทย">
        </div>

        <div class="chart-container">
            <canvas id="myPieChart"></canvas>
            <canvas id="myBarChart"></canvas>
        </div>
    </div>

    <div class="titles-container">
        <h1><span class="citie-text">CITY</span> OVERALL</h1>
    </div>

    <div class="table-container">
        <h2></h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>แผนพัฒนาเมืองอัจฉริยะ</th>
                    <th>จังหวัด</th>
                    <th>ประกาศเมืองอัจฉริยะ</th>
                    <th>Timeline</th>
                </tr>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>ขอนแก่นเมืองอัจฉริยะ</td>
                    <td>ขอนแก่น</td>
                    <td>13 ส.ค. 64</td>
                    <td>1 ปี 2 เดือน 3 วัน</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>ภูเก็ตเมืองอัจฉริยะ</td>
                    <td>ภูเก็ต</td>
                    <td>13 ส.ค. 64</td>
                    <td>1 ปี 2 เดือน 3 วัน</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>แม่เมาะเมืองน่าอยู่</td>
                    <td>ลำปาง</td>
                    <td>13 ส.ค. 64</td>
                    <td>1 ปี 2 เดือน 3 วัน</td>
                </tr>
            </tbody>
            </thead>
        </table>
    </div>

    <?php include './component/footer.php'; ?>

    <script>
        var ctxPie = document.getElementById('myPieChart').getContext('2d');
        var myPieChart = new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: ['ความสำเร็จ', 'ความคืบหน้า'],
                datasets: [{
                    data: [40, 60],
                    backgroundColor: ['#ff6384', '#ffce56']
                }]
            }
        });

        var ctxBar = document.getElementById('myBarChart').getContext('2d');
        var myBarChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: ['ปัจจัย 1', 'ปัจจัย 2', 'ปัจจัย 3'],
                datasets: [{
                    label: 'ดัชนี',
                    data: [0, 50, 100],
                    backgroundColor: ['#ffce56', '#ff6384', '#4caf50']
                }]
            }
        });

        document.getElementById('map').addEventListener('click', function(event) {
            // ตำแหน่งที่คลิกบนรูปภาพ
            var x = event.offsetX / this.width;
            var y = event.offsetY / this.height;

            // ตรวจสอบตำแหน่งและทำตามต้องการ
            if (x >= 0.2 && x <= 0.4 && y >= 0.4 && y <= 0.6) {
                alert('คุณคลิกที่กรุงเทพมหานคร');
                // ทำตามต้องการสำหรับกรุงเทพมหานคร
            } else if (x >= 0.5 && x <= 0.7 && y >= 0.6 && y <= 0.8) {
                alert('คุณคลิกที่จังหวัดอื่นๆ');
                // ทำตามต้องการสำหรับจังหวัดอื่นๆ
            } else {
                alert('คุณคลิกที่ตำแหน่งที่ไม่ได้กำหนด');
            }
        });

        // ตัวแปรเก็บข้อมูลเวลาที่กำหนด
        var startDate = new Date('2023-08-13'); // วันที่เริ่มต้น

        // ฟังก์ชั่นสำหรับคำนวณเวลาที่ผ่านไป
        function calculateTimeElapsed() {
            var currentDate = new Date(); // วันที่ปัจจุบัน
            var timeDiff = currentDate - startDate; // คำนวณวันที่ผ่านไปในมิลลิวินาที

            // แปลงเวลาที่ผ่านไปให้เป็นปี, เดือน, วัน
            var years = Math.floor(timeDiff / (365.25 * 24 * 60 * 60 * 1000));
            var months = Math.floor((timeDiff % (365.25 * 24 * 60 * 60 * 1000)) / (30.44 * 24 * 60 * 60 * 1000));
            var days = Math.floor((timeDiff % (30.44 * 24 * 60 * 60 * 1000)) / (24 * 60 * 60 * 1000));

            // แสดงผลลัพธ์ในรูปแบบที่ต้องการ
            document.getElementById('timeElapsed').innerText = years + ' ปี ' + months + ' เดือน ' + days + ' วัน';
        }

        // เรียกใช้ฟังก์ชั่น
        calculateTimeElapsed();

        // สร้าง interval เพื่อปรับปรุงเวลาทุกๆ 1 นาที
        setInterval(calculateTimeElapsed, 60000); // 60000 มิลลิวินาที = 1 นาที
    </script>

</body>

</html>