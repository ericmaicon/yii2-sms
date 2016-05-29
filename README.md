# Yii2 Sms


An extension used to send sms messages using brazilian carriers.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ composer require code-on-yii/yii2-sms:*
```

or add

```
"code-on-yii/yii2-sms": "*"
```

to the `require` section of your `composer.json` file.

## Loading the extension

You can use this extension in two ways.

**Within app config**

Append the carrier class, username and password in your config file:

```php
'components' => [
    'sms' => [
        'class' => 'codeonyii\sms\twwwireless\SmsAdapter',
        'username' => 'myusername',
        'password' => 'mypassword',
    ]
]
```

Then you'll load the extension like this:

```php
$sms = Yii::$app->sms;
```

**Using the carrier adapter's class directly**

Create the object intance, then initialize It with the username and password.

```php
use codeonyii\sms\twwwireless\SmsAdapter;

$sms = SmsAdapter();
$sms->init('myusername','mypassword');
```

## Available methods

**Sending messages**

```php
$sms->sendSms('554799999999','My Message');
```

**Getting available credit**

```php
$sms->getCredit();
```

## Testing

TODO