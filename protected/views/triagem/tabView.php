<?php
/* @var $this TriagemController */
/* @var $model Triagem */

$this->breadcrumbs=array(
	'Triagems'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Inserir Triagem', 'url'=>array('create')),
	array('label'=>'Editar Triagem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Remover Triagem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Você tem certeza que quer remover este? Triagem')),
	array('label'=>'Gerenciar Triagem', 'url'=>array('admin')),
);
?>

<style>
	.linha{}
	.alinhamento{display:inline-block;}
	.item50{width:50%;}
	.item40{width:40%;}
	.item30{width:30%;}
	.item20{width:20%;}
	.item10{width:10%;}
</style>

<p class='linha'>
	<div class="item30 alinhamento">
		<span>Peso:</span><b> <?php echo CHtml::encode($model->peso); ?></b>
	</div>
	<div class="item30 alinhamento">
		<span>Idade dias:</span><b> <?php echo CHtml::encode($model->idade_dias); ?></b>
	</div>
	<div class="item30 alinhamento">
		<span>Idade semanas:</span><b> <?php echo CHtml::encode($model->idade_semanas); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="item30 alinhamento">
		<span>Apgar 1:</span><b> <?php echo CHtml::encode($model->apgar_1); ?></b>
	</div>
	<div class="item30 alinhamento">
		<span>Apgar 5:</span><b> <?php echo CHtml::encode($model->apgar_5); ?></b>
	</div>
	<div class="item30 alinhamento">
		<span>Apgar 10:</span><b> <?php echo CHtml::encode($model->apgar_10); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="item30 alinhamento">
		<span>Método de Avaliação:</span><b> <?php echo CHtml::encode($model->metodo_avaliacao); ?></b>
	</div>
	<div class="item30 alinhamento">
		<span>Score:</span><b> <?php echo CHtml::encode($model->avaliacao_score); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="item30 alinhamento">
		<span>Termo:</span><b> <?php echo CHtml::encode($model->termo); ?></b>
	</div>
	<div class="item30 alinhamento">
		<span>Crescimento intra-uterino:</span><b> <?php echo CHtml::encode($model->crescimento); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="item50 alinhamento">
		<span>Indicadores de risco:</span><b> <?php echo CHtml::encode($model->indicadores_risco); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="item30 alinhamento">
		<span>Tipo exame:</span><b> <?php echo CHtml::encode($model->tipo_exame); ?></b>
	</div>
	<div class="item30 alinhamento">
		<span>Resultado:</span><b> <?php echo CHtml::encode($model->resultado); ?></b>
	</div>
</p>
<?php 
$this->widget('zii.widgets.jui.CJuiButton', array(
    'buttonType'=>'link',
    'name'=>'btnGo',
    'caption'=>'Editar Triagem',
    'options'=>array('icons'=>'js:{secondary:"ui-icon-extlink"}'),
    'url'=>array('triagem/update','id'=>$model->id),
));?>