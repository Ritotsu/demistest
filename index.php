<?php
session_start();
$title = 'Форма обратной связи';
require_once 'blocks/header.php';
?>

<div class="wrapper ">
        <p><?=$_SESSION['error_fio']?><?=$_SESSION['error_phone']?><?=$_SESSION['error_email']?></p>
    <div class="container form">
        <h2>Форма обратной связи</h2>
        <form action="form.php" method="post">

            <div class="f-con">
                <p>Ваше ФИО:</p>
                <input type="text" name="fio" value="<?=$_SESSION['fio']?>" placeholder="Введите ФИО">
            </div>

            <div class="f-con">
                <p>Ваш адресс:</p>
                <textarea type="text" name="adress"  placeholder="Введите адресс"><?=$_SESSION['adress']?></textarea>
            </div>

            <div class="f-con">
                <p>Ваш номер мобильного телефона:</p>
                <input type="text" name="phone" value="<?=$_SESSION['phone']?>"  placeholder="Введите номер мобильного телефона">
            </div>

            <div class="f-con">
                <p>Ваша эл.почта:</p>
                <input type="text" name="email" value="<?=$_SESSION['email']?>" placeholder="Введите эл.почту">
            </div>

            <input class="submit" type="submit">
        </form>
    </div>

    <div class="container message">
        <?php
        foreach ($_SESSION['data'] as $data) {?>
        <div class="info">
            <h2><?=$data['FIO']?> </h2>
            <p>Адресс: <?=$data['Adress']?></p>
            <p>Номер мобильного телефона: <?=$data['Phone']?></p>
            <p>Эл.почта: <?=$data['Email']?></p>
        </div>
        <?php }?>
    </div>
</div>
</body>
</html>
