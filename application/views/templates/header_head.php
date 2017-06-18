<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> - Geomedición</title>
    <meta name="description" content="Geomedicion">
    <meta name="author" content="Kelfi Batista">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://static.geomatica.biz/asset/images/logos/favicon.ico" rel="shortcut icon">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet'>
    <link href="http://static.geomatica.biz/asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://static.geomatica.biz/asset/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://static.geomatica.biz/asset/fonts/fontello/css/fontello.css" rel="stylesheet">
    <link href="http://static.geomatica.biz/asset/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="http://static.geomatica.biz/asset/plugins/pace/pace-flash.css" rel="stylesheet">
    <?php
    if(isset($pluginsCss)){
        foreach ($pluginsCss as $pluginCss) {
            echo "<link href='http://static.geomatica.biz/asset/{$pluginCss}' rel='stylesheet'>";
        }
    }
    ?>
    <link href="http://static.geomatica.biz/asset/css/animations.css" rel="stylesheet">
    <link href="http://static.geomatica.biz/asset/plugins/hover/hover-min.css" rel="stylesheet">
    <link href="http://static.geomatica.biz/asset/css/style.css" rel="stylesheet">
    <link href="http://static.geomatica.biz/asset/css/typography-default.css" rel="stylesheet">
    <link href="http://static.geomatica.biz/asset/css/skins/blue.css" rel="stylesheet">
</head>