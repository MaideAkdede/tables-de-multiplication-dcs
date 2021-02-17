<?php
function validated(): array
{
    if (!is_numeric($_GET['nbvaleurs']) && !is_numeric($_GET['nbtables'])) {
        return ['error' => 'Aucun des nombres entrés ne sont valides.'];
    }
    if (!is_numeric($_GET['nbvaleurs'])) {
        return ['error' => 'La valeur entré n’est pas un nombre.'];
    }
    if (!is_numeric($_GET['nbtables'])) {
        return ['error' => 'Le nombre de table entré n’est pas un nombre.'];
    }
    if((float)$_GET['nbtables'] === 0.0 || (float)$_GET['nbvaleurs'] === 0.0){
        return ['error' => 'Entrer des  nombre supérieur à zéro.'];
    }
    if((float)$_GET['nbtables'] < 1 || (float)$_GET['nbvaleurs'] < 1){
        return ['error' => 'Entrer des  nombre entier supérieur à 0.'];
    }
    $nbtables = (float)$_GET['nbtables'];
    $nbvaleurs = (float)$_GET['nbvaleurs'];

    return compact(
        'nbvaleurs',
        'nbtables'
    );
}