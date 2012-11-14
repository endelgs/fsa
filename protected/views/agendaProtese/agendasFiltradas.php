<?php 
if(count($proteses)==0){
echo "<h6>Nenhuma prótese agendada para este período.</h6>";
exit;
}
?>

<table>
	<tr>
		<th>Paciente</th>
		<th>Agendado para dia</th>
		<th>Prótese</th>
		<th></th>
	</tr>

<?php 
foreach($proteses as $protese){
	$data=date('d/m/Y', strtotime(str_replace("-", "", $protese["data"])));
	echo '<tr class="itemAgenda">
	<td>'.$protese["nome"].'</td>
	<td>'.$data.'</td>
	<td>'.$protese['agenda_tipo'].'</td>
	<td><a href="'.Yii::app()->createAbsoluteUrl('protese'.ucfirst($protese['agenda_tipo']).'/update').'&id='.$protese['form_tipo_r'].'">Cadastrar Protese '.$protese['agenda_tipo'].'</a></td>
	</tr>';
}
?>
</table>