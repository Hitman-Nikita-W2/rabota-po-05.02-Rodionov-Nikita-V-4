<?php
include 'tp/head.php';
include 'tp/nav.php';
?>
<main>
<div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
      <h1 class="text-center">Авторизация</h1>
      <hr>
<form method="post" action="avto.php">
  <div class="mb-3">
    <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ваш логин</label>
<input type="text" class="form-control" id="login" name="login" required placeholder="user123" pattern="[a-z0-9]+">
    </div>

    <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ваш пароль</label>
<input type="password" class="form-control" id="password" name="password" required placeholder="password!" pattern="[a-z0-9!]+">
    </div>
    <br>
<a href="formreg.php">У меня  нету еще акаунта! Зарегистрироваться -></a>
<br><br>
  <button type="submit" class="btn btn-outline-warning">Продолжить</button>
</form>
    </div>
    <div class="col">
    </div>
    <div class="col">
    </div>
  </div>
</div>
</main>
<?php
include 'tp/footer.php';
?>