<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$message.strNodeInfo|escape}</title>
<link href="screen.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>{$message.strNodeInfo|escape}</h3>
{if $nodeCount > 0}
<table>
  <thead>
  <tr>
    <th><label>{$message.strIPaddress|escape}</label></th>
    <th><label>{$message.strPort|escape}</label></th>
    <th><label>{$message.strStatus|escape}</label></th>
    {if $parallelMode == false}
    <th><label>{$message.strWeight|escape}</label></th>
    {/if}
    <th></th>
  </tr>
  </thead>
  {section name=num loop=$nodeInfo}
    {if ($smarty.section.num.index+1) % 2 == 0}
    <tr class="even">
    {else}
    <tr class="odd">
    {/if}
    <td>{$nodeInfo[num][0]|escape}</td>
    <td>{$nodeInfo[num][1]|escape}</td>
    <td>
    {if $nodeInfo[num][2] == 1}
      {$message.strNodeStatus1|escape}
    {elseif $nodeInfo[num][2] == 2}
      {$message.strNodeStatus2|escape}
    {elseif $nodeInfo[num][2] == 3}
      {$message.strNodeStatus3|escape}
    {/if}
	{if $nodeInfo[num][5] == 1}
      {$message.strStandbyRunning|escape}
    {elseif $nodeInfo[num][5] == 0}
      {$message.strPrimaryRunning|escape}
    {/if}
    </td>
    {if $parallelMode == false}
    <td>{$nodeInfo[num][3]|escape}</td>
    {/if}
    <td>
    {if $nodeInfo[num][4] == 'disconnect'}
    <input type="button" name="command" onclick="sendCommand('detach', {$smarty.section.num.index|escape}, '{$message.msgDetachConfirm|escape}')" value="{$message.strDisconnect|escape}" />
    {elseif $nodeInfo[num][4] == 'return'}
    <input type="button" name="command" onclick="sendCommand('return', {$smarty.section.num.index|escape}, '{$message.msgReturnConfirm|escape}')" value="{$message.strReturn|escape}" />
    {elseif $nodeInfo[num][4] == 'recovery'}
    <input type="button" name="command" onclick="sendCommand('recovery', {$smarty.section.num.index|escape}, '{$message.msgRecoveryConfirm|escape}')" value="{$message.strRecovery|escape}" />
    {/if}
    </td> 
    </tr>
  {/section}
</table>
{else}
{$message.strNoNode|escape}
{/if}
</body>
</html>
