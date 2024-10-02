@extends('Layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">


                @session('status')
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endsession

                <div class="card">
                    <div class="card-header">
                        <h4> Equipement List
                        <a href="{{ url('equipement/create') }}" class="btn btn-primary float-end">Add Equipement</a>

                        
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-stiped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Validity</th>
                                    <th>Disponibility</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($equipements as $equipement)
                                <tr>
                                    <td>{{$equipement->id}}</td>
                                    <td>{{$equipement->name}}</td>
                                    <td>{{$equipement->validity}}</td>
                                    <td>{{$equipement->disponibility == 1 ? 'Available':'Not Available'}}</td>
                                    <td>{{$equipement->quantity}}</td>
                                    <td>
                                        <a href="{{ route('equipement.edit' , $equipement->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('equipement.show' , $equipement->id) }}" class="btn btn-info">Show</a>
                                        <form action="{{ route('equipement.destroy' , $equipement->id) }}" method="POST" class="d-inline">
                                        @csrf 
                                        @method('DELETE')  
                                        <button type="submit" class="btn btn-danger">Delete</button>    
                                    </form>

                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $equipements->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection