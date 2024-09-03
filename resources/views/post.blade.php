<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto p-6 bg-white shadow-lg mt-6 rounded-lg">
        <article>
            <h2 class="text-2xl font-bold mb-4">{{ $post['title'] }}</h2>
            <p class="text-gray-500 text-sm mb-4">
                {{-- cara 1  --}}
                Published on {{ $post->created_at ? $post->created_at->diffForHumans() : 'waktu tidak tersedia' }}
                {{-- carra 2 --}}
                {{-- Published on {{ $post->created_at ? $post->created_at->format('j F Y') : 'waktu tidak tersedia' }}  --}}
            {{ $post['author'] }}</p>
            <a href="/posts">&laquo; back to blog </a>
            <img src="https://via.placeholder.com/800x400" alt="Tailwind CSS" class="w-full h-auto rounded-lg mb-6">

            <p class="mb-4">
                {{$post['body']}}
            </p>
        </article>
    </main>


</x-layout>
