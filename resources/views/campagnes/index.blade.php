@extends('Layouts.frontend')

@section('title', 'Liste des Campagnes de Sensibilisation')

@section('content')
<div class="container">
    <h1 class="my-4">List of awareness campaigns</h1>

    <!-- Bouton pour créer une nouvelle campagne -->
    <a href="{{ route('campagnes.create') }}" class="btn btn-success mb-3">create a new campaign</a>

    <!-- Tableau listant les campagnes -->
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Start Date</th>
                <th> End Date </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($campagnes as $campagne)
                <tr>
                    <td>{{ $campagne->id }}</td>
                    <td>{{ $campagne->titre }}</td>
                    <td>{{ $campagne->date_debut }}</td>
                    <td>{{ $campagne->date_fin }}</td>
                    <td>
                        <!-- Bouton pour voir les détails -->
                        <a href="{{ route('campagnes.show', $campagne->id) }}" class="btn btn-info btn-sm">Details</a>

                        <!-- Bouton pour éditer -->
                        <a href="{{ route('campagnes.edit', $campagne->id) }}" class="btn btn-warning btn-sm">Update</a>

                        <!-- Formulaire pour supprimer une campagne -->
                        <form action="{{ route('campagnes.destroy', $campagne->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
