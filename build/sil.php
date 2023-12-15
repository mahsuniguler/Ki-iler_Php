<?php
if (isset($_GET["sil_id"]) || $_GET["sil_id"] <> "") {
  $_id = $_GET["sil_id"];
  include("functions.php");
  kayitsil($_id);
} else
  echo '<script>window.location.href ="index.php";</script>';
?>