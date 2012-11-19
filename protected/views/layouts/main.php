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
		<?php 
		$user = Yii::app()->user;
		$this->widget('application.extensions.mbmenu.MbMenu',array(
            'items'=>array(
                array('label'=>'Página Inicial', 'url'=>array('/')),
            	array('label'=>'Usuários', 'url'=>array('user/admin'),'visible'=>$user->checkAccess('admin')),
                array('label'=>'Pacientes',
                  'items'=>array(
                    array('label'=>'Cadastrar novo paciente', 'url'=>array('paciente/create')),
                    array('label'=>'Gerenciar pacientes', 'url'=>array('paciente/admin')),
                  ),
                ),
            	array('label'=>'Triagem',
            		'visible'=>$user->checkAccess('triagem'),
            		'items'=>array(
            			array('label'=>'Cadastrar triagem para um paciente', 'url'=>array('triagem/create')),
            			array('label'=>'Gerenciar triagens', 'url'=>array('triagem/admin')),
            			array('label'=>'Agenda de triagens', 'url'=>array('agendaTriagem/create')),
            		),
            	),
            	array('label'=>'Genética',
            		'visible'=>$user->checkAccess('genetica'),
            		'items'=>array(
            			array('label'=>'Cadastrar dados de genética', 'url'=>array('genetica/create')),
            			array('label'=>'Gerenciar dados de genética', 'url'=>array('genetica/admin')),
            		),
            	),
            	array('label'=>'Assistência Social',
            		'visible'=>$user->checkAccess('servicosocial'),
            		'items'=>array(
            			array('label'=>'Cadastrar dados de assistência social', 'url'=>array('servicoSocial/create')),
            			array('label'=>'Gerenciar dados de assistência social', 'url'=>array('servicoSocial/admin')),
            		),
            	),
            	array('label'=>'Prótese',
            		'visible'=>$user->checkAccess('protese'),
            		'items'=>array(
            			array('label'=>'Cadastrar avaliação de prótese', 'url'=>array('proteseAvaliacao/create')),
            			array('label'=>'Cadastrar prescrição de prótese', 'url'=>array('protesePrescricao/create')),
            			array('label'=>'Cadastrar verificação de prótese', 'url'=>array('proteseVerificacao/create')),
            			array('label'=>'Cadastrar validação de prótese', 'url'=>array('proteseValidacao/create')),
            			array('label'=>'Cadastrar anexo de prótese', 'url'=>array('proteseAnexo/create')),
            			array('label'=>'Agenda de próteses', 'url'=>array('agendaProtese/create')),
            		),
            	),
            	array('label'=>'Monitoramento',
            		'visible'=>$user->checkAccess('monitoramento'),
            		'items'=>array(
            			array('label'=>'Cadastrar dados de monitoramento', 'url'=>array('monitoramento/create')),
            			array('label'=>'Gerenciar dados de monitoramento', 'url'=>array('monitoramento/admin')),
            			array('label'=>'Agenda de monitoramento', 'url'=>array('agendaMonitoramento/create')),
            		),
            	),
            	array('label'=>'Diagnóstico',
            		'visible'=>$user->checkAccess('diagnostico'),
            		'items'=>array(
            			array('label'=>'Cadastrar diagnóstico', 'url'=>array('diagnostico/create')),
            			array('label'=>'Gerenciar diagnósticos', 'url'=>array('diagnostico/admin')),
            			array('label'=>'Agenda de diagnósticos', 'url'=>array('agendaDiagnostico/create')),
            		),
            	),
            	array('label'=>'ORL',
            		'visible'=>$user->checkAccess('orl'),
            		'items'=>array(
            			array('label'=>'Cadastrar ORL', 'url'=>array('orl/create')),
            			array('label'=>'Gerenciar ORL', 'url'=>array('orl/admin')),
            			array('label'=>'Agenda de ORLs', 'url'=>array('agendaOrl/create')),
            		),
            	),
            	array('label'=>'Entrar do sistema', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            	array('label'=>'Sair do sistema', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
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
