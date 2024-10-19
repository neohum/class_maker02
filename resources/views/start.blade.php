@extends('layouts.app')

@section('content')

<body class="layout-boxed" data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="100">
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

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="container  d-flext justify-content-center">
        <div class="containerr">
            <div class="container">
                <div class="col items-center">
                    <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing items-center">
                        <div class="statbox widget box box-shadow items-center ">
                            <div class="widget-header itmes-center d-flex justify-content-center">
                                <div class="row items-center">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 items-center">
                                        <h2 class="mt-4 item-center mx-4 p-y4">반편성 서비스</h2>
                                        <h4 class="mt-4">학교 정보를 입력해 주세요</h4>
                                    </div>
                                </div>
                            </div>

                            <div class=" widget-content-area ">
                                <form action="{{ route('store') }}" method="POST">
                                    @csrf

                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="school_name" name="school_name"
                                                placeholder="학교 이름" required autofocus>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <input type="number" class="form-control" id="current_grade"
                                                name="current_grade" placeholder="현재 학년" required>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <input type="number" class="form-control" id="current_class"
                                                name="current_class" placeholder="현재 반 수" required>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <input type="number" class="form-control" id="next_grade" name="next_grade"
                                                placeholder="내년 학년" required>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <input type="number" class="form-control" id="next_class" name="next_class"
                                                placeholder="내년 반 수" required>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            해당 정보는 반편성 이후 모두 삭제됩니다.
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary pull-left">1.학교 정보 입력하기</button>
                                    --->
                                    <button type="submit" class="btn btn-secodary pull-left" >2.엑셀 파일 올리기</button>
                                    --->
                                    <button type="submit" class="btn btn-secodary pull-left">3.이름 중복 및 데이터 확인하기->반편성하기</button>
                                    --->
                                    <button type="submit" class="btn btn-secodary pull-left">4.결과 확인 및 엑셀 다운로드</button>
                                    --->
                                    <button type="submit" class="btn btn-secodary pull-left">5.데이터 삭제하기</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
