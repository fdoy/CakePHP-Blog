<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Role cell
 */
class RoleCell extends Cell
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
        if ($this->request->getSession()->read('Auth') == NULL ) {
            $this->set('currentRole', '');
        } else {
            $user = $this->Users->get($this->request->getSession()->read('Auth')['User']['id']);
            $this->set('currentRole', $user->role);
        }
    }
}
