@extends('Layouts.frontend')

@section('title', 'Modifier une Campagne')

@section('content')
    <h1>Update</h1>

    <form action="{{ route('campagnes.update', $campagne->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titre">Campaign Title</label>
            <input type="text" name="titre" id="titre" value="{{ old('titre', $campagne->titre) }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="date_debut">start date</label>
            <input type="date" name="date_debut" id="date_debut" value="{{ old('date_debut', $campagne->date_debut) }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="date_fin">End date</label>
            <input type="date" name="date_fin" id="date_fin" value="{{ old('date_fin', $campagne->date_fin) }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Update the campaign</button>
    </form>
@endsection
