<?php

namespace marqu3s\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Yii2InstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new CommonInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
