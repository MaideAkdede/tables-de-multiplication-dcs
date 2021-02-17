<!-- PHP -->
<?php
require ('validation.php');

$nbvaleurs = 0;
$nbtables = 0;

if(isset($_GET['nbvaleurs']) && isset($_GET['nbtables'])){
    $entered = $_GET;
    $data = validated();

    $nbtables = $_GET['nbtables'];
    $nbvaleurs = $_GET['nbvaleurs'];
}
?>
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

        <form action="<?= $_SERVER['PHP_SELF'] ;?>" method="get">

            <div class="form-group">
                <label class="control-label" for="nbtables">Nombre de tables : </label>
                <input class="form-control" id="nbtables" type="text" name="nbtables"
                       value="<?= $entered["nbtables"] ?? 0 ;?>">
            </div>
            <div class="form-group">
                <label class="control-label" for="nbvaleurs">Nombre de valeurs : </label>
                <input class="form-control" id="nbvaleurs" type="text" name="nbvaleurs"
                       value="<?= $entered["nbvaleurs"] ?? 0 ;?>">
            </div>
            <input type="submit">
        </form>
    </section>
    <?php if(isset($data['error'])) :?>
    <p style="color: #f34848; font-style: italic;"><?= $data['error'];?></p>
    <?php elseif($nbtables > 0 && $nbvaleurs > 0) :?>
    <section>
        <h2>Voici vos tables</h2>
        <table class="table table-striped table-bordered">
            <caption>Les <?= $nbvaleurs ?> premières valeurs des <?= $nbtables ?> premières tables</caption>

            <tr>
                <th class="vide">&nbsp</th>
                <?php for ($th = 1; $th <= $nbtables; $th++):?>
                    <th scope="col"><?= $th ?></th>
                <?php endfor;?>
            </tr>
            <?php for ($th = 1; $th <= $nbvaleurs; $th++): ?>
                <tr>
                    <th scope="row"><?= $th ?></th>
                    <?php for ($td = 1; $td <= $nbtables; $td++): ?>
                        <td><?= $th ?> * <?= $td ?> = <?= $th * $td ?></td>
                    <?php endfor ?>
                </tr>
            <?php endfor ?>
        </table>
    </section>
    <?php endif;?>
</main>
</body>
</html>