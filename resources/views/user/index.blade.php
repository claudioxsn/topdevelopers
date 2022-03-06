@extends('template.template')
@section('conteudo')
    <div class="bg-white max-h-screen  flex items-center justify-center">
        <div class="bg-gray-200 p-16  rounded shadow-2x1 w-2/3">
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
                                    @foreach ($users as $u)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $u->name }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $u->email }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $u->isAdmin == 'y' ? 'Sim' : 'Não' }}
                                            </td>
                                            <td class="py-4 px-6 text-sm  dark:text-gray-400">
                                                @if (Auth::user()->isAdmin)
                                                    <a href="{{ route('user.edit', ['id' => $u->id]) }}"
                                                        class="  items-center justify-center bg-blue-500 hover:bg-blue-600 p-2 rounded text-white">
                                                        Editar </a>
                                                    <a href="{{ route('user.delete', ['id' => $u->id]) }}"
                                                        class="  items-center justify-center bg-red-500 hover:bg-red-600 p-2 rounded text-white">
                                                        Excluir </a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
