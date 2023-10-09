<x-layout title="Nova Série">
    <form action="/series/salvar" method="post">
        @csrf
        <div class="flex flex-col items-center">
            <label 
                class="my-10" 
                for="nome"
                >Nome:
            </label>
        
            <input 
                placeholder="Digite Aqui o nome da sua Série: " 
                class="bg-slate-200 rounded-2xl ml-2 font-light w-96 p-2" 
                type="text" 
                id="nome" 
                name="nome"
                required
            >
            <button class="mt-10 bg-green-200 p-4 rounded-3xl" type="submit" >Adicionar</button>
        </div>
     </form>
</x-layout>
