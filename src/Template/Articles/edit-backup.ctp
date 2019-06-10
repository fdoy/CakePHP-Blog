<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<?= $this->element('sidebar-menu-header') ?>
<li class="header"><?= __('Actions') ?></li>
<li><?= $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $article->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]
    )
    ?></li>
<li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
<li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
<?= $this->element('sidebar-menu-footer') ?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><?= __('Edit Article') ?></h3>
    </div><!--End of box-header-->
    <div class="box-body" role="grid">
        <?= $this->Form->create($article) ?>
        <?= $this->Form->control('user_id', ['options' => $users, 'class' => 'form-control form-group'])?>
        <?= $this->Form->control('title', ['class' => 'form-control form-group']) ?>
        <?= $this->Form->control('slug', ['class' => 'form-control form-group']) ?>
        <?= $this->Form->control('body', ['class' => 'form-control form-group']) ?>
        <?= $this->Form->control('published', ['class' => 'checkbox', 'type' => 'checkbox']) ?>
        <?= $this->Form->control('tags._ids',
            ['options' => $tags,
                'class' => 'form-control form-group',
                'multiple' => true]) ?>
    </div><!--End of box-body-->
    <div class="box-footer">
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div><!--End of box-footer-->
</div><!--End of box-primary-->
