@if (Route::is(['product-brand.add.view', 'product-brand.edit.view']))
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4>{{ $title }}</h4>
                <h6>{{ $li_1 }}</h6>
            </div>
        </div>
        <ul class="table-top-head">
            <li>
                <div class="page-btn">
                    <a href="{{ route($li_2.'') }}" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>{{ $li_3 }}</a>
                </div>
            </li>
            <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
                        data-feather="chevron-up" class="feather-chevron-up"></i></a>
            </li>
        </ul>

    </div>
@endif

@if (
    !Route::is([
        'product-brand.add.view',
        'product-brand.edit.view',
    ]))
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4>{{ $title }}</h4>
                <h6>{{ $li_1 }}</h6>
            </div>
        </div>
        <ul class="table-top-head">
            <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img
                        src="{{ URL::asset('/build/img/icons/pdf.svg') }}" alt="img"></a>
            </li>
            <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img
                        src="{{ URL::asset('/build/img/icons/excel.svg') }}" alt="img"></a>
            </li>
            <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><i data-feather="printer"
                        class="feather-rotate-ccw"></i></a>
            </li>
            <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i data-feather="rotate-ccw"
                        class="feather-rotate-ccw"></i></a>
            </li>
            <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
                        data-feather="chevron-up" class="feather-chevron-up"></i></a>
            </li>
        </ul>
        @if (Route::is(['product-brand.list']))
            <div class="page-btn">
                <a href="{{ $li_2 }}" class="btn btn-added"><i data-feather="plus-circle"
                        class="me-2"></i>{{ $li_3 }}</a>
            </div>
        @endif
    </div>
@endif

@if (Route::is([

    ]))
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">{{ $title }}</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('index') }}">{{ $li_1 }}</a></li>
                    <li class="breadcrumb-item active">{{ $li_2 }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
@endif
