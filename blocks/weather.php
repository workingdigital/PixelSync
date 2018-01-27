<div class="main">
    <?php require ('../blockload.php'); $weather = $blockmanager->weather(); ?>
      <?php if ($weather != false) { ?>
        <h1>Informations météorologiques</h1>
        <div class="weather-col">
          <span class="temp">Description: <b><?= $weather['data'][0]['weather']['description'] ?></b></span><br />
          <span class="temp">Humidité: <b><?= $weather['data'][0]['rh'] ?>%</b></span><br />
          <span class="temp">Température: <b><?= $weather['data'][0]['temp'] ?>°C</b></span><br />
          <span class="temp">Nuages: <b><?= $weather['data'][0]['clouds'] ?>%</b></span><br />
          <span class="temp">Direction du vent: <b><?= $weather['data'][0]['wind_cdir_full'] ?></b></span><br />
          <span class="temp">Force du vent: <b><?= $weather['data'][0]['wind_spd'] ?> <small>km/h</small></b></span><br />
        </div>
        <div class="weather-col">
            <img class="icon-img" src="https://www.weatherbit.io/static/img/icons/<?= $weather['data'][0]['weather']['icon'] ?>.png" alt="icon-error">
      </div>
        <?php } else { echo '<h1>Une erreur s\'est produite . . .</h1><span class="temp">Le service météorologique n\'est pas disponible. <small><b>(429)</b></small></span>'; } ?>
</div>