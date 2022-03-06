<div>
    <label for="name" class="block mr-2 font-bold">Nome: </label>
    <input type="text" placeholder="Nome" name="name" id="name"
        class="border border-gray-400 p-3 w-full rounded outline-none focus:border-blue-500"
        value="<?php echo e(isset($user->name) ? $user->name : ''); ?>">
        <?php if($errors->has('name')): ?>
        <div class="text-red-500 ">
            <?php echo e($errors->first('name')); ?>

        </div>
    <?php endif; ?>
</div>

<div>
    <label for="name" class="block mr-2">E-mail: </label>
    <input type="email" placeholder="E-mail" name="email" id="email"
        class="border border-gray-400 p-3 w-full rounded outline-none focus:border-blue-500"
        value="<?php echo e(isset($user->email) ? $user->email : ''); ?>">
        <?php if($errors->has('email')): ?>
        <div class="text-red-500 ">
            <?php echo e($errors->first('email')); ?>

        </div>
    <?php endif; ?>
</div>

<div>
    <label for="name" class="block mr-2">Administrador: </label>
    <select name="isAdmin"
        class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
        <option value="y" value="<?php echo e(isset($user->isAdmin) && $user->isAdmin == 'y' ? 'selected' : ''); ?>">Sim</option>
        <option value="n" value="<?php echo e(isset($user->isAdmin) && $user->isAdmin == 'n' ? 'selected' : ''); ?>">Não</option>
    </select>
</div>

<div>
    <label for="name" class="block mr-2">Senha: </label>
    <input type="password" placeholder="Senha" name="password" id="password"
        class="border border-gray-400 p-3 w-full rounded outline-none focus:border-blue-500">
        <?php if($errors->has('password')): ?>
        <div class="text-red-500 ">
            <?php echo e($errors->first('password')); ?>

        </div>
    <?php endif; ?>
</div>

<div>
    <label for="name" class="block mr-2">Confirme a senha: </label>
    <input type="password" placeholder="Confirmação de senha" name="password_confirmation" id="password_confirmation"
        class="border border-gray-400 p-3 w-full rounded outline-none focus:border-blue-500">
        <?php if($errors->has('password_confirmation')): ?>
        <div class="text-red-500 ">
            <?php echo e($errors->first('password_confirmation')); ?>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/claudio/repositorios/topdevelopers/resources/views/user/_form.blade.php ENDPATH**/ ?>