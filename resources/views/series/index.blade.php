<x-layout title="Séries">
    <a class="my-10 bg-green-200 p-4 rounded-3xl" href="/series/criar" method="get">Adicionar Série</a>

    <ul>
        
        @foreach ($series as $serie)
            
            <li class="mb-2 bg-slate-400 rounded-2xl p-2">{{ $loop->index+1 }} - {{ $serie->nome }}</li>
        @endforeach    
    </ul>

</x-layout>