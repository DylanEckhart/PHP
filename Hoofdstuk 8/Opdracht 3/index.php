<html>
    <head>
        <title>MR Wheely</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="wrapper">
            <img class="header" src="IMG/wheelyHeader.jpg" alt="header-image">
            <form action="Autodealer.php" method="post">
                <label>
                    Merk: <br>
                    <select id="merk">
                        <option value='Audi'>Audi</option>
                        <option value='Ferrari'>Ferrari</option>
                        <option value='Fiat'>Fiat</option>
                        <option value='Mercedes'>Mercedes</option>
                        <option value='Opel'>Opel</option>
                        <option value='Volkswagen'>Volkswagen</option>
                    </select>
                </label>
                <label>
                    Minimale prijs: <br>
                    <input type="number" id="min-prijs">
                </label>
                <label>
                    Maximale prijs: <br>
                    <input type="number" id="max-prijs"><br>
                </label>
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </form>
            <div id="autoModellen">
                <div class='wheely-img' style='background-image:url("img/audi1.jpg");'><h5>Merk: Audi<br>Prijs : &euro; 102500.00</h5></div>
                <div class='wheely-img' style='background-image:url("img/audi2.jpeg");'><h5>Merk: Audi<br>Prijs : &euro; 108250.00</h5></div>
                <div class='wheely-img' style='background-image:url("img/ferrari1.jpg");'><h5>Merk: Ferrari<br>Prijs : &euro; 99500.00</h5></div>
                <div class='wheely-img' style='background-image:url("img/ferrari2.jpg");'><h5>Merk: Ferrari<br>Prijs : &euro; 122500.00</h5></div>
                <div class='wheely-img' style='background-image:url("img/ferrari3.jpg");'><h5>Merk: Ferrari<br>Prijs : &euro; 152500.00</h5></div>
                <div class='wheely-img' style='background-image:url("img/fiat1.jpg");'><h5>Merk: Fiat<br>Prijs : &euro; 10500.00</h5></div>
                <div class='wheely-img' style='background-image:url("img/fiat2.jpg");'><h5>Merk: Fiat<br>Prijs : &euro; 11500.00</h5></div>
                <div class='wheely-img' style='background-image:url("img/mercedes1.jpg");'><h5>Merk: Mercedes<br>Prijs : &euro; 82500.00</h5></div>
                <div class='wheely-img' style='background-image:url("img/mercedes2.jpg");'><h5>Merk: Mercedes<br>Prijs : &euro; 132700.00</h5></div>
                <div class='wheely-img' style='background-image:url("img/mercedes3.jpg");'><h5>Merk: Mercedes<br>Prijs : &euro; 87500.00</h5></div>
                <div class='wheely-img' style='background-image:url("img/mercedes4.jpg");'><h5>Merk: Mercedes<br>Prijs : &euro; 222650.00</h5></div>
                <div class='wheely-img' style='background-image:url("img/opel1.jpg");'><h5>Merk: Opel<br>Prijs : &euro; 13500.00</h5></div>
                <div class='wheely-img' style='background-image:url("img/opel2.jpg");'><h5>Merk: Opel<br>Prijs : &euro; 9500.00</h5></div>
                <div class='wheely-img' style='background-image:url("img/opel3.jpg");'><h5>Merk: Opel<br>Prijs : &euro; 19500.00</h5></div>
                <div class='wheely-img' style='background-image:url("img/vw1.jpg");'><h5>Merk: Volkswagen<br>Prijs : &euro; 16340.00</h5></div>
                <div class='wheely-img' style='background-image:url("img/vw2.jpg");'><h5>Merk: Volkswagen<br>Prijs : &euro; 18340.00</h5></div>
                <div class='wheely-img' style='background-image:url("img/vw3.jpg");'><h5>Merk: Volkswagen<br>Prijs : &euro; 21670.00</h5></div>
            </div>
        </div>
    </body>
</html>
