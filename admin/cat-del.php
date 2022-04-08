<?php
  include("confs/config.php");

  $id = $_GET['id'];
  $sql = "DELETE FROM categories WHERE id = $id";
  $mysqli->query($sql);

  header("location: cat-list.php");
?>
