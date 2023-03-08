<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Basic-Fit Utrecht</title>
    </head>
    <body>
    <h3>Basic-fit Utrecht</h3>
        <form action="create.php" method="post">
            <fieldset>
                <p>Kies je homeclub:</p>
                <select name="locations" required>
                    <option value="Moreelsehoek_2">Moreelsehoek_2</option>
                    <option value="Biesterlaan_22">Biesterlaan_22</option>
                </select>
                <br>
                <label for="lid">Selecteer een lidmaatschap:</label>
                <input type="radio" name="lid" value="Comfort" required>Comfort
                <input type="radio" name="lid" value="Premium" required>Premium
                <input type="radio" name="lid" value="All in" required>All in
                <br>
                <br>
                <label for="looptijd">Looptijd:</label>
                <input type="radio" name="looptijd" value="Jaarlidmaatschap" required>Jaarlidmaatschap
                <input type="radio" name="looptijd" value="Flex optie" required>Flex optie
                <br>
                <br>
                <label for="">Selecteer je extra's:</label>
                <input type="checkbox" name="sportswater" >Yanga sportswater € 2,50 per 4 weken
                <input type="checkbox" name="coach" >Personal online coach € 60,00 eenmalig
                <input type="checkbox" name="intro" >Personal training intro € 25,00 eenmalig
                <br>
                <label for="email">E-mail:</label>
                <input type="email" name="email">
                <br>
                <input type="submit" value="Sla op">
                <input type="reset" value="reset">
                <input type="hidden" name="hidden" value="datetime-local">
            </fieldset>
        </form>
    </body>
</html>

<?php
?>