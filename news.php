<?php
$title = 'Новости';
require_once 'blocks/header.php';

$news =$conn->query('SELECT * FROM `news` ORDER BY `news`.`idate` DESC limit 3');
$news->execute();
$data = $news->fetchAll(PDO::FETCH_ASSOC);


?>

<body>

<div class="wrapper news">
    <h2 class="news_title"> Новости </h2>
    <div class="wrapper_inside">
    <?php
    foreach ($data as $new_post){
    ?>

    <div class="container news">
        <div class="headline">
            <p class="date"><?= date('d.m.y', $new_post['idate']) ?> </p>
            <h4><?= $new_post['title']?></h4>
        </div>
        <p><?= $new_post['announce'] ?></p>
    </div>
        <?php
    }
    ?>
            </div>
</div>
</body>
</html>
