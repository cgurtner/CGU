<?php

$dateNow = new DateTime();
$birthday = new DateTime('1992-07-20');
$age = $dateNow->diff($birthday)->y;

?><main class="fade-in"><div class="bg-fullscreen"></div></main>