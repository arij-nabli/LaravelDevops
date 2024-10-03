@extends('Layouts.frontend')

@section('content')
    <h1>create a new campaign</h1>

    <form action="{{ route('campagnes.store') }}" method="POST">
        @csrf
        <input type="text" name="titre" placeholder="Title" required>
        <input type="date" name="date_debut" required>
        <input type="date" name="date_fin" required>
        <button type="submit">create</button>
    </form>
@endsection
