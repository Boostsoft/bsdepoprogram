<!-- /product list -->
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
                                <option>Lenevo</option>
                                <option>Boat</option>
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
                    <th class="no-sort">
                        <label class="checkboxs">
                            <input type="checkbox" id="select-all">
                            <span class="checkmarks"></span>
                        </label>
                    </th>
                    <th>Brand</th>
                    <th class="no-sort">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <label class="checkboxs">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                        </label>
                    </td>
                    <td>Lenevo</td>
                    <td class="action-table-data">
                        <div class="edit-delete-action">
                            <a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-brand">
                                <i data-feather="edit" class="feather-edit"></i>
                            </a>
                            <a class="confirm-text p-2" href="javascript:void(0);">
                                <i data-feather="trash-2" class="feather-trash-2"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="checkboxs">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                        </label>
                    </td>
                    <td>Boat</td>
                    <td class="action-table-data">
                        <div class="edit-delete-action">
                            <a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-brand">
                                <i data-feather="edit" class="feather-edit"></i>
                            </a>
                            <a class="confirm-text p-2" href="javascript:void(0);">
                                <i data-feather="trash-2" class="feather-trash-2"></i>
                            </a>
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /product list -->
