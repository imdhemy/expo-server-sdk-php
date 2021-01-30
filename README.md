# php-server-sdk-php

PHP expo push notifications client

## Installation
You can install the package via composer
```
composer require imdhemy/expo-notifications
```
## Usage
```php
use Imdhemy\Expo\Client;
use Imdhemy\Expo\Messages\Message;
use Imdhemy\Expo\Messages\MessageList;

$tokens = [
    'ExponentPushToken[aaaaaaaaaaaaaaaaaaaaaa]',
    'ExponentPushToken[bbbbbbbbbbbbbbbbbbbbbb]',
];
$title = 'hello';
$body = 'world';

$message = new Message($title, $body);
$message->addManyPushTokens($tokens);

$list = MessageList::init()->addMessage($message);

$client = Client::create();
$tickets = $client->push($list);

```