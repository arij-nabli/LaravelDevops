@extends('Layouts.frontend')

@section('content')
    <h1>{{ $campagne->titre }}</h1>
    <p>Start date : {{ $campagne->date_debut }}</p>
    <p>End date : {{ $campagne->date_fin }}</p>

    <a href="{{ route('campagnes.edit', $campagne->id) }}">Update</a>
    <form action="{{ route('campagnes.destroy', $campagne->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
