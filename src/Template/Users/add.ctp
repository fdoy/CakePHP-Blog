<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php
    $this->Breadcrumbs->add('<i class="fa fa-users"></i> <span>Users</span>', ['controller' => 'Users', 'action' => 'index'], ['escape' => false]);
    $this->Breadcrumbs->add( '<i class="fa fa-user-plus"></i> <span>New User</span>', ['controller' => 'Users', 'action' => 'add'], ['escape' => false]);
?>
<?= $this->element('row-header') ?>
    <div class="box-header with-border">
        <h3 class="box-title"><?= __('New User') ?></h3>
    </div><!--End of box-header-->
    <div class="box-body" role="grid">
        <?= $this->Form->create($user) ?>
        <?= $this->Form->control('username', ['class' => 'form-group form-control']) ?>
        <?= $this->Form->control('password', ['class' => 'form-group form-control']) ?>
        <?= $this->Form->control('role', [
            'options' => ['admin' => 'Admin', 'author' => 'Author'],
            'class' => 'form-group form-control'
            ]) ?>
    </div><!--End of box-body-->
    <div class="box-footer">
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-info']) ?>
        <?= $this->Form->end() ?>
    </div>
<?= $this->element('row-footer') ?>