<?php $__env->startSection('conteudo'); ?>
    <div class="bg-white min-h-screen  flex items-center justify-center">
        <div class="bg-gray-200 p-16 rounded shadow-2x1 w-2/3">
            <form action="<?php echo e(route('developers.search')); ?>" method="get" class="space-y-6">
                <?php echo csrf_field(); ?>

                <label for="language" class="block mr-2 font-bold">Linguagem de Programação:</label>
                <input type="text" name="language" id="language" placeholder="Ex.: Javascript"
                    class="border border-gray-400 p-3 w-full rounded outline-none focus:border-blue-500">

                <label for="language" class="block mr-2 font-bold">Criado depois de:</label>
                <input type="date" name="createdAfter" id="createdAfter"
                    class="border border-gray-400 p-3 w-full rounded outline-none focus:border-blue-500">

                <label for="language" class="block mr-2 font-bold">Quantidade de seguidores maior que:</label>
                <input type="number" name="followersMaior" id="followersMaior" placeholder="Ex.: 10"
                    class="border border-gray-400 p-3 w-full rounded outline-none focus:border-blue-500">

                <label for="language" class="block mr-2 font-bold">Quantidade de repositórios maior que:</label>
                <input type="number" name="reposMaior" id="reposMaior" placeholder="10"
                    class="border border-gray-400 p-3 w-full rounded outline-none focus:border-blue-500">

                <label for="language" class="block mr-2 font-bold">País:</label>
                <input type="text" name="location" id="location" placeholder="Ex.: Brazil"
                    class="border border-gray-400 p-3 w-full rounded outline-none focus:border-blue-500">

                <button
                    class="block  items-center justify-center bg-green-400 hover:bg-green-500 p-2 rounded text-white">Pesquisar</button>
            </form>

            <?php if(isset($devs)): ?>
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden shadow-md sm:rounded-lg">
                                <table class="min-w-full">
                                    <thead class="bg-gray-300 dark:bg-gray-800">
                                        <tr>
                                            <th scope="col"
                                                class="py-5 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                ID</th>
                                            <th scope="col"
                                                class="py-5 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Usuário</th>
                                            <th scope="col"
                                                class="py-5 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Links</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $devs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <td class="py-5 px-6"><?php echo e($d->id); ?></td>
                                                <td class="py-5 px-6"><?php echo e($d->login); ?></td>
                                                <td class="py-5 px-6">
                                                    <a href="<?php echo e($d->url); ?>" target="_blank"
                                                        class="  items-center justify-center bg-green-500 hover:bg-green-600 p-2 rounded text-white">Perfil</a>
                                                    <a href="<?php echo e($d->repos_url); ?>" target="_blank"
                                                        class="  items-center justify-center bg-blue-500 hover:bg-blue-600 p-2 rounded text-white">Repositórios</a>
                                                    <a href=" <?php echo e($d->followers_url); ?>" target="_blank"
                                                        class="  items-center justify-center bg-yellow-500 hover:bg-yellow-600 p-2 rounded text-white">Seguidores</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php echo e($devs->links()); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/claudio/repositorios/topdevelopers/resources/views/developers/index.blade.php ENDPATH**/ ?>