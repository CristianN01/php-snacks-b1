<?php


/**
 * Class User
 * with anme, username, email.
 */
class User {
    private $name;
    private $username;
    private $email;

    /**
     * construct of User with his param.
     *
     * @param String $name
     * @param String $username
     * @param String $email
     */
    public function __construct($name, $username, $email){
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        
    }
}