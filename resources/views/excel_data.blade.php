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
                <div class="items-center col">
                    <div id="flStackForm" class="items-center col-lg-12 layout-spacing layout-top-spacing">
                        <div class="items-center statbox widget box box-shadow">
                            <div class="widget-header itmes-center">
                                <div class="items-center row">
                                    <div class="items-center col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4 class="mt-4">2. 엑셀 파일 올리기</h4>
                                        <h6 class="mt-4">- 모든 반의 엑셀 파일을 한 번에 드래그하여 올리시면 됩니다.</h6>
                                        <h6 class="mt-4">- "2. 다음 페이지로 이동" 버튼을 누르기 전, 엑셀 파일이 모두 올라갔는지 꼭 확인하세요. 순서는 상관없습니다. </h6>
                                        <h6 class="mt-4">- 만약, 하나이상의 파일이 누락된 경우, 누락된 파일만 다시 올려주시면 됩니다.</h6>
                                        <h6 class="mt-4">- 아래 네모 칸을 클릭하셔도 됩니다.</h6>
                                        <h6 class="mt-4">- 해당 반 편성은 학생들을 골고루 섞고 이름 중복을 표시해줍니다. 세부적인 세팅 즉, 다른반, 분리 학생 등은 수작업으로 하셔야 합니다.</h6>
                                        <h6 class="mt-4">- 이전 데이터가 남아 있는 경우, "테이터 삭제하기"버튼이 뜹니다. 버튼 클릭 후 처음 부터 다시 하시면 됩니다.</h6>
                                    </div>
                                </div>
                                @if ( $schoolinfo == 'true')
                                <div class="alert alert-success" role="alert">
                                    이전 파일이 남아있습니다. 아래 "데이터 삭제하기" 버튼을 누르면 이전 파일이 삭제되고 시작 페이지로 이동합니다.
                                    <br>
                                    <a href="{{ route('excel.delete') }}/?school_name={{ $_REQUEST['school_name'] }}&current_grade={{ $_REQUEST['current_grade']}}&current_class={{ $_REQUEST['current_grade'] }}&next_grade={{ $_REQUEST['next_grade'] }}&next_class{{ $_REQUEST['next_class'] }}" class="btn btn-danger">데이터 삭제하기</a>


                                @endif
                            </div>
                            <div class=" widget-content-area">



                                <form action="{{ route('excel.store') }}" class="dropzone" id="excel-dropzone"
                                    method="post" enctype="multipart/form-data" class="filepond multiple-file-upload">
                                    @csrf
                                    <input type="hidden" name="school_name" value={{ $_REQUEST['school_name'] }}>
                                </form>
                                <br>

                                <a type="submit"
                                    href="{{ route('step01') }}/?school_name={{ $_REQUEST['school_name'] }}&current_grade={{ $_REQUEST['current_grade']}}&current_class={{ $_REQUEST['current_class'] }}&next_grade={{ $_REQUEST['next_grade'] }}&next_class={{ $_REQUEST['next_class'] }}"
                                    class="btn btn-primary pull-left">2. 업로드 정보 확인하기</a>


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
