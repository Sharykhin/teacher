<?php
Yii::import('application.modules.users.models.Users');

class UserIdentity extends CUserIdentity
{
    private $_id;
    public $_username;
    public function authenticate()
    {

        $record=Users::model()->findByAttributes(array('username'=>$this->username));

        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($record->password!==crypt($this->password,$record->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$record->id;
//            $this->setState('username', $record->username);
           $this->_username=$record->username;
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId()
    {
        return $this->_id;
    }
}