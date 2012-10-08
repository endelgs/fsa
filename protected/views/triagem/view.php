<?php
/* @var $this TriagemController */
/* @var $model Triagem */

$this->breadcrumbs=array(
	'Triagem'=>array('index'),
	$model->pacienteR->nome,
);
$model->metodo_avaliacao = ($model->metodo_avaliacao == 'capurro')?'Capurro':'New Ballard';
$model->termo = ($model->termo == 'termo')?'Termo':'Pré-termo';
$model->crescimento = strtoupper($model->crescimento);
$model->tipo_exame = strtoupper($model->tipo_exame);

?>
<style>
	.linha{}
	.alinhamento{display:inline-block;}
	.direita{float: right;}
	.esquerda{float:left;}
	.item50{width:50%;}
	.item40{width:40%;}
	.item30{width:30%;}
	.item20{width:20%;}
	.item10{width:10%;}
</style>

<div>
	<div class='alinhamento'><h1>Dados da Triagem do Paciente: <?php echo $model->pacienteR->nome; ?></h1></div>
	<div class='alinhamento direita'>última atualização: <i><?php echo $model->last_update; ?></i></div>
</div>
<p class='linha'>
	<div class="item30 alinhamento">
		<b><span>Peso:</span></b> <?php echo CHtml::encode($model->peso); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Idade dias:</span></b> <?php echo CHtml::encode($model->idade_dias); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Idade semanas:</span></b> <?php echo CHtml::encode($model->idade_semanas); ?>
	</div>
</p>
<p class='linha'>
	<div class="item30 alinhamento">
		<b><span>Apgar 1:</span></b> <?php echo CHtml::encode($model->apgar_1); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Apgar 5:</span></b> <?php echo CHtml::encode($model->apgar_5); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Apgar 10:</span></b> <?php echo CHtml::encode($model->apgar_10); ?>
	</div>
</p>
<p class='linha'>
	<div class="item30 alinhamento">
		<b><span>Método de Avaliação:</span></b> <?php echo CHtml::encode($model->metodo_avaliacao); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Score:</span></b> <?php echo CHtml::encode($model->avaliacao_score); ?>
	</div>
</p>
<p class='linha'>
	<div class="item30 alinhamento">
		<b><span>Termo:</span></b> <?php echo CHtml::encode($model->termo); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Crescimento intra-uterino:</span></b> <?php echo CHtml::encode($model->crescimento); ?>
	</div>
</p>
<p class='linha'>
	<div class="item50 alinhamento">
		<b><span>Indicadores de risco:</span></b> <?php echo CHtml::encode($model->indicadores_risco); ?>
	</div>
</p>
<p class='linha'>
	<div class="item30 alinhamento">
		<b><span>Tipo exame:</span></b> <?php echo CHtml::encode($model->tipo_exame); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Resultado Ouvido Esquerdo:</span></b> <?php echo CHtml::encode($model->resultado_esquerdo); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Resultado Ouvido Direito:</span></b> <?php echo CHtml::encode($model->resultado_direito); ?>
	</div>
</p>
