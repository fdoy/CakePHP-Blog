<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<?php
    $this->Breadcrumbs->add('<i class="fa fa-book"></i> <span>Articles</span>', ['controller' => 'Articles', 'action' => 'index'], ['escape' => false]);
    $this->Breadcrumbs->add('<i class="fa fa-file-text"></i> <span>View Article</span>', ['controller' => 'Articles', 'action' => 'view', $article->id], ['escape' => false]);
    $this->Breadcrumbs->add('<i class="fa fa-i-cursor"></i> <span>Edit Article</span>', ['controller' => 'Articles', 'action' => 'edit', $article->id], ['escape' => false]);
?>
<?= $this->element('row-header') ?>
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
<?= $this->element('row-footer') ?>
