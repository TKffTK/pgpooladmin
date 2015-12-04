<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$message.strNodeStatus|escape}</title>
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
<div id="help"><a href="#" onclick="history.back()"><img src="images/back.gif" />{$message.strBack|escape}</a></div>
<h2>{$message.strHelp|escape}({$message.strErrorCode|escape})</h2>
<h3>{$message.strCommon|escape}</h3>
<table>
<thead>
  <tr>
    <th class="right_border"><label>{$message.strErrorCode|escape}</label></th>
    <th class="right_border"><label>{$message.strErrorMessage|escape}</label></th>
    <th><label>{$message.strMeasures|escape}</label></th>
  </tr>
</thead>
<tbody>
<tr><th class="right_border"><label>e1</label></th><td  class="right_border">pgmgt.conf.phpが見つかりません</td><td>pgmgt.conf.phpファイルがconfディレクトリにあるか確認してください。また、適切なアクセス権があるか確認してください。</td></tr>
<tr><th class="right_border"><label>e2</label></th><td  class="right_border">メッセージカタログが見つかりません</td><td>メッセージカタログファイルがlangディレクトリにあるか確認してください。</td></tr>
<tr><th class="right_border"><label>e3</label></th><td  class="right_border">pcpコマンドエラーが発生しました</td><td>Pcpコマンドが設定メニューで指定した場所にあるか確認してください。</td></tr>
<tr><th class="right_border"><label>e4</label></th><td  class="right_border">pgpool.confが見つかりません</td><td>pgpool.confが設定メニューで指定した場所にあるか確認してください。また、pgpool.confに適切なアクセス権があるか確認してください。</td></tr>
<tr><th class="right_border"><label>e5</label></th><td  class="right_border">テンプレートファイルが見つかりません</td><td>表示用テンプレートファイルがtemplateディレクトリにあるか確認してください。</td></tr>
<tr><th class="right_border"><label>e6</label></th><td  class="right_border">ヘルプが見つかりません</td><td>ヘルプファイルがtemplate/help以下にあるか確認してください。</td></tr>
<tr><th class="right_border"><label>e7</label></th><td  class="right_border">pgmgt.conf.phpのパラメータが足りません</td><td>pgmgt.conf.phpにパラメータが指定してあるか確認してください。</td></tr>
<tr><th class="right_border"><label>e8</label></th><td  class="right_border">pcp_timeoutがpgpool.confで見つかりません</td><td>pcp_timeoutがpgpool.confで指定してあるか確認してください。</td></tr>
<tr><th class="right_border"><label>e9</label></th><td  class="right_border">pcp_portがpgpool.confで見つかりません</td><td>pcp_portがpgpool.confで指定してあるか確認してください。</td></tr>
</tbody>
<tfoot><tr><td colspan="3"></td></tr></tfoot>
</table>

<h3>{$message.strPgpoolStatus|escape}</h3>
<table>
<thead>
  <tr>
    <th class="right_border"><label>{$message.strErrorCode|escape}</label></th>
    <th class="right_border"><label>{$message.strErrorMessage|escape}</label></th>
    <th><label>{$message.strMeasures|escape}</label></th>
  </tr>
