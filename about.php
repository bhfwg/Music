<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel='stylesheet' id='login-css' href='style.css' type='text/css'
	media='all' />
<title>��������</title>
</head>
<body>
<?php 
include 'dbutil/dbconfig.php';
include 'dbutil/medoo.php';

$db=new medoo($link_url);
?>
	<div class="main">
		<div class="top">
			<table width="927" height="87" border="0">
				<tr>
					<td><div align="right" class="STYLE4">��������</div></td>
			</table>
		</div>
		<div id="center">
			<div id="menu">
				<div id="Layer3">
					<div align="left">
						<table width="998" border="0" height="15">
							<tr>
								<td width="44" height="25"><span class="STYLE5 STYLE6"><a
										href="home.php">��ҳ</a></span></td>
								<td width="44"><span class="STYLE5"><a href="music.php">����</a></span></td>
								<td width="44"><span class="STYLE5"><a href="vol.php">����</a></span></td>
								<td width="44"><span class="STYLE5"><a href="about.php">����</a></span></td>
								<td width="563">&nbsp;</td>
								<td width="170"><input type="text" name="textfield" /></td>
								<td width="59"><span class="STYLE5"><a href="##">����</a></span></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div id="left">

				<table width="626" height="320" border="0">
					<tr>
						<td width="620" height="91">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<h1>&nbsp;</h1>
							<h1>��������</h1>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<p>
								&nbsp;[<span class="STYLE47">��������</span><span class="STYLE39">��һƬ�ɾ���������Ϣ�أ����������������ÿ����</span>]
							</p>
							<p class="STYLE39">
								&nbsp; �������Ǯ���ϵ��������������������ʱ���У�ȴ��Щ�˲��ʶ��䣬���ܳ���<br /> &nbsp;
								������һ�����Գ��������ĭ�������ִ������ĵ���������������ǵ������ԭ��<br /> &nbsp; �����<span
									class="STYLE47">��������</span>���������������ľ����԰<br /> &nbsp;
								�й۵������������ʵ����У��ж������ж�<br /> &nbsp; �����˴˵��������֣���ů���ҵ����ģ����ѳ�˯������<br />
								&nbsp; <span class="STYLE47">��������</span>����ӭÿһ�����벻�����ˡ�
							</p> <img src="uploads/images/d.jpg" alt="a" width="262"
							height="262" />
							<p class="STYLE39">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</p>
					
					</tr>
				</table>
				<br />
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</div>
 <?php  include 'right.php'; ?>
</div>
 <?php  include 'copyright.php'; ?>
 <script type="text/javascript">
 document.getElementById("right").style.height=document.getElementById("center").scrollHeight+"px";
 document.getElementById("left").style.height=document.getElementById("center").scrollHeight-30+"px";
 </script>
	</div>
</body>
</html>