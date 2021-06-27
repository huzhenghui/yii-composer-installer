<?php

namespace huzhenghui\yii\composer\installer;

use Composer\Installer\LibraryInstaller;
use Composer\Script\Event;

use yii\composer\Installer as YiiComposerInstaller;

class Installer extends LibraryInstaller
{

    public static function postUpdate($event)
    {
        YiiComposerInstaller::copyFiles(array(
            "./vendor/yiisoft/yii2-app-basic/yii" => "./yii",
            "./vendor/yiisoft/yii2-app-basic/config/console.php" => "./config/console.php",
            "./vendor/yiisoft/yii2-app-basic/config/db.php" => "./config/db.php",
            "./vendor/yiisoft/yii2-app-basic/config/params.php" => "./config/params.php",
            "./vendor/yiisoft/yii2-app-basic/web/index.php" => "./web/index.php",
            "./vendor/yiisoft/yii2-app-basic/config/web.php" => "./config/web.php",
            "./vendor/yiisoft/yii2-app-basic/controllers/SiteController.php" => "./controllers/SiteController.php",
            "./vendor/yiisoft/yii2-app-basic/views/site/index.php" => "./views/site/index.php",
            "./vendor/yiisoft/yii2-app-basic/views/layouts/main.php" => "./views/layouts/main.php",
            "./vendor/yiisoft/yii2-app-basic/assets/AppAsset.php" => "./assets/AppAsset.php",
            "./vendor/yiisoft/yii2-app-basic/web/assets/.gitignore" => "./web/assets/.gitignore",
            "./vendor/yiisoft/yii2-app-basic/widgets/Alert.php" => "./widgets/Alert.php"
        ));
    }
    /**
     * @param Event $event
     */
    public static function postInstall($event)
    {
        YiiComposerInstaller::generateCookieValidationKey("config/web.php");
    }
}