<?php
/**
 * Created by PhpStorm.
 * User: almir
 * Date: 24/05/16
 * Time: 22:08
 */

namespace codeonyii\sms\twwwireless;

use codeonyii\sms\Sms;
use codeonyii\sms\SmsServiceInterface;
use yii\base\InvalidConfigException;

class SmsAdapter extends Sms implements SmsServiceInterface
{
    private $api;

    public function init($username = null, $password = null)
    {
        parent::init();

        if ($username !== null and $password !== null)
            $this->api = new TWWLibrary(['numusu' => $username, 'senha' => $password]);
        else
            $this->api = new TWWLibrary(['numusu' => $this->username, 'senha' => $this->password]);
    }

    public function sendSms($phone, $message)
    {
        $this->api->enviaSMS($phone, $message);
    }

    public function getCredit()
    {
        return $this->api->VerCredito();
    }

}