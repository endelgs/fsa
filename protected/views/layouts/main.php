<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainMbMenu">
		<?php $this->widget('application.extensions.mbmenu.MbMenu',array(
            'items'=>array(
                array('label'=>'Página Inicial', 'url'=>array('/')),
                array('label'=>'Cadastro de Pacientes', 'url'=>array('#'),
                  'items'=>array(
                    array('label'=>'Cadastrar novo paciente', 'url'=>array('paciente/create')),
                    array('label'=>'Gerenciar pacientes', 'url'=>array('paciente/admin')),
                  ),
                ),
            	array('label'=>'Triagem', 'url'=>array('#'),
            		'items'=>array(
            			array('label'=>'Cadastrar nova triagem', 'url'=>array('triagem/create')),
            			array('label'=>'Gerenciar triagens', 'url'=>array('triagem/admin')),
            			array('label'=>'Agenda de triagens*', 'url'=>array('#')),
            		),
            	),
            	array('label'=>'Genética', 'url'=>array('#'),
            		'items'=>array(
            			array('label'=>'Cadastrar dados de genética', 'url'=>array('genetica/create')),
            			array('label'=>'Gerenciar dados de genética', 'url'=>array('genetica/admin')),
            		),
            	),
            	array('label'=>'Assistência Social', 'url'=>array('#'),
            		'items'=>array(
            			array('label'=>'Cadastrar dados de assistência social*', 'url'=>array('#')),
            			array('label'=>'Gerenciar dados de assistência social*', 'url'=>array('#')),
            		),
            	),
            	array('label'=>'Prótese', 'url'=>array('#'),
            		'items'=>array(
            			array('label'=>'Cadastrar dados de prótese*', 'url'=>array('#')),
            			array('label'=>'Agenda de próteses*', 'url'=>array('#')),
            		),
            	),
            	array('label'=>'Monitoramento', 'url'=>array('paciente/admin')),
            	array('label'=>'Agenda*', 'url'=>array('#')),
            	array('label'=>'Sair do sistema', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
    )); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
	
	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> - TANU-UTI - Faculdade de Ciências Médicas - Unicamp.<br/>
		Todos os direitos reservados.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
