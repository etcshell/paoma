<?php

/**
 * RegisterForm class.
 * RegisterForm is the data structure for keeping
 * user register form data. It is used by the 'register' action of 'SiteController'.
 */
class RegisterForm extends CFormModel
{
	public $name;
	public $email;
	public $password;
	public $repassword;
	public $verifyCode;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that email and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			array('email,password,repassword,name,verifyCode', 'required'),
            array('password', 'match','pattern'=>'/^[\w_]{4,16}$/','message'=>'密码格式不正确！'),
            array('repassword','compare','compareAttribute'=>'password','message'=>'两次密码必须一致'),
            array('verifyCode','captcha','message'=>'验证码不正确'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'email'=>'登录邮箱',
			'password'=>'登录密码',
			'repassword'=>'确认密码',
			'name'=>'用户名',
			'verifyCode'=>'验证码',
		);
	}


        /**
     * Authenticates the password.
     * This is the 'authenticate' validator as declared in rules().
     */
    public function authenticate($attribute,$params)
    {
        $this->_identity=User::model()->findByAttributes(array('email'=>$this->email));
        if(!empty($this->_identity))
            $this->addError('email','该邮箱已被注册！');
        else
            return true;
    }

	/**
	 * Logs in the user using the given email and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->email,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=3600*24*30; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
	    /**
     * Logs in the user using the given username and password in the model.
     * @return boolean whether login is successful
     */
    public function save()
    { 
        $user = new User();
        $user->attributes = $this->attributes;
        return $user->save();
    }
}
