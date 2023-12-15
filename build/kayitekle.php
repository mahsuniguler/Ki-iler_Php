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

<?php
include("partials/_header.php") ?>
<div class="flex h-96 pt-40">

  <div class="m-auto" style="font-size: x-large;">
    <div class="bg-slate-50 p-10 shadow-md rounded">
      <form action="" method="POST">
        <label>Adı:</label><br>
        <input type="text" placeholder="Adı: " value="<?php if ($_POST && $_POST["name"] != "") echo $_POST["name"];
                                                      else echo ""; ?>" name="name" class="mb-3 border-2 rounded outline-0 pl-1"><br>
        <label>Soyadı:</label><br>
        <input type="text" placeholder="Soyadı: " value="<?php if ($_POST && $_POST["surname"] != "") echo $_POST["surname"];
                                                          else echo ""; ?>" name="surname" class="mb-3 border-2 rounded outline-0 pl-1"><br>
        <label>Telefon Numarası:</label><br>
        <input type="text" placeholder="Telefon Numarası: " value="<?php if ($_POST && $_POST["number"] != "") echo $_POST["number"];
                                                                    else echo ""; ?>" name="number" class=" mb-3 border-2 rounded outline-0 pl-1"><br>
        <input type="Submit" value="EKLE" class="bg-slate-700 text-yellow-50 w-full  ">
      </form>
    </div>
  </div>
</div>
</body>

</html>
<?php
include('functions.php');
if ($_POST) {
  kayitekle();

  exit();
}

?>