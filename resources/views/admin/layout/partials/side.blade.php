<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
      090BRAVO
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 0px;">
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->segment(2) === null ? 'active' : '' }}" href="{{ route('admin.dashboard')}}">
                                    <svg class="nav-icon">
                                        <use
                                            xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}">
                                        </use>
                                    </svg> Dashboard
                                </a>
                            </li>
                            <li class="nav-group">
                                <a class="nav-link nav-group-toggle">
                                    <svg class="nav-icon">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-building') }}"></use>
                                </svg> Recruitmens</a>
                                <ul class="nav-group-items">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.recruitment.index') }}"><span class="nav-icon"></span>List</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.recruitment.create') }}"><span class="nav-icon"></span>Create</a></li>
                                </ul>
                            </li>
                            <li class="nav-group">
                                <a class="nav-link nav-group-toggle">
                                    <svg class="nav-icon">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-cursor') }}"></use>
                                </svg> Post</a>
                                <ul class="nav-group-items">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.post.office', 'member') }}"><span class="nav-icon"></span>Member</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.post.office', 'office') }}"><span class="nav-icon"></span>Office</a></li>
                                </ul>
                            </li>
                            <li class="nav-group">
                                <a class="nav-link nav-group-toggle">
                                    <svg class="nav-icon">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-address-book') }}"></use>
                                </svg> Blogs</a>
                                <ul class="nav-group-items">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.blog.index') }}"><span class="nav-icon"></span>List</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.blog.create') }}"><span class="nav-icon"></span>Create</a></li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->segment(2) === null ? 'active' : '' }}" href="{{ route('admin.contact.index')}}">
                                    <svg class="nav-icon">
                                        <use
                                            xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}">
                                        </use>
                                    </svg> Contact
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ request()->segment(2) === null ? 'active' : '' }}" href="{{ route('admin.config.index')}}">
                                    <svg class="nav-icon">
                                        <use
                                            xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-settings') }}">
                                        </use>
                                    </svg> Config
                                </a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 841px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar" style="height: 442px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
        </div>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>