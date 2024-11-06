{{-- resources/views/posts.blade.php --}}
<x-layout>
<x-slot:title> {{ $title }} </x-slot:title> 

@if($posts->count() > 0)
    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-green-700 px-4 pb-8">
            <a href="/posts/{{$post->slug}}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font bold text-gray-900">{{$post->title}}</h2>
            </a>
            <div class="text base text-gray-500">
                <a href="/varietas/{{$post->varietas->id_varietas}}" class="hover:underline">{{$post->varietas->nama_varietas}} </a> |
                <a href="/komoditas/{{$post->varietas->item->komoditas->id_komoditas}}" class="hover:underline">{{$post->varietas->item->komoditas->nama_komoditas}}</a> 
            </div>
            <p class="my-4 font-light">{{Str::limit($post->body, 100)}}</p>
            <a href="/posts/{{$post->slug}}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
        </article>
    @endforeach
@else
    <p class="py-8">Tidak ada post untuk komoditas ini.</p>
@endif

</x-layout>