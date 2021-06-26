<?php

namespace huzhenghui\yii\composer;

use Composer\Installer\LibraryInstaller;
use Composer\Script\Event;

use yii\composer\Install;

class Installer extends LibraryInstaller
{
    /**
     * @param Event $event
     */
    public static function postInstall($event)
    {
        yii\composer\Install::postInstall($event);
    }
}