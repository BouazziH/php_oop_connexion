<?php

class Utilisateur implements interfaceUtilisateur
{
    private string $name;

    public function __construct()
    {
    }
    public function __get($argName)
    {
        echo "La propriété $argName n'existe pas.";
    }

    
   
}