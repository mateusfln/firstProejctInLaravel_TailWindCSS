<x-layout title="Séries">
    <a class="my-10 bg-green-200 p-4 rounded-3xl" href="{{route('series.create')}}" method="get">Adicionar Série</a>

    <ul>
        
        @foreach ($series as $serie)
            
            <li class="mb-2 bg-slate-400 rounded-2xl p-2 flex justify-between">{{ $loop->index+1 }} - {{ $serie->nome }}
                <form action="{{route('series.destroy', $serie->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 px-4 py-2 ml-14 rounded-full text-white">X</button>
                </form>
            </li>
        @endforeach    
    </ul>

</x-layout>