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
    <div id="content" class="container d-flext justify-content-center">
        <div class="containerr">
            <div class="container">
                <div class="items-center col">
                    <div id="flStackForm" class="items-center col-lg-12 layout-spacing layout-top-spacing">
                        <div class="items-center statbox widget box box-shadow ">
                            <div class="widget-header itmes-center d-flex justify-content-center">
                                <div class="items-center row">
                                    <div class="items-center col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h2 class="mx-4 mt-4 item-center p-y4">반편성 서비스</h2>
                                        <h4 class="mt-4">1. 학교 및 학년 정보입력하기</h4>
                                    </div>
                                </div>
                            </div>

                            <div class=" widget-content-area">
                                <form action="{{ route('store') }}" method="POST">
                                    @csrf

                                    <div class="mb-4 row">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="school_name" name="school_name"
                                                placeholder="학교 이름" required autofocus>
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <div class="col-sm-12">
                                            <input type="number" class="form-control" id="current_grade"
                                                name="current_grade" placeholder="현재 학년" required>
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <div class="col-sm-12">
                                            <input type="number" class="form-control" id="current_class"
                                                name="current_class" placeholder="현재 반 수" required>
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <div class="col-sm-12">
                                            <input type="number" class="form-control" id="next_grade" name="next_grade"
                                                placeholder="내년 학년" required>
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <div class="col-sm-12">
                                            <input type="number" class="form-control" id="next_class" name="next_class"
                                                placeholder="내년 반 수" required>
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <div class="col-sm-12">
                                            해당 정보는 반편성 이후 모두 삭제하실 수 있습니다. 개인 정보보호를 위해 반드시 삭제해 주세요.
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <div class="col-sm-12">
                                            이전 화면으로 되돌아 가시면 데이터가 중복으로 저장됩니다. 전 과정을 실행하시면 다시 첫페이지로 가실 수 있습니다.
                                        </div>
                                    </div>
                                    <div class="mb-4 row">
                                        <div class="col-sm-12">
                                            중간에 오류가 있으면 "뒤로가기"를 누르지 마시고 전과정을 진행 후 다시 시작 하시면 됩니다.
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary pull-left">1.학교 및 학년 정보 입력하기</button>
                                    <!--<button type="submit" class="btn btn-primary pull-left">다음 페이지로 이동</button>-->
                                    <br>
                                    <!-- Button trigger modal -->
                                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        1. 학교 및 학년 정보 입력하기
                                    </button> --}}

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">학교 및 학년 정보 입력하기</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    입력 내용을 다시 한번 더 확인해 주세요
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">취소(편집화면으로 돌아가기)</button>
                                                    <button type="submit" class="btn btn-primary">저장하기(다음으로 진행)</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
