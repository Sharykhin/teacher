<?php

class SiteController extends Controller
{
    public $title;

    public $underTitle;

    public $email;

    public $phone;
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


    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'SetUp',

        );
    }

    public function filterSetUp($filterChain)
    {

        Yii::import('application.modules.admin.models.Settings');
        $Settings = new Settings();
        $title = $Settings->findByAttributes(array('name'=>'title'));
        $this->title=$title->value;
        $underTitle =  $Settings->findByAttributes(array('name'=>'under_title'));
        $this->underTitle = $underTitle->value;
        $phone = $Settings->findByAttributes(array('name'=>'phone'));
        $email = $Settings->findByAttributes(array('name'=>'email'));
        $this->phone = $phone->value;
        $this->email=$email->value;
        $filterChain->run();
    }



	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
        Yii::import('application.modules.content.models.Content');
        $Content = new Content();
        $mainPage = $Content->findByAttributes(array('on_main_page'=>1));
		$this->render('index',array('mainPage'=>$mainPage));
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


    public function actionContact()
    {
        $model=new ContactForm();

        // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='contact-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if(isset($_POST['ContactForm']))
        {
            $model->attributes=$_POST['ContactForm'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->sendMessage()) {
                Yii::app()->user->setFlash('success', Yii::t('app','Message has been sent successfully!'));
                $this->redirect($this->createAbsoluteUrl('/contacts'));
            }
        }

        $this->render('contact',array('model'=>$model));

    }


	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{

        if (!Yii::app()->user->isGuest) {
            $this->redirect($this->createAbsoluteUrl('/admin/dashboard'));
        }
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
				$this->redirect($this->createAbsoluteUrl('/dashboard'));
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