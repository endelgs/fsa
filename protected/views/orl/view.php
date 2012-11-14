<?php
/* @var $this OrlController */
/* @var $model Orl */

$this->breadcrumbs=array(
	'ORL'=>array('index'),
	$model->pacienteR->nome,
);
?>

<style>
	.linha{}
	.alinhamento{float:left;}
	.direita{float: right;}
	.esquerda{float:left;}
	.margem{ margin-right:15px;}
	.item50{width:50%;}
	.item40{width:40%;}
	.item30{width:30%;}
	.item20{width:20%;}
	.item10{width:10%;}
</style>
<div>
	<div class='alinhamento'><h1>Dados de ORL: <?php echo $model->pacienteR->nome; ?></h1></div>
	<div class='alinhamento direita'>última atualização: <i><?php echo $model->last_update; ?></i></div>
</div>
<br/><br/><br/>
<p class="row">
	<b><span>Diagnóstico:</span></b>
	<?php echo CHtml::encode($model->diagnostico);?>
</p>
<p class="row">
	<b><span>Q.P.:</span></b>
	<?php echo CHtml::encode($model->qp);?>
</p>
<p class="row">
	<b><span>HPMA:</span></b>
	<?php echo CHtml::encode($model->hpma);?>
</p>
<p class="row">
	<b><span>Interrogatório complementar:</span></b>
	<?php echo CHtml::encode($model->interrogatorio_complementar);?>
</p>
<p class="row">
	<b><span>Antecedentes pessoais/familiares/ocupacionais:</span></b>
	<?php echo CHtml::encode($model->antecedentes_pessoais);?>
</p>
<p class="row">
	<b><span>Exame ORL:</span></b>
	<?php echo CHtml::encode($model->exame_orl);?>
</p>
<p class="row">
	<b><span>HD:</span></b>
	<?php echo CHtml::encode($model->hd);?>
</p>
<p class="row">
	<b><span>Exames complementares HD:</span></b>
	<?php echo CHtml::encode($model->exames_complementares_hd);?>
</p>
<p class="row">
	<b><span>Conduta:</span></b>
	<?php echo CHtml::encode($model->conduta);?>
</p>
<h2>Retorno</h2>
<p>
	<table>
		<tr>
			<th>HD</th>
			<th>Evolução</th>
		</tr>
		<?php
			$aRetornos=$modelOrlRetorno->findAll('orl_r=:orl_r', array(':orl_r'=>$model->id));
			foreach($aRetornos as $retorno){
				echo '<tr>
					<td>'.CHtml::encode($retorno->hd).'</td>
					<td>'.CHtml::encode($retorno->evolucao).'</td>';
			}
		?>
	</table>

</p>