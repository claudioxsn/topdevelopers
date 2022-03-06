@extends('template.template')
@section('conteudo')
    <div class="bg-white min-h-screen  flex items-center justify-center">
        <div class="bg-gray-200 p-16 rounded shadow-2x1 w-2/3">
            @if (Session::get('success'))
                <div class=" col-md-10 alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::get('error'))
                <div class=" col-md-10 alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif
            <h2 class="text-3x1 font-bold mb-10 text-black"> Cadastro de Usuário</h2>
            <form method="POST" action="{{ route('user.store') }}" class="space-y-6">
                @csrf

                @include('user._form')

                <div>
                    <button type="submit"
                        class="block  items-center justify-center bg-green-400 hover:bg-green-500 p-4 rounded text-white">Salvar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
