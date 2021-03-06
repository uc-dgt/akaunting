<?php

return [

    'next'                  => 'Suivant',
    'refresh'               => 'Actualiser',

    'steps' => [
        'requirements'      => 'S’il vous plaît, veuillez remplir les conditions suivantes !',
        'language'          => 'Etape 1/3 : Choix de la langue',
        'database'          => 'Etape 2/3 : Configuration de la base de données',
        'settings'          => 'Etape 3/3 : Société et détails de l\'administrateur',
    ],

    'language' => [
        'select'            => 'Choix de la langue',
    ],

    'requirements' => [
        'php_version'       => 'PHP 5.6.4 ou supérieure doit être utilisé !',
        'enabled'           => ':feature doit être activée !',
        'disabled'          => ':feature doit être désactivée !',
        'extension'         => 'L\'extension :extension doit être chargé !',
        'directory'         => ':directory doit être accessible en écriture !',
    ],

    'database' => [
        'hostname'          => 'Nom d\'hôte',
        'username'          => 'Nom d\'utilisateur',
        'password'          => 'Mot de passe',
        'name'              => 'Base de données',
    ],

    'settings' => [
        'company_name'      => 'Nom de l\'entreprise',
        'company_email'     => 'Email de l’entreprise',
        'admin_email'       => 'E-mail de l\'administrateur',
        'admin_password'    => 'Mot de passe de l\'administrateur',
    ],

    'error' => [
        'connection'        => 'Erreur : Impossible de se connecter à la base de données ! S’il vous plaît, assurez-vous que les informations sont correctes.',
    ],

];
