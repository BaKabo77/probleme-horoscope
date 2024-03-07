<?php
include 'data.php';

function getConnexion($login,$mdp)
{
        $flag = false;
        foreach ( $login as $value ) {
            foreach ( $value as $k=>$v ) {
                if ( $k == $login && $v == $mdp ) {
                    $flag = true;
                }
            }
        }
            return $flag;
}

function getLesSignes(){
    $signe = signe();
    return $signe;
}
