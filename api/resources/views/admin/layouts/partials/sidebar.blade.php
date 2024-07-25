<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Yönetim Paneli</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('/') ? 'active subdrop' : '' }}">
                                <i data-feather="grid"></i><span>Kullanıcı</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Kullanıcılar</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Yetkilendirme</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('/', 'product-brand', 'product-brand/add', 'product-brand/edit/*',  'product', 'product/add', 'product/edit/*') ? 'active subdrop' : '' }}">
                                <i data-feather="grid"></i><span>Katalog</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('product-brand.list') }}" class="{{ Request::is('product-brand', 'product-brand/add', 'product-brand/edit/*') ? 'active' : '' }}">Ürün Marka</a>
                                </li>
                                <li>
                                    <a href="{{ route('product.list') }}" class="{{ Request::is('product', 'product/add', 'product/edit/*') ? 'active' : '' }}">Ürün</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Ambar</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Raf</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Stok</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('/') ? 'active subdrop' : '' }}">
                                <i data-feather="grid"></i><span>Cari</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Kurumsal Müşteri</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Bireysel Müşteri</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('/') ? 'active subdrop' : '' }}">
                                <i data-feather="grid"></i><span>Araç Tanımlama</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Araç Tanımlama</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('/') ? 'active subdrop' : '' }}">
                                <i data-feather="grid"></i><span>İş Emri</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">İş Emri</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('/') ? 'active subdrop' : '' }}">
                                <i data-feather="grid"></i><span>Raporlar</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Raporlar</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
