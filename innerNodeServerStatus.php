<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * View of servers status registered in pgpool.conf
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
 * @copyright  2003-2006 PgPool Global Development Group
 * @version    CVS: $Id$
 */

require_once('common.php');

if(!isset($_SESSION[SESSION_LOGIN_USER])) {
    exit();
}

$healthCheckDb = 'template1';

$params = readHealthCheckParam();

$healthCheckUser = $params['health_check_user'];

if(isset($params['backend_hostname'])) {
    $backendHostName = $params['backend_hostname'];
    $backendPort = $params['backend_port'];
} else {
    $backendHostName = array();
}

$result = array();
foreach($backendHostName as $num => $hostname) {
    $result[$num]['hostname'] = $backendHostName[$num];
    $result[$num]['port'] = $backendPort[$num];
    
    if(NodeActive($num)) {
        $result[$num]['status'] = TRUE;
    } else {
        $result[$num]['status'] = FALSE;
    }
}

$tpl->assign('nodeServerStatus', $result);
$tpl->assign('nodeCount', count($result));
$tpl->display('innerNodeServerStatus.tpl');

?>
