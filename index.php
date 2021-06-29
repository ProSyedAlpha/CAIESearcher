<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Search for content in CAIE Exams">
        <meta name="keywords" content="CAIE, search, caie, searcher">
        <meta name="author" content="Syed Ali">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CAIE Searcher</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="logo.png" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="nav">
            <span id="credits">Developed and maintained by HatsOff</span>
        </div>
        <div id="content">
            <span id="title">CAIE Searcher</span>
            <form method="post">
                <input type="text" name="query" id="queryBox" autofocus>
                <span class="optionLabel">Programme: </span>
                <select name="programmes" id="programmeSelect">
                    <option value="O Level">O Level</option> 
                </select>
                <span class="optionLabel">Subject: </span>
                <select name="subjects" id="subjectSelect">
                    <option value="Islamiyat (2058)">Islamiyat (2058)</option>
                    <option value="Pakistan Studies (2059)">Pakistan Studies (2059)</option> 
                </select>
                <span class="optionLabel">Include MS</span>
                <input type="checkbox" name="msIn" value="msIn" id="msIn">
                <input type="submit" name="search" value="Search" id="searchButton">
            </form>
        </div>
        <div id="results">                
            <?php include 'method.php'; ?>
        </div>
        
    </body>
</html>