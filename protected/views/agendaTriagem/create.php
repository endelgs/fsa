<?php
/* @var $this AgendaTriagemController */
/* @var $model AgendaTriagem */

$this->breadcrumbs=array(
	'Agenda Triagens'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar AgendaTriagem', 'url'=>array('admin')),
);
?>
<style>
.sumir{border:solid thin #93B576; color:#446925; font-weight: bold; background-color:#BDE898; padding: 3px 0px 3px 10px;}
</style>
<h1>Agendar Triagens</h1>
<?php if($_GET['sucesso']=="true")echo "<div class='sumir'>Triagem agendada com sucesso</div><br/>"; ?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<script>
$(document).ready(function(){ 
    setTimeout(function(){ 
        $('.sumir').fadeOut(2000);}, 2000); 
});
</script>