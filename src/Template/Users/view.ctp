<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php
    $this->Breadcrumbs->add('<i class="fa fa-users"></i> <span>Users</span>', ['controller' => 'Users', 'action' => 'index'], ['escape' => false]);
    $this->Breadcrumbs->add( '<i class="fa fa-user"></i> <span>View User</span>', ['controller' => 'Users', 'action' => 'view', $user->id], ['escape' => false]);
?>
<?= $this->element('row-header') ?>
    <div class="box-header with-border">
        <h3 class="box-title"><?= h($user->username) ?></h3>
    </div><!--End of box-header-->
    <div class="box-body">
        <table class="table table-bordered table-striped dataTable" role="grid">
            <tr>
                <th scope="row"><?= __('Username') ?></th>
                <td><?= h($user->username) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Password') ?></th>
                <td><?= h($user->password) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($user->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Role') ?></th>
                <td><?= h($user->role) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Created') ?></th>
                <td><?= h($user->created) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Modified') ?></th>
                <td><?= h($user->modified) ?></td>
            </tr>
        </table>
        <div class="box-footer">
            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
        </div>
    </div><!--End of box-body-->
<?= $this->element('row-footer') ?>
<?= $this->element('row-header') ?>
    <div class="box-header with-border">
        <h4 class="box-title"><?= __('Related Articles') ?></h4>
    </div><!--End of box-header-->
    <div class="box-body">
        <?php if (!empty($user->articles)): ?>
            <table class="table table-bordered table-striped dataTable" role="grid">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col"><?= __('Title') ?></th>
                    <th scope="col"><?= __('Slug') ?></th>
                    <th scope="col"><?= __('Body') ?></th>
                    <th scope="col"><?= __('Published') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($user->articles as $articles): ?>
                    <tr>
                        <td><?= h($articles->id) ?></td>
                        <td><?= h($articles->user_id) ?></td>
                        <td><?= h($articles->title) ?></td>
                        <td><?= h($articles->slug) ?></td>
                        <td><?= h($articles->body) ?></td>
                        <td><?= h($articles->published) ?></td>
                        <td><?= h($articles->created) ?></td>
                        <td><?= h($articles->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Articles', 'action' => 'view', $articles->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Articles', 'action' => 'edit', $articles->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articles', 'action' => 'delete', $articles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articles->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div><!--End of box-body-->
<?= $this->element('row-footer') ?>