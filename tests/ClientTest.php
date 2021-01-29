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
        $tokens = [getenv('TOKEN')];
        $message = new Message($tokens, $faker->realText(30), $faker->realText(60));
        $messages = MessageList::init()->addMessage($message);

        $client = Client::create();
        $ticket = $client->push($messages)->first();

        $this->assertInstanceOf(PushTicketAble::class, $ticket);
    }
}
