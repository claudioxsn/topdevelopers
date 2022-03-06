<?php $__env->startSection('conteudo'); ?>
    <div class="bg-white max-h-screen  flex items-center justify-center">
        <div class="bg-gray-200 p-16  rounded shadow-2x1 w-2/3">
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
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow-md sm:rounded-lg">
                            <table class="min-w-full ">
                                <thead class="bg-gray-300 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Nome
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            E-mail
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Admin
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Ações
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <?php echo e($u->name); ?>

                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <?php echo e($u->email); ?>

                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <?php echo e($u->isAdmin == 'y' ? 'Sim' : 'Não'); ?>

                                            </td>
                                            <td class="py-4 px-6 text-sm  dark:text-gray-400">
                                                <?php if(Auth::user()->isAdmin): ?>
                                                    <a href="<?php echo e(route('user.edit', ['id' => $u->id])); ?>"
                                                        class="  items-center justify-center bg-blue-500 hover:bg-blue-600 p-2 rounded text-white">
                                                        Editar </a>
                                                    <a href="<?php echo e(route('user.delete', ['id' => $u->id])); ?>"
                                                        class="  items-center justify-center bg-red-500 hover:bg-red-600 p-2 rounded text-white">
                                                        Excluir </a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo e($users->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/claudio/repositorios/topdevelopers/resources/views/user/index.blade.php ENDPATH**/ ?>