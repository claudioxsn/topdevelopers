@extends('template.template')
@section('conteudo')
    <div class="bg-white max-h-screen flex items-center justify-center">

        <div class="bg-gray-200 p-16 rounded shadow-2x1 w-2/3">
            @if (Session::get('success'))
                <div class=" text-green-500" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::get('error'))
                <div class=" text-red-500" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif

            <h2 class="text-3x1 font-bold mb-10 text-black"> Editar de Usuário</h2>
            <form method="POST" action="{{ route('user.update') }}" class="space-y-6">
                @method('put')
                @csrf
                <input type="hidden" name="id" id="id" value="{{ $user->id }}">
                @include('user._form')
                <div>
                    <button type="submit"
                        class="block  items-center justify-center bg-green-400 hover:bg-green-500 p-4 rounded text-white">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
