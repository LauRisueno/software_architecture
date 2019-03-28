<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Users

    <div class="pull-right"><?php echo $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-sm']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('List'); ?></h3>

          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col">N°</th>
                  <th scope="col"><?= $this->Paginator->sort('ci',['label'=>'CI']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('name',['label'=>'Nombres']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('last_name',['label'=>'Apellidos']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('birthday',['label'=>'Fecha de Nacimiento']) ?></th>
                  <th scope="col"><?= $this->Paginator->sort('birthplace',['label'=>'Lugar de Nacimiento']) ?></th>
                  <th scope="col" class="actions text-center"><?= __('Acciones') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user): ?>
                <tr>
                  <td><?= $this->Number->format($user->id) ?></td>
                  <td><?= h($user->ci) ?></td>
                  <td><?= h($user->name) ?></td>
                  <td><?= h($user->last_name) ?></td>
                  <td><?= $this->Number->format($user->current_invoice) ?></td>
                  <td><?= h($user->birthday) ?></td>
                  <td><?= h($user->birthplace) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $user->id], ['escape'=>false,'class'=>'btn btn-info btn-sm']) ?>
                      <?= $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $user->id], ['escape'=>false,'class'=>'btn btn-warning btn-sm']) ?>
                      <?= $this->Form->postLink('<i class="fa fa-trash"></i>', ['action' => 'delete', $user->id], ['escape'=>false,'confirm' => __('Esta seguro de eliminar # {0}?', $user->id), 'class'=>'btn btn-danger btn-sm']) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
