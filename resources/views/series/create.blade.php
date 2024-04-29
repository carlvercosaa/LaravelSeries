<x-layout title="Nova Série">
    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text"
                       autofocus
                       id="nome"
                       name="name"
                       class="form-control"
                       value="{{ old('name') }}">
            </div>

            <div class="col-2">
                <label for="seasonsQty" class="form-label">N temporadas:</label>
                <input type="text"
                       id="seasonsQty"
                       name="seasonsQty"
                       class="form-control"
                       value="{{ old('seasonsQty') }}">
            </div>

            <div class="col-2">
                <label for="EpisodesPerSeason" class="form-label">Eps / Temporada:</label>
                <input type="text"
                       id="EpisodesPerSeason"
                       name="EpisodesPerSeason"
                       class="form-control"
                       value="{{ old('EpisodesPerSeason') }}"@>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>
