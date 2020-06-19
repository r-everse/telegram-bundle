<?php

namespace Telegram\TelegramBundle\Service;

use Telegram\Bot\Api as TelegramAPI;

class Chat implements ChatInterface
{
    /**
     * @var TelegramAPI
     */
    private $apiTelegram;

    /**
     * @var string
     */
    private $chatId;

    /**
     * @param string $token
     * @param string $chatId
     *
     * @throws \Telegram\Bot\Exceptions\TelegramSDKException
     */
    public function __construct($token, $chatId)
    {
        $this->apiTelegram = new TelegramAPI($token);
        $this->chatId = $chatId;
    }


    /**
     * {@inheritDoc}
     */
    public function sendMessage($message)
    {
        $this->apiTelegram->sendMessage([
            'chat_id' => $this->chatId,
            'text' => $message
        ]);

        return true;
    }
}
