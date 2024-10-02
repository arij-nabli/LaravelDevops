@extends('Layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Détails du Centre de Recyclage
                        <a href="{{ url('centre-recyclage') }}" class="btn btn-danger float-end">Retour</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label>Nom : </label>
                        <p>{{ $centreRecyclage->name }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Adresse : </label>
                        <p>{{ $centreRecyclage->address }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Type de Matériel : </label>
                        <p>{{ $centreRecyclage->material_type }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Capacité : </label>
                        <p>{{ $centreRecyclage->capacity }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Nombre d'Employés : </label>
                        <p>{{ $centreRecyclage->number_of_employees }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
