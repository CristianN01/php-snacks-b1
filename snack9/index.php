<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/PremiumUser.php';
require_once __DIR__ . '/classes/Membership.php';

$user = new User('Cristian', 'Cricri', 'cri@gmail.com');
$premiumUser = new PremiumUser('Alex', 'Alexander', 'Alex@gmail.com', new Membership('231BA58478'));

var_dump($user, $premiumUser);