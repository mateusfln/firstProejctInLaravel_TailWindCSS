<form action="{{ $action }}" method="post" class="flex flex-col justify-center items-center">
    @csrf

    @isset($nome)
    @method('PUT')
    @endisset
    
        <label for="nome" class="font-semibold mt-4">Nome:</label>
        <input type="text"
               id="nome"
               name="nome"
               class="bg-zinc-200 rounded-lg p-2 my-10 mx-4 w-full shadow-md"
               placeholder="Digite aqui o nome da sua série:"
               
               @isset($nome)value="{{ $nome }}"@endisset>

               @if ($errors->any())
                <div class="-mt-8 text-red-600 mb-10 text-sm">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
    

    <button type="submit" class="bg-green-300 p-4 rounded-3xl shadow-lg">Salvar</button>
</form>