<?php
/**
 * Pub Tool Launcher plugin for Craft CMS 3.x
 *
 * Launch simple tool for editing product content
 *
 * @link      http://bletchley.co
 * @copyright Copyright (c) 2018 Andy Skogrand
 */

namespace bletchley\pubtoollauncher\assetbundles\publauncherfield;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    Andy Skogrand
 * @package   PubToolLauncher
 * @since     1.0.0
 */
class PublauncherFieldAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@bletchley/pubtoollauncher/assetbundles/publauncherfield/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/Publauncher.js',
        ];

        $this->css = [
            'css/Publauncher.css',
        ];

        parent::init();
    }
}
