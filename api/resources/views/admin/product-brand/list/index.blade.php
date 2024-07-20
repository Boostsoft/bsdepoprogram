<!-- product list -->
<div class="card table-list-card">
    <div class="card-body">
        <div class="table-top">
            <div class="search-set">
                <div class="search-input">
                    <a href="" class="btn btn-searchset"><i data-feather="search" class="feather-search"></i></a>
                </div>
            </div>
            <div class="search-path">
                <a class="btn btn-filter" id="filter_search">
                    <i data-feather="filter" class="filter-icon"></i>
                    <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                </a>
            </div>
        </div>
        <!-- /Filter -->
        <div class="card" id="filter_inputs">
            <div class="card-body pb-0">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="input-blocks">
                            <i data-feather="zap" class="info-img"></i>
                            <select class="select">
                                <option>Marka</option>
                                @foreach($brands as $brand)
                                    <option>{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 ms-auto">
                        <div class="input-blocks">
                            <a class="btn btn-filters ms-auto"><i data-feather="search" class="feather-search"></i>Arama</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Filter -->
        <div class="table-responsive">
            <table class="table datanew dataTable no-footer">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Marka</th>
                    <th class="no-sort">İşlem</th>
                </tr>
                </thead>
                <tbody>
                @foreach($brands as $brand)
                    <tr>
                        <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                        <td><a href="{{url('/product-brand/edit/'.$brand->id)}}">{{ $brand->id }}</a></td>
                        <td>{{ $brand->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /product list -->
