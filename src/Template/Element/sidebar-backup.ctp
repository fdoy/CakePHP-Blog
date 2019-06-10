<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu tree" data-widget="tree">
            <div class="user-panel">
                <div class="pull-left image">
                    <?= $this->Html->image('../dist/img/user2-160x160.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
                </div><!--End pull-left-image-->
                <?php $cell = $this->cell('SidebarMenu'); ?>
                <?= $cell ?>
            </div>
            <li class="header"><?= __('Actions') ?></li>
            <!--Put Menu Tree Here-->
            <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Log Out'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
        </ul>
    </section>
</aside>