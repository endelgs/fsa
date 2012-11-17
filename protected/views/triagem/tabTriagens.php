<?php
/* @var $this TriagemController */
/* @var $model Triagem */

//die(print_r($aTriagens));
?>
<h3>Cada aba representa uma triagem</h3>
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