<x-layout>
<x-slot:title> {{ $title }} </x-slot:title> 

<article class="py-8 max-w-screen-md ">
  
     <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{$post['title']}}</h2>
  <div class="text-base text-gray-500 mb-4"> <!-- Tambahkan mb-4 untuk margin bawah -->
  <a>{{$post->varietas->nama_varietas}} </a> |
  <a>{{$post->varietas->item->komoditas->nama_komoditas}}</a>
  </div>

  <figure class="max-w-lg mx-auto text-center">
    <img class="w-1/2 h-auto rounded-lg" src="{{ $post->iamge_url ?? 'https://via.placeholder.com/400x300' }}" alt="{{ $post->title }}" class="mb-4">
</figure>

  <p class="my-4 font-light">{{$post ['body']}}</p>
  <a href="/posts" class="font-medium text-blue-500 hover:underline" >&laquo; Back to posts</a>
</article>

</x-layout>