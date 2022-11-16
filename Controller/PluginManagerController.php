<?php

namespace Kanboard\Plugin\PluginManager\Controller;

use Kanboard\Controller\BaseController;

/**
 * Class PluginManager
 * 
 * @author aljawaid
 * 
 */

class PluginManagerController extends \Kanboard\Controller\PluginController
{
	/**
     * Display the Problem Plugins Page
     *
     * @access public
     */

    public function show()
    {
        $this->response->html($this->helper->layout->plugin('pluginManager:info/plugin-problems', array(
            'title' => t('Plugins').' &#10562; '.t('Plugin Problems'),
        )));
    }

    /**
     * Display the Plugin Info Page
     *
     * @access public
     */

    public function showPluginInfo()
    {
        $this->response->html($this->helper->layout->plugin('pluginManager:info/plugin-info', array(
            'title' => t('Plugins').' &#10562; '.t('Plugin Info'),
        )));
    }
}
