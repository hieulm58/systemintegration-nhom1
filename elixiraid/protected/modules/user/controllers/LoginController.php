<?php

include("../hospital-management-system/app/check_login.php");
class LoginController extends Controller
{
	public $defaultAction = 'login';
public $layout = '//layouts/login';

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{	
		//session_start();
		$login = check_login();

        if(ISSET($login['check_session']) && $login['check_session']!=""){
        	$model=new UserLogin;
        	$model->username="admin";
        	$model->password="admin";
        	if($model->validate()) {
					$this->lastViset();
					if (Yii::app()->user->returnUrl=='/index.php')
						$this->redirect(Yii::app()->controller->module->returnUrl);
					else
						$this->redirect(Yii::app()->user->returnUrl."/site/index");
				}
        }
		if (Yii::app()->user->isGuest) {
			$model=new UserLogin;
			// collect user input data
			if(isset($_POST['UserLogin']))
			{
				$model->attributes=$_POST['UserLogin'];

				// validate user input and redirect to previous page if valid
				if($model->validate()) {
					$this->lastViset();
					if (Yii::app()->user->returnUrl=='/index.php')
						$this->redirect(Yii::app()->controller->module->returnUrl);
					else
						$this->redirect(Yii::app()->user->returnUrl."/site/index");
				}
			}
			// display the login form
			$this->render('/user/login',array('model'=>$model));
		} else
			$this->redirect(Yii::app()->controller->module->returnUrl);
	}
	
	private function lastViset() {
		$lastVisit = User::model()->notsafe()->findByPk(Yii::app()->user->id);
		$lastVisit->lastvisit = time();
		$lastVisit->save();
	}

}