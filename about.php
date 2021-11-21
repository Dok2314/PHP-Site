<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP вэб сайт</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php require_once('blocks/header.php'); ?>
        <div class="container mb-5 mt-5">
        <h3>Контактная форма</h3>
    <form action="check.php" method="post">
        <input type="email" name="email" placeholder="Введите Email" class="form-control">
        <br>
        <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea>
        <br>
        <button type="submit" name="send" class="btn btn-success">Отправить</button>
    </form>
    </div>
<?php require_once('blocks/footer.php'); ?>
</body>
</html>

