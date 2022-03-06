<?php $__env->startSection('conteudo'); ?>
    <div class="bg-white max-h-screen flex items-center justify-center">

        <div class="bg-gray-200 p-16 rounded shadow-2x1 w-2/3">
            <?php if(Session::get('success')): ?>
                <div class=" text-green-500" role="alert">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <?php if(Session::get('error')): ?>
                <div class=" text-red-500" role="alert">
                    <?php echo e(Session::get('error')); ?>

                </div>
            <?php endif; ?>

            <h2 class="text-3x1 font-bold mb-10 text-black"> Editar de Usuário</h2>
            <form method="POST" action="<?php echo e(route('user.update')); ?>" class="space-y-6">
                <?php echo method_field('put'); ?>
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" id="id" value="<?php echo e($user->id); ?>">
                <?php echo $__env->make('user._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div>
                    <button type="submit"
                        class="block  items-center justify-center bg-green-400 hover:bg-green-500 p-4 rounded text-white">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/claudio/repositorios/topdevelopers/resources/views/user/edit.blade.php ENDPATH**/ ?>