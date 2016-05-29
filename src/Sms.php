<?php
/**
 * Created by PhpStorm.
 * User: almir
 * Date: 24/05/16
 * Time: 21:30
 */

namespace codeonyii\sms;

use yii\base\Component;

class Sms extends Component
{
    public $username;
    public $password;

    public function sendSms($phone, $message)
    {
        echo $this->username;
        die();
    }
}