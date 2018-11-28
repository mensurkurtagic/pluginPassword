<?php

namespace changeOrder;

use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class changeOrder extends Plugin
{
    /**
     * @param InstallContext $context
     * @throws \Exception
     */
    public function install(InstallContext $context)
    {
        parent::install($context);
    }

    public function uninstall(UninstallContext $context)
    {
        parent::uninstall($context);
    }

    public function build(ContainerBuilder $container) {
        $container->setParameter('change_order.plugin_dir', $this->getPath());
        $container->setParameter('change_order.view_dir', $this->getPath() . '/Resources/views/');
       parent::build($container);
    }
}