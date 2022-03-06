@extends('template.template')
@section('conteudo')
    <div class="bg-white min-h-screen  flex items-center justify-center">
        <div class="bg-gray-200 p-16 rounded shadow-2x1 w-2/3">
            <form action="{{ route('developers.search') }}" method="get" class="space-y-6">
                @csrf

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

            @isset($devs)
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
                                        @foreach ($devs as $d)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <td class="py-5 px-6">{{ $d->id }}</td>
                                                <td class="py-5 px-6">{{ $d->login }}</td>
                                                <td class="py-5 px-6">
                                                    <a href="{{ $d->url }}" target="_blank"
                                                        class="  items-center justify-center bg-green-500 hover:bg-green-600 p-2 rounded text-white">Perfil</a>
                                                    <a href="{{ $d->repos_url }}" target="_blank"
                                                        class="  items-center justify-center bg-blue-500 hover:bg-blue-600 p-2 rounded text-white">Repositórios</a>
                                                    <a href=" {{ $d->followers_url }}" target="_blank"
                                                        class="  items-center justify-center bg-yellow-500 hover:bg-yellow-600 p-2 rounded text-white">Seguidores</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{ $devs->links() }}
                </div>
            @endisset
        </div>
    </div>
@endsection
