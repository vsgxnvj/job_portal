<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>General Dashboard &mdash; Stisla</title>

    @notifyCss

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/modules/summernote/summernote-bs4.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css') }}">

</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            {{-- SIDEBARD --}}
            @include('admin.layouts.sidebar')

            <!-- Main Content -->
            <div class="main-content">

                @yield('contents')

            </div>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; {{ date('Y') }} <div class="bullet"></div> Design By <a href="#">
                        BlackBox</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('admin/assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/popper.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('admin/assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/select2/dist/js/select2.full.min.js') }}"></script>



    {{-- Laravel Notify --}}
    <x-notify::notify />

    @notifyJs


    <!-- Page Specific JS File -->
    {{-- <script src="{{ asset('admin/assets/js/page/index-0.js') }}"></script> --}}

    <!-- Template JS File -->
    <script src="{{ asset('admin/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>


    @stack('scripts')


    <script>
        $(document).ready(function() {
            $('.delete_industry_type').on('click', function(e) {
                e.preventDefault(); // Prevent default link behavior

                var industryTypeId = $(this).attr('href');
                var row = $(this).closest('tr'); // Get the closest table row

                swal({
                        title: "Are you sure you want to delete this?",
                        text: "This action is permanent and cannot be undone.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            // AJAX request to delete the industry type
                            $.ajax({
                                url: industryTypeId,
                                type: 'POST', // Laravel requires POST when using _method for DELETE
                                data: {
                                    _token: '{{ csrf_token() }}', // CSRF protection
                                    _method: 'DELETE' // Laravel interprets this as a DELETE request
                                },
                                success: function(response) {
                                    swal("The industry type has been deleted successfully.", {
                                        icon: "success",
                                    }).then(() => {
                                        row.fadeOut(300, function() {
                                            $(this).remove();
                                        }); // Smooth removal
                                    });

                                    console.log(response);
                                },
                                error: function(xhr, status, error) {
                                    swal("Something went wrong. Please try again later.", {
                                        icon: "error",
                                    });

                                    console.log(error);
                                }
                            });
                        } else {
                            swal("The industry type has not been deleted.");
                        }
                    });
            });
        });
    </script>




</body>

</html>
