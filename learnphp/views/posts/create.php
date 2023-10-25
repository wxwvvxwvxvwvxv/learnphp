<?php include __DIR__ . '/../partials/header.php'?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<div class="container">
    <form action="/admin/posts" method="POST" enctype="multipart/form-data">
    <div class="field">
  <label class="label" for="title" >Title</label>
  <div class="control">
    <input id="title" class="input" type="text" placeholder="Title" name="title">
  </div>
</div>
<div class="field">
  <label class="label" for="body" >Content</label>
  <div class="control">
    <textarea class="textarea" id="body" placeholder="Content" name="body"></textarea>
  </div>
</div>

<div class="field">
  <label class="label" for="image" >Image</label>
  <div class="control">
    <input type="file" class="input" name="image" id="image">
  </div>
</div>

<div class="field">

  <div class="control">
    <input class="button is-primary" type="submit" value="Create">
  </div>
</div>
    </form>
</div>
<?php include  __DIR__ . '/../partials/footer.php'?>