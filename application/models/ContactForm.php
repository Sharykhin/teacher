<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class ContactForm extends CFormModel
{
    public $username;
    public $email;
    public $text;
    public $verifyCode;
    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules()
    {
        return array(
            // username and password are required
            array('username, text, email', 'required'),
            array('email','email'),
            array(
                'verifyCode',
                'captcha',
                // авторизованным пользователям код можно не вводить
                'allowEmpty'=>!Yii::app()->user->isGuest || !CCaptcha::checkRequirements(),
            ),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
        return array(
            'text'=>Yii::t('app','Message'),
            'username'=>Yii::t('app','Name'),
            'verifyCode' =>Yii::t('app','code'),
        );
    }

    public function sendMessage($data,$to)
    {
        $message = new YiiMailMessage;
        $message->view = "feedback";
        $params              = array('data'=>$data);
        $message->subject    = 'Teacher Feedback';
        $message->setBody($params, 'text/html');
        $message->addTo($to);
        $message->from = $data['email'];
        if(Yii::app()->mail->send($message)) {
            return true;
        } else {
            return false;
        }
    }

}
