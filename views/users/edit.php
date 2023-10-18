<?php include __DIR__ . '/../partials/header.php'?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<div class="container">
    <form action="/admin/users/edit?id=<?=$user->id?>" method="POST">
    <div class="field">
  <label class="label" for="email" >Email</label>
  <div class="control">
    <input id="email" class="input" type="text" placeholder="Email" name="email" value="<?=$user->email?>">
  </div>
</div>
<div class="field">
  <label class="label" for="password" >Password</label>
  <div class="control">
    <input class="input" type="text" id="password" placeholder="Password" name="password" value="<?=$user->password?>">
  </div>
</div>
<div class="field">
  <div class="control">
    <input class="button is-primary" type="submit" value="Update">
  </div>
</div>
    </form>
</div>
<?php include  __DIR__ . '/../partials/footer.php'?>