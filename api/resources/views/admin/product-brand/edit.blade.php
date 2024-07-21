<?php $page = 'product-brand-edit-view'; ?>
@extends('admin.layouts.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            @component('admin.components.breadcrumb')
                @slot('title')
                    New Product
                @endslot
                @slot('li_1')
                    Create new product
                @endslot
                @slot('li_2')
                    product-brand.list
                @endslot
                @slot('li_3')
                    Back to Product
                @endslot
            @endcomponent
            <!-- /add -->
            <form action="{{ route('product-brand.edit', $brand->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body add-product pb-0">
                        <div class="accordion-card-one accordion" id="accordionExample">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                         aria-controls="collapseOne">
                                        <div class="addproduct-icon">
                                            <h5><i data-feather="info" class="add-info"></i><span>Product Information</span>
                                            </h5>
                                            <a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-6 col-12">
                                                <div class="mb-3 add-product">
                                                    <label class="form-label">Product Name</label>
                                                    <input required type="text" name="name" value="{{$brand->name}}" class="form-control @error('name'){{'is-invalid'}}@enderror">
                                                    <div class="invalid-feedback">@error('name'){{$message}}@enderror</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="btn-addproduct mb-4">
                        <button type="button" class="btn btn-cancel me-2">Cancel</button>
                        <button type="submit" class="btn btn-submit">Save Product</button>
                    </div>
                </div>
            </form>
            <!-- /add -->

        </div>
    </div>
@endsection
