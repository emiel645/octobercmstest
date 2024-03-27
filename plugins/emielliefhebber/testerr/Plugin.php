<?php namespace Emielliefhebber\Testerr;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'testerr',
            'description' => 'No description provided yet...',
            'author' => 'emielliefhebber',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Emielliefhebber\Testerr\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'emielliefhebber.testerr.some_permission' => [
                'tab' => 'testerr',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'testerr' => [
                'label' => 'testerr',
                'url' => Backend::url('emielliefhebber/testerr/mycontroller'),
                'icon' => 'icon-leaf',
                'permissions' => ['emielliefhebber.testerr.*'],
                'order' => 500,
            ],
        ];
    }
}