</thead>
<tbody>
<tr><th class="right_border"><label>e1001</label></th><td  class="right_border">pcpコマンドエラーが発生しました</td><td>pcpコマンドの呼び出しに失敗した場合に表示されます。Pcpコマンドが設定メニューで指定した場所にあるか確認してください。</td></tr>
<tr><th class="right_border"><label>e1002</label></th><td  class="right_border">pcp_node_countコマンドでエラーが発生しました</td><td>pcp_node_countの実行エラーです。pcp_node_countが正常に実行できるか確認してください。</td></tr>
<tr><th class="right_border"><label>e1003</label></th><td  class="right_border">pcp_node_infoコマンドでエラーが発生しました</td><td>pcp_node_infoの実行エラーです。pcp_node_infotが正常に実行できるか確認してください。</td></tr>
<tr><th class="right_border"><label>e1004</label></th><td  class="right_border">pcp_proc_countコマンドでエラーが発生しました</td><td>pcp_proc_countの実行エラーです。pcp_proc_countが正常に実行できるか確認してください。</td></tr>
<tr><th class="right_border"><label>e1005</label></th><td  class="right_border">pcp_proc_infoコマンドでエラーが発生しました</td><td>pcp_proc_infoの実行エラーです。pcp_proc_infoが正常に実行できるか確認してください。</td></tr>
<tr><th class="right_border"><label>e1006</label></th><td  class="right_border">pcp_stop_pgpoolコマンドでエラーが発生しました</td><td>pcp_stop_pgpoolの実行エラーです。pcp_stop_pgpoolが正常に実行できるか確認してください。</td></tr>
<tr><th class="right_border"><label>e1007</label></th><td  class="right_border">pcp_detach_nodeコマンドでエラーが発生しました</td><td>pcp_detach_nodeの実行エラーです。pcp_detach_nodeが正常に実行できるか確認してください。</td></tr>
<tr><th class="right_border"><label>e1008</label></th><td  class="right_border">指定したpgpool.confが見つかりません</td><td>pgpool.confが設定メニューで指定した場所にあるか確認してください。また、pgpool.confに適切なアクセス権があるか確認してください。</td></tr>
<tr><th class="right_border"><label>e1009</label></th><td  class="right_border">指定したpcp.confが見つかりません</td><td>pcp.confが設定メニューで指定した場所にあるか確認してください。またpcp.confに適切なアクセス権があるか確認してください。</td></tr>
<tr><th class="right_border"><label>e1010</label></th><td  class="right_border">pcp_attach_nodeコマンドでエラーが発生しました</td><td>pcp_attach_nodeの実行エラーです。pcp_detach_nodeが正常に実行できるか確認してください。</td></tr>
<tr><th class="right_border"><label>e1011</label></th><td  class="right_border">ログファイルが見つかりません</td><td>pgpoolログファイルが設定メニューで指定した場所にあるか確認してください。また指定したログファイルに適切なアクセス権があるか確認してください。指定しない場合には、pgpool.confのlogdirで指定したディレクトリにpgpool.logというファイル名で作成されます。</td></tr>
<tr><th class="right_border"><label>e1012</label></th><td  class="right_border">pcp_recovery_nodeコマンドでエラーが発生しました</td><td>pcp_recovery_nodeの実行エラーです。pcp_recovery_nodeが正常に実行できるか確認してください。</td></tr>
<tr><th class="right_border"><label>e1013</label></th><td  class="right_border">pcp_watchdog_infoコマンドでエラーが発生しました</td><td>pcp_watchdog_infoの実行エラーです。pcp_watchdog_infoが正常に実行できるか確認してください。</td></tr>
<tr><th class="right_border"><label>e1014</label></th><td  class="right_border">.pcppass ファイルの読み込みに失敗しました</td><td>（V3.5 以降） PCP コマンドを実行するのに、.pcppass ファイルを読み込むのに失敗したときのエラーです。Apache 起動ユーザのホームディレクトリにある .pcppass を参照します（/home/apache/.pcppass など）。ファイルが無い、所有者が apache でない、パーミッションが 600 でない、のいずれかの原因によります。</td></tr>
</tbody>
<tfoot><tr><td colspan="3"></td></tr></tfoot>
</table>

<h3>{$message.strNodeStatus|escape}</h3>
<table>
<thead>
  <tr>
    <th class="right_border"><label>{$message.strErrorCode|escape}</label></th>
    <th class="right_border"><label>{$message.strErrorMessage|escape}</label></th>
    <th><label>{$message.strMeasures|escape}</label></th>
  </tr>
</thead>
<tbody>
<tr><th class="right_border"><label>e8001</label></th><td  class="right_border">詳細情報が取得できません</td><td>ノードにpsqlコマンドで接続できるか確認してください。</td></tr>
</tbody>
<tfoot><tr><td colspan="3"></td></tr></tfoot>
</table>

<h3>{$message.strQueryCache|escape}</h3>
<table>
<thead>
  <tr>
    <th class="right_border"><label>{$message.strErrorCode|escape}</label></th>
    <th class="right_border"><label>{$message.strErrorMessage|escape}</label></th>
    <th><label>{$message.strMeasures|escape}</label></th>
  </tr>
</thead>
<tbody>
<tr><th class="right_border"><label>e2001</label></th><td  class="right_border">データベースに接続できません</td><td>pgpool.confのシステムDBで指定したデータベースに接続できるか確認してください。</td></tr>
<tr><th class="right_border"><label>e2002</label></th><td  class="right_border">レコード取得時にエラーが発生しました</td><td>クエリキャッシュテーブルのレコードが正常に取得できるか確認してください。</td></tr>
<tr><th class="right_border"><label>e2003</label></th><td  class="right_border">pgpool.confが見つかりません</td><td>pcp.confが設定メニューで指定した場所にあるか確認してください。またpcp.confに適切なアクセス権があるか確認してください。</td></tr>
</tbody>
<tfoot><tr><td colspan="3"></td></tr></tfoot>
</table>

<h3>{$message.strSystemDb|escape}</h3>
<table>
<thead>
  <tr>
    <th class="right_border"><label>{$message.strErrorCode|escape}</label></th>
    <th class="right_border"><label>{$message.strErrorMessage|escape}</label></th>
    <th><label>{$message.strMeasures|escape}</label></th>
  </tr>
