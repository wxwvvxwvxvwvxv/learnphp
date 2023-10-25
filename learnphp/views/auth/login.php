<?php include __DIR__ . '/../partials/header.php'?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<div class="container">
    <form action="/login" method="POST">
    <div class="field">
  <label class="label" for="email" >Email</label>
  <div class="control">
    <input id="email" class="input" type="text" placeholder="Email" name="email">
  </div>
</div>
<div class="field">
  <label class="label" for="password" >Password</label>
  <div class="control">
    <input class="input" type="password" id="password"  name="password">
  </div>
</div>

<div class="field">
  <div class="control">
    <input class="button is-primary" type="submit" value="Login">
  </div>
</div>
    </form>
</div>
<?php include  __DIR__ . '/../partials/footer.php'?>