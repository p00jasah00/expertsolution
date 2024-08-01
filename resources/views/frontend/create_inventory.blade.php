@extends('frontend.layouts.main')

@section('main-section')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Inventory Create</h4>
                        </div>
                        <div class="card-body p-4">
                            <form action="{{ route('inventory_store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input class="form-control" type="text" placeholder="Enter Name" id="name" name="name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="vendor" class="form-label">Vendor</label>
                                                <input class="form-control" type="text" placeholder="Vendor Name" id="vendor" name="vendor">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mt-3 mt-lg-0">
                                            <div class="mb-3">
                                                <label for="price" class="form-label">Price</label>
                                                <input class="form-control" type="text" placeholder="Enter Price" id="price" name="price">
                                            </div>
                                            <div class="mb-3">
                                                <label for="quantity" class="form-label">Quantity</label>
                                                <input class="form-control" type="number" placeholder="Enter Quantity" id="quantity" name="quantity">
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
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
