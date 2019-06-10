<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu tree" data-widget="tree">
            <!--            --><?//= $cell = $this->cell('Loggedin::display') ?>

            <div class="user-panel">
                <div class="pull-left image">
                    <?= $this->Html->image('../dist/img/user2-160x160.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
                </div><!--End pull-left-image-->
                <?php $cell = $this->cell('SidebarMenu'); ?>
                <?= $cell ?>
            </div>