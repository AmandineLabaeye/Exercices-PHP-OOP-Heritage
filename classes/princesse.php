<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 11:34
 */

class princesse extends personnage
{

    private $saved;

    public function __construct()
    {
        $this->saved = 0;
        $this->x = 450;
        $this->y = 450;
    }

    public function getSaved()
    {
        return $this->saved;
    }

}