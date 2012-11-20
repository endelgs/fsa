<?php
/* @var $this AgendaDiagnosticoController */
/* @var $model AgendaDiagnostico */

$this->breadcrumbs=array(
	'Agenda Diagnosticos'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar AgendaDiagnostico', 'url'=>array('admin')),
);
?>
<style>
.sumir{border:solid thin #93B576; color:#446925; font-weight: bold; background-color:#BDE898; padding: 3px 0px 3px 10px;}
</style>
<h1>Agendar Diagnósticos</h1>
<?php if($_GET['sucesso']=="true")echo "<div class='sumir'>Diagnóstico agendado com sucesso</div><br/>"; ?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<script>
$(document).ready(function(){ 
    setTimeout(function(){ 
        $('.sumir').fadeOut(2000);}, 2000); 
});
</script>