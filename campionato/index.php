<?php

$campionato = [
    [
        'casa' => 'Olimpia Milano',
        'ospiti' => 'Latina basket',
        'punti_casa' => '55',
        'punti_ospiti' => '75',
    ],
    [
        'casa' => 'Olimpia Milano',
        'ospiti' => 'Latina basket',
        'punti_casa' => '55',
        'punti_ospiti' => '75',
    ],
    [
        'casa' => 'Olimpia Milano',
        'ospiti' => 'Latina basket',
        'punti_casa' => '55',
        'punti_ospiti' => '75',
    ],
    [
        'casa' => 'Olimpia Milano',
        'ospiti' => 'Latina basket',
        'punti_casa' => '55',
        'punti_ospiti' => '75',
    ],
];
?>

<ul>
    <?php foreach ($campionato as $partita) { ?>
        <li>
            <?php echo $partita['casa']; ?> - <?php echo $partita['ospiti']; ?> | <?php echo $partita['punti_casa']; ?> - <?php echo $partita['punti_ospiti']; ?>
        </li>
    <?php } ?>
</ul>


