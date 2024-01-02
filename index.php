<?php include_once 'includes/config.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>BLOG-CMS</title>
</head>

<body>
    <div id="form-container">
        <form action="./components/crud/create.php" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" id="">
            <label for="age">Age</label>
            <input type="number" name="age">
            <input type="submit" id="create_entry" value="create">
        </form>
    </div>
    <div id="overlay">
    </div>

    <button id="open_create_entry">create</button>


    <?php
    include 'components/crud/read.php';
    include 'includes/footer.php';
    ?>

</body>
</html>