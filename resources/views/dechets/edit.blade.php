@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Éditer le déchet</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dechets.update', $dechet->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="type" class="form-label">Type de déchet</label>
                <input type="text" name="type" class="form-control" id="type" value="{{ $dechet->type }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description">{{ $dechet->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour</button>
            <a href="{{ route('dechets.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
@endsection
