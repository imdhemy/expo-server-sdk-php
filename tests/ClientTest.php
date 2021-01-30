<?php

namespace Imdhemy\Expo\Tests;

use Faker\Factory;
use Imdhemy\Expo\Client;
use Imdhemy\Expo\Contracts\PushTicketAble;
use Imdhemy\Expo\Messages\Message;
use Imdhemy\Expo\Messages\MessageList;

class ClientTest extends TestCase
{
    /**
     * @test
     */
    public function testPush()
    {
        $faker = Factory::create('ar_SA');
        $title = $faker->realText(30);
        $body = $faker->realText(60);
        $message = new Message($title, $body);

        $token = getenv('TOKEN');
        $message->addPushToken($token);

        $messages = MessageList::init()->addMessage($message);

        $client = Client::create();
        $ticket = $client->push($messages)->first();

        $this->assertInstanceOf(PushTicketAble::class, $ticket);
    }
}
