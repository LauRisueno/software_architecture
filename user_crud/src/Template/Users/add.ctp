<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      User
      <small><?php echo __('Add'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($user, ['role' => 'form']); ?>
            <div class="box-body">
              <div class="col-md-4">
                  <?=  $this->Form->control('ci',['label'=>'CI']); ?>
              </div>
              <div class="col-md-4">
                <?= $this->Form->control('name',['label'=>'Nombres']);?>
              </div>
              <div class="col-md-4">
                <?= $this->Form->control('last_name',['label'=>'Apellidos']);?>
              </div>
              <div class="col-md-6">
                <?=$this->Form->control('birthday',['label'=>'Fecha de Nacimiento']); ?>
              </div>
              <div class="col-md-6">
                <?= $this->Form->control('birthplace',['label'=>'Lugar de Nacimiento']);?>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <?= $this->Form->button('<i class="fa fa-save"></i> '.__('Guardar')) ?>
              <?= $this->Html->link('<i class="fa fa-ban"></i> '.__('Cancelar'), ['action' => 'index'], ['escape' => false, 'class'=>'btn btn-default']) ?>
            </div>
          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>
