<?php
/**
 * Pub Tool Launcher plugin for Craft CMS 3.x
 *
 * Launch simple tool for editing product content
 *
 * @link      http://bletchley.co
 * @copyright Copyright (c) 2018 Andy Skogrand
 */

namespace bletchley\pubtoollauncher;

use bletchley\pubtoollauncher\fields\Publauncher as PublauncherField;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\services\Fields;
use craft\events\RegisterComponentTypesEvent;

use yii\base\Event;

/**
 * Class PubToolLauncher
 *
 * @author    Andy Skogrand
 * @package   PubToolLauncher
 * @since     1.0.0
 *
 */
class PubToolLauncher extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var PubToolLauncher
     */
    public static $plugin;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            Fields::class,
            Fields::EVENT_REGISTER_FIELD_TYPES,
            function (RegisterComponentTypesEvent $event) {
                $event->types[] = PublauncherField::class;
            }
        );

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'pub-tool-launcher',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
