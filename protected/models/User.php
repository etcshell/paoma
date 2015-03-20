<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $uid
 * @property string $name
 * @property string $email
 * @property string $password
 * @property integer $gender
 * @property string $birthday
 * @property string $province
 * @property string $city
 * @property string $county
 * @property string $updateTime
 * @property string $createTime
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email, password, updateTime, createTime', 'required'),
			array('gender,status', 'numerical', 'integerOnly'=>true),
			array('name, email, password, province, city, county', 'length', 'max'=>255),
			array('updateTime, createTime', 'length', 'max'=>10),
			array('birthday', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('uid, name, email, password, gender, birthday, province, city, county, updateTime, createTime', 'safe', 'on'=>'search'),
		);
	}
	public function beforeSave()
	{
		if($this->isNewRecord){
			$this->updateTime=$this->createTime = time();
			$this->status=1;
		}else{
			$this->updateTime = time();
		}
		return true;
	}
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'uid' => 'Uid',
			'name' => '用户名',
			'email' => '邮箱',
			'password' => '密码',
			'gender' => '性别',
			'birthday' => '生日',
			'province' => '省',
			'city' => '市',
			'county' => '县',
			'updateTime' => '修改时间',
			'createTime' => '注册时间',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('county',$this->county,true);
		$criteria->compare('updateTime',$this->updateTime,true);
		$criteria->compare('createTime',$this->createTime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
