<?php
$vols = $db->select ( "vol", "*" );
?>
<div id="right">
	<table width="237" height="309" border="0">
		<tr>
			<td width="206"><p>
					������һ��̬��<br /> �� �������߻���������<br /> ����������<br /> ��Ȼ�ڴ�Ӱ����ʵ��������������<br />
					���������Щ����<br /> �����ǵ�һ������<br /> ��ʹ��������<br /> �Ǽ�������˺��Ŀ�<br /> ��õ�
					��ů�������
				</p></td>
		</tr>
	</table>
	<table width="265" border="0" cellpadding="2" cellspacing="0"
		align="center">
		<tbody>
			<tr>
				<td><a target="_blank" href="http://jzpd.taobao.com/"><img
						src="http://www.luoo.net/ad/jzpd.jpg" alt="" width="239"
						height="81" /></a></td>
			</tr>

			<tr>
				<td><a target="_blank" href="http://ywsoap.taobao.com/"><img
						src="http://www.luoo.net/ad/yw.jpg" alt="" width="239" height="77" /></a></td>
			</tr>


			<tr>
				<td><a target="_blank"
					href="http://www.nuandao.com/?utm_campaign=campaign1&utm_medium=banner&utm_source=luo&utm_content=265x84"><img
						src="http://www.luoo.net/ad/nd.jpg" alt="ů��" width="239"
						height="84" /></a></td>
			</tr>

			<tr>

				<td><a target="_blank" href="http://bensherman.taobao.com/"><img
						src="http://www.luoo.net/ad/ylgs.jpg" alt="Ӣ�׹���" width="239"
						height="83" /></a></td>
			</tr>
			<tr>
				<td><a target="_blank"
					href="http://item.taobao.com/item.htm?spm=2013.1.w797257032.4.ETUZ8u&id=18020297053"><img
						src="http://www.luoo.net/ad/muji.gif" alt="" width="239"
						height="78" /></a></td>
			</tr>
		</tbody>
	</table>
	<table width="268" border="0">
		<tr>
			<td width="258">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td height="25">&nbsp;</td>
		</tr>
	</table>
	<table width="240" border="0" align="center">
<?php foreach ($vols as $vol){?>
     <tr>
			<td width="240"><div align="left">
					<a href="index.php?vol=<?php echo $vol[id];?>"><font size="2.8">vol.<?php echo $vol[vol]. $vol[theme] ;?></a>
				</div></td>
		</tr>
 <?php }?>
   </table>
	<p>&nbsp;</p>
</div>

