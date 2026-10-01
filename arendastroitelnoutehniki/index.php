<?php
session_start();
include 'tp/bd.php';
include 'tp/head.php';
if (empty($_SESSION['role']))
{
  include 'tp/nav.php';
}
$role = $_SESSION['role'];
if ($role == "admin")
{
  include 'tp/navadmin.php';
}

elseif ($role == "klient")
{
  include 'tp/navklient.php';
}
?>
<main>
  <div class="container">
<div class="text-center">
  <h1>Забронировать квартиру</h1>
  <hr>
</div>
<?php
echo '<div class="container">';
echo'<div class="row row-cols-1 row-cols-md-4 g-4">';
  $sql="SELECT * FROM tovars";
  $res=$bd->query($sql);
  foreach($res as $row){
  echo '<div class="col">
    <div class="card" >
      <img src="img/'.$row['img'].'"." class="card-img-top" alt="..." >
      <div class="card-body">
      <div class="text-center">
        <h5 class="text-secondary">'.$row['nametovar'].'</h5>
        </div>
        <p class="card-text">'.$row['description'].'</p
        <p class="text-success" ">Цена:'.$row['prise'].' руб.</p>
<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Забронировать
          </button>';
      echo '</div>
    </div>
  </div>';
  }
echo '</div>';
echo '</div>';
?>

</main>
<?php
include 'tp/footer.php';
?>