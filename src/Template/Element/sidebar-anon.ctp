<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu tree" data-widget="tree">
            <div class="user-panel">
                <div class="pull-left image">
                    <?= $this->Html->image('../dist/img/user2-160x160.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
                </div><!--End pull-left-image-->
            </div>
            <li class="header"><?= __('Actions') ?></li>
            <li><?= $this->Html->link('<i class="fa fa-user-secret"></i> <span>Login</span>', ['controller' => 'Users', 'action' => 'login'], ['escape' => false]) ?></li>
            <li><?= $this->Html->link('<i class="fa fa-user-plus"></i> <span>Sign Up</span>', ['controller' => 'Users', 'action' => 'add'], ['escape' => false]) ?></li>
        </ul>
    </section>
</aside>