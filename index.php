<?php

$checkDay = null;
// for test >>>
//$today = date('Y-m-d');
$today = date('2020-07-01');
// <<<
$startDay = date('Y-m-01', strtotime($today));

if ($today == $startDay) {
  // 上月最后一天
  $endDayOfPreMon = date('d', strtotime("$startDay -1 day"));
  // 本月最后一天
  $endDayOfCurMon = date('d', strtotime("$startDay +1 month -1 day"));

  if ($endDayOfPreMon != 31) {
    for($i=$endDayOfCurMon; $i>$endDayOfPreMon; $i--) {
      // for test >>>
      // $checkDay[] = date('Y-m-' . $i);
      $checkDay[] = substr($today, 0, 8) . $i;
      // <<<
    }
    array_push($checkDay, date('Y-m-01', strtotime("$startDay +1 month")));
  } else {
    $checkDay = $today;
  }
} else {
  $checkDay = $today;
}

print_r($checkDay);
