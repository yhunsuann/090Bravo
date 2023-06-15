<header class="header header-sticky">
    <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
            </svg>
        </button>
        <a class="header-brand d-md-none" href="javascript:{0}">
            <svg width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="{{ asset('assets/brand/coreui.svg#full') }}"></use>
            </svg>
        </a>
        <ul class="nav nav-pills header-nav ms-auto">
            <li class="nav-item">
                <!-- <a class="nav-link active language" aria-current="page" >VI</a> -->
            </li>

        </ul>

        <ul class="header-nav ms-3">
            <li class="nav-item dropdown nav-logout">
                <a class="nav-link py-0" href="{{ route('admin.logout') }}" aria-haspopup="true">
                    <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('assets/img/avatars/8.jpg') }}" alt="user@email.com"> Logout </div>
                </a>
            </li>
        </ul>
    </div>
</header>