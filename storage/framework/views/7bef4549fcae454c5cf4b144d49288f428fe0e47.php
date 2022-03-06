<?php $__env->startSection('conteudo'); ?>
    <div class="bg-white min-h-screen  flex items-center justify-center">
        <div class="bg-gray-200 p-16 rounded shadow-2x1 w-2/3">
            <?php if(Session::get('success')): ?>
                <div class=" col-md-10 alert alert-success" role="alert">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <?php if(Session::get('error')): ?>
                <div class=" col-md-10 alert alert-danger" role="alert">
                    <?php echo e(Session::get('error')); ?>

                </div>
            <?php endif; ?>
            <h2 class="text-3x1 font-bold mb-10 text-black"> Cadastro de Usuário</h2>
            <form method="POST" action="<?php echo e(route('user.store')); ?>" class="space-y-6">
                <?php echo csrf_field(); ?>

                <?php echo $__env->make('user._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div>
                    <button type="submit"
                        class="block  items-center justify-center bg-green-400 hover:bg-green-500 p-4 rounded text-white">Salvar</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/claudio/repositorios/topdevelopers/resources/views/user/create.blade.php ENDPATH**/ ?>