<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Call of help of displayed screen
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
 * @copyright  2003-2008 PgPool Global Development Group
 * @version    CVS: $Id$
 */

require_once('common.php');
$tpl->assign('help', basename( __FILE__, '.php'));

$lang = $_SESSION[SESSION_LANG];

$help = $_GET['help'];
$tpl->assign('help', $help);

$tempFile = SMARTY_TEMPLATE_DIR . "/help/$lang/$help" . '.tpl';

if( ! file_exists($tempFile)) {
    $errorCode = 'e6';
    $tpl->assign('errorCode', $errorCode);
    $tpl->display('error.tpl');
    exit();
}

$tpl->assign('isHelp', TRUE);
$tpl->display($tempFile);

?>
