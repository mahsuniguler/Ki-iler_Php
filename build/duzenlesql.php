<?php

if (isset($_GET["id"])) {
    $kelime = $_GET["kelime"];
    $sql = "Update rehberimtable WHERE id=$kelime";
  } else {?>
    <script>alert("Hatalı Kod")</script>
    
<?  }

?>