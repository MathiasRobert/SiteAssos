<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Assos ENSC</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="lib/material-kit/css/material-kit.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>

    <?php
    $page = explode('/', $_SERVER['PHP_SELF']);
    if((end($page) == "pageAsso.php")||(end($page) == "evenement.php"))
    {
            echo '<link href="css/stylePageAsso.php?asso_id='.$asso_id.'" rel="stylesheet" type="text/css" media="all" />';
    } elseif (end($page) == "calendrier.php") {
        echo '<link rel="stylesheet" href="lib/full-calendar/css/fullcalendar.min.css" />
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/full-calendar/js/moment.min.js"></script>
        <script src="lib/full-calendar/js/fullcalendar.min.js"></script>
        <script src="lib/full-calendar/js/fr.js"></script>
        <script src="js/calendrier.js"></script>';
    }
    ?>


    <script src="https://apis.google.com/js/platform.js"></script>
    <script src="https://apis.google.com/js/api:client.js"></script>
    <script src="js/init.js" type="text/javascript" charset="utf-8"></script>

</head>
