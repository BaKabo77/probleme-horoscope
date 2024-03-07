<?php
include 'model/model.php';

switch( $action )
 {
/*     case 'reponse':
 {
        $key = $_REQUEST[ 'horoscope' ];
        echo $connexion[ $key ];
        break;
    }
    case 'connexion':
 {
        $cnx = $_REQUEST[ 'cnx' ];
        $mdp = $_REQUEST[ 'mdp' ];

        if ( getConnexion( $cnx, $mdp ) ) {
            include 'views/choix.php';
        } else {
            include 'views/connexion.php';
        }

        break;
    }

    case 'modifier':
 {
        include 'admin.php';
        break;
    }

    case 'administrer':
 {

        var_dump( $_REQUEST );
        foreach ( $_REQUEST as $cle => $valeur )
 {
            $connexion[ $cle ] = $valeur;
        }

    } */

    default:
 {
        include 'views/connexion.php';

    }
}
