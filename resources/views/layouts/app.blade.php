<!-- resources/views/school_info/create.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>반편성 서비스</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">
    <link href="{{ asset('layouts/horizontal-light-menu/css/light/loader.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('layouts/horizontal-light-menu/css/dark/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('layouts/horizontal-light-menu/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('src/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('layouts/horizontal-light-menu/css/light/plugins.css')}}" rel="stylesheet" typ="text/css" />
    <link href="{{ asset('layouts/horizontal-light-menu/css/dark/plugins.css')}}" rel="stylesheet" type="text/css/>
    <!-- END GLOBAL MANDATORY STYLES --

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel=" stylesheet" href="{{ asset('src/plugins/src/filepond/filepond.min.css')}}">
    <link rel="stylesheet" href="{{ asset('src/plugins/src/filepond/FilePondPluginImagePreview.min.css')}}">

    <link href="{{ asset('src/assets/css/light/scrollspyNav.css')}}" rel="stylesheet" type="text/css"'' />
    <link href="{{ asset('src/plugins/css/light/filepond/custom-filepond.css')}}" rel="stylesheet" tye="text/css" />
    <link href="{{ asset('src/assets/css/dark/scrollspyNav.css')}}" rel="stylesheet" type="text/css"'' />
    <link href="{{ asset('src/plugins/css/dark/filepond/custom-filepond.css')}}" rel="stylesheet" tye="text/css" />
    <!-- END PAGE LEVEL STYLES -->
</head>

@yield('contnet')


<script src="{{ asset('src/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('src/plugins/src/mousetrap/mousetrap.min.js')}}"></script>
<script src="{{ asset('src/plugins/src/waves/waves.min.js')}}"></script>
<script src="{{ asset('layouts/horizontal-light-menu/app.js')}}"></script>
<script src="{{ asset('src/plugins/src/highlight/highlight.pack.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('src/assets/js/scrollspyNav.js')}}"></script>
<script src="{{ asset('src/plugins/src/filepond/filepond.min.js')}}"></script>
<script src="{{ asset('src/plugins/src/filepond/FilePondPluginFileValidateType.min.js')}}"></script>
<script src="{{ asset('src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js')}}"></script>
<script src="{{ asset('src/plugins/src/filepond/FilePondPluginImagePreview.min.js')}}"></script>
<script src="{{ asset('src/plugins/src/filepond/FilePondPluginImageCrop.min.js')}}"></script>
<script src="{{ asset('src/plugins/src/filepond/FilePondPluginImageResize.min.js')}}"></script>
<script src="{{ asset('src/plugins/src/filepond/FilePondPluginImageTransform.min.js')}}"></script>
<script src="{{ asset('src/plugins/src/filepond/filepondPluginFileValidateSize.min.js')}}"></script>
<script src="{{ asset('src/plugins/src/filepond/custom-filepond.js')}}"></script>

</body>

</html>
