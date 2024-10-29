


<!doctype html>
<html lang="en">
    <head>

        <title>Document</title>
    </head>
    <body>
        <form action="DomaciPodaci.php" method="GET">
            <input type="text" name="cena">
            <br/>
            <select name="vrstaRobe" >
                <option>Hrana</option>
                <option>Oprema za racunare</option>
            </select>
            <br/>
            <input type="checkbox" name="porez" id="porez">
            <label for="porez">izracunaj porez</label>
            <br/>
            <button type="submit">Izracunaj cenu</button>
        </form>
    </body>
</html>