<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Check parameters used in PgpoolAdmin
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
 * @copyright  2003-2011 PgPool Global Development Group
 * @version    CVS: $Id$
 */

require_once('../version.php');

session_start();

require("defaultParameter.php");
require_once('setLang.php');

/* --------------------------------------------------------------------- */
/* Error check                                                           */
/* --------------------------------------------------------------------- */

$error = FALSE;

$action = '';
if (isset($_POST['action'])) {
    $action = $_POST['action'];
}

// check pgpool.conf
if (isset($_POST['pgpool2_config_file']) && $_POST['pgpool2_config_file']) {
    $pgpool2_config_file = $_POST['pgpool2_config_file'];
} else {
    $pgpool2_config_file = _PGPOOL2_CONFIG_FILE;
}

$msgPgpoolConfigFile = '';
if (!@is_file($pgpool2_config_file)) {
    $msgPgpoolConfigFile = 'File not found';
    $error = TRUE;
} else {
    if (!is_readable($pgpool2_config_file)) {
        $msgPgpoolConfigFile = 'Read access denied';
        $error = TRUE;
    }
    if (!is_writable($pgpool2_config_file)) {
        $msgPgpoolConfigFile = 'Write access denied';
        $error = TRUE;
    }
}

// check pcp.conf
if (isset($_POST['password_file']) && $_POST['password_file']) {
    $password_file = $_POST['password_file'];
} else {
    $password_file = _PGPOOL2_PASSWORD_FILE;
}

$msgPasswordFile = '';
if (!@is_file($password_file)) {
    $msgPasswordFile = 'File not found';
    $error = TRUE;
} else {
    if (!is_readable($password_file)) {
        $msgPasswordFile = 'Read access denied';
        $error = TRUE;
    }
    if (!is_writable($password_file)) {
        $msgPasswordFile = 'Write access denied';
        $error = TRUE;
    }
}

// check bin directory
if (isset($_POST['pgpool_command']) && $_POST['pgpool_command']) {
    $pgpool_command = $_POST['pgpool_command'];
} else {
    $pgpool_command = _PGPOOL2_COMMAND;
}

$msgPgpoolCommand = '';
if (!@is_file($pgpool_command)) {
    $msgPgpoolCommand = 'pgpool command not found';
    $error = TRUE;
} elseif (!is_executable($pgpool_command)) {
    $msgPgpoolCommand =  'pgpool command not executable';
    $error = TRUE;
}

// check args of pgpool comand
$msgCmdC = '';
$msgCmdLargeD = '';
$msgCmdD = '';
$msgCmdN = '';
$msgCmdM = '';

$msgPgpoolLogFile = '';
if (isset($_POST['pgpool_logfile']) && $_POST['pgpool_logfile']) {
    $pgpool_logfile = $_POST['pgpool_logfile'];
} else {
    $pgpool_logfile = _PGPOOL2_LOG_FILE;
}

if ($pgpool_logfile != '' && strpos($pgpool_logfile, '|') !== FALSE) {
    // pipe
    $tmp_str = trim($pgpool_logfile);
    if (($tmp_str[0] != '|') || ($tmp_str[strlen($tmp_str) - 1] == '|')) {
        $msgPgpoolLogFile = 'Directory not found';
        $error = TRUE;
    }

} elseif (!is_dir(dirname($pgpool_logfile))) {
    $msgPgpoolLogFile = 'Directory not found';
    $error = TRUE;

} elseif (!is_writable(dirname($pgpool_logfile))) {
    $msgPgpoolLogFile = 'Write access denied';
    $error = TRUE;
}

if (isset($_POST['pcp_client_dir']) && $_POST['pcp_client_dir']) {
    $pcp_client_dir = $_POST['pcp_client_dir'];
} else {
    $pcp_client_dir = _PGPOOL2_PCP_DIR;
}

$msgPcpClientDir = '';
if (!is_dir($pcp_client_dir)) {
    $msgPcpClientDir = 'Directory not found';
        $error = TRUE;
} else {
    $command = array('pcp_attach_node',
                     'pcp_detach_node',
                     'pcp_node_count',
                     'pcp_node_info',
                     'pcp_proc_count',
                     'pcp_proc_info',
                     'pcp_stop_pgpool',
                     'pcp_systemdb_info');

    for ($i = 0; $i < count($command); $i++) {
        if (!@is_file($pcp_client_dir . "/" . $command[$i])) {
            $msgPcpClientDir = $command[$i] . ' command not found';
            $error = TRUE;
        } elseif (!is_executable($pcp_client_dir . "/" . $command[$i] )) {
            $msgPcpClientDir = $command[$i] . ' not executable';
            $error = TRUE;
        }
    }
}

