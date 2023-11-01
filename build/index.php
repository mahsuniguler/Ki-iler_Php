<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="css/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&family=Roboto+Serif:ital,opsz,wght@0,8..144,400;0,8..144,500;0,8..144,600;0,8..144,700;1,8..144,400;1,8..144,500;1,8..144,600;1,8..144,700&display=swap" rel="stylesheet" />
  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">-->
  <style>
    .tab5 {
      font-weight: 400;
      border: none;
      padding: .375rem .75rem;
      font-size: 1rem;

      border-radius: .25rem;

    }

    .tab6 {
      background-color: red;
      font-weight: 400;
      border: none;
      padding: .375rem .75rem;
      font-size: 1rem;

      border-radius: .25rem;

    }
  </style>
</head>

<body class="text-gray-800 font-poppins container inline">
  <nav class="bg-slate-300 shadow-sm shadow-slate-600">
    <div class="container mx-auto px-4 py-3 flex items-center hover:rounded">
      <div class="ml-1 flex">
        <a href="index.php" class="flex items-center hover:text-gray-100 hover:rounded hover:bg-black p-1  ">REHBERİM</a>
      </div>

      <div class="ml-12 flex">
        <a href="#" class="flex items-center hover:text-gray-100 hover:rounded hover:bg-black p-1 ">
          <span class="mr-2">
            <i class="fa-solid fa-user"></i>
          </span>Hakkımda
        </a>
      </div>

      <div class="ml-12 flex">
        <a href="#" class="flex items-center hover:text-gray-100 hover:rounded hover:bg-black p-1 ">
          <span class="mr-2">
            <i class="fa-solid fa-phone"></i>
          </span>İletişim
        </a>
      </div>

      <div class="relative ml-auto flex">
        <span class="absolute left-3 text-gray-600 text-sm">
          <i class="fa-solid fa-magnifying-glass"></i>
        </span>
        <form action="" method="post">

          <input type="text" name="kelime" placeholder="Ara.." id="aramaKelimesi" class="flex w-full rounded-3xl ml-1 pl-8 pr-2 focus:outline-none bg-gray-200 text-sm text-gray-600 shadow-md shadow-gray-400">

        </form>
      </div>

      <div class="ml-5">

        <a href="kayitekle.php" class="flex items-center font-semibold text-gray-900 hover:text-gray-100 hover:rounded hover:bg-black p-1 ">
          <span class="mr-2">
            <i class="fa-solid fa-user"></i>
          </span>Kayıt Ol</a>
      </div>
    </div>
  </nav>
  <br>
  <div class="w-6/12 justify-center top-1/2 table mx-auto">
    <div class="flex bg-slate-900 mb-1 rounded-3xl items-center min-h-0" style="padding: auto; color:azure">
      <div class="mx-3 text-center w-10">Sıra</div>
      <div class="tab2 w-52">ADI</div>
      <div class="tab3 w-56">SOYADI</div>
      <div class="tab4  mr-4">TELEFON NUMARASI</div>
    </div>
    <?php

    if (isset($_POST["kelime"])) {
      $kelime = $_POST["kelime"];
      $sql = "SELECT * FROM rehberimtable WHERE firstname LIKE '%$kelime%' OR lastname LIKE '%$kelime%' Or Telefon_numarasi LIKE '%$kelime%'";
    } else {
      $sql = 'SELECT * FROM rehberimtable';
    }
    include('vt.php');
    /*$servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password, "rehberim");
    if ($conn->connect_error) {
      die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
    }*/
    ?>

    <?php
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $list = 1;
      while ($row = $result->fetch_assoc()) { ?>

        <div class="flex bg-slate-300 mb-1 rounded-3xl items-center min-h-0" style="padding: auto;">
          <div class="mx-3 text-center w-10"><?php echo $list ?></div>
          <div class="tab2 w-52"><?php echo $row["firstname"]; ?></div>
          <div class="tab3 w-56"><?php echo $row["lastname"]; ?></div>
          <div class="tab4 w-52"><?php echo $row["Telefon_numarasi"]; ?></div>
          <a href="duzenle.php?id=<?php echo $row["id"]; ?>" class="tab5 bg-blue-600">Düzenle</a>

          <a href="sil.php?id=<?php echo $row["id"]; ?>" class="tab6 ml-1">Sil</a>
        </div>
    <?php
        $list++;
      }
    }
    ?>
  </div>
  <?php
  $conn->close();

  ?>
</body>

</html>