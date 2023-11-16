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

  <style>
    .duzenle {
      color: azure;
      font-weight: 400;
      border: none;
      padding: .375rem .75rem;
      font-size: 1rem;
      border-radius: .25rem;
    }

    .sil {
      color: azure;
      background-color: red;
      font-weight: 400;
      border: none;
      padding: .375rem .75rem;
      font-size: 1rem;
      border-radius: .25rem;

    }
  </style>
</head>

  <?php include("partials/_header.php") ?>
  <br>
  <div class="w-8/12 justify-center top-1/2 mx-auto">
    <div class="flex bg-slate-900 mb-1 rounded-3xl items-center min-h-0" style="padding: auto; color:azure">
      <a href="./" class="mx-3 text-center w-10">Sıra</a>
      <a href="index.php?sirala=firstname" class="tab2 w-52">ADI</a>
      <a href="index.php?sirala=lastname" class="tab3 w-56">SOYADI</a>
      <a href="index.php?sirala=Telefon_numarasi" class="tab4  mr-4">TELEFON NUMARASI</a>
    </div>
    <?php $sql = 'SELECT * FROM rehberimtable';
    if (isset($_GET['sirala'])&&$_GET['sirala']!="") {
      $sirala = $_GET['sirala'];
      
        $sql = "SELECT * FROM rehberimtable ORDER BY $sirala";
    }


    if (isset($_POST["kelime"]) && $_POST["kelime"] != "") {
      $kelime = $_POST["kelime"];
      $sql = "SELECT * FROM rehberimtable WHERE firstname LIKE '$kelime%' OR lastname LIKE '$kelime%' Or Telefon_numarasi LIKE '$kelime%'";
    } 
    include('Connectmysql.php');

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $list = 1;
      while ($row = $result->fetch_assoc()) { ?>

        <div class="flex bg-slate-300 mb-1 rounded-3xl items-center min-h-0" style="padding: auto;">
          <div class="mx-3 text-center w-10"><?php echo $list ?></div>
          <div class="tab2 w-52"><?php echo $row["firstname"]; ?></div>
          <div class="tab3 w-56"><?php echo $row["lastname"]; ?></div>
          <div class="tab4 w-52"><?php echo $row["Telefon_numarasi"]; ?></div>
          <a href="duzenle.php?id=<?php echo $row["id"]; ?>" class="duzenle my-2 bg-slate-700">Düzenle</a>
          <a href="sil.php?id=<?php echo $row["id"]; ?>" class="sil ml-1 mr-3 my-2">Sil</a>
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