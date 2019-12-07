<div class="container-fluid">
  <div class="row">
    <div class="col-1 col-sm-2 col-md-4 col-lg-4 col-xl-4">

    </div>
    <div class="col-10 col-sm-8 col-md-4 col-lg-4 col-xl-4">
      <form action="api/user/signup" method="POST">
        <div class="form-group">
        <div class="form_title">Регистрация</div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Укажите Email:</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
          <label for="loginInput">Придумайте Логин:</label>
          <input class="form-control" id="loginInput" type="text" placeholder="Login" name="login">
        </div>
        <div class="form-group">
          <label for="password1">Задайте Пароль:</label>
          <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>
        <div class="form-group">
          <label for="password2">Повторите Пароль:</label>
          <input type="password" class="form-control" id="password2" placeholder="Repassword" name="password2">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="avtoAuthor">
          <label class="form-check-label" for="avtoAuthor">авторизоваться</label>
        </div>
        <button type="submit" class="btn btn-primary">Зарегистрировать</button>
      </form>
    </div>
    <div class="col-1 col-sm-2 col-md-3 col-lg-4 col-xl-4">

    </div>
  </div>
</div>