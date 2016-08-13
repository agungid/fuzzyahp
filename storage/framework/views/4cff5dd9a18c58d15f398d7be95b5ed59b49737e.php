

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><strong><?php echo e($title); ?></strong></div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Toyota</th>
                                <th>Honda</th>
                                <th>Isuzu</th>
                                <th>Nissan</th>
                            </tr>
                        </thead>
                        <?php
                            $toyota=0;
                            $honda=0;
                            $isuzu=0;
                            $nissan=0;
                        ?>
                        <tbody>
                            <?php for($i=0;$i<count($harga_alt); $i++): ?>
                                <tr>
                                    <td><?php echo e($data[$i]); ?></td>
                                    <td><?php echo e($harga_alt[$i]); ?></td>
                                    <?php $toyota+=($harga_alt[$i]*$alt_kriteria[$i]); ?>
                                    <td><?php echo e($bbm_alt[$i]); ?></td>
                                    <?php $honda+=($bbm_alt[$i]*$alt_kriteria[$i]); ?>
                                    <td><?php echo e($warna_alt[$i]); ?></td>
                                    <?php $isuzu+=($warna_alt[$i]*$alt_kriteria[$i]); ?>
                                    <td><?php echo e($cc_alt[$i]); ?></td>
                                    <?php $nissan+=($cc_alt[$i]*$alt_kriteria[$i]); ?>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                            <td>W</td>
                            <?php for($i=0;$i<count($harga_alt); $i++): ?>
                               <td><?php echo e($alt_kriteria[$i]); ?></td>
                            <?php endfor; ?>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2">Skor Total Setiap Alternatif</th>
                                <th>Rangking</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $data_akhir = [
                                    'toyota'=>$toyota, 'honda'=>$honda, 'isuzu'=>$isuzu, 'nissan'=>$nissan
                                ];
                                /*$tmp=0;
                                for ($z=0; $z<count($data_akhir) ; $z++) { 
                                    if ($data_akhir[$z]>$data_akhir[$z]+1) {
                                        $tmp=$data_akhir[$z];
                                    }
                                }*/
                                rsort($data_akhir);
                                $datax=['Isuzu','Honda','Toyota','Nissan'];
                            ?>
                            <?php for($i=0;$i<count($data_akhir);$i++): ?>
                                <tr>
                                    <td><?php echo e($datax[$i]); ?></td>
                                    <td><?php echo e(round($data_akhir[$i],6)); ?></td>
                                    <td><?php echo e($i+1); ?></td>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
                <script>
                    $(document).ready(function(){
                        chart1 = new Highcharts.Chart({
                             chart: {
                                renderTo: 'show-chart',
                                type: 'column'
                             },
                             title: {
                                text: 'Grafik Penjualan '
                             },
                             xAxis: {
                                categories: ['merek']
                             },
                             yAxis: {
                                title: {
                                   text: 'Skor Total Alternatif'
                                }
                             },
                            series:             
                                [
                                    <?php for($i=0;$i<count($data_akhir);$i++): ?>
                                    {
                                        name: '<?php echo $datax[$i]; ?>',
                                        data: [<?php echo round($data_akhir[$i],6); ?>]
                                    },
                                    <?php endfor; ?>
                                ]
                          });
                    });
                </script>
                <div id="show-chart">dcsd</div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>