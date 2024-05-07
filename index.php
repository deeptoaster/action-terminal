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
      <div class="console-area console-area-top console-area-left">
        <div class="console-content">
          <div class="console-scope">
            <ul class="console-waves">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="console-area console-area-top console-area-right">
        <div class="console-content">
          <div class="console-holo"></div>
        </div>
      </div>
      <div class="console-area console-area-bottom console-area-left">
        <div class="console-content">
          <ul class="console-bars">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
      <div class="console-area console-area-bottom console-area-right">
        <div class="console-content">
          <ul class="console-ball">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
      <div class="console-centerpiece-corner console-centerpiece-corner-left"></div>
      <div class="console-centerpiece-corner console-centerpiece-corner-right"></div>
      <div class="console-centerpiece">
        <div></div>
      </div>
    </div>
  </body>
</html>
