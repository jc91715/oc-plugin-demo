<?php namespace Jc91715\Demo;

use Backend;
use System\Classes\PluginBase;

/**
 * Demo Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'jc91715.demo::lang.plugin.name',
            'description' => 'No description provided yet...',
            'author'      => 'jc91715',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Jc91715\Demo\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'jc91715.demo.some_permission' => [
                'tab' => 'Demo',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
//        return []; // Remove this line to activate

        return [
            'demo' => [
                'label'       => 'jc91715.demo::lang.pop.label',
                'url'         => Backend::url('jc91715/demo/pops'),
                'icon'        => 'icon-leaf',
                'permissions' => ['jc91715.demo.*'],
                'order'       => 500,
            ],
        ];
    }
}
