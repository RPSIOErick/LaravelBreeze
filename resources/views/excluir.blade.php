<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Clientes') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 text-gray-900">
                    <!-- Título do container -->
                    <center>
                    <div id="sign-form-title"> {{ __("Formulário de Edição") }} </div>

                    <br>

                    <!-- Formulário em Tailwind -->
                    <form class="w-full max-w-lg" action="{{url("/delete/$cliente->id")}}" method="POST">
                        @csrf
                        @method('delete')

                        <span> Deseja realmente excluir os registros? </span>

                        <div id="client-data-delete">
                            <div class="w-full px-3">
                                <input class="text-center appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-nome" type="text" name="nome" value="{{$cliente->nome}}" disabled>
                            </div>
                        </div>
                        

                        <!-- Button de Cadastro -->
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" id="sign-btn" type="submit">
                            Excluir
                        </button>
                        <!-- Fim do Button de Cadastro -->

                    </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
