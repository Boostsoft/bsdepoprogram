<?php $page = 'product-brand-edit-view'; ?>
@extends('admin.layouts.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            @component('admin.components.breadcrumb')
                @slot('title')
                    Marka Bilgisi
                @endslot
                @slot('li_1')
                    Marka bilgisi güncelle
                @endslot
                @slot('li_2')
                    product-brand.list
                @endslot
                @slot('li_3')
                    Geri
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
                                            <h5><i data-feather="info" class="add-info"></i><span>Marka Bilgisi</span>
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
                                                    <label class="form-label">Marka Adı</label>
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
                        <button type="submit" class="btn btn-submit">Kaydet</button>
                    </div>
                </div>
            </form>
            <!-- /add -->

        </div>
    </div>
@endsection
