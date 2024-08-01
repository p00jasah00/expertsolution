@extends('frontend.layouts.main')

@section('main-section')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Inventory</h4>
                        </div>
                        <div class="card-body p-4">
                            <form action="{{ route('update_inventory', $inventory->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input class="form-control" type="text" value="{{ $inventory->name }}" id="name" name="name" placeholder="Enter Name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="vendor" class="form-label">Vendor</label>
                                                <input class="form-control" type="text" value="{{ $inventory->vendor }}" id="vendor" name="vendor" placeholder="Vendor Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mt-3 mt-lg-0">
                                            <div class="mb-3">
                                                <label for="price" class="form-label">Price</label>
                                                <input class="form-control" type="text" value="{{ $inventory->price }}" id="price" name="price" placeholder="Enter Price">
                                            </div>
                                            <div class="mb-3">
                                                <label for="quantity" class="form-label">Quantity</label>
                                                <input class="form-control" type="number" value="{{ $inventory->quantity }}" id="quantity" name="quantity" placeholder="Enter Quantity">
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary w-md">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
</div>
@endsection
