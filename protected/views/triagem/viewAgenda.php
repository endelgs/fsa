<?php
/* @var $this TriagemController */
/* @var $model Triagem */

$this->breadcrumbs=array(
	'Triagem'=>array('index'),
	$model->pacienteR->nome,
);
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
	<div class='alinhamento'><h3>Triagem do Paciente: <?php echo $model->pacienteR->nome; ?> agendada para: <?php echo $model->data_triagem; ?></h3></div>
	<div class='alinhamento direita'>última atualização: <i><?php echo $model->last_update; ?></i></div>
</div>
