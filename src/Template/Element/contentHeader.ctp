<section class="content-header">
    <?php $this->Breadcrumbs->prepend('<i class="fa fa-dashboard"></i> <span>Home</span>', ['controller' => 'Articles', 'action' => 'index'], ['escape' => false]); ?>
    <h1>
        <?= $this->fetch('title') ?>
    </h1>
    <?= $this->Breadcrumbs->render(
        ['class' => 'breadcrumb']
    ) ?>
</section>