</thead>
<tbody>
<tr><th class="right_border"><label>e3001</label></th><td  class="right_border">データベースに接続できません</td><td>pgpool.confのシステムDBで指定したデータベースに接続できるか確認してください。</td></tr>
<tr><th class="right_border"><label>e3002</label></th><td  class="right_border">レコード取得時にエラーが発生しました</td><td>システムDBテーブルのレコードが正常に取得できるか確認してください。</td></tr>
<tr><th class="right_border"><label>e3003</label></th><td  class="right_border">レコード登録時にエラーが発生しました</td><td>システムDBテーブルにレコードが正常に挿入できるか確認してください。</td></tr>
<tr><th class="right_border"><label>e3004</label></th><td  class="right_border">レコード更新時にエラーが発生しました</td><td>システムDBテーブルのレコードが正常に更新できるか確認してください。</td></tr>
<tr><th class="right_border"><label>e3005</label></th><td  class="right_border">レコード削除時にエラーが発生しました</td><td>システムDBテーブルのレコードが正常に削除できるか確認してください。</td></tr>
<tr><th class="right_border"><label>e3006</label></th><td  class="right_border">pgpool.confが見つかりません</td><td>pcp.confが設定メニューで指定した場所にあるか確認してください。またpcp.confに適切なアクセス権があるか確認してください。</td></tr>
</tbody>
<tfoot><tr><td colspan="3"></td></tr></tfoot>
</table>

<h3>{$message.strPgConfSetting|escape}</h3>
<table>
<thead>
  <tr>
    <th class="right_border"><label>{$message.strErrorCode|escape}</label></th>
    <th class="right_border"><label>{$message.strErrorMessage|escape}</label></th>
    <th><label>{$message.strMeasures|escape}</label></th>
  </tr>
</thead>
<tbody>
<tr><th class="right_border"><label>e4001</label></th><td  class="right_border">pgpool.confが見つかりません</td><td>pcp.confが設定メニューで指定した場所にあるか確認してください。またpcp.confに適切なアクセス権があるか確認してください。</td></tr>
<tr><th class="right_border"><label>e4002</label></th><td  class="right_border">pgpool.confから読み込みができません</td><td>pgpool.confに読み込みアクセス権があるか確認してください。</td></tr>
<tr><th class="right_border"><label>e4003</label></th><td  class="right_border">pgpool.confに書き込みができません</td><td>pgpool.confに書き込みアクセス権があるか確認してください。</td></tr>
<tr><th class="right_border"><label>e4004</label></th><td  class="right_border">pgpool.confに必要なパラメータがありません</td><td>pgpool.confにパラメータがすべてあるか確認してください。</td></tr>
</tbody>
<tfoot><tr><td colspan="3"></td></tr></tfoot>
</table>

<h3>{$message.strSetting|escape}</h3>
<table>
<thead>
  <tr>
    <th class="right_border"><label>{$message.strErrorCode|escape}</label></th>
    <th class="right_border"><label>{$message.strErrorMessage|escape}</label></th>
    <th><label>{$message.strMeasures|escape}</label></th>
  </tr>
</thead>
<tbody>
<tr><th class="right_border"><label>e5001</label></th><td  class="right_border">pgmgt.conf.phpが見つかりません</td><td>pgmgt.conf.phpファイルがconfディレクトリにあるか確認してください。また、適切なアクセス権があるか確認してください。</td></tr>
<tr><th class="right_border"><label>e5002</label></th><td  class="right_border">pgmgt.conf.phpから読み込みができません</td><td>pgmgt.conf.phpファイルに読み込みアクセス権があるか確認してください。</td></tr>
<tr><th class="right_border"><label>e5003</label></th><td  class="right_border">pgmgt.conf.phpに書き込みができません</td><td>pgmgt.conf.phpファイルに書き込みアクセス権があるか確認してください。</td></tr>
</tbody>
<tfoot><tr><td colspan="3"></td></tr></tfoot>
</table>

<h3>{$message.strChangePassword|escape}</h3>
<table>
<thead>
  <tr>
    <th class="right_border"><label>{$message.strErrorCode|escape}</label></th>
    <th class="right_border"><label>{$message.strErrorMessage|escape}</label></th>
    <th><label>{$message.strMeasures|escape}</label></th>
  </tr>
</thead>
<tbody>
<tr><th class="right_border"><label>e6001</label></th><td  class="right_border">pcp.confがファイルが見つかりません</td><td>pcp.confが設定メニューで指定した場所にあるか確認してください。</td></tr>
<tr><th class="right_border"><label>e6002</label></th><td  class="right_border">pcp.confに読み込みができません</td><td>pcp.confファイルに読み込みアクセス権があるか確認してください。</td></tr>
<tr><th class="right_border"><label>e6003</label></th><td  class="right_border">pcp.confに書き込みができません</td><td>pcp.confファイルに書き込みアクセス権があるか確認してください。</td></tr>
</tbody>
<tfoot><tr><td colspan="3"></td></tr></tfoot>
</table>

<h3>{$message.strLogout|escape}</h3>
<table>
<thead>
  <tr>
    <th class="right_border"><label>{$message.strErrorCode|escape}</label></th>
    <th class="right_border"><label>{$message.strErrorMessage|escape}</label></th>
    <th><label>{$message.strMeasures|escape}</label></th>
  </tr>
</thead>
<tbody>
<tr><th class="right_border"><label>e7001</label></th><td  class="right_border">pcp.confがファイルが見つかりません</td><td>pcp.confが設定メニューで指定した場所にあるか確認してください。</td></tr>
</tbody>
<tfoot><tr><td colspan="3"></td></tr></tfoot>
</table>


</div>
<div id="footer">
{include file='footer.tpl'}
</div>
</body>
</html>
