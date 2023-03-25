<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gerenciamento de Posts - Novo Post') }}
        </h2>
    </x-slot>
    <div class="main_container">
        <div class="max-w-xl">
            <form method="POST" action="{{ route('admin.posts.store') }}">
                @csrf
                <div class="mb-6">
                    <label for="titulo" class="label">
                        Título
                    </label>
                    <input type="text" id="titulo" class="input_text" name="titulo" required>
                </div>
                <div class="mb-6">
                    <label for="descricao" class="label">
                        Descrição
                    </label>
                    <input type="text" id="descricao" class="input_text" name="descricao" required>
                </div>
                <div class="mb-6">
                    <label for="body" class="label">
                        Conteúdo
                    </label>
                    <input type="text" id="body" class="input_text" name="body" required>
                </div>

                <fieldset>
                    <legend class="sr-only">Countries</legend>

                    <div class="flex items-center mb-4">
                        <input id="ativo_1" type="radio" name="ativo" value="1" class="input_radio"
                            checked>
                        <label for="ativo_1"
                            class="label_radio">
                            Ativo
                        </label>
                    </div>

                    <div class="flex items-center mb-4">
                        <input id="ativo_2" type="radio" name="ativo" value="0" class="input_radio"
                            >
                        <label for="ativo_2"
                            class="label_radio">
                            Inativo
                        </label>
                    </div>

                </fieldset>

                <button class="btn btn_info">
                    Salvar
                </button>

            </form>
        </div>
    </div>

</x-app-layout>
