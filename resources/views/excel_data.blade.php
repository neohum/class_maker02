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
    <div class="container d-flext justify-content-center">
        <div class="container d-flext justify-content-center">
            <div class="container d-flext justify-content-center">
                <div class="col items-center">
                    <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing items-center">
                        <div class="statbox widget box box-shadow items-center">
                            <div class="widget-header itmes-center">
                                <div class="row items-center">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 items-center">
                                        <h2 class="mt-4 item-center mx-4 p-y4">반편성 서비스</h2>
                                        <h4 class="mt-4">엑셀 파일을 한 번에 올려주세요</h4>
                                        <h5 class="mt-4">"2. 엑셀 파일 올리기" 버튼을 누르기 전, 엑셀 파일이 모두 올라갔는지 꼭 확인하세요. 순서는 상관없습니다. </h5>
                                        <h5>만약, 하나이상의 파일이 누락된 경우, 누락된 파일만 다시 올려주시면 됩니다.</h5>
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
                                <button type="submit" class="btn pull-left">1.학교 정보 입력하기</button>
                                --->
                                <a type="submit"
                                    href="{{ route('step01') }}/?school_name={{ $_REQUEST['school_name'] }}&current_grade={{ $_REQUEST['current_grade']}}&next_class={{ $_REQUEST['next_class'] }}"
                                    class="btn btn-primary pull-left">2. 엑셀 파일 올리기</a>
                                --->
                                <button type="submit" class="btn  pull-left">3.이름 중복 및 데이터 확인하기->반편성하기</button>
                                --->
                                <button type="submit" class="btn pull-left">4.결과 확인 및 엑셀 다운로드</button>
                                --->
                                <button type="submit" class="btn pull-left">5.데이터 삭제하기</button>

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
