<x-layout title="Séries">
    <a class="text-purple-900 underline pb-4" href="/series/criar">Adicionar Série</a>

    <ul>
        
        @foreach ($series as $serie)
            <li class="mb-2 bg-slate-400 rounded-2xl p-2">{{ $serie }}</li>
        @endforeach    
    </ul>

</x-layout>