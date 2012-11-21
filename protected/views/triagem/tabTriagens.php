<?php
/* @var $this TriagemController */
/* @var $model Triagem */

//die(print_r($aTriagens));
?>
<h2>Triagens</h2>
<p class="help">Aqui, você pode ver todas as triagens que uma criança já fez: basta navegar entre as abas.</p>
<?php 
$aTabs=array();
$cont=1;
foreach($aTriagens as $triagem){
	$triagemID=$triagem['id'];
	$modelTriagem = Triagem::model()->find(array('select'=>'*','condition'=>'id=:id','params'=>array(':id'=>$triagemID)));
	$aTabs[$cont]=$this->renderPartial('../triagem/tabView', array('model'=>$modelTriagem),true);
	$cont++;
}
$this->widget('zii.widgets.jui.CJuiTabs', array(
	'tabs' => $aTabs
));
?>