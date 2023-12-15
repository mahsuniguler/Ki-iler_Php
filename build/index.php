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
  <link rel="stylesheet" href="style.css">

  <script>
    function silkontrol(event) {
      var confirmResult = confirm("Silmek istediğinizden emin misiniz?");
      if (confirmResult) {
        window.location.href = event.target.href;
      } else {
        alert("Silme işlemi iptal edildi");
      }
      event.preventDefault();
    }
  </script>
</head>

<?php
include("partials/_header.php");
include("functions.php") ?>
<br>

<div class="w-7/12 justify-center top-1/2 mx-auto">
  <div class="flex bg-slate-900 mb-1 rounded-3xl items-center min-h-0" style="padding: auto; color:azure">
    <a href="./" class="mx-3 text-center w-10">Sıra</a>
    <a href="index.php?sirala=firstname" class="tab2 w-52">ADI</a>
    <a href="index.php?sirala=lastname" class="tab3 w-52">SOYADI</a>
    <a href="index.php?sirala=Telefon_numarasi" class="tab4  mr-4">TELEFON NUMARASI</a>
  </div>
  <?php $sql = 'SELECT * FROM rehberimtable';
  if (isset($_GET['sirala']) && $_GET['sirala'] != "") {
    $sirala = $_GET['sirala'];
    $sql = "SELECT * FROM rehberimtable ORDER BY $sirala";
  }

  if (isset($_POST["arama"]) && $_POST["arama"] != "") {
    $arama = $_POST["arama"];
    $sql = "SELECT * FROM rehberimtable WHERE firstname LIKE '%$arama%' OR lastname LIKE '%$arama%' Or Telefon_numarasi LIKE '%$arama%'";
  }
  include('Connectmysql.php');

  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $list = 1;
    while ($row = $result->fetch_assoc()) { ?>

      <div class="flex bg-slate-300 mb-1 rounded-3xl items-center" style="padding: auto;">
        <div class="mx-3 text-center w-10"><?php echo $list ?></div>
        <div class="tab2 w-52"><?php echo $row["firstname"]; ?></div>
        <div class="tab3 w-56"><?php echo $row["lastname"]; ?></div>
        <div class="tab4 w-56"><?php echo $row["Telefon_numarasi"]; ?></div>
        <div class="ml-auto mr-3 my-2">
          <a href="duzenle.php?duzenle_id=<?php echo $row["id"]; ?>" class="duzenle bg-slate-700">Düzenle</a>
          <a class="sil ml-1 text-right mr-3 my-2" href="sil.php?sil_id=<?php echo $row["id"]; ?>" onclick="silkontrol(event)">Sil</a>
        </div>
      </div>
  <?php
      $list++;
    }
  }
  $conn->close();
  ?>
</div>
</body>

</html>