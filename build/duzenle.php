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
</head>

<?php include('partials/_header.php');
include('Connectmysql.php');

$sql = 'SELECT * FROM rehberimtable where id = ' . $_GET["duzenle_id"];
$sorgu =  $conn->query($sql);
$result = $sorgu->fetch_assoc(); ?>

<div class="flex pt-40">

  <div class="m-auto" style="font-size: x-large;">
    <div class="bg-slate-50 p-10 shadow-md rounded ">
      <form action="" method="post">
        <div>
          <div class="">
            <label>Adı:</label><br>
            <input type="text" placeholder="Adı: " name="name" class="mb-3 border-2 rounded outline-0 pl-1" value="<?php echo $result['firstname']; ?>"><br>
            <label>Soyadı:</label><br>
            <input type="text" placeholder="Soyadı: " name="surname" class="mb-3 border-2 rounded outline-0 pl-1" value="<?php echo $result['lastname']; ?>"><br>
            <label>Telefon Numarası:</label><br>
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
    $sql = "UPDATE rehberimtable SET firstname='$name', lastname='$surname', Telefon_numarasi=$number WHERE id = " . $_GET["duzenle_id"];
    if ($name <> "" || $surname <> "" || $number <> "") {
      if ($conn->query($sql)) {
        echo '<script type="text/javascript">alert("Başarıyla Güncellendi."); 
        window.location = "index.php";</script>';
      } else {
        echo "Veritabanı güncelleme hatası: " . $conn->error;
      }
    } else {
      echo "Hata";
    }
  }
}

?>

</body>

</html>