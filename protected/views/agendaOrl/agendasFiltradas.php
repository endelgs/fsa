<?php 
if(count($orls)==0){
echo "<h6>Nenhuma ORL agendada para este período.</h6>";
exit;
}
?>

<table>
	<tr>
		<th>Paciente</th>
		<th>Agendado para dia</th>
		<th>Horário</th>
		<th></th>
	</tr>

<?php 
foreach($orls as $orl){
	$data=date('d/m/Y', strtotime(str_replace("-", "", $orl["data"])));
	echo '<tr class="itemAgenda">
	<td>'.$orl["nome"].'</td>
	<td>'.$data.'</td>
	<td>'.$orl['horario'].'</td>
	<td><a href="'.Yii::app()->createAbsoluteUrl('orl/update').'&id='.$orl['orl_r'].'">Cadastrar Triagem</a></td>
	</tr>';
}
?>
</table>