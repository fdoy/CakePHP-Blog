<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Sidebar helper
 */
class SidebarHelper extends Helper
{
    public $helpers = ['Html'];
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function whoAmI(\App\Model\Entity\User $user)
    {

    }
}
