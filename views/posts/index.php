<?php include __DIR__ . '/../partials/header.php'?>
<div class="container">
    <a class="button is-primary" href="/admin/posts/new">Add Post</a>
    <table class="table is-fullwidth is-striped">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach($posts as $post): ?>
                <tr>
                    <td><?$post->id?></td>
                    <td><?$post->title?></td>
                    <td>
                    <div class="buttons has-addons">
  <button class="button is-info">View</button>
  <button class="button">Edit</button>
  <button class="button">Delete</button>
</div></td>
                </tr>

                <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include  __DIR__ . '/../partials/footer.php'?>