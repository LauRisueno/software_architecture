<section class="content-header">
  <h1>
    User
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row">CI</dt>
            <dd><?= h($user->ci) ?></dd>
            <dt scope="row">Nombres</dt>
            <dd><?= h($user->name) ?></dd>
            <dt scope="row">Apellidos</dt>
            <dd><?= h($user->last_name) ?></dd>
            <dt scope="row">Lugar de Nacimiento</dt>
            <dd><?= h($user->birthplace) ?></dd>
            <dt scope="row">Fecha de Nacimiento</dt>
            <dd><?= h($user->birthday) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
