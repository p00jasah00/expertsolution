@extends('frontend.layouts.main')

@section('main-section')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Inventory List</h4>
                            <a href="{{ route('inventory') }}" class="btn btn-primary float-end">Add New Inventory</a>
                        </div>
                        <div class="card-body p-4">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Vendor</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($inventories as $inventory)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $inventory->name }}</td>
                                                <td>{{ $inventory->vendor }}</td>
                                                <td>{{ $inventory->price }}</td>
                                                <td>{{ $inventory->quantity }}</td>
                                                <td>
                                                    <a href="{{ route('edit_inventory', $inventory->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                    <form action="{{ route('delete_inventory', $inventory->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
</div>
@endsection
