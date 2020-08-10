<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="jscript/filtable.js?dev"></script>
    <script>
        $(function(){
            // Basic Filtable usage - pass in a div with the filters and the plugin will handle it
            $('#data').filtable({ controlPanel: $('.table-filters')});
        });
    </script>
    <style>
        body {margin: 0; background-color: #fafafa; font-family: 'Open Sans';}
        .container { margin: 150px auto; max-width: 960px; }
    </style>
    
    <title>Resident Monitoring</title>

</head>

<body>