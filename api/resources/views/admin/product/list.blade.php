<?php $page = 'product.list'; ?>
@extends('admin.layouts.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            @component('admin.components.breadcrumb')
                @slot('title')
                    Ürün Listesi
                @endslot
                @slot('li_1')
                    Ürünlerinizi Yönetin
                @endslot
                @slot('li_2')
                    {{ route('product.add.view') }}
                @endslot
                @slot('li_3')
                    Ürün Ekle
                @endslot
            @endcomponent

            <!-- /product list -->
            <div class="card table-list-card">
                <div class="card-body">
                    <form method="POST" action="{{ route('product.delete') }}">
                        @csrf
                        @method('DELETE')
                        <div class="table-top">
                            <button type="submit" class="btn btn-primary">Sil</button>
                            <div class="search-set">
                                <div class="search-input">
                                    <a href="javascript:void(0);" class="btn btn-searchset"><i data-feather="search"
                                                                                               class="feather-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Filter -->
                        <!-- /Filter -->
                        <div class="table-responsive product-list">
                            <table class="table datanew">
                                <thead>
                                <tr>
                                    <th class="no-sort">
                                        <label class="checkboxs">
                                            <input type="checkbox" id="select-all">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th>ID</th>
                                    <th>Stok Kodu</th>
                                    <th>Ürün Adı</th>
                                    <th>Parça Türü</th>
                                    <th>Marka</th>
                                    <th>Birim</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox" name="ids[]" value="{{ $product->id }}">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <a href="{{ route('product.edit.view', $product->id) }}" style="display: block; width: 100%; height: 100%; color: inherit; text-decoration: none;">
                                                {{ $product->id }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('product.edit.view', $product->id) }}" style="display: block; width: 100%; height: 100%; color: inherit; text-decoration: none;">
                                                {{ $product->stock_code }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('product.edit.view', $product->id) }}" style="display: block; width: 100%; height: 100%; color: inherit; text-decoration: none;">
                                                {{ $product->name }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('product.edit.view', $product->id) }}" style="display: block; width: 100%; height: 100%; color: inherit; text-decoration: none;">
                                                {{ $product->part_type }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('product.edit.view', $product->id) }}" style="display: block; width: 100%; height: 100%; color: inherit; text-decoration: none;">
                                                {{ $product->product_brand }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('product.edit.view', $product->id) }}" style="display: block; width: 100%; height: 100%; color: inherit; text-decoration: none;">
                                                {{ $product->unit }}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /product list -->
        </div>
    </div>
@endsection
