<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * First access in install process
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

require_once('../version.php');

$messageList = array();
$res_dir = opendir('lang/');
while($file_name = readdir( $res_dir )) {
    if(ereg('^[^\.]', $file_name)) {
        include('lang/' . $file_name);
        $messageList[$message['lang']] = $message['strLang']; 
    }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to pgpool-II Administration Tool</title>
<link href="../screen.css" rel="stylesheet" type="text/css" />
</head>
  <body>
    <div id="header">
      <h1><img src="../images/logo.gif" alt="pgpoolAdmin" /></h1>
    </div>
	  <div id="content">
  <h2>Welcome to pgpool-II Administration Tool</h2>
<form action="checkDirectory.php" method="post" name="CheckPath" id="CheckPath">
<table>
  <tbody>
  <tr>
    <th><label>Language</label></th>
      <td>
        <select name="lang">
        <?php
            foreach ($messageList as $key => $str) {
                echo "<option value='$key' >$str</option>\n";
            }
        ?>
        </select>
    </td>
  </tr>
  </tbody>
</table>
<p><input type="submit" value="Next" /></p>
</form>
</div>
    <div id="footer">
      <address>Version <?php echo $version;?><br />
      Copyright &copy; 2006 <a href="http://pgpool.projects.postgresql.org/">pgpool Global Development Group</a>. All rights reserved.</address>
    </div>
  </body>
</html>
