@vite(['resources/css/app.css', 'resources/js/app.js'])

{{-- @if (count($posts))
    @foreach ($posts as $post)
        <h2>{{ $post->titulo }}</h2>
        <p>{{ $post->descricao }}</p>
        <small> {{ $post->created_at->format('d/M/Y') }}</small>
        <hr>
    @endforeach
@else
    <h2>Nenhum post encontrado</h2>
@endif --}}
<div class="container mx-auto py-10">

    <div class="grid grid-cols-4 gap-5">

        @forelse ($posts as $post)
            <div class="border rounded-xl p-5">

                <h2>{{ $post->titulo }}</h2>
                <p>{{ $post->descricao }}</p>
                <small> {{ $post->created_at->format('d/M/Y') }}</small>
                <a href="/posts/{{ $post->slug }}">
                    <span class="mt-4 text-blue-600 hover:underline block">
                        Ver Post
                    </span>
                </a>
            </div>
        @empty
            <h2>Nenhum post encontrado</h2>
        @endforelse
    </div>

    {{ $posts->links() }}
</div>
