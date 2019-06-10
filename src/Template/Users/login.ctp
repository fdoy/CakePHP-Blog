<?= $this->element('row-header') ?>
<?= $this->Flash->render() ?>
    <div class="box-header with-border">
        <h3 class="box-title"><?= __('Login') ?></h3>
    </div>
    <div class="box-body" role="grid">
        <?= $this->Form->create() ?>
        <?= $this->Form->control('username', ['class' => 'form-control form-group']) ?>
        <?= $this->Form->control('password', ['class' => 'form-control form-group']) ?>
    </div>
    <div class="box-footer">
        <?= $this->Form->button(__('Login'), ['class' => 'btn btn-primary']); ?>
        <?= $this->Form->end() ?>
    </div>
<?= $this->element('row-footer') ?>