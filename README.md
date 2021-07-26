# Deprecation notice

This package is deprecated and will soon be removed. We suggest using [irazasyed/telegram-bot-sdk](https://packagist.org/packages/irazasyed/telegram-bot-sdk) directly.

## Telegram Bundle

Symfony integration for [Telegram SDK](https://telegram-bot-sdk.readme.io/).

[![Latest Stable Version](https://poser.pugx.org/r-everse/telegram-bundle/v)](//packagist.org/packages/r-everse/telegram-bundle)
[![Total Downloads](https://poser.pugx.org/r-everse/telegram-bundle/downloads)](//packagist.org/packages/r-everse/telegram-bundle)
[![Latest Unstable Version](https://poser.pugx.org/r-everse/telegram-bundle/v/unstable)](//packagist.org/packages/r-everse/telegram-bundle)
[![License](https://poser.pugx.org/r-everse/telegram-bundle/license)](//packagist.org/packages/r-everse/telegram-bundle)

## Installation 

### Step 1: Download the Bundle
You can install this bundle using Composer: 

```bash
composer require r-everse/telegram-bundle:^0.1
```

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            // ...
            new Telegram\TelegramBundle\TelegramBundle(),
        ];

        // ...
    }

    // ...
}
```

## Configuration

Add it to ``app/config/config.yml``.

```yaml
telegram:
    token: 'YOUR BOT TOKEN HERE'
    chats: 
        my_chat_alias: -0000000 
```

Add it to ``app/config/config_dev.yml``.

```yaml
parameters:
    // ...
    telegram.chat.class: Telegram\TelegramBundle\Service\NullChat
    // ...
```

## Usage

```php
$this->getContainer()->get('telegram.chat.my_chat_alias')->sendMessage('Hello world!');
```
