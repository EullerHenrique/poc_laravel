<x-layout title="Nova Série">
    <form action="/series/save" method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>    