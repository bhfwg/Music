<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
body{background:url(images/top.jpg)}
</style></head>

<body>
<?php 
$loginUser=$_SESSION[login_user];
?>
<table align="right" width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="150" class="STYLE7"><div><font size="2"><a href=" ../home.php" target="_blank">��ҳ</a></font></div></td> 
          <td align="right"><table width="150" border="0" cellspacing="0" cellpadding="0" height="17">
          <tr>
            <td width="150" class="STYLE7"><div><font size="2"><a href="showInfo.php?userid=<?php echo $loginUser[userid]; ?>" target="rightFrame">������Ϣ</a></font></div></td>   
            <td width="150"  class="STYLE7"><div><font size="2"><a href="login.php" target="_parent" >�˳���¼</a></font></div></td>
          </tr>
        </table></td>
        </tr>      
</table>
    <table align="right" width="10%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="right"><table width="300" border="0" cellspacing="0" cellpadding="0" height="100">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><font size="2"><span class="STYLE1">��ǰ��¼�û���<?php echo $loginUser[username] ;?>&nbsp;�û���ɫ��<?php echo "�ҵĽ�ɫ" ;?></span></font></td>
            <td align="right" class="STYLE1"><div align="right"></div></td>
          </tr>
        </table></td>
          </tr>
        </table></td>
        </tr>      
</table>           
</body>
</html>
