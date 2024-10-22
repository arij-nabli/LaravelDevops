@extends('Layouts.frontend')

@section('content')
    <div class="container">
        <h1>Créer une nouvelle Zone de Collecte</h1>

        <form action="{{ route('zone-collectes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" class="form-control" id="nom" required>
            </div>

            <div class="form-group">
                <label for="code_postal">Code Postal</label>
                <input type="number" name="code_postal" class="form-control" id="code_postal" required>
            </div>

            <div class="form-group">
                <label for="localisation">Localisation</label>
                <input type="text" name="localisation" class="form-control" id="localisation" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Créer</button>
        </form>
    </div>
@endsection
