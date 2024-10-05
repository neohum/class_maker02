@extends('layouts.app')
@section('content')

<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->
    <br>
    <br>
    <br>
    <div id="content" class="container">
        <div class="container">
            <div class="container">
                <div class="col items-center">
                    <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing items-center">
                        <div class="statbox widget box box-shadow items-center">
                            <div class="widget-header itmes-center">
                                <div class="row items-center">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 items-center">
                                        <h2 class="mt-4 item-center mx-4 p-y4">반편성 서비스</h2>
                                        <h4 class="mt-4">엑셀 파일을 한 번에 올려주세요</h4>
                                    </div>
                                </div>
                            </div>
                            <div class=" widget-content-area">



                                <form action="{{ route('excel.store') }}" class="dropzone" id="excel-dropzone"
                                    method="post" enctype="multipart/form-data" class="filepond multiple-file-upload">
                                    @csrf
                                    <input type="hidden" name="school_name" value={{ $_REQUEST['school_name'] }}>
                                </form>
                                <br>
                                <br>
                                {{-- <a type="submit" href="{{ route('step1') }}" class="btn btn-primary pull-left">반편성
                                    하기</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.js"></script>
    <script>
        Dropzone.options.excelDropzone = {
            paramName: "file",
            maxFilesize: 2, // MB
            acceptedFiles: ".xlsx,.xls,.csv",
            success: function (file, response) {
                console.log(response);
            },
            error: function (file, response) {
                console.log(response);
            }
        };
    </script>

</body>

</html>
