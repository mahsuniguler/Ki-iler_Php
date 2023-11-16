<?php

include('Connectmysql.php');

$sql = "INSERT INTO rehberimtable (firstname, lastname, Telefon_numarasi) VALUES ('" . $_POST['name'] . "', '" . $_POST['surname'] . "', '" . $_POST['number'] . "')";
echo $sql;
if ($conn->query($sql) === TRUE) {
?>
  <script>
    alert("Başarıyla Eklendi", "Git")
  </script>
<?php

} else {
?>
  <script>
    alert("Hata Var!!!")
  </script>
  <br>
<?php
}

$conn->close();
header('Location: index.php');
?>