<?php include __DIR__ . '/partials/header.php'?>

    <form action="/answer" method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="number" name="age" placeholder="Age">
        <input type="submit" value="submit">
    </form>

<?php include  __DIR__ . '/partials/footer.php'?>