<?php

namespace marqu3s\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class CommonInstaller extends LibraryInstaller
{
    /**
     * @inheritDoc
     */
    public function getInstallPath(PackageInterface $package)
    {
        // $prefix = substr($package->getPrettyName(), 0, 23);
        // if ('phpdocumentor/template-' !== $prefix) {
        //     throw new \InvalidArgumentException(
        //         'Unable to install template, phpdocumentor templates '
        //         .'should always start their package name with '
        //         .'"phpdocumentor/template-"'
        //     );
        // }

        return 'common';
    }

    /**
     * @inheritDoc
     */
    public function supports($packageType)
    {
        return 'yii2-common' === $packageType;
    }
}
