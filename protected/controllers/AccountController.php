<?php
/**
 * 账号系统
 * 
 * @author        顾秦
 * @copyright     Copyright (c) 2015 ickey All rights reserved.
 * @version       v1.1.0
 * @updatetime    2015-03-05
 */
class AccountController extends Controller
{
	public $defaultAction = 'login';
	/**
	 * Declares class-based actions.
	 */
	 function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'system.web.widgets.captcha.CCaptchaAction',
				'backColor'=>0xFFFFFF,
                'maxLength'=>4,       
                'minLength'=>4,      
                'height'=>'29',
                'width'=>'90',
                'offset'=>2,
                'padding'=>4,
			),
		);
	}

	/**
	 * 用户注册
	 */
	public function actionRegister()
	{
		$this->title = "注册-ICkey 云汉芯城 - 电子元器件一站式采购网 | 芯片 IC 交易";
		$model = new RegisterForm();
		if(isset($_POST['RegisterForm']))
		{		
			$model->isbbs = 0;
			$_POST['RegisterForm']['code']=$model->makeCode();
			$model->attributes = $_POST['RegisterForm'];
			if(!empty($_POST['isbbs']))
			$model->isbbs = $_POST['isbbs'];

			if($model->validate()){
				$from = $_POST['RegisterForm']['comFrom'];
			    $id = $model->save();
				if($id>0){
					$remark='用户注册成功，系统赠送10个IC币';
					Helper::updateIcCoin(1,$id,10,$remark);

					//提供测试人员注册时有金额（暂时误删）开始：
					$account = new UserAccount();
			        $accountData = $account->findAll(array(
			            'condition'=>'userId='.$id,
			        ));
			        // if(!empty($accountData)){
			        // 	foreach($accountData as $value){
			        //     $value->balance +=9000000;
			        //     $value->limitMaxBalance+=9000000;
			        //     $value->remark='测试';
			        //     $value->createdTime=date('Y-m-d H:i:s',time());
			        //     $value->save();
			        // 	}
			        // }
			        //提供测试人员注册时有金额（暂时误删）结束；

					foreach ($from as $key => $value) {
						$comFrom = new UserComefrom();
						$comFrom->userId = $id;
						$comFrom->comeFrom= $value;
						$comFrom->save();
					}
			} 
				if($model->login()){
					$this->actionFourfestival() ;	// 四周年抽奖
					$this->redirect(Yii::app()->user->returnUrl);
				} 
			}
		}
		$this->render('register',array('model'=>$model,'comFrom'=>Yii::app()->params['comFrom']));
	}
	/**
	 * 登录系统
	 */
	public function actionLogin()
	{
		$model = new LoginForm();
		if($_GET['type']==='ajax')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];

			if($model->validate() && $model->login()) {
				$this->redirect(Yii::app()->user->returnUrl);
			}
		}
	//	$this->render('login',array('model'=>$model));
	}
	/**
	 * 验证是否登录
	 */
	public function actionIslogin()
	{
		$this->layout = false;
		$this->render('islogin');
	}
	/**
	 * 退出系统
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	/**
	 * find password.
	 */
	public function actionFindpwd()
	{
		$model = new FindpasswordForm();
		if(isset($_POST['FindpasswordForm'])){
			$model->attributes = $_POST['FindpasswordForm'];
			if($model->validate()&&$model->save()){
				$subject = 'ICkey 找回密码';
				$message = $this->renderPartial('email',array('model'=>$model,'type'=>'findpassword'),true);
				if(Helpers::sendmail($model->email,$subject,$message)){
					Yii::app()->user->setFlash('success','邮件已发送到您的邮箱。请按邮箱中的提示操作，完成身份验证。');
				}else{
					throw new CHttpException(500, '<center><h4>send mail error</h4></center>'); 
				}
			}
		}
		$this->render('findpassword',array('model'=>$model));
	}

	/**
	 * reset password.
	 */
	public function actionResetpwd()
	{
		$token = Yii::app()->request->getParam('token');
		if(!empty($token)){
			$arr = FindPwdLog::model()->findByAttributes(array('token'=>$token,'status'=>0));
			if(!empty($arr)){
				$model = new ResetpwdForm();
				$model->email = $arr->email;
				if(isset($_POST['ResetpwdForm'])&&!empty($_POST['ResetpwdForm'])){
					$model->attributes = $_POST['ResetpwdForm'];
					if($model->validate()&&$model->save($arr)){
						$subject = 'ICkey 找回密码';
						$message = $this->renderPartial('email',array('model'=>$model,'soucePassword'=>$model->password,'type'=>'resetpwd'),true);
						if(Helpers::sendmail($model->email,$subject,$message)){
							$identity=new UserIdentity($model->email,$model->password);
							$identity->authenticate();
							Yii::app()->user->login($identity,0);
							//$this->redirect(array('site/message','type'=>'resetpwd'));
							$this->redirect(array('/site/index'));
						}
					}
				}

				$this->render('resetpwd',array('model'=>$model));
			}else{
				$this->redirect(array('/site/index'));
			}
		}else{
				$this->redirect(array('/site/index'));
		}
	}
}