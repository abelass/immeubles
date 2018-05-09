<?php

/**
 *  Fichier généré par la Fabrique de plugin v6
 *   le 2018-05-09 17:05:34
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$data = array (
  'fabrique' => 
  array (
    'version' => 6,
  ),
  'paquet' => 
  array (
    'prefixe' => 'immeubles',
    'nom' => 'Immeubles',
    'slogan' => 'Gérer des immeubles',
    'description' => 'Permet de gérer des immeubles',
    'logo' => 
    array (
      0 => '',
    ),
    'version' => '1.0.0',
    'auteur' => 'Rainer Müller',
    'auteur_lien' => 'https://websimple.be',
    'licence' => 'GNU/GPL',
    'categorie' => 'divers',
    'etat' => 'dev',
    'compatibilite' => '[3.0.0;3.2.*]',
    'documentation' => 'https://github.com/abelass/immeubles',
    'administrations' => 'on',
    'schema' => '1.0.0',
    'formulaire_config' => 'on',
    'formulaire_config_titre' => 'Configurations immeubles',
    'fichiers' => 
    array (
      0 => 'autorisations',
      1 => 'fonctions',
      2 => 'options',
      3 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => 'on',
  ),
  'objets' => 
  array (
    0 => 
    array (
      'nom' => 'Immeubles',
      'nom_singulier' => 'Immeuble',
      'genre' => 'masculin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'logo_variantes' => '',
      'table' => 'spip_immeubles',
      'cle_primaire' => 'id_immeuble',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'immeuble',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Titre',
          'champ' => 'titre',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Déscriptif',
          'champ' => 'descriptif',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '5',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=4',
        ),
      ),
      'champ_titre' => 'titre',
      'langues' => 
      array (
        0 => 'lang',
        1 => 'id_trad',
      ),
      'champ_date' => 'date',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Immeubles',
        'titre_objet' => 'Immeuble',
        'info_aucun_objet' => 'Aucun immeuble',
        'info_1_objet' => 'Un immeuble',
        'info_nb_objets' => '@nb@ immeubles',
        'icone_creer_objet' => 'Créer un immeuble',
        'icone_modifier_objet' => 'Modifier ce immeuble',
        'titre_logo_objet' => 'Logo de ce immeuble',
        'titre_langue_objet' => 'Langue de ce immeuble',
        'texte_definir_comme_traduction_objet' => 'Ce immeuble est une traduction du immeuble numéro :',
        'titre_\\objets_lies_objet' => 'Liés à ce immeuble',
        'titre_objets_rubrique' => 'Immeubles de la rubrique',
        'info_objets_auteur' => 'Les immeubles de cet auteur',
        'retirer_lien_objet' => 'Retirer ce immeuble',
        'retirer_tous_liens_objets' => 'Retirer tous les immeubles',
        'ajouter_lien_objet' => 'Ajouter ce immeuble',
        'texte_ajouter_objet' => 'Ajouter un immeuble',
        'texte_creer_associer_objet' => 'Créer et associer un immeuble',
        'texte_changer_statut_objet' => 'Ce immeuble est :',
        'supprimer_objet' => 'Supprimer cet immeuble',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cet immeuble ?',
      ),
      'rubriques' => 
      array (
        0 => 'plan',
      ),
      'liaison_directe' => '',
      'table_liens' => '',
      'afficher_liens' => '',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'fichiers' => 
      array (
        'echafaudages' => 
        array (
          0 => 'prive/squelettes/contenu/objets.html',
          1 => 'prive/objets/infos/objet.html',
          2 => 'prive/squelettes/contenu/objet.html',
        ),
        'explicites' => 
        array (
          0 => 'action/supprimer_objet.php',
        ),
      ),
      'saisies' => 
      array (
        0 => 'objets',
      ),
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
      ),
    ),
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'jpg',
          'contenu' => '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',
        ),
      ),
    ),
    'objets' => 
    array (
      0 => 
      array (
        'logo' => 
        array (
          0 => 
          array (
            'extension' => 'jpg',
            'contenu' => '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',
          ),
        ),
      ),
    ),
  ),
);
