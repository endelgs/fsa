<?php

class ServicoSocialController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'roles'=>array('servicosocial', 'admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'roles'=>array('servicosocial', 'admin'),
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
      		'modelIrmao' => new ServicoSocialIrmao,
			'modelResidente' => new ServicoSocialResidentes,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate(){

		Yii::import('ext.multimodelform.MultiModelForm');
		
		$model=new ServicoSocial;
		
		$modelServicoSocialIrmao=new ServicoSocialIrmao;
		$validatedIrmaos = array('nome','idade','escolaridade','profissao','salario');
		
		$modelServicoSocialResidentes=new ServicoSocialResidentes;
		$validatedResidentes = array('nome','idade','parentesco','profissao','salario');
		

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['ServicoSocial'])){
			$model->attributes=$_POST['ServicoSocial'];
			$model->last_update=new CDbExpression('NOW()');
			
			if(MultiModelForm::validate($modelServicoSocialIrmao,$validatedIrmaos,$deleteItems) && MultiModelForm::validate($modelServicoSocialResidentes,$validatedResidentes,$deleteItems) && $model->save()){
			
				$masterValues = array('servico_social_r'=>$model->id);
				if (MultiModelForm::save($modelServicoSocialIrmao,$validatedIrmaos,$deleteItems,$masterValues) && MultiModelForm::save($modelServicoSocialResidentes,$validatedResidentes,$deleteItems,$masterValues)){
					$this->redirect(array('view','id'=>$model->id));
				}
			}
			
			/*if($model->save()){
				$modelServicoSocialIrmao->servico_social_r=$model->id;
				$modelServicoSocialIrmao->save();
				
				$this->redirect(array('view','id'=>$model->id));
			}*/
		}

		$this->render('create',
			array(
				'model'=>$model,
				'modelServicoSocialIrmao' => $modelServicoSocialIrmao,'validatedIrmaos' => $validatedIrmaos,
				'modelServicoSocialResidentes' => $modelServicoSocialResidentes,'validatedResidentes' => $validatedResidentes,
			)
		);
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id){
		Yii::import('ext.multimodelform.MultiModelForm');
		
		$model=$this->loadModel($id);
		
		$modelServicoSocialIrmao=new ServicoSocialIrmao;
		
		$modelServicoSocialResidentes=new ServicoSocialResidentes;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['ServicoSocial'])){
			$model->attributes=$_POST['ServicoSocial'];
			$model->last_update=new CDbExpression('NOW()');
			
			$masterValues = array('servico_social_r'=>$model->id);
			
			if(MultiModelForm::save($modelServicoSocialIrmao,$validatedMembers,$deleteMembers,$masterValues) && MultiModelForm::save($modelServicoSocialResidentes,$validatedResidentes,$deleteItems,$masterValues) && $model->save()){
				$this->redirect(array('view','id'=>$model->id));
			}
		}
		
		$this->render('update',
			array(
				'model'=>$model,
				'modelServicoSocialIrmao' => $modelServicoSocialIrmao,'validatedIrmaos' => $validatedIrmaos,
				'modelServicoSocialResidentes' => $modelServicoSocialResidentes,'validatedResidentes' => $validatedResidentes,
			)
		);
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
		$dataProvider=new CActiveDataProvider('ServicoSocial');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ServicoSocial('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ServicoSocial']))
			$model->attributes=$_GET['ServicoSocial'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=ServicoSocial::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='servico-social-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
