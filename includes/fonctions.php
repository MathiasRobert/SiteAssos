<?php

function stringMois($m) {
  switch ($m) {
    case '01':
      return 'Janvier';
      break;
    case '02':
      return 'Février';
      break;
    case '03':
      return 'Mars';
      break;
    case '04':
      return 'Avril';
      break;
    case '05':
      return 'Mai';
      break;
    case '06':
      return 'Juin';
      break;
    case '07':
      return 'Juillet';
      break;
    case '08':
      return 'Août';
      break;
    case '09':
      return 'Septembre';
      break;
    case '10':
      return 'Octobre';
      break;
    case '11':
      return 'Novembre';
      break;
    case '12':
      return 'Decembre';
      break;

    default:
      # code...
      break;
  }
}

function verifAccesAdmin() {
  if(!isset($_SESSION['ASSO_ID']) || empty($_SESSION['ASSO_ID']))
  {
    $_SESSION['alerteAcces'] = "true";
    header('Location: ../index.php');
  }
}

?>
