<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listar Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <center>
                    <div id="list-clients-title"> {{ __("Lista de Clientes Cadastrados") }} </div>

                    <div id="client-table-div">
                    <!-- Tabela de Clientes Cadastrados -->
                    <table class="table-fixed text-center" id="client-table">
                        <thead>
                            <tr>
                            <th class="w-1/4 px-4 py-2">Nome</th>
                            <th class="w-1/4 px-4 py-2">Endereço</th>
                            <th class="w-1/4 px-4 py-2">Bairro</th>
                            <th class="w-1/4 px-4 py-2">CEP</th>
                            <th class="w-1/2 px-10 py-2">Cidade</th>
                            <th class="w-1/4 px-4 py-2">Estado</th>
                            <th class="w-1/4 px-4 py-2">Editar</th>
                            <th class="w-1/4 px-4 py-2">Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                            <td class="border px-4 py-2" id="client-data"> {{$cliente->nome}} </td>
                            <td class="border px-4 py-2" id="client-data"> {{$cliente->endereco}} </td>
                            <td class="border px-4 py-2" id="client-data"> {{$cliente->bairro}} </td>
                            <td class="border px-4 py-2" id="client-data"> {{$cliente->cep}} </td>
                            <td class="border px-4 py-2" id="client-data"> {{$cliente->cidade}} </td>
                            <td class="border px-4 py-2" id="client-data-state"> {{$cliente->estado}} </td>
                            
                            <!-- Gerenciamento de Cliente -->
                            <td class="border-0 px-4 py-2" id="client-data">
                                <a href="{{url("/editar/$cliente->id")}}"> <ion-icon name="create-outline" id="client-op-icon-edit"></ion-icon> </a>
                            </td>
                            <td class="border-0 px-4 py-2" id="client-data">
                                <a href="{{url("/excluir/$cliente->id")}}"> <ion-icon name="trash-bin-outline" id="client-op-icon-trash"></ion-icon> </a>
                            </td>
                            <!-- Fim do Gerenciamento de Cliente -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Fim da Tabela de Clientes Cadastrados -->
                    </div>
                </div>
                </center>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</x-app-layout>
