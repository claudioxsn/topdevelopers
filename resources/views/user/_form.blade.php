<div>
    <label for="name" class="block mr-2 font-bold">Nome: </label>
    <input type="text" placeholder="Nome" name="name" id="name"
        class="border border-gray-400 p-3 w-full rounded outline-none focus:border-blue-500"
        value="{{ isset($user->name) ? $user->name : '' }}">
        @if ($errors->has('name'))
        <div class="text-red-500 ">
            {{ $errors->first('name') }}
        </div>
    @endif
</div>

<div>
    <label for="name" class="block mr-2">E-mail: </label>
    <input type="email" placeholder="E-mail" name="email" id="email"
        class="border border-gray-400 p-3 w-full rounded outline-none focus:border-blue-500"
        value="{{ isset($user->email) ? $user->email : '' }}">
        @if ($errors->has('email'))
        <div class="text-red-500 ">
            {{ $errors->first('email') }}
        </div>
    @endif
</div>

<div>
    <label for="isAdmin" class="block mr-2">Administrador: </label>
    <select name="isAdmin"
        class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
        <option value="y" value="{{ isset($user->isAdmin) && $user->isAdmin == 'y' ? 'selected' : '' }}">Sim</option>
        <option value="n" value="{{ isset($user->isAdmin) && $user->isAdmin == 'n' ? 'selected' : '' }}">Não</option>
    </select>
</div>

<div>
    <label for="name" class="block mr-2">Senha: </label>
    <input type="password" placeholder="Senha" name="password" id="password"
        class="border border-gray-400 p-3 w-full rounded outline-none focus:border-blue-500">
        @if ($errors->has('password'))
        <div class="text-red-500 ">
            {{ $errors->first('password') }}
        </div>
    @endif
</div>

<div>
    <label for="name" class="block mr-2">Confirme a senha: </label>
    <input type="password" placeholder="Confirmação de senha" name="password_confirmation" id="password_confirmation"
        class="border border-gray-400 p-3 w-full rounded outline-none focus:border-blue-500">
        @if ($errors->has('password_confirmation'))
        <div class="text-red-500 ">
            {{ $errors->first('password_confirmation') }}
        </div>
    @endif
</div>
