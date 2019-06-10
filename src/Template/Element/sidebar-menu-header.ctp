<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu tree" data-widget="tree">
            <div class="user-panel">
                <div class="pull-left image">
                    <?= $this->Html->image('../dist/img/user2-160x160.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
                </div><!--End pull-left-image-->
                <div class="pull-left info">
                    <p><?= $currentUser->username ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> <?= $currentUser->role ?></a>
                </div><!--End pull-let info-->
            </div>