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

<body >
    <div class="bg-gray-500 min-h-screen flex items-center justify-center">
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="<?php echo e(route('login')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        E-mail
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="text" name="email" placeholder="seuemail@email.com">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Senha
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" name="password" type="password" placeholder="******************">
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Entrar
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
<?php /**PATH /home/claudio/repositorios/topdevelopers/resources/views/layouts/app.blade.php ENDPATH**/ ?>