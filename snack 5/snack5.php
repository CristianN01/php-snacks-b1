<?php

$paragrafoLungo = "Tony Stark, who has inherited the defense contractor Stark Industries. from his late father Howard Stark, is in war-torn Afghanistan with his friend and military liaison. Lieutenant Colonel James Rhodes. to demonstrate the new 'Jericho' missile. After the demonstration, his convoy is ambushed and Stark is critically wounded by a missile. used by the attackers—one of his companys ow.";

// suddivide la stringa in un array di frasi.
$frasi = explode('.', $paragrafoLungo);

$risultato = '';

foreach ($frasi as $frase) {
    // elimina gli spazi iniziali e finali della frase
    $frase = trim($frase);
    // controlla se la frase e vuota
    if (!empty($frase)) {
        // .= serve per concatenare le stringhe
        $risultato .= '<p>' . $frase . '.</p>';
    }
}
echo $risultato;

?>