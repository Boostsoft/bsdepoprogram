<?php $page = 'product-edit-view'; ?>
@extends('admin.layouts.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            @component('admin.components.breadcrumb')
                @slot('title')
                    Ürün Bilgisi
                @endslot
                @slot('li_1')
                    Ürün bilgisi güncelle
                @endslot
                @slot('li_2')
                    product.list
                @endslot
                @slot('li_3')
                    Geri
                @endslot
            @endcomponent
            <!-- /add -->
            <form action="{{ route('product.edit', $product->id) }}" method="POST">
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
                                            <h5><i data-feather="info" class="add-info"></i><span>Ürün Bilgisi</span>
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
                                                    <label class="form-label">Stok Kodu</label>
                                                    <input required type="text" name="stock_code"value="{{$product->stock_code}}" class="form-control @error('stock_code'){{'is-invalid'}}@enderror">
                                                    <div class="invalid-feedback">@error('stock_code'){{$message}}@enderror</div>

                                                    <label style="margin-top: 1rem;" class="form-label">Ürün Adı</label>
                                                    <input required type="text" name="name" value="{{$product->name}}" class="form-control @error('name'){{'is-invalid'}}@enderror">
                                                    <div class="invalid-feedback">@error('name'){{$message}}@enderror</div>

                                                    <label style="margin-top: 1rem;" class="form-label">Parça Türü</label>
                                                    <select name="part_type" class="select @error('part_type'){{'is-invalid'}}@enderror">
                                                        <option value="">Seçiniz</option>
                                                        <option value="Orjinal" @if($product->part_type == 'Orjinal') selected @endif>Orjinal</option>
                                                        <option value="Çıkma" @if($product->part_type == 'Çıkma') selected @endif>Çıkma</option>
                                                        <option value="Yan Sanayi" @if($product->part_type == 'Yan Sanayi') selected @endif>Yan Sanayi</option>
                                                    </select>
                                                    <div class="invalid-feedback">@error('part_type'){{$message}}@enderror</div>

                                                    <label style="margin-top: 1rem;" class="form-label">Araç Çeşidi</label>
                                                    <input required type="text" name="car_type" value="{{$product->car_type}}" class="form-control @error('car_type'){{'is-invalid'}}@enderror">
                                                    <div class="invalid-feedback">@error('car_type'){{$message}}@enderror</div>

                                                    <label style="margin-top: 1rem;" class="form-label">Marka</label>
                                                    <select name="product_brand" class="select @error('product_brand'){{'is-invalid'}}@enderror">
                                                        <option value="">Seçiniz</option>
                                                        @foreach($productBrands as $brand)
                                                            <option value="{{$brand->name}}" @if($product->product_brand == $brand->name) selected @endif>
                                                                {{$brand->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">@error('product_brand'){{$message}}@enderror</div>

                                                    <label style="margin-top: 1rem;" class="form-label">Birim</label>
                                                    <select name="unit" class="select @error('unit'){{'is-invalid'}}@enderror">
                                                        <option value="">Seçiniz</option>
                                                        <option value="Adet" @if($product->unit == 'Adet') selected @endif>Adet</option>
                                                        <option value="Litre" @if($product->unit == 'Litre') selected @endif>Litre</option>
                                                    </select>
                                                    <div class="invalid-feedback">@error('unit'){{$message}}@enderror</div>

                                                    <label style="margin-top: 1rem;" class="form-label">Fotoğraf</label>
                                                    <input required type="text" name="photo" value="{{$product->photo}}" class="form-control @error('photo'){{'is-invalid'}}@enderror">
                                                    <div class="invalid-feedback">@error('photo'){{$message}}@enderror</div>
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
