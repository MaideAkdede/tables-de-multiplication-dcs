
<!-- Début du template d’affichage -->
<!DOCTYPE html>
<html lang="fr-be">
<head>
    <meta charset="utf-8">
    <title>Les tables de multiplication</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<main class="container">
    <h1>Les tables de multiplication</h1>
    <section>
        <h2>Indiquez quelles tables vous souhaitez</h2>
        <form action="index.php" method="get">
            <div class="form-group">
                <label class="control-label" for="nbtables">Nombre de tables : </label>
                <input class="form-control" id="nbtables" type="text" name="nbtables"
                       value="2">
            </div>
            <div class="form-group">
                <label class="control-label" for="nbvaleurs">Nombre de valeurs : </label>
                <input class="form-control" id="nbvaleurs" type="text" name="nbvaleurs"
                       value="3">
            </div>
            <input type="submit">
        </form>
    </section>
    <section>
        <h2>Voici vos tables</h2>
        <table class="table table-striped table-bordered">
            <caption>Les 3 premières valeurs des 2 premières tables</caption>
            <tr>
                <th class="vide">&nbsp;</th>
                <th scope="col">1</th>
                <th scope="col">2</th>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>1 * 1 = 1</td>
                <td>1 * 2 = 2</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>2 * 1 = 2</td>
                <td>2 * 2 = 4</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>3 * 1 = 3</td>
                <td>3 * 2 = 6</td>
            </tr>
        </table>
    </section>
</main>
</body>
</html>