<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * SidebarMenu cell
 */
class SidebarMenuCell extends Cell
{
    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Initialization logic run at the end of object construction.
     *
     * @return void
     */
    public function initialize()
    {
    }

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $this->loadModel('Users');
        $user = $this->Users->get($this->request->getSession()->read('Auth')['User']['id']);
        $this->set('currentUser', $user);
    }
}
