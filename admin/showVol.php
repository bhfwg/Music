<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
body {
	margin-left: 3px;
	margin-top: 0px;
	margin-right: 3px;
	margin-bottom: 0px;
}
.STYLE1 {
	color: #e1e2e3;
	font-size: 12px;
}
.STYLE6 {color: #000000; font-size: 12; }
.STYLE10 {color: #000000; font-size: 12px; }
.STYLE19 {
	color: #344b50;
	font-size: 12px;
}
.STYLE21 {
	font-size: 12px;
	color: #3b6375;
}
.STYLE22 {
	font-size: 12px;
	color: #295568;
}
-->
</style>
</head>

<body>
<?php 
include '../dbutil/dbconfig.php';
include '../dbutil/medoo.php';

$db=new medoo($link_url);
$datas=$db->select("vol", "*");
?>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%" height="19" valign="bottom"><div align="center"><img src="image/4.jpg" width="14" height="14" /></div></td>
                <td width="94%" valign="bottom"><span class="STYLE1"> ����������Ϣ</span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="STYLE1">
              </div></td>
               </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
      <tr>
        <div align="center">   
        </div>
        <td width="10%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">�����</span></div></td>
        <td width="10%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">������</span></div></td>
        <td width="15%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">����</span></div></td>
        <td width="15%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">�鿴/�޸�</span></div></td>
        <td width="12%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">ɾ��</span></div></td>  
      </tr>
      <?php foreach ($datas as $data){?>
      <tr>
      <div align="center">     
        </div>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="center"><span class="STYLE19"><?php echo $data[vol];?></span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo $data[theme];?></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo $data[title];?></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center" class="STYLE21"><a href="showVolinfo.php?vol=<?php echo $data[id];?>">�鿴/�޸�</a> </div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center" class="STYLE21"><a href="delVol.php?vol=<?php echo $data[vol];?>">ɾ��</a> </div></td>
      </tr>
      <?php }?>
    </table></td>
       
</body>
</html>
       