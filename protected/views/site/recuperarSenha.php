<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Recuperar Senha</h1>

<p>Por favor, insira o email cadastrado:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'recuperar-senha',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	<div class="row">
		<b>Email</b>
		<?php echo $form->textField($model,'email'); ?>
	</div>
	<div id="boxResp"></div>
	<div class="row buttons">
		<?php echo CHtml::ajaxSubmitButton('Lembrar',array('site/recuperarSenha'),array('update'=>'#boxResp',));?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
