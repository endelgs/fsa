<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionHandleHtmlTable(){
		sleep(2);
		if(isset($_POST)){
			//return the POST variable back
			//the widget will show an alert() with this data
			print_r($_POST);
		}
	}
	
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}
	
	public function actionRecuperarSenha()
	{
		$model=new User;
		
		if(isset($_POST['User'])){
			$email=$_POST['User']['email'];
			if($email=="")return $this->renderPartial('ajaxResp', array('model'=>$model,'res'=>"Preencha o campo email."));
			
			$res=User::model()->findByAttributes(array('email'=>$email));
			if($res===null)return $this->renderPartial('ajaxResp', array('model'=>$model,'res'=>"Email não encontrado."));
			
			$message = 'Senha: '.$res->password;
			
			$mailer = Yii::createComponent('application.extensions.mailer.EMailer');
			$mailer->IsSMTP();
			$mailer->SMTPAuth = true;
			$mailer->SMTPSecure = 'ssl';
			$mailer->Host = "smtp.gmail.com";
			$mailer->Port = 465;
			$mailer->Username = "joaotonussi@gmail.com";
			$mailer->Password = "semsenha24";
			
			
			$mailer->From = "joaotonussi@gmail.com";
			$mailer->FromName = "FCM";
			$mailer->AddAddress($email);
			$mailer->CharSet = 'UTF-8';
			$mailer->Subject = 'Recuperação de Senha' ;
			$mailer->Body = $message;
			
			$mailer->Send();
			return $this->renderPartial('ajaxResp', array('model'=>$model,'res'=>"Email enviado com sucesso."));
		}
		$this->render('recuperarSenha',array('model'=>$model));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
      $model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}