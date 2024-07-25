<?php $page = 'product-add-view'; ?>
@extends('admin.layouts.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            @component('admin.components.breadcrumb')
                @slot('title')
                    Yeni Ürün
                @endslot
                @slot('li_1')
                    Yeni ürün oluştur
                @endslot
                @slot('li_2')
                    product.list
                @endslot
                @slot('li_3')
                    Geri
                @endslot
            @endcomponent
            <!-- /add -->
            <form action="{{route('product.add')}}" method="POST">
                @csrf
                @method('POST')
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
                                                    <label class="form-label">Stok Kodu</label>
                                                    <input required type="text" name="stock_code" class="form-control @error('stock_code'){{'is-invalid'}}@enderror">
                                                    <div class="invalid-feedback">@error('stock_code'){{$message}}@enderror</div>

                                                    <label style="margin-top: 1rem;" class="form-label">Ürün Adı</label>
                                                    <input required type="text" name="name" class="form-control @error('name'){{'is-invalid'}}@enderror">
                                                    <div class="invalid-feedback">@error('name'){{$message}}@enderror</div>

                                                    <label style="margin-top: 1rem;" class="form-label">Parça Türü</label>
                                                    <select name="part_type" class="select @error('part_type'){{'is-invalid'}}@enderror">
                                                        <option>Seçiniz</option>
                                                        <option>Orjinal</option>
                                                        <option>Çıkma</option>
                                                        <option>Yan Sanayi</option>
                                                    </select>
                                                    <div class="invalid-feedback">@error('part_type'){{$message}}@enderror</div>

                                                    <label style="margin-top: 1rem;" class="form-label">Araç Çeşidi</label>
                                                    <input required type="text" name="car_type" class="form-control @error('car_type'){{'is-invalid'}}@enderror">
                                                    <div class="invalid-feedback">@error('car_type'){{$message}}@enderror</div>

                                                    <label style="margin-top: 1rem;" class="form-label">Marka</label>
                                                    <select name="product_brand" class="select @error('product_brand'){{'is-invalid'}}@enderror">
                                                        <option value="">Seçiniz</option>
                                                        @foreach($productBrands as $brand)
                                                        <option value="{{$brand->name}}">{{$brand->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">@error('product_brand'){{$message}}@enderror</div>


                                                    <label style="margin-top: 1rem;" class="form-label">Birim</label>
                                                    <select name="unit" class="select @error('unit'){{'is-invalid'}}@enderror">
                                                        <option>Seçiniz</option>
                                                        <option>Adet</option>
                                                        <option>Litre</option>
                                                    </select>
                                                    <div class="invalid-feedback">@error('unit'){{$message}}@enderror</div>

                                                    <!-- Yeni Fotoğraf Yükleme Alanı -->
                                                    <label style="margin-top: 1rem;" class="form-label">Fotoğraf</label>
                                                    <div id="collapseThree" class="accordion-collapse collapse show"
                                                         aria-labelledby="headingThree"
                                                         data-bs-parent="#accordionExample3">
                                                        <div class="accordion-body">
                                                            <div class="text-editor add-list add">
                                                                <div class="col-lg-12">
                                                                    <div class="add-choosen">
                                                                        <div class="input-blocks">
                                                                            <div class="image-upload">
                                                                                <input type="file" id="file">
                                                                                <div class="image-uploads">
                                                                                    <i data-feather="plus-circle"
                                                                                       class="plus-down-add me-0"></i>
                                                                                    <h4>Ekle</h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="phone-img">
                                                                            <img src="" class="preview-image">
                                                                            <a href="javascript:void(0);"><i
                                                                                    data-feather="x"
                                                                                    class="x-square-add remove-product"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

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

@section('script')
    <script>
        const fileInput = document.getElementById('file');
        const previewImage = document.querySelector('.preview-image');

        fileInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file && file.name.match(/\.(jpe?g|png)$/)) {
                const reader = new FileReader();
                reader.addEventListener('load', function() {
                    previewImage.src = this.result;
                    previewImage.style.display = 'block'; // Resmin görünür olduğundan emin ol
                });
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection


