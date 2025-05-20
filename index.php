<?php $user = '';
if (isset($_POST['user'])) {
    $user = htmlspecialchars($_POST['user']);
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Teste Form HTML & PHP</title>
</head>
<body>
    <form method="POST">
        <label for="user">Digite seu nome:</label>
        <input type="text" name="user" id="user">
        <input type="submit" value="Enviar">
    </form>
    <?php if ($user): ?>
    <h1>Olá <?php echo $user; ?>!</h1>
    <p>Seja bem-vindo a este teste</p>
    <?php endif; ?>
</body>
</html>