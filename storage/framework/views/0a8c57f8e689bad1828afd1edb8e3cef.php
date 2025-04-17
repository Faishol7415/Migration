<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-3">
                <h5 class="card-title text-center">Data Dosen</h5>
                <p class="text-center">Informasi lengkap dosen.</p>
                <div class="row">
                    <div class="col-sm-8 col-md-10 m-auto">
                        <ol class="list-group">
                            <?php
                            foreach ($KurirDataDosen as $NamaDosen) {
                                echo "<li class=\"list-group-item\"> $NamaDosen </li>";
                            }
                            ?>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\SMT 4\PEMROGRAMAN FRAMEWORK P TOPEK\tugas 4 blade pemisah elemen\resources\views/isi/content_dosen.blade.php ENDPATH**/ ?>