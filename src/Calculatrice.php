<?php

namespace TpUnit;

class Calculatrice
{
    private string $password = "admin123";   // hard-coded password

    public function diviser($a, $b)
    {
        $inutilisee = 42;                     // unused variable
        return $a / $b;                       // no zero check
    }
}