$msgPcpHostname = '';
if (isset($_POST['pcp_hostname']) && $_POST['pcp_hostname']) {
    $pcp_hostname = $_POST['pcp_hostname'];
} else {
    $pcp_hostname =  _PGPOOL2_PCP_HOSTNAME;
}

if (isset($_POST['pcp_timeout']) && $_POST['pcp_timeout']) {
    $pcp_timeout= $_POST['pcp_timeout'];
} else {
    $pcp_timeout =  _PGPOOL2_PCP_TIMEOUT;
    $msgPcpTimeout = '';
}

if (isset($_POST['pcp_refreshTime']) && $_POST['pcp_refreshTime']) {
    $pcp_refreshTime = $_POST['pcp_refreshTime'];
} else {
    $pcp_refreshTime =  _PGPOOL2_STATUS_REFRESH_TIME;
    $msgPcpRefreshTime = '';
}

/* --------------------------------------------------------------------- */
/* Write pgmt.conf.php                                                   */
/* --------------------------------------------------------------------- */

if ($error || (isset($_POST['submitBack']) && $_POST['submitBack'] != NULL)) {

} else {
    $params['lang']                = $_SESSION['lang'];
    $params['pgpool2_config_file'] = $pgpool2_config_file;
    $params['password_file']       = $password_file;
    $params['pcp_client_dir']      = $pcp_client_dir;
    $params['pcp_hostname']        = $pcp_hostname;
    $params['pcp_refreshTime']     = $pcp_refreshTime;

    $_SESSION['params'] = $params;
}

if (!$error && $action == 'next') {

    $fp = fopen( "../conf/pgmgt.conf.php", "w");

    fputs($fp, "<?php"."\n");

    $str = 'define(\'_PGPOOL2_LANG\', \'' . $_SESSION['lang'] . '\');' . "\n";
    fputs($fp, $str);

    $str = 'define(\'_PGPOOL2_CONFIG_FILE\', \'' . $_POST['pgpool2_config_file'] . '\');' . "\n";
    fputs($fp, $str);

    $str = 'define(\'_PGPOOL2_PASSWORD_FILE\', \'' . $_POST['password_file'] . '\');' . "\n";
    fputs($fp, $str);

    $str = 'define(\'_PGPOOL2_COMMAND\', \'' . $_POST['pgpool_command'] . '\');' . "\n";
    fputs($fp, $str);

    if (isset($_POST['c'])) {
        $c = 1;
    } else {
        $c = 0;
    }

    if (isset($_POST['D'])) {
        $D = 1;
    } else {
        $D = 0;
    }

    if (isset($_POST['d'])) {
        $d = 1;
    } else {
        $d = 0;
    }

    if (isset($_POST['n'])) {
        $n = 1;
    } else {
        $n = 0;
    }

    $str = 'define(\'_PGPOOL2_CMD_OPTION_C\', \'' . $c . '\');' . "\n";
    fputs($fp, $str);

    $str = 'define(\'_PGPOOL2_CMD_OPTION_LARGE_D\', \'' . $D . '\');' . "\n";
    fputs($fp, $str);

    $str = 'define(\'_PGPOOL2_CMD_OPTION_D\', \'' . $d . '\');' . "\n";
    fputs($fp, $str);

    $str = 'define(\'_PGPOOL2_CMD_OPTION_M\', \'' . $_POST['m'] . '\');' . "\n";
    fputs($fp, $str);

    $str = 'define(\'_PGPOOL2_CMD_OPTION_N\', \'' . $n . '\');' . "\n";
    fputs($fp, $str);

    $str = 'define(\'_PGPOOL2_LOG_FILE\', \'' . $_POST['pgpool_logfile'] . '\');' . "\n";
    fputs($fp, $str);

    $str = 'define(\'_PGPOOL2_PCP_DIR\', \'' . $_POST['pcp_client_dir'] . '\');' . "\n";
    fputs($fp, $str);

    $str = 'define(\'_PGPOOL2_PCP_HOSTNAME\', \'' . $_POST['pcp_hostname'] . '\');' . "\n";
    fputs($fp, $str);

    $str = 'define(\'_PGPOOL2_PCP_TIMEOUT\', \'' . $_POST['pcp_timeout'] . '\');' . "\n";
    fputs($fp, $str);

    $str = 'define(\'_PGPOOL2_STATUS_REFRESH_TIME\', \'' . $_POST['pcp_refreshTime'] . '\');' . "\n";
    fputs($fp, $str);

    fputs($fp, "?>"."\n");

    fclose($fp);

    header("Location: finish.php");
}

