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
			<tr height="200px">
				<td/>
			</tr>
		<?php foreach ($vols as $vol){?>
			<tr>
				<td><a target="" href="index.php?vol=<?php echo $vol[id];?>"><img
						src="<?php echo $vol[image];?>" alt="" width="239"
						height="81" /><br/>vol.<?php echo $vol[vol]. $vol[theme] ;?></a></td>
			</tr>
		<?php }?>	
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
	<p>&nbsp;</p>
</div>

