@extends('Layouts.frontend')

@section('content')
    <div class="container">
        <h1>Liste des déchets</h1>
        <a href="{{ route('dechets.create') }}" class="btn btn-primary mb-3">Ajouter un déchet</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                 
                    <th>Type</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dechets as $dechet)
                    <tr>
                        
                        <td>{{ $dechet->type }}</td>
                        <td>{{ $dechet->description }}</td>
                        <td>
                            <a href="{{ route('dechets.show', $dechet->id) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('dechets.edit', $dechet->id) }}" class="btn btn-warning">Éditer</a>
                            <form action="{{ route('dechets.destroy', $dechet->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if ($dechets->isEmpty())
                    <tr>
                        <td colspan="4">Aucun déchet trouvé.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