/* --------------------------------------------------------------------- */
/* HTML                                                                  */
/* --------------------------------------------------------------------- */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $message['strParameterCheck']; ?></title>
<link href="../screen.css" rel="stylesheet" type="text/css" />
</head>
  <body>
    <div id="header">
      <h1><img src="../images/logo.gif" alt="pgpoolAdmin" /></h1>
    </div>
      <div id="content">
  <h2>Welcome to pgpool-II Administration Tool</h2>
  <h3><?php echo $message['strParameterCheck']; ?></h3>
  <form action="checkParameter.php" method="post" name="CheckPath" id="CheckPath">
    <?php
    if ($error) {
        echo '<input type="hidden" name="action" value="check">';
    } else {
        echo '<input type="hidden" name="action" value="next">';
    }
    ?>
<table>
  <tbody>
  <tr>
    <th><label><?php echo $message['strPgConfFile'] ?></label></th>
    <td><input name="pgpool2_config_file" type="text" value="<?php echo $pgpool2_config_file?>" size="50" />
    <?php
    if ($msgPgpoolConfigFile != '') {
        echo '<br />' . $msgPgpoolConfigFile;
        echo '</td><td><img src="images/ng.gif" alt="ng" />';
    } else {
        echo '</td><td><img src="images/ok.gif" alt="ok" />';
    }
    ?>
    </td>
  </tr>
  <tr>
    <th><label><?php echo $message['strPasswordFile'] ?></label></th>
      <td><input name="password_file" type="text" value="<?php echo $password_file ?>" size="50" />
    <?php
    if ($msgPasswordFile != '') {
        echo '<br />' . $msgPasswordFile;
        echo '</td><td><img src="images/ng.gif" alt="ng" />';
    } else {
        echo '</td><td><img src="images/ok.gif" alt="ok" />';
    }
    ?>
    </td>
  </tr>
  <tr>
    <th><label><?php echo $message['strPgpoolCommand'] ?></label></th>
                  <td><input name="pgpool_command" type="text" value="<?php echo $pgpool_command ?>" size="50" />
    <?php
    if ($msgPgpoolCommand != '') {
        echo '<br />' . $msgPgpoolCommand;
        echo '</td><td><img src="images/ng.gif" alt="ng" />';
    } else {
        echo '</td><td><img src="images/ok.gif" alt="ok" />';
    }
    ?>
    </td>
  </tr>
  <tr>
    <th colspan="3"><h3><?php echo $message['strPgpoolCommandOption'] ?></h3></th>
  </tr>
  <tr>
    <th><label><?php echo $message['strCmdC'] ?></label></th>
      <td><input type="checkbox" name="c" /></td>
    <?php
    if ($msgCmdC != '') {
        echo '<br />' . $msgCmdC;
        echo '</td><td><img src="images/ng.gif" alt="ng" />';
    } else {
        echo '</td><td><img src="images/ok.gif" alt="ok" />';
    }
    ?>
    </td>
  </tr>
  <tr>
    <th><label><?php echo $message['strCmdLargeD'] ?></label></th>
      <td><input type="checkbox" name="D" /></td>
    <?php
    if ($msgCmdLargeD != '') {
        echo '<br />' . $msgCmdLargeD;
        echo '</td><td><img src="images/ng.gif" alt="ng" />';
    } else {
        echo '</td><td><img src="images/ok.gif" alt="ok" />';
    }
    ?>
    </td>
  </tr>
  <tr>
    <th><label><?php echo $message['strCmdN'] ?></label></th>
      <td><input type="checkbox" name="n" /></td>
    <?php
    if ($msgCmdN != '') {
        echo '<br />' . $msgCmdN;
        echo '</td><td><img src="images/ng.gif" alt="ng" />';
    } else {
        echo '</td><td><img src="images/ok.gif" alt="ok" />';
    }
    ?>
    </td>
  </tr>
  <tr>
    <th><label><?php echo $message['strCmdD'] ?></label></th>
      <td><input type="checkbox" name="d" /></td>
    <?php
    if ($msgCmdD != '') {
        echo '<br />' . $msgCmdD;
        echo '</td><td><img src="images/ng.gif" alt="ng" />';
    } else {
        echo '</td><td><img src="images/ok.gif" alt="ok" />';
    }
    ?>
    </td>
  </tr>
  <tr>
    <th><label><?php echo $message['strCmdM'] ?></label></th>
      <td><select  name="m" />
           <option value="s" selected="selected">smart</optgroup>
           <option value="f">fast</optgroup>
           <option value="i">immediate</optgroup>
           </select>
     </td>
    <?php
    if ($msgCmdM != '') {
        echo '<br />' . $msgCmdM;
        echo '</td><td><img src="images/ng.gif" alt="ng" />';
    } else {
        echo '</td><td><img src="images/ok.gif" alt="ok" />';
    }
    ?>
    </td>
  </tr>
  <tr>
    <th><label><?php echo $message['strPgpoolLogFile'] ?></label></th>
                  <td><input name="pgpool_logfile" type="text" value="<?php echo $pgpool_logfile ?>" size="50" />
    <?php
    if ($msgPgpoolLogFile != '') {
        echo '<br />' . $msgPgpoolLogFile;
        echo '</td><td><img src="images/ng.gif" alt="ng" />';
    } else {
        echo '</td><td><img src="images/ok.gif" alt="ok" />';
    }
    ?>
    </td>
  </tr>

  <tr>
    <th><label><?php echo $message['strPcpDir'] ?></label></th>
                  <td><input name="pcp_client_dir" type="text" value="<?php echo $pcp_client_dir ?>" size="50" />
    <?php
    if ($msgPcpClientDir != '') {
        echo '<br />' . $msgPcpClientDir;
        echo '</td><td><img src="images/ng.gif" alt="ng" />';
    } else {
        echo '</td><td><img src="images/ok.gif" alt="ok" />';
    }
    ?>
    </td>
  </tr>
  <tr>
    <th><label><?php echo $message['strPcpHostName'] ?></label></th>
                  <td><input name="pcp_hostname" type="text" value="<?php echo $pcp_hostname ?>" size="50" />
    <?php
    if ($msgPcpHostname != '') {
        echo '<br />' . $msgPcpHostname;
        echo '</td><td><img src="images/ng.gif" alt="ng" />';
    } else {
        echo '</td><td><img src="images/ok.gif" alt="ok" />';
    }
    ?>
    </td>
  </tr>
  <tr>
    <th><label><?php echo $message['strPcpTimeout'] ?></label></th>
                  <td><input name="pcp_timeout" type="text" value="<?php echo $pcp_timeout?>" size="50" />
    <?php
    if ($msgPcpHostname != '') {
        echo '<br />' . $msgPcpHostname;
        echo '</td><td><img src="images/ng.gif" alt="ng" />';
    } else {
        echo '</td><td><img src="images/ok.gif" alt="ok" />';
    }
    ?>
    </td>
  </tr>
  <tr>
    <th><label><?php echo $message['strPcpRefreshTime'] ?></label></th>
                  <td><input name="pcp_refreshTime" type="text" value="<?php echo $pcp_refreshTime ?>" size="50" />
    <?php
    if ($msgPcpRefreshTime != '') {
        echo '<br />' . $msgPcpRefreshTime;
        echo '</td><td><img src="images/ng.gif" alt="ng" />';
    } else {
        echo '</td><td><img src="images/ok.gif" alt="ok" />';
    }
    ?>
    </td>
  </tr>
  </tbody>
</table>
<p>
<?php
if ($error) {
echo '<input type="submit" value="' . $message['strCheck'] . '" />';
}
else {
echo '<input type="submit" value="' . $message['strNext'] . '" />';
}
?>
</p>
</form>
</div>
    <div id="footer">
      <address>Version <?php echo $version;?><br />
      Copyright &copy; 2006 - <?php echo date('Y'); ?> <a href="http://pgpool.projects.postgresql.org/">pgpool Global Development Group</a>. All rights reserved.</address>
    </div>
  </body>
</html>
