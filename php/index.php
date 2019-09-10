<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <title>PHP Ajax Dischi musicali</title>
    <!-- PHP -->
    <?php 
        include "database.php";
    ?>
</head>
<body>
    <header>
        <div class="container">
            <img src="media/logo.png" alt="logo" />
        </div>
    </header>
    <div class="cds-container container">
        <!-- PHP -->
        <?php 
            foreach ($disco as $album) {
                echo "<div class='cd'>";
                    echo '<img src="' . $album["poster"] . '"/>';
                    echo "<h3>" . $album["title"] . "</h3>";
                    echo "<span class='author'>" . $album["author"] . "</span>";
                    echo "<span>" . $album["genre"] . "</span>";
                    echo "<span class='year'>" . $album["year"] . "</span>";
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>