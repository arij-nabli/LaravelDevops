@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ajouter un nouveau déchet</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dechets.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="type" class="form-label">Type de déchet</label>
                <input type="text" name="type" class="form-control" id="type" value="{{ old('type') }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{ route('dechets.index') }}" class="btn btn-secondary">Retour</a>
        </form>
    </div>
@endsection
