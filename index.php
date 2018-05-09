<?php

require_once(__DIR__ . '/config.php')
require_once(__DIR__ . '/Poll.php')

try {
  $poll = new \MyApp\Poll();
} catch (Exception $e) {
  echo $e->getMessage();
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $poll->post();
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Poll</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <h1>Which do you like best?</h1>
    <form class="" action="" method="post">
      <div class="row">
        <div class="box" id="box_0" data-id="0"></div>
        <div class="box" id="box_1" data-id="1"></div>
        <div class="box selected" id="box_2" data-id="2"></div>
      </div>
      <div class="" id="btn">Vote</div>
    </form>
  </body>
</html>
