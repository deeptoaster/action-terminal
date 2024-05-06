<?
if (isset($_POST['code'])) {
  $codes = json_decode(file_get_contents('codes.json'), true);

  if (array_key_exists($_POST['code'], $codes)) {
    die($codes[$_POST['code']]);
  } else {
    header('HTTP/1.1 403 Forbidden');
    die();
  }
}
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Terminal</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="action.css" rel="stylesheet" type="text/css" />
    <link href="//fonts.googleapis.com/css?family=Share+Tech+Mono|Audiowide" rel="stylesheet" type="text/css">
    <script src="action.js" type="text/javascript"></script>
  </head>
  <body>
    <div class="console">
      <div class="console-area console-area-top console-area-left"></div>
      <div class="console-area console-area-top console-area-right"></div>
      <div class="console-area console-area-bottom console-area-left"></div>
      <div class="console-area console-area-bottom console-area-right">
        <div class="console-ball">
          <div class="console-ring console-ring-0"></div>
          <div class="console-ring console-ring-1"></div>
          <div class="console-ring console-ring-2"></div>
          <div class="console-ring console-ring-3"></div>
          <div class="console-ring console-ring-4"></div>
          <div class="console-ring console-ring-5"></div>
          <div class="console-ring console-ring-6"></div>
          <div class="console-ring console-ring-7"></div>
          <div class="console-ring console-ring-8"></div>
          <div class="console-ring console-ring-9"></div>
          <div class="console-ring console-ring-10"></div>
          <div class="console-ring console-ring-11"></div>
        </div>
      </div>
      <div class="console-centerpiece-corner console-centerpiece-corner-left"></div>
      <div class="console-centerpiece-corner console-centerpiece-corner-right"></div>
      <div class="console-centerpiece">
        <div class="console-ring"></div>
      </div>
    </div>
  </body>
</html>
