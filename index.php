<?php

if ($_GET) {
  $url = explode('/', $_GET['url']);

  // var_dump($_GET);

  require_once 'view/' . mb_convert_case($url[0], MB_CASE_TITLE) . '/' . $url[0] . '.phtml';
}

?>
