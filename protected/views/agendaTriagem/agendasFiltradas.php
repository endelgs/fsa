<?php 
if(count($triagens)==0){
echo "<h6>Nenhuma triagem agendada para este período.</h6>";
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
foreach($triagens as $triagem){
	$data=date('d/m/Y', strtotime(str_replace("-", "", $triagem["data"])));
	echo '<tr class="itemAgenda">
	<td>'.$triagem["nome"].'</td>
	<td>'.$data.'</td>
	<td><a href="'.Yii::app()->createAbsoluteUrl('triagem/update').'&id='.$triagem['triagem_r'].'">Cadastrar Triagem</a></td>
	</tr>';
}
?>
</table>