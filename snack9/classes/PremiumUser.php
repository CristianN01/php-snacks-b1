<?php

require_once __DIR__ . '/Membership.php';

class PremiumUser extends User{
    private $membership;

    public function __construct($name, $username, $email, Membership $membership){
        parent::__construct($name, $username, $email);
        $this->membership = $membership;
    }
}