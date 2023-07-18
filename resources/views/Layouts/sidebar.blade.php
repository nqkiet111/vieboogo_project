<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">VIEBOOGO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Tìm kiếm"
                    aria-label="Tìm kiếm">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                {{-- <li class="nav-header">Nhà cung cấp</li> --}}
                <?php use App\Utils\PagesPublic; ?>
                @foreach (PagesPublic::Pages() as $page)
                    {{-- parent --}}
                    @if ($page->parent == 0)
                        <li class="nav-item">
                            <a href= {{ url( $page->controller ) }} class="nav-link">
                                <i class="{{ $page->symbol }}"></i>
                                <p>
                                    {{ $page->title }}
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            {{-- hasParent --}}
                            @foreach (PagesPublic::Pages() as $page1)
                                @if ($page1->parent != 0 && $page1->parent == $page->page_id)
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a  href= {{ url( $page1->controller ) }} class="nav-link">
                                                <i class="{{ $page1->symbol }}"></i>
                                                <p>{{ $page1->title }}</p>
                                            </a>
                                        </li>
                                    </ul>
                                @endif
                            @endforeach
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


<style>
    .nav-treeview{
        margin-left: 5px
    }
</style>