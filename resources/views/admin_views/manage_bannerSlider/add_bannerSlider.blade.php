<!doctype html>
<html class="no-js" lang="en">

<head>



    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NSSHHG5Q');</script>
    <!-- End Google Tag Manager -->



    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Manage Banners</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('admin_assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/vendor/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("assets/img/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("assets/img/favicon-16x16.png")}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("assets/img/apple-touch-icon.png")}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset("assets/img/android-chrome-192x192.png")}}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{asset("assets/img/android-chrome-512x512.png")}}">

    <style>
        .banner-card {
            border: 1px solid #2c2e3e;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            background-color: #1b1d2a;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .banner-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .banner-img-container {
            position: relative;
            margin-bottom: 15px;
            border-radius: 6px;
            overflow: hidden;
            height: 200px;
            background-color: #131520;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .banner-img-container img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .banner-card h5 {
            margin-bottom: 15px;
            color: #ddd;
            font-weight: 500;
        }

        .custom-file {
            position: relative;
            margin-bottom: 15px;
        }

        .custom-file-input {
            position: relative;
            z-index: 2;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            margin: 0;
            opacity: 0;
        }

        .custom-file-label {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-weight: 400;
            line-height: 1.5;
            color: #aaa;
            background-color: #272c3f;
            border: 1px solid #3c3e4c;
            border-radius: 4px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .custom-file-label::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 3;
            display: block;
            height: calc(1.5em + 0.75rem);
            padding: 0.375rem 0.75rem;
            line-height: 1.5;
            color: #fff;
            content: "Browse";
            background-color: #007bff;
            border-left: inherit;
            border-radius: 0 4px 4px 0;
        }

        .update-btn {
            width: 100%;
        }

        .alert-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            max-width: 350px;
        }

        .fadeOut {
            animation: fadeOut 0.5s ease-out forwards;
        }

        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; visibility: hidden; }
        }

        @media (max-width: 768px) {
            .banner-img-container {
                height: 150px;
            }
        }
    </style>
</head>

<body class="skin-dark">



    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSSHHG5Q"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



    
<div class="main-wrapper">

    @include('partials/adminHeader')
    @include('partials/adminSideBar')

    <div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>Manage Banner Slider</h3>
                </div>
            </div>
        </div>

        <!-- Alert Container -->
        <div class="alert-container">
            @if (session('success'))
                <div class="alert alert-success" id="successAlert">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger" id="errorAlert">
                    {{ session('error') }}
                </div>
            @endif

            <div class="alert alert-success d-none" id="dynamicSuccessAlert"></div>
            <div class="alert alert-danger d-none" id="dynamicErrorAlert"></div>
        </div>

        <!-- Banner Management -->
        <div class="row">
            @php
                $existingBanner = \App\Models\BannerSlider::first();
            @endphp

            @if(!$existingBanner)
                <!-- Create New Banner Form -->
                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Create New Banner Slider</h4>
                        </div>
                        <div class="box-body">
                            <form action="{{ route('banner-slider.store') }}" method="POST" enctype="multipart/form-data" id="createBannerForm">
                                @csrf
                                <div class="row">
                                    @for($i = 1; $i <= 4; $i++)
                                        <div class="col-md-6 col-lg-3 mb-20">
                                            <div class="banner-card">
                                                <h5 class="text-center">Banner Image {{ $i }}</h5>
                                                <div class="banner-img-container">
                                                    <div class="upload-placeholder text-center">
                                                        <i class="fa fa-cloud-upload fa-3x mb-10"></i>
                                                        <p>Click to select image</p>
                                                    </div>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image{{ $i }}" name="image{{ $i }}" required>
                                                    <label class="custom-file-label" for="image{{ $i }}">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <button type="submit" class="button button-primary">
                                            <i class="fa fa-save mr-5"></i> Save & Publish
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <!-- Update Existing Banners -->
                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Update Banner Slider</h4>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                @for($i = 1; $i <= 4; $i++)
                                    <div class="col-md-6 col-lg-3 mb-20">
                                        <div class="banner-card">
                                            <h5 class="text-center">Banner Image {{ $i }}</h5>
                                            <div class="banner-img-container">
                                                <img src="{{ asset('storage/' . $existingBanner->{'image' . $i}) }}" alt="Banner {{ $i }}" class="banner-preview">
                                            </div>
                                            <form action="{{ route('banner-slider.update', $existingBanner->id) }}" method="POST" enctype="multipart/form-data" class="banner-update-form">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="image_number" value="image{{ $i }}">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image{{ $i }}" name="image" required>
                                                    <label class="custom-file-label" for="image{{ $i }}">Choose new image</label>
                                                </div>
                                                <button type="submit" class="button button-primary update-btn">
                                                    <i class="fa fa-refresh mr-5"></i> Update Image
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    @include('partials.adminFooter')
</div>

<script src="{{ asset('admin_assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/main.js') }}"></script>

<script>
    $(document).ready(function() {
        // Auto-hide alerts after 5 seconds
        setTimeout(function() {
            $('.alert:not(.d-none)').addClass('fadeOut');
        }, 5000);

        // File input change event (show filename)
        $('.custom-file-input').on('change', function() {
            var fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').html(fileName || 'Choose file');

            // Preview image
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                var previewContainer = $(this).closest('.banner-card').find('.banner-img-container');

                reader.onload = function(e) {
                    previewContainer.html('<img src="' + e.target.result + '" class="banner-preview">');
                }

                reader.readAsDataURL(this.files[0]);
            }
        });

        // Handle banner update forms with AJAX
        $('.banner-update-form').on('submit', function(e) {
            e.preventDefault();

            var form = $(this);
            var formData = new FormData(this);

            $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $('#dynamicSuccessAlert').text('Image updated successfully').removeClass('d-none');

                    setTimeout(function() {
                        $('#dynamicSuccessAlert').addClass('fadeOut');

                        // Reload after animation completes
                        setTimeout(function() {
                            location.reload();
                        }, 500);
                    }, 2000);
                },
                error: function(xhr) {
                    var errorMessage = 'An error occurred while updating the image.';

                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }

                    $('#dynamicErrorAlert').text(errorMessage).removeClass('d-none');

                    setTimeout(function() {
                        $('#dynamicErrorAlert').addClass('fadeOut');
                    }, 5000);
                }
            });
        });

        // Handle create banner form with AJAX
        $('#createBannerForm').on('submit', function(e) {
            e.preventDefault();

            var form = $(this);
            var formData = new FormData(this);

            $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $('#dynamicSuccessAlert').text('Banner slider created successfully').removeClass('d-none');

                    setTimeout(function() {
                        $('#dynamicSuccessAlert').addClass('fadeOut');

                        // Reload after animation completes
                        setTimeout(function() {
                            location.reload();
                        }, 500);
                    }, 2000);
                },
                error: function(xhr) {
                    var errorMessage = 'An error occurred while creating the banner slider.';

                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    } else if (xhr.responseJSON && xhr.responseJSON.errors) {
                        var errors = xhr.responseJSON.errors;
                        errorMessage = Object.values(errors)[0][0]; // Get first error message
                    }

                    $('#dynamicErrorAlert').text(errorMessage).removeClass('d-none');

                    setTimeout(function() {
                        $('#dynamicErrorAlert').addClass('fadeOut');
                    }, 5000);
                }
            });
        });
    });
</script>

</body>
</html>
