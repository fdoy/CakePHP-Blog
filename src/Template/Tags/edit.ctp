<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
?>
<?php
    $this->Breadcrumbs->add('<i class="fa fa-tags"></i> <span>Tags</span>', ['controller' => 'Tags', 'action' => 'index'], ['escape' => false]);
    $this->Breadcrumbs->add( '<i class="fa fa-sticky-note"></i> <span>View Tag</span>', ['controller' => 'Tags', 'action' => 'view', $tag->id], ['escape' => false]);
    $this->Breadcrumbs->add( '<i class="fa fa-pencil-square-o"></i> <span>Edit Tag</span>', ['controller' => 'Tags', 'action' => 'edit', $tag->id], ['escape' => false]);
?>
<?= $this->element('row-header') ?>
    <div class="box-header with-border">
        <h3 class="box-title"><?= __('Edit Tag') ?></h3>
    </div>
    <div class="box-body" role="grid">
        <?= $this->Form->create($tag) ?>
        <?= $this->Form->control('title', ['class' => 'form-group form-control']) ?>
        <?= $this->Form->control('articles._ids', ['options' => $articles, 'class' => 'form-group form-control']) ?>
    </div><!--End of box-body-->
    <div class="box-footer">
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div><!--End of box-footer-->
<?= $this->element('row-footer') ?>
