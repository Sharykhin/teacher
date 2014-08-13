<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $name
 * @property string $first_name
 * @property string $last_name
 * @property string $link
 * @property string $hometown
 * @property string $location
 * @property string $work
 * @property string $education
 * @property string $gender
 * @property string $locale
 * @property integer $verified
 * @property string $login
 * @property string $password
 * @property string $role
 */
class Users extends CActiveRecord{

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id, verified', 'numerical', 'integerOnly'=>true),
			array('name, first_name, last_name', 'length', 'max'=>50),
			array('link, gender, locale', 'length', 'max'=>255),
			array('hometown, location, work, education', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, first_name, last_name, link, hometown, location, work, education, gender, locale, verified', 'safe', 'on'=>'search'),
		);
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
			'id' => 'ID',
			'name' => 'Name',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'link' => 'Link',
			'hometown' => 'Hometown',
			'location' => 'Location',
			'work' => 'Work',
			'education' => 'Education',
			'gender' => 'Gender',
			'locale' => 'Locale',
			'verified' => 'Verified',
            'login' => 'Login',
            'password' => 'Password',
            'role' => 'Role',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('hometown',$this->hometown,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('work',$this->work,true);
		$criteria->compare('education',$this->education,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('locale',$this->locale,true);
		$criteria->compare('verified',$this->verified);
        $criteria->compare('login',$this->login);
        $criteria->compare('role',$this->role);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function createUser($user)
    {

        $this->id = $user->id;
        $this->name = $user->name;
        $this->first_name = $user->firstName;
        $this->last_name = $user->lastName;
        $this->link = $user->link;
        $this->hometown = json_encode($user->hometown);
        $this->save();
    }
}
