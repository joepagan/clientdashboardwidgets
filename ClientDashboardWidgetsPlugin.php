<?php
/**
 * Client Dashboard Widgets plugin for Craft CMS
 *
 * A set of CraftCMS dashboard widgets that are useful for a client user.
 *
 * @author    Joe Pagan
 * @copyright Copyright (c) 2017 Joe Pagan
 * @link      https://www.joe-pagan.com
 * @package   ClientDashboardWidgets
 * @since     1
 */

namespace Craft;

class ClientDashboardWidgetsPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Client Dashboard Widgets');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('A set of CraftCMS dashboard widgets that are useful for a client user.');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/joepagan/clientdashboardwidgets/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/joepagan/clientdashboardwidgets/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Joe Pagan';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://www.joe-pagan.com';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }
}
