<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gerenciamento de Posts') }}
        </h2>
    </x-slot>
    <div class="main_container">


        <button class="btn_info btn" onclick="window.location.href='{{ route('admin.posts.create') }}'">
            Novo post
        </button>
        <div class="my-5">
            <div class="grid grid-cols-12 gap-1 text-white">
                <strong class="col-span-1">Id</strong>
                <strong class="col-span-5">Título</strong>
                <strong class="col-span-2">Data de criação</strong>
                <strong class="col-span-1">Ativo</strong>
                <strong class="col-span-3">Opções</strong>
            </div>
            <hr>
            @forelse ($posts as $post)
                <div class="grid grid-cols-12 gap-1 py-1 border-b border-zinc-800 items-center text-white">
                    <h2 class="col-span-1">{{ $post->id }}</h2>
                    <h2 class="col-span-5">{{ $post->titulo }}</h2>
                    <h2 class="col-span-2">{{ $post->created_at->format('d/m/Y H:i:s') }}</h2>
                    <h2 class="col-span-1 {{ $post->ativo == 1 ? 'text-green-500' : 'text-red-500' }} ">
                        {{ $post->ativo == 1 ? 'Ativo' : 'Inativo' }}</h2>
                    <h2 class="col-span-3 grid grid-cols-2 gap-2">
                        <button class="btn_info btn">
                            Editar
                        </button>
                        <button class="btn_danger btn">
                            Deletar
                        </button>
                    </h2>
                </div>
            @empty
                <h2>Não há posts</h2>
            @endforelse
        </div>
        {{ $posts->links() }}
    </div>

</x-app-layout>
