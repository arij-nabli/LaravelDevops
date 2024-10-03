@extends('Layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="mb-3">Ajouter un Événement de Collecte</h4>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('collecte-evenements.store') }}" method="POST">
                        @csrf 
                        <div class="mb-3">
                            <label for="titre" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="titre" name="titre" required>
                        </div>
                        <div class="mb-3">
                            <label for="statut" class="form-label">Statut</label>
                            <input type="text" class="form-control" id="statut" name="statut" required>
                        </div>

                        <div class="mb-3">
                            <label for="date_collecte" class="form-label">Date de Collecte</label>
                            <input type="date" class="form-control" id="date_collecte" name="date_collecte" required>
                        </div>
                        <div class="mb-3">
                            <label for="lieu" class="form-label">Lieu</label>
                            <input type="text" class="form-control" id="lieu" name="lieu" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-success" style="border-radius: 15px;">Ajouter Événement</button>
                        <a href="{{ route('collecte-evenements.index') }}" class="btn btn-secondary ms-2" style="border-radius: 15px;">Retour à la liste</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
