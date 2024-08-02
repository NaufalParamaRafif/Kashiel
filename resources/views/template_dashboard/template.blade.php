<!DOCTYPE html>
<html lang="en">
    @include('template_dashboard.header')
    <body>
        <div class="container-xxl position-relative bg-white d-flex p-0">
            @include('template_dashboard.spinner')
            @include('template_dashboard.sidebar')

            <!-- Content Start -->
            <div class="content">
                @include('template_dashboard.navbar')
                @yield('main_body')
                @include('template_dashboard.footer')
            </div>

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>
        @include('template_dashboard.footer_js')
    </body>
</html>