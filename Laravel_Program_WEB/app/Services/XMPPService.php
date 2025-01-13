<?php

namespace App\Services;

use Fabiang\Xmpp\Client;
use Fabiang\Xmpp\Options;
use Fabiang\Xmpp\Protocol\Message;

class XMPPService
{
    private $client;

    public function __construct()
    {
        $options = new Options('tcp://example.com:5222');
        $options->setUsername('username')
                ->setPassword('password');

        $this->client = new Client($options);
        $this->client->connect();
    }

    public function sendMessage($to, $message)
    {
        $msg = new Message();
        $msg->setMessage($message)
            ->setTo($to);

        $this->client->send($msg);
    }
}
