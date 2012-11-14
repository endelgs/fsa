<?php 
if(count($diagnosticos)==0){
echo "<h6>Nenhum Diagnóstico agendado para este período.</h6>";
exit;
}
?>

<table>
	<tr>
		<th>Paciente</th>
		<th>Agendado para dia</th>
		<th></th>
	</tr>

<?php 
foreach($diagnosticos as $diagnostico){
	$data=date('d/m/Y', strtotime(str_replace("-", "", $diagnostico["data"])));
	echo '<tr class="itemAgenda">
	<td>'.$diagnostico["nome"].'</td>
	<td>'.$data.'</td>
	<td><a href="'.Yii::app()->createAbsoluteUrl('diagnostico/update').'&id='.$diagnostico['diagnostico_r'].'">Cadastrar Diagnóstico</a></td>
	</tr>';
}
?>
</table>