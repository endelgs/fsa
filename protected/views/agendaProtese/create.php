<?php
/* @var $this AgendaProteseController */
/* @var $model AgendaProtese */

$this->breadcrumbs=array(
	'Agenda Prótese'=>array('index'),
	'Inserir',
);

$this->menu=array(
	array('label'=>'Gerenciar AgendaProtese', 'url'=>array('admin')),
);
?>
<style>
.sumir{border:solid thin #93B576; color:#446925; font-weight: bold; background-color:#BDE898; padding: 3px 0px 3px 10px;}
</style>
<h1>Agendar Prótese</h1>
<?php if(isset($_GET['sucesso']))echo "<div class='sumir'>Protese agendada com sucesso</div><br/>"; ?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<script>
$(document).ready(function(){ 
    setTimeout(function(){ 
        $('.sumir').fadeOut(2000);}, 2000); 
});
</script>