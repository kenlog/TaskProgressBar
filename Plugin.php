<?php

namespace Kanboard\Plugin\TaskProgressBar;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{

    public function initialize()
    {
        $this->template->setTemplateOverride('board/task_footer', 'TaskProgressBar:board/task_footer');
        $this->hook->on("template:layout:css", array("template" => "plugins/TaskProgressBar/assets/TaskProgressBar.css"));
    }

    public function getPluginName()
    {
        return 'TaskProgressBar';
    }

    public function getPluginDescription()
    {
        return t('Show the progress bar of sub-tasks from the bulletin board.');
    }

    public function getPluginAuthor()
    {
        return 'Valentino Pesce';
    }

    public function getPluginVersion()
    {
        return '1.0.1';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.48';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/kenlog/TaskProgressBar';
    }

}
