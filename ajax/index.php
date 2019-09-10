<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <title>PHP Ajax Dischi musicali</title>
</head>
<body>
    <header>
        <div class="container">
            <img src="media/logo.png" alt="logo" />
        </div>
    </header>

    <div class="cds-container container">
        <!-- Template Disco -->
    </div>

    <!-- TEMPLATE: DISCO -->
    <script id="template" type="text/x-handlebars-template">
        <div class="cd">
            <img src="{{poster}}" alt="">
            <h3>{{title}}</h3>
            <span class="author">{{author}}</span>
            <span>{{genre}}</span>
            <span class="year">{{year}}</span> 
        </div>
    </script>
   
    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
</body>
</html>