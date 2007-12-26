<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Message catalog in English
 *
 * PHP versions 4 and 5
 *
 * LICENSE: Permission to use, copy, modify, and distribute this software and
 * its documentation for any purpose and without fee is hereby
 * granted, provided that the above copyright notice appear in all
 * copies and that both that copyright notice and this permission
 * notice appear in supporting documentation, and that the name of the
 * author not be used in advertising or publicity pertaining to
 * distribution of the software without specific, written prior
 * permission. The author makes no representations about the
 * suitability of this software for any purpose.  It is provided "as
 * is" without express or implied warranty.
 *
 * @author     Ryuma Ando <ando@ecomas.co.jp>
 * @copyright  2003-2007 PgPool Global Development Group
 * @version    CVS: $Id$
 */

$message = array(
    'lang' => 'fr',
    'strLang' => 'Français',
    'descBackend_hostname' => 'Le nom du vrai serveur PostgreSQL sur lequel pgpool va se connecter',
    'descBackend_port' => 'Le numéro de port du vrai serveur PostgreSQL',
    'descBackend_socket_dir' => 'Le répertoire du socket de PostgreSQL',
    'descBackend_weight' => 'Poids de la répartition de charge quand pgpool est dans ce mode',
    'descBackend_data_directory' => 'Répertoire de la base de données PostgreSQL',
    'descChild_life_time' => 'Durée de vie d\'un processus enfant en secondes',
    'descChild_max_connections' => 'Si child_max_connections connexions ont été reçues, l\'enfant quitte',
    'descClient_idle_limit' => 'Délai en secondes pour l\'attente d\'une requête d\'un client',
    'descAuthentication_timeout' => 'Durée maximum en secondes pour terminer l\'authentification du client',
    'descConnection_cache' => 'Si vrai, met en cache les connexions vers PostgreSQL',
    'descConnection_life_time' => 'Durée de vie de chaque connexion inutilisée en secondes',
    'descEnable_query_cache' => 'Mettre en place un cache des requêtes',
    'descFailover_command' => 'Commande à exécuter lors du détachement d\'un noeud',
    'descFailback_command' => 'Commande à exécuter lors de l\'attachement d\'un noeud',
    'descHealth_check_period' => 'Spécifie l\'interval de la prochaine vérification du serveur. 0 correspond à une désactivation de la vérification.',
    'descHealth_check_timeout' => 'Pgpool vérifie périodiquement l\'état des serveurs pour détecter les serveurs injoignables, parce que arrêter ou à cause d\'un problème réseau',
    'descHealth_check_user' => 'Nom de l\'utilisateur PostgreSQL pour la vérification de l\'état',
    'descIgnore_leading_white_space' => 'Si vrai, ignore les espaces blancs en début de chaque requête quand pgpool vérifie si la requête est un SELECT pour utiliser la répartition de charge',
    'descInsert_lock' => ' Si vous répliquez une table possédant une colonne de type SERIAL, quelque fois, la valeur de serial ne sera pas identique parmi les serveurs',
    'descListen_addresses' => 'Spécifie les adresses à écouter pour les connexions TCP/IP',
    'descLoad_balance_mode' => 'Réalise une répartition de charge pour les requêtes SELECT',
    'descLog_statement' => 'Si vrai, trace toutes les requêtes dans les journaux',
    'descLogdir' => 'Le nom du répertoire où stocker les journaux de pgpool',
    'descMaster_slave_mode' => 'Exécuter le mode maître/esclave',
    'descMax_pool' => 'Nombre de groupes de connexions que chaque processus serveur pgpool conserve',
    'descNum_init_children' => 'Nombre de processus pgpool exécutés au démarrage',
    'descParallel_mode' => 'Exécuter en mode parallèle',
    'descPcp_port' => 'Le numéro du port de pcp',
    'descPcp_socket_dir' => 'Le répertoire du socket de connexion de pcp',
    'descPcp_timeout' => 'Si le délai expire sans réponse du client, il se déconnecte et s\'arrête',
    'descPgpool2_hostname' => 'Nom du serveur Pgpool2 lors de son exécution',
    'descPort' => 'Numéro de port de pgpool',
    'descPrint_timestamp' => 'Si vrai, une date est ajoutée au début de chaque ligne de traces',
    'descRecovery_user' => 'Nom de l\'utilisateur PostgreSQL pour la récupération en ligne',
    'descRecovery_password' => 'Mot de passe de l\'utilisateur PostgreSQL pour la récupération en ligne',
    'descRecovery_1st_stage_command' => 'Commande de récupération à exécuter à la première étape',
    'descRecovery_2nd_stage_command' => 'Commande de récupération à exécuter à la première étape',
    'descReplication_mode' => 'Configurer ceci à vrai (true) si vous voulez utiliser la réplication',
    'descReplication_stop_on_mismatch' => 'Stopper le mode réplication en as de différence de données entre le maître et l\'esclave',
    'descReplicate_select' => 'Si vrai, réplique les requêtes SELECT. Si faux, les envoit seulement au maître',
    'descReplication_strict' => 'Si vrai, pgpool attendra la fin de la requête sur le maître avant d\'envoyer une requête sur le serveur secondaire',
    'descReplication_timeout' => 'Dans le mode de réplication non strict, il y un risque de verrou mortel',
    'descReset_query_list' => 'Commandes SQL séparées par des points-virgules à exécuter à la fin de la session',
    'descSocket_dir' => 'Le répertoire socket de connexion de pgpool',
    'descSystem_db_dbname' => 'Le nom de la base de données système',
    'descSystem_db_hostname' => 'Nom du serveur du système de bases de données',
    'descSystem_db_password' => 'Mot de passe pour se connecter au système de bases de données',
    'descSystem_db_port' => 'Numéro de port du serveur du système de bases de données',
    'descSystem_db_schema' => 'Nom du schéma de la base de données système',
    'descSystem_db_user' => 'Nom de l\'utilisateur pour se connecter au système de bases de données',
    'errAlreadyExist' => 'Il existe déjà.',
    'errFileNotExecutable' => 'Le fichier n\'est pas exécutable',
    'errFileNotFound' => 'Fichier introuvable',
    'errFileNotWritable' => 'Le fichier ne peut être écrit',
    'errIllegalHostname' => 'Nom d\'hôte illégal',
    'errInputEverything' => 'Merci de saisir tous les éléments',
    'errNoDefined' => 'Pas de paramètre défini',
    'errNotSameLength' => 'La longueur du tableau col_list ne correspond pas à celle de type_list. Vous devriez avoir le même nombre d\'éléments.',
    'errPasswordMismatch' => 'Les mots de passe ne correspondent pas',
    'errRequired' => 'Ceci est requis',
    'errShouldBeInteger' => 'Cet élément devrait être un entier',
    'errShouldBeZeroOrMore' => 'Cet élément devrait être positif ou nul',
    'errSingleQuotation' => 'Merci de placer l\'élément tableau dans des guillemets simples.',
    'msgDeleteConfirm' => 'Voulez-vous vraiment le supprimer ?',
    'msgMasterDbConnectionError' => 'Échec de la connexion au maître',
    'msgPgpoolConfNotFound' => 'pgpool.conf introuvable',
    'msgPleaseSetup' => 'Aucun fichier de configuration. Merci de commencer par la configuration.',
    'msgReloadPgpool' => 'Voulez-vous vraiment recharger les fichiers de configuration ?',
    'msgRestart' => 'Redémarrer pour que les changements soient pris en compte',
    'msgRestartPgpool' => 'Voulez-vous redémarrer pgpool ?',
    'msgSameAsPasswordFile' => 'Valeur identique à celle du fichier de mots de passe',
    'msgSameAsPgpoolFile' => 'Valeur identique à celle du fichier pgpool.conf',
    'msgStopPgpool' => 'Voulez-vous vraiment arrêter pgpool ?',
    'msgUpdateComplete' => 'Mise à jour terminée',
    'msgUpdateFailed' => 'Échec de la mise à jour',
    'strAdd' => 'Ajouter',
    'strAdminPassword' => 'Mot de passe',
    'strBack' => 'Retour',
    'strCancel' => 'Annuler',
    'strChangePassword' => 'Modifier le mot de passe',
    'strClear' => 'Effacer',
    'strClearQueryCache' => 'Effacer le cache des requêtes',
    'strCmdC' => 'Efface le cache des requêtes',
    'strCmdD' => 'Mode debug',
    'strCmdDesc' => 'Si c\'est un blanc, cette option est ignorée.',
    'strCmdM' => 'Mode stop',
    'strCmdN' => 'Ne pas exécuter en mode démon',
    'strCmdPcpFile' => 'pcp.conf',
    'strCmdPgpoolFile' => 'pgpool.conf',
    'strColList' => 'Liste de colonnes',
    'strColName' => 'Nom de la colonne de la clé distribuée',
    'strCommon' => 'Commun',
    'strConnectionError' => 'Erreur de connexion',
    'strConnTime' => 'Date de début de la connexion',
    'strConnUsed' => 'Utilisation de la connexion',
    'strConnUser' => 'utilisateur',
    'strCreateTime' => 'Heure de création',
    'strDataError' => 'Erreur de données',
    'strDateFormat' => 'd/m/Y, H:i:s',
    'strDb' => 'Base de données',
    'strDbName' => 'Nom de la base',
    'strDebug' => 'Mode debug',
    'strDelete' => 'Supprimer',
    'strDeleted' => 'lignes ont été supprimées',
    'strDetail' => 'Détail',
    'strDetailInfo' => 'Informations détail',
    'strDisconnect' => 'Déconnexion',
    'strDistDefFunc'=> 'Nom de fonction distribué',
    'strDown' => 'Bas',
    'strError' => 'Erreur',
    'strErrorCode' => 'Code d\'erreur',
    'strErrorMessage' => 'Message d\'erreur',
    'strExecute' => 'Exécuter',
    'strFeature' => 'Fonctionnalité',
    'strHealthCheck' => 'Vérification',
    'strHelp' => 'Aide',
    'strInvalidation' => 'Invalidation',
    'strIPaddress' => 'Adresse IP',
    'strLanguage' => 'Langue',
    'strLoadBalanceMode' => 'Mode de répartition de charge',
    'strLog' => 'Se connecter',
    'strLogin' => 'Connexion',
    'strLoginName' => 'Nom de connexion',
    'strLogout' => 'Déconnexion',
    'strMasterServer' => 'Serveur maître',
    'strMeasures' => 'Mesures',
    'strNodeInfo' => 'Info. sur le noeud',
    'strNodeStatus' => 'Statut du noeud',
    'strNodeStatus1' => 'Haut. Déconnexion',
    'strNodeStatus2' => 'Haut. Connexion',
    'strNodeStatus3' => 'Bas',
    'strNoNode' => 'Il n\'y a pas de noeud',
    'strOff' => 'Arrêté',
    'strOn' => 'Démarré',
    'strParallelMode' => 'Mode parallèle',
    'strParameter' => 'Paramètre',
    'strPassword' => 'Mot de passe',
    'strPasswordConfirmation' => 'Confirmation du mot de passe',
    'strPasswordFile' => 'Fichier des mots de passe',
    'strPcpConfFile' => 'Fichier pcp.conf',
    'strPcpDir' => 'Répertoire de PCP',
    'strPcpHostName' => 'Nom d\'hôte de PCP',
    'strPcpRefreshTime' => 'Temps de rafraîchissement',
    'strPcpTimeout' => 'Délai de PCP',
    'strPgConfFile' => 'Fichier pgpool.conf',
    'strPgConfSetting' => 'Configuration de pgpool.conf',
    'strPgpool' => 'pgpool',
    'strPgpool1' => 'pgpool-I',
    'strPgpool2' => 'pgpool-II',
    'strPgpoolCommand' => 'Commande pgpool',
    'strPgpoolCommandOption' => 'Options de la commande pgpool',
    'strPgpoolLogFile' => 'Journal pgpool',
    'strPgpoolManagementSystem' => 'Système de gestion de pgpool-II',
    'strPgpoolServer' => 'Serveur pgpool-II',
    'strPgpoolStatus' => 'Statut de pgpool',    
    'strPgpoolSummary' => 'Résumé',
    'strPleaseWait' => 'Un instant...',
    'strPort' => 'Port',
    'strProcId' => 'Processus',
    'strProcInfo' => 'Info. processus',
    'strProcTime' => 'Début d\'exécution du processus',
    'strProtocolMajorVersion' => 'Version majeure du protocole',
    'strProtocolNinorVersion' => 'Version mineure du protocole',
    'strQueryCache' => 'Cache des requêtes',
    'strQueryStr' => 'Requêtes',
    'strReloadPgpool' => 'Recharger',
    'strReplicationMode' => 'Mode réplication',
    'strReset' => 'Réinitialiser',
    'strRestart' => 'Redémarrer',
    'strRestartOption' => 'Options de redémarrage de pgpool',
    'strRestartPgpool' => 'Redémarrer pgpool',
    'strReturn' => 'Renvoyer',
    'strRecovery' => 'Récupération',
    'strSchemaName' => 'Nom du schéma',
    'strSearch' => 'Rechercher',
    'strSecondaryServer' => 'Serveur secondaire',
    'strSetting' => 'Configuration de pgpoolAdmin',
    'strSetup' => 'Configuration',
    'strStartOption' => 'Options de démarrage',
    'strStartPgpool' => 'Exécuter pgpool',
    'strStatus' => 'Statut',
    'strStopOption' => 'Options d\'arrêt de pgpool',
    'strStopPgpool' => 'pgpool est stoppé',
    'strSummary' => 'Résumé',
    'strSystemDb' => 'Règle de partitionnement',
    'strTable' => 'Table',
    'strTypeList' => 'Saisir la liste des colonnes',
    'strUp' => 'Haut',
    'strUpdate' => 'Mettre à jour',
    'strValue' => 'Valeur',
    'strWeight' => 'Poids',
    'e1' => 'pgmgt.conf.php est introuvable.',
    'e2' => 'Le catalogue des messages est introuvable.',
    'e3' => 'Un erreur est survenue lors de l\'exécution de la commande PCP.',
    'e4' => 'pgpool.conf introuvable.',
    'e5' => 'Fichier modèle de Smarty introuvable.',
    'e6' => 'Aide introuvable.',
    'e8' => 'pcp_timeout introuvable dans pgpool.conf',
    'e9' => 'pcp_timeout introuvable dans pgpool.conf',
    'e7' => 'Paramètre introuvable dans pgpmgt.conf.php',
    'e1001' => 'Erreur de la commande PCP.',
    'e1002' => 'Erreur de la commande pcp_node_count.',
    'e1003' => 'Erreur de la commande pcp_node_info.',
    'e1004' => 'Erreur de la commande pcp_proc_count.',
    'e1005' => 'Erreur de la commande pcp_proc_info.',
    'e1006' => 'Erreur de la commande pcp_stop_pgpool.',
    'e1007' => 'Erreur de la commande pcp_detach_node.',
    'e1008' => 'pgpool.conf inexistant.',
    'e1009' => 'pcp.conf inexistant.',
    'e1010' => 'Erreur de la commande pcp_attach_node.',
    'e1011' => 'Journal inexistant.',
    'e1012' => 'Erreur de la commande pcp_recovery_node.',
    'e2001' => 'Erreur de connexion à la base de données.',
    'e2002' => 'L\'erreur est survenue lors de l\'exécution de la commande SELECT',
    'e2003' => 'pgpool.conf inexistant.',
    'e3001' => 'Erreur de connexion à la base de données.',
    'e3002' => 'L\'erreur est survenue lors de l\'exécution de la commande SELECT',
    'e3003' => 'L\'erreur est survenue lors de l\'exécution de la commande INSERT',
    'e3004' => 'L\'erreur est survenue lors de l\'exécution de la commande UPDATE',
    'e3005' => 'L\'erreur est survenue lors de l\'exécution de la commande DELETE',
    'e3006' => 'pgpool.conf inexistant.',
    'e4001' => 'pgpool.conf inexistant.',
    'e4002' => 'Impossible de lire pgpool.conf. ',
    'e4003' => 'Impossible d\'écrire dans pgpool.conf. ',
    'e5001' => 'pgmgt.conf.php inexistant.',
    'e5002' => 'Impossible de lire pgmgt.conf.php.',
    'e5003' => 'Impossible d\'écrire dans pgmgt.conf.php.',
    'e6001' => 'pcp.conf inexistant',
    'e6002' => 'Impossible de lire pcp.conf. ',
    'e6003' => 'Impossible d\'écrire dans pcp.conf. ',
    'e7001' => 'pcp.conf inexistant.',
    'e8001' => 'Impossible de récupérer des informations détaillées.',
    
);

?>
