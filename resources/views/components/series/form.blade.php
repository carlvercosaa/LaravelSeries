<form action="{{ $action }}" method="post">
    @csrf
    @isset($update)
        @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text"
               id="nome"
               name="name"
               class="form-control"
               @isset($name)value="{{ $name }}"@endisset>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
