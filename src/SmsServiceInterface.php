<?php
/**
 * Created by PhpStorm.
 * User: almir
 * Date: 24/05/16
 * Time: 21:32
 */

namespace codeonyii\sms;


interface SmsServiceInterface
{
    /***
     * @param string $phone Destination phone number
     * @param string $message The message to be sent
     * @return bool
     */
    public function sendSms($phone, $message);


    /***
     * @return int Number of remaining credits
     */
    public function getCredit();
}