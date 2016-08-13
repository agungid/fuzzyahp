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
                    			<th></th>
                    			<th>Toyota</th>
                    			<th>Honda</th>
                    			<th>Isuzu</th>
                    			<th>Nissan</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                			<?php foreach($datas as $data): ?>
                				<tr>
                					<td><?php echo e($data['nama']); ?></td>
                					<td><?php echo e($data['xenia']); ?></td>
                					<td><?php echo e($data['luxio']); ?></td>
                					<td><?php echo e($data['terios']); ?></td>
                					<td><?php echo e($data['ayla']); ?></td>
                				</tr>
                			<?php endforeach; ?>
                    	</tbody>
                    </table>

                    <?php /*Perhitungan Lower*/ ?>
                    <div class="col-md-4">
                    	<div class="panel panel-default">
			                <div class="panel-heading"><strong>Lower</strong></div>
			                <div class="panel-body">
			                	<table class="table table-hover">
			                    	<thead>
			                    		<tr>
			                    			<th></th>
			                    			<th>Toyota</th>
			                    			<th>Honda</th>
			                    			<th>Isuzu</th>
			                    			<th>Nissan</th>
			                    		</tr>
			                    	</thead>
			                    	<tbody>
			                			<?php foreach($datas as $data): ?>
			                				<tr>
			                					<td><?php echo e($data['nama']); ?></td>
			                					<td><?php echo e(Hitung::sekalaFuzzyLower($data['xenia'])); ?></td>
			                					<td><?php echo e(Hitung::sekalaFuzzyLower($data['luxio'])); ?></td>
			                					<td><?php echo e(Hitung::sekalaFuzzyLower($data['terios'])); ?></td>
			                					<td><?php echo e(Hitung::sekalaFuzzyLower($data['ayla'])); ?></td>
			                				</tr>
			                			<?php endforeach; ?>
			                    	</tbody>
			                    </table>
			                </div>
			            </div>
                    </div>

                    <?php /*Perhitungan Middle*/ ?>
                    <div class="col-md-4">
                    	<div class="panel panel-default">
			                <div class="panel-heading"><strong>Middle</strong></div>
			                <div class="panel-body">
			                	<table class="table table-hover">
			                    	<thead>
			                    		<tr>
			                    			<th></th>
			                    			<th>Toyota</th>
			                    			<th>Honda</th>
			                    			<th>Isuzu</th>
			                    			<th>Nissan</th>
			                    		</tr>
			                    	</thead>
			                    	<tbody>
			                			<?php foreach($datas as $data): ?>
			                				<tr>
			                					<td><?php echo e($data['nama']); ?></td>
			                					<td><?php echo e(Hitung::sekalaFuzzyMiddle($data['xenia'])); ?></td>
			                					<td><?php echo e(Hitung::sekalaFuzzyMiddle($data['luxio'])); ?></td>
			                					<td><?php echo e(Hitung::sekalaFuzzyMiddle($data['terios'])); ?></td>
			                					<td><?php echo e(Hitung::sekalaFuzzyMiddle($data['ayla'])); ?></td>
			                				</tr>
			                			<?php endforeach; ?>
			                    	</tbody>
			                    </table>
			                </div>
			            </div>
                    </div>

                    <?php /*Perhitungan Upper*/ ?>
                    <div class="col-md-4">
                    	<div class="panel panel-default">
			                <div class="panel-heading"><strong>Upper</strong></div>
			                <div class="panel-body">
			                	<table class="table table-hover">
			                    	<thead>
			                    		<tr>
			                    			<th></th>
			                    			<th>Toyota</th>
			                    			<th>Honda</th>
			                    			<th>Isuzu</th>
			                    			<th>Nissan</th>
			                    		</tr>
			                    	</thead>
			                    	<tbody>
			                			<?php foreach($datas as $data): ?>
			                				<tr>
			                					<td><?php echo e($data['nama']); ?></td>
			                					<td><?php echo e(Hitung::sekalaFuzzyUpper($data['xenia'])); ?></td>
			                					<td><?php echo e(Hitung::sekalaFuzzyUpper($data['luxio'])); ?></td>
			                					<td><?php echo e(Hitung::sekalaFuzzyUpper($data['terios'])); ?></td>
			                					<td><?php echo e(Hitung::sekalaFuzzyUpper($data['ayla'])); ?></td>
			                				</tr>
			                			<?php endforeach; ?>
			                    	</tbody>
			                    </table>
			                </div>
			            </div>
                    </div>

                    <?php /* SIGMA MKJ*/ ?>
                    <?php
                    	$mkjl=0;
                    	$mkjm=0;
                    	$mkju=0;
                    ?>
                    <?php /*SIGMA*/ ?>

                    <table class="table table-hover">
                    	<tbody>
                    		<?php for($i=0; $i<count($title_sigma); $i++): ?>
                    			<tr>
                					<td><?php echo e($title_sigma[$i]); ?></td>
                					<?php $mkjl+=$m1L[$i]; ?>
                					<td><?php echo e($m1L[$i]); ?></td>

                					<?php $mkjm+=$m1M[$i]; ?>
                					<td><?php echo e($m1M[$i]); ?></td>

                					<?php $mkju+=$m1U[$i]; ?>
                					<td><?php echo e($m1U[$i]); ?></td>
                				</tr>
                    		<?php endfor; ?>
                    	</tbody>
                    </table>
                    <hr>
                    <table class="table table-hover">
                    	<tbody>
                    		<tr>
                    			<td>SIGMA MKJ</td>
                    			<td><?php echo e(1/$mkju); ?></td>
                    			<td><?php echo e(1/$mkjm); ?></td>
                    			<td><?php echo e(1/$mkjl); ?></td>
                			</tr>
                    	</tbody>
                    </table>
                    <?php /*Hasil 3*/ ?>
                    <hr>
                    <table class="table table-hover">
                    	<thead>
                    		<tr>
                    			<th></th>
                    			<th>Lower</th>
                    			<th>Middle</th>
                    			<th>Upper</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                			<?php for($i=0; $i<count($title_sigma); $i++): ?>
                    			<tr>
                					<td>S<?php echo e($i+1); ?></td>
                					<td><?php echo e(round($m1L[$i]*(1/$mkju),6)); ?></td>
                					<td><?php echo e(round($m1M[$i]*(1/$mkjm),6)); ?></td>
                					<td><?php echo e(round($m1U[$i]*(1/$mkjl),6)); ?></td>
                				</tr>
                    		<?php endfor; ?>
                    	</tbody>
                    </table>
                    <hr>
                    <?php /*Table Vektor*/ ?>
                    <h3>Table Vektor</h3>
                    <?php
                        $vek_s1=[];
                        $vek_s2=[];
                        $vek_s3=[];
                        $vek_s4=[];
                        $vek_min=[];
                    ?>
                    <table class="table table-hover">
                    	<thead>
                    		<tr>
                    			<th>v</th>
                    			<th>s1>=</th>
                    			<th>s2>=</th>
                    			<th>s3>=</th>
                    			<th>s4>=</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                			<?php $data_vektor=[] ?>
                			<?php for($i=0; $i<count($title_sigma); $i++): ?>
                					<?php
                						$data_vektor[]=[
                							round($m1L[$i]*(1/$mkju),6),
                							round($m1M[$i]*(1/$mkjm),6),
                							round($m1U[$i]*(1/$mkjl),6)
                						];
                					?>
                    		<?php endfor; ?>
                    		<tr>
                    			<td>s1</td>
                                <td><?php echo e($vek_s1[1]=Hitung::table_vektor($data_vektor[0][1],$data_vektor[1][1],$data_vektor[0][0],$data_vektor[0][2])); ?></td>
                                <td><?php echo e($vek_s2[1]=Hitung::table_vektor($data_vektor[1][1],$data_vektor[0][1],$data_vektor[0][0],$data_vektor[1][2])); ?></td>
                                <td><?php echo e($vek_s3[1]=Hitung::table_vektor($data_vektor[2][1],$data_vektor[0][1],$data_vektor[0][0],$data_vektor[2][2])); ?></td>
                                <td><?php echo e($vek_s4[1]=Hitung::table_vektor($data_vektor[3][1],$data_vektor[0][1],$data_vektor[0][0],$data_vektor[3][2])); ?></td>
                    		</tr>
                            <tr>
                                <td>s2</td>
                                <td><?php echo e($vek_s1[2]=Hitung::table_vektor($data_vektor[0][1],$data_vektor[1][1],$data_vektor[1][0],$data_vektor[0][2])); ?></td>
                                <td><?php echo e($vek_s2[2]=Hitung::table_vektor($data_vektor[1][1],$data_vektor[1][1],$data_vektor[1][0],$data_vektor[1][2])); ?></td>
                                <td><?php echo e($vek_s3[2]=Hitung::table_vektor($data_vektor[2][1],$data_vektor[1][1],$data_vektor[1][0],$data_vektor[2][2])); ?></td>
                                <td><?php echo e($vek_s4[2]=Hitung::table_vektor($data_vektor[3][1],$data_vektor[1][1],$data_vektor[1][0],$data_vektor[3][2])); ?></td>
                            </tr>
                            <tr>
                                <td>s3</td>
                                <td><?php echo e($vek_s1[3]=Hitung::table_vektor($data_vektor[0][1],$data_vektor[2][1],$data_vektor[2][0],$data_vektor[0][2])); ?></td>
                                <td><?php echo e($vek_s2[3]=Hitung::table_vektor($data_vektor[1][1],$data_vektor[2][1],$data_vektor[2][0],$data_vektor[1][2])); ?></td>
                                <td><?php echo e($vek_s3[3]=Hitung::table_vektor($data_vektor[2][1],$data_vektor[2][1],$data_vektor[2][0],$data_vektor[2][2])); ?></td>
                                <td><?php echo e($vek_s4[3]=Hitung::table_vektor($data_vektor[3][1],$data_vektor[2][1],$data_vektor[2][0],$data_vektor[3][2])); ?></td>
                            </tr>
                            <tr>
                                <td>s4</td>
                                <td><?php echo e($vek_s1[4]=Hitung::table_vektor($data_vektor[0][1],$data_vektor[3][1],$data_vektor[3][0],$data_vektor[0][2])); ?></td>
                                <td><?php echo e($vek_s2[4]=Hitung::table_vektor($data_vektor[1][1],$data_vektor[3][1],$data_vektor[3][0],$data_vektor[1][2])); ?></td>
                                <td><?php echo e($vek_s3[4]=Hitung::table_vektor($data_vektor[2][1],$data_vektor[3][1],$data_vektor[3][0],$data_vektor[2][2])); ?></td>
                                <td><?php echo e($vek_s4[4]=Hitung::table_vektor($data_vektor[3][1],$data_vektor[3][1],$data_vektor[3][0],$data_vektor[3][2])); ?></td>
                            </tr>
                            <tr style="background:#eaeaea">
                                <td>MIN</td>
                                <td><?php echo e($vek_min[0]=MIN($vek_s1)); ?></td>
                                <td><?php echo e($vek_min[1]=MIN($vek_s2)); ?></td>
                                <td><?php echo e($vek_min[2]=MIN($vek_s3)); ?></td>
                                <td><?php echo e($vek_min[3]=MIN($vek_s4)); ?></td>
                            </tr>
                    	</tbody>
                    </table>
                    
                    <h3>Table Bobot</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>D (s1)</th>
                                <th>D (s2>)</th>
                                <th>D (s3)</th>
                                <th>D (s4)</th>
                                <th>TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>W</td>
                                <?php $total=0; ?>
                                <?php foreach($vek_min as $bobot): ?>
                                    <td><?php echo e($bobot); ?></td>
                                    <?php $total +=$bobot; ?>
                                <?php endforeach; ?>
                                <td><?php echo e($total); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>Table Bobot Normalisasi</h3>
                    <?php $bbm_alt=[]; ?>
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>W'</td>
                                <?php foreach($vek_min as $bobot): ?>
                                    <td><?php echo e(round($bobot/$total,6)); ?></td>
                                    <?php $bbm_alt[]=round($bobot/$total,6); ?>
                                <?php endforeach; ?>
                            </tr>
                        </tbody>
                    </table>
                    <?php Session::put('bbm_alt',$bbm_alt); ?> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>