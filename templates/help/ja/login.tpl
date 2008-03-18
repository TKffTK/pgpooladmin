<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$message.strLogin|escape}</title>
<link href="screen.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
  <h1><img src="images/logo.gif" alt="pgpoolAdmin" /></h1>
</div>
<div id="menu">
{include file="menu.tpl"}
</div>
<div id="content">
<div id="help"><a href="{$help|escape}.php"><img src="images/back.gif" />{$message.strBack|escape}</a></div>
  <h2>{$message.strHelp|escape}({$message.strLogin|escape})</h2>
  <h3>{$message.strSummary|escape}</h3>
  <p>ログインページです。pcp.confに設定したユーザ名およびパスワードを入力してください。<br />
  認証が成功すると、ステータス画面が表示されます。失敗した場合には、再度ログイン画面が表示されます。
  <h3>{$message.strFeature|escape}</h3>
  <form action="login.php" method="post" name="Login">
    <table>
      <tbody>
        <tr>
          <th><label>{$message.strLoginName|escape}</label></th>
          <td><input id="username" name="username" type="text" size="25" />
          ここにユーザ名を入力してください。</td>
        </tr>
        <tr>
          <th><label>{$message.strPassword|escape}</label></th>
          <td><input id="password" name="password" type="password" size="25" />
          ここにパスワードを入力してください。</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="2"><input type="submit" name="Button2" value="{$message.strLogin|escape}" />
          ユーザ名とパスワードを入力したらボタンを押してください。</td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
<div id="footer">
{include file='footer.tpl'}
</div>
</body>
</html>
