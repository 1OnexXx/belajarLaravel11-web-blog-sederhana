<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                @foreach ($posts as $post)
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <p class="text-gray-500">
                            {{-- {{ $post->created_at ? $post->created_at->format('j F Y') : 'Tanggal tidak tersedia' }} --}}
                            {{ $post->created_at ? $post->created_at->diffForHumans() : 'Tanggal tidak tersedia' }}
                        </p>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">horor</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <a href="/posts/{{ $post['slug'] }}">
                                <span class="absolute inset-0"></span>
                                {{ $post['title'] }}
                            </a>
                        </h3>
                        {{-- sudah ada elipsis jadi str::limit tidak terpake --}}
                        <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ Str::limit($post['body'],100) }}</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="h-10 w-10 rounded-full bg-gray-50">
                        <div class="text-sm leading-6">
                            <p class="font-semibold text-gray-900">
                                <a href="/authors/{{ $post->author->id }}">
                                    <span class="absolute inset-0"></span>
                                    {{ $post->author->name }}
                                </a>
                            </p>
                            
                        </div>
                    </div>
                </article>
                @endforeach
                <!-- More posts... -->
            </div>
        </div>
    </div>


</x-layout>
