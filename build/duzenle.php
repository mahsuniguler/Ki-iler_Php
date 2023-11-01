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

  <?php
  include('vt.php');

  $sql = 'SELECT * FROM rehberimtable where id = ' . $_GET["id"];
  $sorgu =  $conn->query($sql);
  $result = $sorgu->fetch_assoc();
  ?>


  <div class="flex h-96 bg-slate-200">

    <div class="m-auto">
      <div class="bg-slate-50 p-10 shadow-md rounded ">
        <form action="" method="post">
          <div>
            <div class="">
              <label>Adı:</label><br>
              <input type="text" placeholder="Adı: " name="name" class="mb-3 border-2 rounded outline-0 pl-1" value="<?php echo $result['firstname']; ?>"><br>
              <label>Soyadı:</label><br>
              <input type="text" placeholder="Soyadı: " name="surname" class="mb-3 border-2 rounded outline-0 pl-1" value="<?php echo $result['lastname']; ?>"><br>
              <label>Numarası:</label><br>
              <input type="text" placeholder="Telefon Numarası: " name="number" class=" mb-3 border-2 rounded outline-0 pl-1" value="<?php echo $result['Telefon_numarasi']; ?>"><br>
              <div class="flex">
                <input type="Submit" value="Düzenle" class="mx-2 rounded bg-slate-700 text-yellow-50 w-full ">
                <a href="./" class="bg-red-500 text-center mx-2 rounded text-white w-full">Vazgeç</a>
              </div>

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php
  if ($_POST) {
    if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['number'])) {
      $name = $_POST['name'];
      $surname = $_POST['surname'];
      $number = $_POST['number'];
      $sql = "UPDATE rehberimtable SET firstname='$name', lastname='$surname', Telefon_numarasi=$number WHERE id = " . $_GET["id"];
      if ($name <> "" || $surname <> "" || $number <> "") {
        if ($conn->query($sql)) {
        } else {
          echo "Veritabanı güncelleme hatası: " . $conn->error;
        }
      } else {
        echo "Hata";
      }

      echo '<script type="text/javascript">window.location = "index.php";</script>';
    }
  }

  ?>

</body>

</html>