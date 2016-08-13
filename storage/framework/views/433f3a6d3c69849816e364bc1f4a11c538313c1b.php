<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><strong><?php echo e($title); ?></strong></div>

                <div class="panel-body">
                    <table class="table table-hover">
                    	<thead>
                    		<tr>
                    			<th>Harga</th>
                    			<th>BBM</th>
                    			<th>Warna</th>
                                <th>CC</th>
                    			<th width="7"></th>
                    		</tr>
                    	</thead>
                    	<tbody>

                			<?php foreach($datas as $data): ?>
                				<tr>
                                    <?php echo e(Form::open(array(route('data.update',$data->id), 'method' => 'put'))); ?>

                                        <td><input type="text" class="form-control" name="harga" value="<?php echo e($data->harga); ?>"></td>
                                        <td><input type="text" class="form-control" name="bbm" value="<?php echo e($data->bbm); ?>"></td>
                                        <td><input type="text" class="form-control" name="warna" value="<?php echo e($data->warna); ?>"></td>
                                        <td><input type="text" class="form-control" name="cc" value="<?php echo e($data->cc); ?>"></td>
                                        <td><input type="submit" class="btn btn-primary btn-sm" value="Perbaharui"></td>
                                    <?php echo e(Form::close()); ?>

                                </tr>
                			<?php endforeach; ?>
                    	</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>