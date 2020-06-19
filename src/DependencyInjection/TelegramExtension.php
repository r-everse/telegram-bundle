<?php

namespace Telegram\TelegramBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ChildDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\DependencyInjection\Extension\Extension;

class TelegramExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');

        $config = $this->processConfiguration($configuration, $configs);
        $token = $config['token'];
        $chats = $config['chats'];

        foreach ($chats as $name => $chatId) {
            $clientId = sprintf('telegram.chat.%s', $name);

            $clientDef = new ChildDefinition('telegram.chat.chat_prototype');
            $clientDef->replaceArgument(0, $token);
            $clientDef->replaceArgument(1, $chatId);

            $container->setDefinition($clientId, $clientDef);
        }
    }
}
