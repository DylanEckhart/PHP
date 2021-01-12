<html lang="en">
<head>
    <title>Overzicht van alle broodjes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>Bakkerij Vlecht Beheer</h1>
</header>
<div id="wrapper">
    <ul>
        <li>
            <a href="index.php">Overzicht van de broodjes</a>
        </li>
        <li>
            <a href="BroodjesToevoegen.php">Toevoegen van broodjes</a>
        </li>
    </ul>
    <form action="index.php" method="get">
        <label>
            Vul hier wat voor soort broodje gewenst is in: <br>
            <input type="text" name="meel-broodje"><br>
        </label>
        <label>
            Vul hier de gewenste vorm van het broodje in: <br>
            <input type="text" name="vorm-broodje"><br>
        </label>
        <label>
            Vul hier het gewenste gewicht van het broodje in: <br>
            <input type="text" name="gewicht-broodje"><br>
        </label>
        <button type="submit">Verzenden</button>
        <button type="reset">Reset</button>
    </form>
</div>
</body>
</html>