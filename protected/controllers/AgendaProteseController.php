<?php

class AgendaProteseController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','getProteses'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new AgendaProtese;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['AgendaProtese']))
		{
			$model->attributes=$_POST['AgendaProtese'];
			
			$agenda_tipo=$_POST['AgendaProtese']['agenda_tipo'];
			if($agenda_tipo=="anexo")$modelRef=new ProteseAnexo;
			else if($agenda_tipo=="avaliacao")$modelRef=new ProteseAvaliacao;
			else if($agenda_tipo=="prescricao")$modelRef=new ProtesePrescricao;
			else if($agenda_tipo=="validacao")$modelRef=new ProteseValidacao;
			else if($agenda_tipo=="verificacao")$modelRef=new ProteseVerificacao;
			
			if($modelRef && isset($model->data) && isset($model->paciente_r)){
				$modelRef->attributes=array();
				$modelRef->last_update=new CDbExpression('NOW()');
				$modelRef->paciente_r=$model->paciente_r;
			
				if($modelRef->insert())$model->form_tipo_r=$modelRef->id;
			}
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['AgendaProtese']))
		{
			$model->attributes=$_POST['AgendaProtese'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('AgendaProtese');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new AgendaProtese('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['AgendaProtese']))
			$model->attributes=$_GET['AgendaProtese'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	
	public function actionGetProteses(){
		$dataIni = explode("/",$_POST['data_ini']);
		$dataIni=implode(array_reverse($dataIni));
	
		$dataFim = explode("/",$_POST['data_fim']);
		$dataFim=implode(array_reverse($dataFim));
	
	
		$modelAgenda=new AgendaProtese;
	
		$proteses = $modelAgenda->getProteses($dataIni,$dataFim);
		$this->renderPartial('agendasFiltradas', array('model'=>$modelAgenda,'proteses'=>$proteses));
	}
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=AgendaProtese::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='agenda-protese-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
