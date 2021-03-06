<?php
/* @var $this OrlController */
/* @var $model Orl */
    $baseurl = Yii::app()->request->baseUrl;
    $urlsim = Yii::app()->request->baseUrl.'/images/Ok-icon.png';
    $urlnao = Yii::app()->request->baseUrl.'/images/Close-2-icon.png';
    $urledit = $baseurl.'/images/edit-icon.png';
 ?>
 
<style>
	.linha{}
	.alinhamento{display:inline-block;}
	.direita{float: right;}
	.item50{width:50%;}
	.item40{width:40%;}
	.item30{width:30%;}
	.item20{width:20%;}
	.item10{width:10%;}
</style>

<div class='direita'>
	última atualização <?php echo $model->last_update ;?>
</div>
<h2>ORL</h2>
<hr/>
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
<hr/>
<h3>Retorno</h3>
<?php $aRetornos=$modelOrlRetorno->findAll('orl_r=:orl_r', array(':orl_r'=>$model->id));?>
<?php if(!empty($aRetornos)): ?>
<table>
	<tr>
		<th>HD</th>
		<th>Evolução</th>
	</tr>
	<?php
		
		foreach($aRetornos as $retorno){
			echo '<tr>
				<td>'.CHtml::encode($retorno->hd).'</td>
				<td>'.CHtml::encode($retorno->evolucao).'</td>
			</tr>';
		}
	?>
</table>
<?php else: ?>
<p>Não há dados de retorno cadastrados para esta criança</p>
<?php endif; ?>
<hr/>
<p><img src="<?php echo $urledit;?>"/> <?php echo CHtml::link("Editar os dados de ORL",array("orl/update","id" => $model->id),array('class' => 'botao'));?></p>