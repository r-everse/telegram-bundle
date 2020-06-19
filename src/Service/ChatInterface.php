<?php

namespace Telegram\TelegramBundle\Service;

interface ChatInterface
{
    /**
     * Send a message to chat set before to call this method
     *
     * @param string $message
     * @return boolean
     */
    public function sendMessage($message);
}