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
</head>

<body class="text-gray-800 font-poppins">
  <nav class="bg-slate-300 shadow-sm shadow-slate-600">
    <div class="container mx-auto px-4 py-3 flex items-center hover:rounded">
      <div class="ml-1 flex">
        <a href="index.php" class="flex items-center hover:text-gray-100 hover:rounded hover:bg-black p-1 ">REHBERİM</a>
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
        <input type="text" name="" placeholder="Ara.." id="" class="flex w-full rounded-3xl ml-1 pl-8 pr-2 focus:outline-none bg-gray-200 text-sm text-gray-600 shadow-md shadow-gray-400">
      </div>

      <div class="ml-5">

        <a href="kayıtol.php" class="flex items-center font-semibold text-gray-900 hover:text-gray-100 hover:rounded hover:bg-black p-1 ">
          <span class="mr-2">
            <i class="fa-solid fa-user"></i>
          </span>EKLE</a>
      </div>


    </div>

  </nav>

  <div class="flex h-96 bg-slate-200">

    <div class="m-auto">
      <div class="bg-slate-50 p-10 shadow-md rounded ">
        <form action="kayitSql.php" method="post">
          <label>Adı:</label><br>
          <input type="text" placeholder="Adı: " name="name" class="mb-3 border-2 rounded outline-0 pl-1"><br>
          <label>Soyadı:</label><br>
          <input type="text" placeholder="Soyadı: " name="surname" class="mb-3 border-2 rounded outline-0 pl-1"><br>
          <label>Numarası:</label><br>
          <input type="text" placeholder="Telefon Numarası: " name="number" class=" mb-3 border-2 rounded outline-0 pl-1"><br>
          <input type="Submit" value="EKLE" class="bg-slate-700 text-yellow-50 w-full  ">
        </form>
      </div>
    </div>
  </div>


</body>

</html>