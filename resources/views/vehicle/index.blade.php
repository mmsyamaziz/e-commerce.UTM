@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicles') }}</div>

                <div class="card-body">
                    <a href="{{ route('vehicle.create') }}" class="btn btn-primary mb-3">Create</a>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Model</th>
                                    <th>Brand</th>
                                    <th>Year</th>
                                    <th>Color</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vehicles as $row)
                                <tr>
                                    <td>{{ $row->model }}</td>
                                    <td>{{ $row->brand }}</td>
                                    <td>{{ $row->year }}</td>
                                    <td>{{ $row->colour }}</td>
                                    <td>
                                        @if($row->status == 1)
                                            <a href="{{ route('vehicle.edit', $row->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('vehicle.delete', $row->id) }}" class="btn btn-danger">Delete</a>
                                        @else

                                            <a href="{{ route('vehicle.activate', $row->id) }}" class="btn btn-success">Activate</a>
                                            <a href="{{ route('vehicle.terminate', $row->id) }}" class="btn btn-danger">Terminate</a>
                                                <script>
                                                     function confirmDelete()
                                                    {

                                                    return confirm('Are you sure you want to permanently TERMINATE this vehicle?');

                                                    }

    function confirmSoftDelete() {
        return confirm('Are you sure you want to soft delete this vehicle?');
    }
</script>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
