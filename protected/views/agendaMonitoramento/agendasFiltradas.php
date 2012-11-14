<?php 
if(count($monitoramentos)==0){
echo "<h6>Nenhum Monitoramento agendado para este período.</h6>";
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
foreach($monitoramentos as $monitoramento){
	$data=date('d/m/Y', strtotime(str_replace("-", "", $monitoramento["data"])));
	echo '<tr class="itemAgenda">
	<td>'.$monitoramento["nome"].'</td>
	<td>'.$data.'</td>
	<td><a href="'.Yii::app()->createAbsoluteUrl('monitoramento/update').'&id='.$monitoramento['monitoramento_r'].'">Cadastrar Monitoramento</a></td>
	</tr>';
}
?>
</table>