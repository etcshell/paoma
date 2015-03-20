<?php
Yii::import('zii.widgets.CPortlet');
class Register extends CPortlet
{
	protected function renderContent()
	{
		$model = new RegisterForm();
		if(isset($_POST['RegisterForm']))
		{
			$model->attributes=$_POST['RegisterForm'];
			$model->validate();
		}
		$this->render('register',array('model'=>$model));
	}
}