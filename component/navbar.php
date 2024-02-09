<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/styles.css">
  <style>
    .navbar {
      background-color: #AABA73 !important;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }

    .navbar-brand {
      background-color: #ffffff;
      border: 3px solid #ffffff;
      border-radius: 50px;
      padding: 5px;
      display: inline-block;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }

    .navbar-brand:hover {
      background-color: #C2AF76;
      /* ตั้งค่าสีพื้นหลังของลิงก์เมื่อเม้าส์ hover เป็นสีเหลือง */
      color: black;
      /* ตั้งค่าสีข้อความในลิงก์เมื่อเม้าส์ hover เป็นสีดำ (หรือสีอื่นตามที่คุณต้องการ) */
      transition: 0.3s;
      /* ตั้งค่าเวลาที่ให้เกิด transition เมื่อมีการ hover */
    }

    .nav-item.active {
      background-color: #ffffff;
      border: 3px solid #ffffff;
      border-radius: 0 0 0 50px;
      padding: 5px;
      display: inline-block;
      width: 500px;
      height: 50px;
      margin-top: -10px;
      margin-right: -15px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
      position: relative;
      /* เพิ่มบรรทัดนี้เพื่อให้สามารถใส่รูปภาพเป็นพื้นหลัง */
    }

    .nav-item.active img {
      position: absolute;
      top: 50%;
      /* จัดตำแหน่งให้อยู่กึ่งกลางตามความสูง */
      left: 25%;
      /* จัดตำแหน่งให้อยู่กึ่งกลางตามความกว้าง */
      transform: translate(-50%, -50%);
      /* จัดตำแหน่งให้อยู่กึ่งกลาง */
      max-width: 230px;
      max-height: 200px;
      border-radius: 0%;
      /* ใส่ border-radius เพื่อทำให้รูปภาพเป็นวงกลม (สามารถปรับแต่งตามต้องการ) */
    }


    .nav-link {
      color: #ffffff;
      /* ตั้งค่าสีข้อความในลิงก์เป็นสีขาว */
      background-color: #FEDC7A;
      /* ตั้งค่าสีพื้นหลังของลิงก์เป็นสีเหลือง */
      border-radius: 50px;
      /* ตั้งค่ารูปร่างของกรอบของลิงก์ */
      padding: 5px 20px;
      /* ตั้งค่าระยะห่างของข้อความจากรอบ */
      width: 90px;
      margin-left: 80%;
      text-align: center;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }

    .nav-link:hover {
      background-color: #ffd700;
      /* ตั้งค่าสีพื้นหลังของลิงก์เมื่อเม้าส์ hover เป็นสีเหลือง */
      color: #000000;
      /* ตั้งค่าสีข้อความในลิงก์เมื่อเม้าส์ hover เป็นสีดำ (หรือสีอื่นตามที่คุณต้องการ) */
      transition: 0.3s;
      /* ตั้งค่าเวลาที่ให้เกิด transition เมื่อมีการ hover */
    }

    .city-text {
      color: black;
      /* รหัสสีของเมืองที่คุณต้องการ */
    }
  </style>
</head>

<body>
  <!-- เนื้อหาของเว็บไซต์ -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><span class="city-text">ความคืบหน้าของเมืองที่ได้รับตราสัญลักษณ์</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <div class="nav-item active">
          <img src="./img/favii.png" alt="Description of the image">
          <li>
            <a class="nav-link" href="login.php">SING IN<span class="sr-only"></span></a>
          </li>
          </ul>
        </div>
    </div>
  </nav>

</body>

</html>