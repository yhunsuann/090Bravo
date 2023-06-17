<!DOCTYPE html>
<html class="no-js" lang="vi">
   @include('client.layouts.partials.head')
    <body>
        <div class="page pg-home">
                <form role="form" method="get" action="#" style="display:contents !important;">
                    @include('client.layouts.partials.header')
                <div class="page-main">
                    @yield('content')
                </div>
            @include('client.layouts.partials.footer')
    </body>
</html>