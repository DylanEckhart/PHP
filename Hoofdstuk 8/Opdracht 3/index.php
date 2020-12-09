<html>
    <head>
        <title>Autodealer</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
            <form action="/wheely/index.php" method="post">
                <div class="form-group">
                    <label for="sel1">Merk:</label>
                    <select class="form-control" id="merk" name="merk">
                        <option value="">--Alle merken--</option>
                        <option value='Audi' >Audi</option>
                        <option value='Ferrari' >Ferrari</option>
                        <option value='Fiat' >Fiat</option>
                        <option value='Mercedes' >Mercedes</option>
                        <option value='Opel' >Opel</option>
                        <option value='Volkswagen' >Volkswagen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="type">Minimale prijs:</label>
                    <input type="text" class="form-control" id="type" name="minprijs" value="">
                </div>
                <div class="form-group">
                    <label for="prijs">Maximale prijs:</label>
                    <input type="text" class="form-control" id="prijs" name="maxprijs" value="">
                </div>
                <button type="submit" name="knop" value="submit" class="btn btn-default">Submit</button>
            </form>
    </body>

