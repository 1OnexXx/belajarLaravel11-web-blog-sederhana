<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Main Content -->
    {{-- <main class="max-w-4xl mx-auto p-6 bg-white shadow-lg mt-6 rounded-lg">
        <article>
            <h2 class="text-2xl font-bold mb-4">{{ $post['title'] }}</h2>
            <p class="text-gray-500 text-sm mb-4">
                cara 1 
                Published on {{ $post->created_at ? $post->created_at->diffForHumans() : 'waktu tidak tersedia' }}
                carra 2
                Published on {{ $post->created_at ? $post->created_at->format('j F Y') : 'waktu tidak tersedia' }} 
                By 
            <a href="/authors/{{ $post->author->id }}" class="hover:underline">
                {{ $post->author->name }} 
            </a>  
        </p>
            <a href="/posts">&laquo; back to blog </a>
            <img src="https://via.placeholder.com/800x400" alt="Tailwind CSS" class="w-full h-auto rounded-lg mb-6">

            <p class="mb-4">
                {{$post['body']}}
            </p>
        </article>
    </main> --}}
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts" class="font-medium text-sm text-blue-600 hover:underline">&laquo; back to blog</a>
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="/authors/{{ $post->author->username }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white hover:underline">{{ $post->author->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400 ">
                                Category : 
                                <span class="bg-{{ $post->category->color }}-200 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                    <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                                    </svg>
                                <a href="/categories/{{ $post->category->slug }}">
                                    {{ $post->category->name }}
                                </a>
                                </span>
                                </p>
                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate
                                        datetime="2022-02-08" title="February 8th, 2022">
                                        
                                        Published on {{ $post->created_at ? $post->created_at->diffForHumans() : 'waktu tidak tersedia' }}
                                        {{-- carra 2
                                        Published on {{ $post->created_at ? $post->created_at->format('j F Y') : 'waktu tidak tersedia' }}  --}}
                                        By {{ $post->author->name }}
                                    </time></p>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}</h1>
                </header>
                <p>
                    {{ $post->body }}
                </p>

            </article>
        </div>
    </main>

</x-layout>
