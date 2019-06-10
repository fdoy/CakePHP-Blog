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
            <li><?= $this->Html->link('<i class="fa fa-book"></i> <span>List Articles</span>', ['controller' => 'Articles', 'action' => 'index'], ['escape' => false]) ?></li>
            <li><?= $this->Html->link('<i class="fa fa-edit"></i> <span>New Article</span>', ['controller' => 'Articles', 'action' => 'add'], ['escape' => false]) ?></li>
            <li><?= $this->Html->link('<i class="fa fa-users"></i> <span>List Users</span>', ['controller' => 'Users', 'action' => 'index'], ['escape' => false]) ?></li>
            <li><?= $this->Html->link('<i class="fa fa-user-plus"></i> <span>New User</span>', ['controller' => 'Users', 'action' => 'add'], ['escape' => false]) ?></li>
            <li><?= $this->Html->link('<i class="fa fa-tags"></i> <span>List Tags</span>', ['controller' => 'Tags', 'action' => 'index'], ['escape' => false]) ?></li>
            <li><?= $this->Html->link('<i class="fa fa-tag"></i> <span>New Tag</span>', ['controller' => 'Tags', 'action' => 'add'], ['escape' => false]) ?></li>
            <li><?= $this->Html->link('<i class="fa fa-eject"></i> <span>Log Out</span>', ['controller' => 'Users', 'action' => 'logout'], ['escape' => false]) ?></li>
        </ul>
    </section>
</aside>