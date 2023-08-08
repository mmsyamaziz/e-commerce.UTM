@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if($edit) Edit @else Create @endif Vehicle
                </div>

                <div class="card-body">
                    <form action="@if($edit) {{ route('vehicle.update', $vehicle->id) }} @else {{ route('vehicle.store') }} @endif" method="post">
                        @csrf
                        @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>
                                                <strong>{{ $error }}</strong>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                        <div class="mb-3">
                            <label for="brand" class="form-label">Brand:</label>
                            <input type="text" class="form-control" id="brand" name="brand" value="@if($edit){{ $vehicle->brand }}@endif">
                        </div>
                        <div class="mb-3">
                            <label for="model" class="form-label">Model:</label>
                            <input type="text" class="form-control" id="model" name="model" value="@if($edit){{ $vehicle->model }}@endif">
                        </div>
                        <div class="mb-3">
                            <label for="year" class="form-label">Year:</label>
                            <input type="text" class="form-control" id="year" name="year" value="@if($edit){{ $vehicle->year }}@endif">
                        </div>
                        <div class="mb-3">
                            <label for="colour" class="form-label">Colour:</label>
                            <input type="text" class="form-control" id="colour" name="colour" value="@if($edit){{ $vehicle->colour }}@endif">
                        </div>
                        <button class="btn btn-primary" type="submit">@if($edit) Update @else Save @endif</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
