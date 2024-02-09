<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/styles.css">
  <title>Login</title>
  <link rel="icon" type="image/x-icon" href="../tracktag/img/favi.png">
  <style>
    body {
      background-image: url("../tracktag/img/ssss.png");
      background-size: cover;
      background-position: 50% calc(50% - 260px);
      background-repeat: no-repeat;
      /* เพิ่ม animation ที่เคลื่อนไหวไปทางขวา */
      animation: moveRight 5s linear infinite;
    }

    @keyframes moveRight {
      0% {
        background-position: 0% calc(50% - 260px);
      }

      100% {
        background-position: 100% calc(50% - 260px);
      }
    }
  </style>
</head>

<body>

  <?php include './component/navbar.php'; ?>

  <div class="container">
    <div class="left-container">
      <img src="./img/bg02.png" alt="รูปภาพ" class="image">
      <div class="form-container">
        <div class="title">
          <h4>ติดตามความคืบหน้า</h4>
          <h6 style="color:blue">ติดตามความคืบหน้าของเมืองที่ได้รับตราสัญลักษณ์</h6>
        </div>
        <form action="city.php" method="post">
          <div class="form-group">
            <label class="label" for="username">Username</label>
            <input type="email" id="username" placeholder="username" style="border: 2px solid #C2AF76; border-radius: 50px;">
          </div>
          <div class="form-group">
            <label class="label" for="password">Password</label>
            <input type="password" id="password" placeholder="password" style="border: 2px solid #C2AF76; border-radius: 50px;">
          </div>
          <br>
          <button type="submit" class="button">SIGN IN</button>
        </form>
      </div>
    </div>

    <div class="right-container">
      <div class="image-frame">
        <img src="./img/bg-01.png" alt="รูปภาพ" class="image-right">
      </div>
    </div>
  </div>


  <?php include './component/footer.php'; ?>
</body>

</html>