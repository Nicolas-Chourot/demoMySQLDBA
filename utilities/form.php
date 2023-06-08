<?php
include_once "DAL/guid.php";
function sanitizeString($str) {
      $str = stripslashes($str);
      $str = htmlentities($str);
      $str = strip_tags($str);
      //$str = str_replace('|','', $str);
      return $str;
}
function getAntiForgeryToken() {
      $guid = GUIDv4();
      $_SESSION['token'] = $guid;
      return '<input type="hidden" name="token" value="'.$_SESSION["token"].'">';
}
function isFormLegit() {
      if (empty($_SESSION['token'])) return false;
      if (empty($_POST['token'])) return false;
      return (strcmp($_SESSION['token'], $_POST['token']) === 0);
}
?>