<form action="{{ $action }}" method="post" class="flex flex-col justify-center items-center">
    @csrf

    @isset($nome)
    @method('PUT')
    @endisset
    
        <input type="text"
               id="nome"
               name="nome"
               class="bg-zinc-200 rounded-lg p-2 my-8 mx-4 w-full shadow-md"
               placeholder="Descreva aqui sua tarefa:"
               
               @isset($nome)value="{{ $nome }}"@endisset>

               @if ($errors->any())
                <div class="-mt-8 text-red-600 mb-8 text-sm">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
    

    <button type="submit" class="bg-green-300 p-4 rounded-3xl shadow-lg my-4">Salvar</button>
</form>