<?php require ('../blockload.php'); ?>
<div class="main">
    <br /><h1>Actualités <?= $ENV['name'] ?> <small>// plus d'information sur <?= $ENV['website'] ?></small></h1>
        <ul id="flashinfoshow">
            <?php foreach ($blockmanager->flashinfo() as $flashinfo) { if ($flashinfo['display'] == true) { ?>
                <li><span><?= $flashinfo['date'] ?></span><i class="mdi mdi-<?= $flashinfo['icon'] ?>"></i><a href="#"> <?= $flashinfo['text'] ?></a></li>
            <?php } } ?>
        </ul>
</div>

<!--

    <i class="mdi mdi-<\?= $flashinfo['icon'] ?>"></i>

    SPECIEL ICONS LIST:

    ID - alert
    ID - checkbox-marked-circle-outline
    ID - search-web
    ID - bell-ring

    More : https://materialdesignicons.com/

 -->