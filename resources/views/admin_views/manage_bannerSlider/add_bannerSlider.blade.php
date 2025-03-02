<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Manage Banners</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('admin_assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/vendor/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}">
</head>

<body class="skin-dark">
<div class="main-wrapper">

    @include('partials/adminHeader')
    @include('partials/adminSideBar')

    <div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>Manage Banners</h3>
                </div>
            </div>
        </div>

        <div class="add-edit-banner-wrap col-12">
            <div class="add-edit-banner-form">
                <form action="{{ route('banner-slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <table>
                        <thead>
                            <tr>
                                <th>Image 1</th>
                                <th>Image 2</th>
                                <th>Image 3</th>
                                <th>Image 4</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="file" name="image1">
                                </td>
                                <td>
                                    <input type="file" name="image2">
                                </td>
                                <td>
                                    <input type="file" name="image3">
                                </td>
                                <td>
                                    <input type="file" name="image4">
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    @if($banner = \App\Models\BannerSlider::first())
                                    <img src="{{ asset('storage/'  . $banner->image1) }}" alt="Image 3" width="100">
                                    @endif
                                </td>
                                <td>
                                    @if($banner = \App\Models\BannerSlider::first())
                                    <img src="{{ asset('storage/'  . $banner->image2) }}" alt="Image 3" width="100">
                                    @endif
                                </td>
                                <td>
                                    @if($banner = \App\Models\BannerSlider::first())
                                        <img src="{{ asset('storage/'  . $banner->image3) }}" alt="Image 3" width="100">
                                    @endif
                                </td>
                                <td>
                                    @if($banner = \App\Models\BannerSlider::first())
                                    <img src="{{ asset('storage/'  . $banner->image4) }}" alt="Image 3" width="100">

                                    @endif
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="d-flex flex-wrap justify-content-end col mbn-10">
                            <button class="button button-outline button-primary mb-10 ml-10 mr-0" type="submit" id="submitBtn">Save & Publish</button>
                        </div><!-- Button Group End -->
                    </div>
                </form>
                
                
                
                @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
            </div>
        </div>
    </div>

    @include('partials.adminFooter')
</div>

<script src="{{ asset('admin_assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/plugins/filepond/filepond.min.js') }}"></script>
<!-- Global Vendor, plugins & Activation JS -->
<script src={{asset("admin_assets/js/vendor/modernizr-3.6.0.min.js")}}></script>
<script src={{asset("admin_assets/js/vendor/jquery-3.3.1.min.js")}}></script>
<script src={{asset("admin_assets/js/vendor/popper.min.js")}}></script>
<script src={{asset("admin_assets/js/vendor/bootstrap.min.js")}}></script>
<!--Plugins JS-->
<script src={{asset("admin_assets/js/plugins/perfect-scrollbar.min.js")}}></script>
<script src={{asset("admin_assets/js/plugins/tippy4.min.js.js")}}></script>
<!--Main JS-->
<script src={{asset("admin_assets/js/main.js")}}></script>

<!-- Plugins & Activation JS For Only This Page -->
<script src={{asset("admin_assets/js/plugins/nice-select/jquery.nice-select.min.js")}}></script>
<script src={{asset("admin_assets/js/plugins/nice-select/niceSelect.active.js")}}></script>
<script src={{asset("admin_assets/js/plugins/filepond/filepond.min.js")}}></script>
<script src={{asset("admin_assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js")}}></script>
<script src={{asset("admin_assets/js/plugins/filepond/filepond-plugin-image-preview.min.js")}}></script>
<script src={{asset("admin_assets/js/plugins/filepond/filepond.active.js")}}></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#bannerForm').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                processData: false,
                contentType: false,
                success: function () {
                    $('#successAlert').fadeIn().delay(3000).fadeOut();
                    $('#bannerForm')[0].reset();
                    $('.dropify-clear').click(); // Clear file input if using dropify
                },
                error: function (xhr) {
                    $('#errorAlert').fadeIn().delay(3000).fadeOut();
                    $('.text-danger').remove();
                    $.each(xhr.responseJSON.errors, function (field, messages) {
                        $('[name="' + field + '"]').after('<span class="text-danger">' + messages[0] + '</span>');
                    });
                }
            });
        });
    });
</script>
</body>
</html>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ddd;
}

button {
    margin-top: 5px;
}

img {
    max-width: 100px;
    max-height: 100px;
}

    </style>
