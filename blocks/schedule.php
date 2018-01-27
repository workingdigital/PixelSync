<?php require ('../blockload.php'); ?>
<div class="main">
    <h1>Horaires d'ouverture</h1>
        <p class="first">
            <span class="day">lundi</span><span class="hours"><?= $ENV['schedule_timeslot']['monday'] ?></span><br />
            <span class="day">mardi</span><span class="hours"><?= $ENV['schedule_timeslot']['tuesday'] ?></span><br />
            <span class="day">mercredi</span><span class="hours"><?= $ENV['schedule_timeslot']['wednesday'] ?></span><br />
        </p>
        <p>
            <span class="day">jeudi</span><span class="hours"><?= $ENV['schedule_timeslot']['thurday'] ?></span><br />
            <span class="day">vendredi</span><span class="hours"><?= $ENV['schedule_timeslot']['fhurday'] ?></span><br />
            <span class="day">samedi</span><span class="hours"><?= $ENV['schedule_timeslot']['saturday'] ?></span><br />
            <span class="day">dimanche</span><span class="hours"><?= $ENV['schedule_timeslot']['sunday'] ?></span></span><br />
        </p>
</div>