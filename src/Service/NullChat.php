<?php

namespace Telegram\TelegramBundle\Service;

class NullChat extends Chat
{
    /**
     * {@inheritDoc}
     */
    public function sendMessage($message)
    {
        return true;
    }
}