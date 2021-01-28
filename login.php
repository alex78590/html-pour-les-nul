<?php

if (isset($_POST['login']) && isset($_POST['mdp']) && isset($_POST['rad'])) {
  if ($_POST['login'] == "admin" && $_POST['mdp'] == "pwd") {
    echo "true";
  }
  else {
    echo "false";
  }
}
else {
  echo "false";
}
?>