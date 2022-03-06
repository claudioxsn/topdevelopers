<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Developers Git</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    <!-- header/navigation -->
    <div x-data="{ isOpen: false }" class="flex justify-between p-4 bg-gray-600 lg:p-8">
        <div class="flex items-center">
            <h3 class="text-2xl font-bold text-white"><a href="<?php echo e(route('developers.index')); ?>">TopDevelopers</a></h3>
        </div>

        <!-- left header section -->
        <div class="flex items-center justify-between">
            <button @click="isOpen = !isOpen" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="hidden space-x-6 lg:inline-block">
                <a href="<?php echo e(route('developers.index')); ?>" class="text-base text-white ">Buscar Desenvolvedores</a>
                <?php if(Auth::user()->isAdmin == 'y'): ?>
                    <a href="<?php echo e(route('user.index')); ?>" class="text-base text-white ">Listar Usuários</a>
                <?php endif; ?>
                <?php if(Auth::user()->isAdmin == 'y'): ?>
                    <a href="<?php echo e(route('user.create')); ?>" class="text-base text-white ">Cadastrar Usuários</a>
                <?php endif; ?>
                <a href="<?php echo e(route('user.meusdados')); ?>" class="text-base text-white ">Meus Dados</a>
                <a href="<?php echo e(route('logout')); ?>" class="text-base text-white ">Sair</a>
            </div>

            <!-- mobile navbar -->
            <div class="mobile-navbar">
                <!-- navbar wrapper -->
                <div class="fixed left-0 w-full h-48 p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                    @click.away=" isOpen = false">
                    <div class="flex flex-col space-y-6">
                        <a href="<?php echo e(route('developers.index')); ?>" class="text-sm text-black">Buscar
                            Desenvolvedores</a>
                        <?php if(Auth::user()->isAdmin == 'y'): ?>
                            <a href="<?php echo e(route('user.index')); ?>" class="text-sm text-black">Listar Usuários</a>
                        <?php endif; ?>
                        <?php if(Auth::user()->isAdmin == 'y'): ?>
                            <a href="<?php echo e(route('user.create')); ?>" class="text-sm text-black">Cadastrar Usuários</a>
                        <?php endif; ?>
                        <a href="<?php echo e(route('user.index')); ?>" class="text-sm text-black">Meus Dados </a>
                        <a href="<?php echo e(route('logout')); ?>}" class="text-sm text-black">Sair</a>
                    </div>
                </div>
            </div>
            <!-- end mobile navbar -->
        </div>
        <!-- right header section -->

    </div>
    <?php echo $__env->yieldContent('conteudo'); ?>
</body>

</html>
<?php /**PATH /home/claudio/repositorios/topdevelopers/resources/views/template/template.blade.php ENDPATH**/ ?>