

<?php $__env->startSection('content'); ?>
<div>
    <div>
        <h1>Accomodation Information</h1><br>
    </div>
    <div class="center-table">
            <table>
            <tbody>
                <tr>
                    <td>Hostel</td>
                    <td>Block</td>
                    <td>level</td>
                    <td>Room Type</td>
                    <td>Room Number</td>
                    <td>Remark</td>
                    <td>Key</td>
                    <td>Key Number</td>
                </tr>
                <tr>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                    <td>--</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--<div>
        <?php for($i=1; $i<10 ;$i++): ?>
         <p><h2>The Values of I are <?php echo e($i); ?></h2></p>
         <?php endfor; ?>
       
    </div>-->
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aaron Mbuzi\Documents\php stuff\example-app-laravel\resources\views/accomodation.blade.php ENDPATH**/ ?>