<?php
$currentDate = date('m.d', time());
$currentDateArray = explode('.', $currentDate);

$currentMonth = $currentDateArray[0];
$currentDay = $currentDateArray[1];

if ($currentMonth == 12 && $currentDay >= 24) {
    include 'online_store.php';
} else {
    include 'timer.php';
}