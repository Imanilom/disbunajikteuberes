@props(['active'=> false])

<a  {{$attributes}}
    class="{{$active ? 'bg-green-700 text-white' : 'text-green-700 hover:bg-green-700 hover:text-white'}} 
    rounded-md px-3 py-2 text-sm font-medium" 
    aria-current="{{$active ? 'page': false}}"> {{$slot}} </a>