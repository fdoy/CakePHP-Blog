<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
use Cake\Utility\Hash;
use Cake\Utility\Text;
?>
<?php
    $this->Breadcrumbs->add('<i class="fa fa-book"></i> <span>Articles</span>', ['controller' => 'Articles', 'action' => 'index'], ['escape' => false]);
    $this->Breadcrumbs->add('<i class="fa fa-file-text"></i> <span>View Article</span>', ['controller' => 'Articles', 'action' => 'view', $article->id], ['escape' => false]);
?>
<?= $this->element('row-header') ?>
    <div class="box-header with-border">
        <h3 class="box-title"><?= h($article->title) ?></h3>
    </div>
    <div class="box-body">
        <table class="table table-bordered table-striped dataTable" role="grid">
            <tr>
                <th scope="row"><?= __('User') ?></th>
                <td><?= $article->has('user') ? $this->Html->link($article->user->id, ['controller' => 'Users', 'action' => 'view', $article->user->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Title') ?></th>
                <td><?= h($article->title) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Slug') ?></th>
                <td><?= h($article->slug) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($article->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Created') ?></th>
                <td><?= h($article->created) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Modified') ?></th>
                <td><?= h($article->modified) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Tags') ?></th>
                <td><?= Text::toList(Hash::extract($article, 'tags.{n}.title')) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Published') ?></th>
                <td><?= $article->published ? __('Yes') : __('No'); ?></td>
            </tr>
        </table>
    </div>
<?= $this->element('row-footer') ?>
<?= $this->element('row-header') ?>
    <div class="box-header with-border">
        <h4 class="box-title"><?= __('Body') ?></h4>
    </div>
    <div class="box-body">
        <?= $this->Text->autoParagraph(h($article->body)); ?>
    </div>
    <div class="box-footer">
        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->id]) ?>
    </div>
<?= $this->element('row-footer') ?>
<?= $this->element('row-header') ?>
    <div class="box-header with-border">
        <h4 class="box-title"><?= __('Related Tags') ?></h4>
    </div>
    <?php if (!empty($article->tags)): ?>
    <div class="box-body">
        <table class="table table-bordered table-striped dataTable" role="grid">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($article->tags as $tags): ?>
            <tr>
                <td><?= h($tags->id) ?></td>
                <td><?= h($tags->title) ?></td>
                <td><?= h($tags->created) ?></td>
                <td><?= h($tags->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div><!--End of box body-->
    <?php endif; ?>
<?= $this->element('row-footer') ?>
