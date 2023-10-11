<x-layout title="Editar tarefa '{{ $item->nome }}'">
    <x-items.form :action="route('items.update', $item)" :nome="$item->nome" />
</x-layout>