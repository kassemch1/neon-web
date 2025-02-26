<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edit Slider</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href={{ asset("admin_assets/css/vendor/bootstrap.min.css") }}>
    <link rel="stylesheet" href={{ asset("admin_assets/css/vendor/material-design-iconic-font.min.css") }}>
    <link rel="stylesheet" href={{ asset("admin_assets/css/vendor/font-awesome.min.css") }}>
    <link rel="stylesheet" href={{ asset("admin_assets/css/vendor/themify-icons.css") }}>
    <link rel="stylesheet" href={{ asset("admin_assets/css/vendor/cryptocurrency-icons.css") }}>
    <link rel="stylesheet" href={{ asset("admin_assets/css/plugins/plugins.css") }}>
    <link rel="stylesheet" href={{ asset("admin_assets/css/helper.css") }}>
    <link rel="stylesheet" href={{ asset("admin_assets/css/style.css") }}>
    <link id="cus-style" rel="stylesheet" href={{ asset("admin_assets/css/style-primary.css") }}>

</head>

<body class="skin-dark">

<div class="main-wrapper">

    <!-- Header Section Start -->
    @include('partials/adminHeader')
    <!-- Header Section End -->

    <!-- Side Header Start -->
    @include('partials/adminSideBar')
    <!-- Side Header End -->

    <!-- Content Body Start -->
    <div class="content-body">

        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-10">
            <!-- Page Heading Start -->
            <div class="col-12 col-lg-auto mb-20">
                <div class="page-heading">
                    <h3>Edit Slider</h3>
                </div>
            </div><!-- Page Heading End -->
        </div><!-- Page Headings End -->

        <!-- Edit Product Start -->
        <div class="add-edit-product-wrap col-12">

            <div class="add-edit-product-form">
                <form id="sliderForm" method="post" action="{{ route('manageSlider.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="slider_id" value="{{$slider->id}}">
                    <h4 class="title">Edit Slider</h4>
                    <div class="row">
                        <div class="col-12 mb-30">
                            <label>First Picture</label>
                            <input class="dropify" type="file" name="images">
                            @if($slider->images)
                                <img src="{{ asset($slider->images) }}" alt="Slider Image" width="120" height="100">
                            @endif
                        </div>
                        <div class="col-12 mb-30">
                            <label>Second Picture</label>
                            <input class="dropify" type="file" name="secondImage">
                            @if($slider->secondImage)
                                <img src="{{ asset($slider->secondImage) }}" alt="Second Slider Image" width="120" height="100">
                            @endif
                        </div>

                        <div class="col-12 mb-30">
                            <label for="">Name</label>
                            <textarea name="name" class="form-control">{{ old('name', $slider->name) }}</textarea>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="col-12 mb-30">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control">{{ old('description', $slider->description) }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>

                    <!-- Success Alert -->
                    <div id="successAlert" class="alert alert-success mt-3" style="display: none;">
                        <strong>Success!</strong> Slider updated successfully.
                    </div>
                    <!-- Error Alert -->
                    <div id="errorAlert" class="alert alert-danger mt-3" style="display: none;">
                        <strong>Error!</strong> Failed to update Slider. Please try again.
                    </div>

                    <!-- Button Group Start -->
                    <div class="row">
                        <div class="d-flex flex-wrap justify-content-end col mbn-10">
                            <button class="button button-outline button-primary mb-10 ml-10 mr-0" type="submit" id="submitBtn">Save & Publish</button>
                        </div><!-- Button Group End -->
                    </div>
                </form>
            </div>

        </div><!-- Edit Product End -->

    </div><!-- Content Body End -->

    <!-- Footer Section Start -->
    @include('partials.adminFooter')
    <!-- Footer Section End -->

</div>

<!-- JS -->
<script src={{ asset("admin_assets/js/vendor/modernizr-3.6.0.min.js") }}></script>
<script src={{ asset("admin_assets/js/vendor/jquery-3.3.1.min.js") }}></script>
<script src={{ asset("admin_assets/js/vendor/popper.min.js") }}></script>
<script src={{ asset("admin_assets/js/vendor/bootstrap.min.js") }}></script>
<script src={{ asset("admin_assets/js/plugins/perfect-scrollbar.min.js") }}></script>
<script src={{ asset("admin_assets/js/plugins/tippy4.min.js.js") }}></script>
<script src={{ asset("admin_assets/js/main.js") }}></script>
<script src={{ asset("admin_assets/js/plugins/nice-select/jquery.nice-select.min.js") }}></script>
<script src={{ asset("admin_assets/js/plugins/nice-select/niceSelect.active.js") }}></script>
<script src={{ asset("admin_assets/js/plugins/filepond/filepond.min.js") }}></script>
<script src={{ asset("admin_assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js") }}></script>
<script src={{ asset("admin_assets/js/plugins/filepond/filepond-plugin-image-preview.min.js") }}></script>
<script src={{ asset("admin_assets/js/plugins/filepond/filepond.active.js") }}></script>
<script>
    $(document).ready(function () {
        $('#sliderForm').submit(function (e) {
            e.preventDefault(); // Prevent default form submission

            // Serialize form data
            var formData = new FormData(this);

            // Send AJAX request
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: $(this).attr('action'), // Use form's action attribute as URL
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $('#successAlert').fadeIn();
                    setTimeout(function () {
                        $('#successAlert').fadeOut();
                    }, 3000);
                },
                error: function (xhr, status, error) {
                    $('#errorAlert').fadeIn();
                    setTimeout(function () {
                        $('#errorAlert').fadeOut();
                    }, 3000);
                }
            });
        });
    });
</script>

</body>
</html>
