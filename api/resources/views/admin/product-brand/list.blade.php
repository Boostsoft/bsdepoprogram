<?php $page = 'product-brand.list'; ?>
@extends('admin.layouts.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            @component('admin.components.breadcrumb')
                @slot('title')
                    Ürün Marka Listesi
                @endslot
                @slot('li_1')
                    Markalarınızı Yönetin
                @endslot
                @slot('li_2')
                    {{ route('product-brand.add.view') }}
                @endslot
                @slot('li_3')
                    Marka Ekle
                @endslot
            @endcomponent

            <!-- /product list -->
            <div class="card table-list-card">
                <div class="card-body">
                    <form method="POST" action="{{ route('product-brand.delete') }}">
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
                                    <th>Marka</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brands as $brand)
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox" name="ids[]" value="{{ $brand->id }}">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td><a href="{{ route('product-brand.edit.view', $brand->id) }}" style="display: block; width: 100%; height: 100%; color: inherit; text-decoration: none;">{{ $brand->id }}</a></td>
                                        <td>
                                            <a href="{{ route('product-brand.edit.view', $brand->id) }}" style="display: block; width: 100%; height: 100%; color: inherit; text-decoration: none;">
                                                {{ $brand->name }}
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
