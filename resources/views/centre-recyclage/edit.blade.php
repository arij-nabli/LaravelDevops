@extends('Layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Recycling Center
                        <a href="{{ url('centre-recyclage') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('centre-recyclage.update', $centreRecyclage->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $centreRecyclage->name) }}" />
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address', $centreRecyclage->address) }}" />
                            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Material Type</label>
                            <input type="text" name="material_type" class="form-control" value="{{ old('material_type', $centreRecyclage->material_type) }}" />
                            @error('material_type') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Capacity</label>
                            <input type="number" name="capacity" class="form-control" value="{{ old('capacity', $centreRecyclage->capacity) }}" />
                            @error('capacity') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Number of Employees</label>
                            <input type="number" name="number_of_employees" class="form-control" value="{{ old('number_of_employees', $centreRecyclage->number_of_employees) }}" />
                            @error('number_of_employees') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
