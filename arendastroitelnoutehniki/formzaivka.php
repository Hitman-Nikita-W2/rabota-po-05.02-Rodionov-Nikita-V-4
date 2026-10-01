<?php

session_start();
include 'tp/bd.php';
include 'tp/head.php';
include 'tp/navklient.php';

if (!empty($_POST)) {
  $email = $_POST['email'];
  $id_tovars = $_POST['id_tovars'];
  $date_order = $_POST['date_order'];
  $type_pay = $_POST['type_pay'];
  $id_users = $_SESSION['id_users'];
  $sql = "INSERT INTO `orders`(`id_users`, `id_tovars`, `contact`, `date_order`, `type_pay`) VALUES ($id_users, $id_tovars, '$email', '$date_order', '$type_pay' )";
  $bd->query($sql);
  header("Location: moizakazi.php");
}
?>
<main>
  <div class="text-center">
    <div class="container">
        <h1>Забронировать технику</h1>
        <hr>
    </div>
    </div>
  <div class="container text-center">
    <div class="row align-items-start">
      <div class="col">
      </div>
      <div class="col">
        <form method="post" action="">
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ваш email</label>
            <input type="email" class="form-control" id="email" name="email" required minlength="9" maxlength="100" placeholder="name@email.com" pattern="[^<>]*">
          </div>
          <div class="mb-3">
            <label for="disabledSelect" class="form-label">Товары</label>
            <?php
            $sql = "SELECT * FROM tovars";
            $res = $bd->query($sql);
            ?>
            <select id="disabledSelect" name="id_tovars" class="form-select" required>
              <?php
              foreach ($res as $row) {
                echo '<option value="' . $row['id_tovars'] . '">' . $row['nametovar'] . '</option>';
              }
              ?>

            </select>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Дата бранирования</label>
            <input type="date" class="form-control" id="dataz" name="date_order" required>
          </div>
          <div class="mb-3">
            <label for="disabledSelect" class="form-label">Тип оплаты</label>
            <select id="disabledSelect" class="form-select" name="type_pay" required>
              <option>Банковская карта</option>
              <option>Наличка</option>
            </select>
          </div>
          <button type="submit" class="btn btn-outline-primary">Продолжить</button>
        </form>
      </div>
      <div class="col">
      </div>
    </div>
  </div>
</main>
<?php
include 'tp/footer.php';
?>