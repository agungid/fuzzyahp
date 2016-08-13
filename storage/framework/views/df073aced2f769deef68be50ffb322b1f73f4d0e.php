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
                    			<th>Toyota</th>
                    			<th>Honda</th>
                    			<th>Isuzu</th>
                                <th>Nissan</th>
                    			<th width="7"></th>
                    		</tr>
                    	</thead>
                    	<tbody>

                			<?php /* <?php foreach($datas as $data): ?> */ ?>
                				<tr>
                                    <?php echo e(Form::model($datas, array('route' => array('warna.update', $datas->id),'method'=>'put'))); ?>

                                        <td><?php echo Form::text('xenia',null,['class'=>'form-control']); ?></td>
                                        <td><?php echo Form::text('luxio',null,['class'=>'form-control']); ?></td>
                                        <td><?php echo Form::text('terios',null,['class'=>'form-control']); ?></td>
                                        <td><?php echo Form::text('ayla',null,['class'=>'form-control']); ?></td>
                                        <td><input type="submit" class="btn btn-primary btn-sm" value="Perbaharui"></td>
                                    <?php echo e(Form::close()); ?>

                                </tr>
                			<?php /* <?php endforeach; ?> */ ?>
                    	</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>