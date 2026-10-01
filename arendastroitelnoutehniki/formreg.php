<?php
include 'tp/head.php';
include 'tp/nav.php';
?>
<main>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      <h1 class="text-center">Регистрация</h1>
<form method="post" action="reg.php">
  <div class="mb-3">
<hr>
    <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Придумайте логин</label>
<input type="text" class="form-control" id="login" name="login" required minlength="5" maxlength="100" placeholder="user123" pattern="[a-z0-9]+">
    </div>

    <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Придумайте пароль</label>
<input type="password" class="form-control" id="password" name="password" required minlength="8" maxlength="30" placeholder="password!" pattern="[a-z0-9!]+">
    </div>

    <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ваше ФИО</label>
<input type="text" class="form-control" id="fio" name="fio" required minlength="9" maxlength="100" placeholder="Фалмилия Имя Отчество" pattern="[А-Я][а-я]+ [А-Я][а-я]+ [А-Я][а-я]+">
    </div>

    <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ваш email</label>
<input type="email" class="form-control" id="email" name="email" required minlength="9" maxlength="100" placeholder="name@email.com" pattern="[a-70-9._%+-]+@[a-z0-9.-]+\/[a-z]{2,}$">
    </div>

    <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ваш номер телефона</label>
<input type="tel" class="form-control" id="phone" name="phone" required minlength="11" maxlength="40" placeholder="+7(___)___-__-__" pattern="+7\(\d{3}\)\d{3}-\d{2}-\d{2}$">
    </div>
    <br>
<a href="formavto.php">Авторизоваться -></a>
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