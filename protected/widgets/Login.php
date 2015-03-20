<?php
Yii::import('zii.widgets.CPortlet');
class Login extends CPortlet
{
	protected function renderContent()
	{
		$model = new LoginForm();
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			$model->validate();
		}
		$this->render('login',array('model'=>$model));
	}
}