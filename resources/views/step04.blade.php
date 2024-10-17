@extends('layouts.app')
@section('content')
<div>




    <br>
    <br>
<!--
<div class="container">
    <a type="submit"
        href="{{ route('store1') }}/?school_name={{ $_REQUEST['school_name'] }}&current_grade={{ $_REQUEST['current_grade']}}&next_class={{ $_REQUEST['next_class'] }}"
        class="btn btn-primary pull-left">편성결과 엑셀로 받기(내년반 기준)</a>

    <a type="submit"
        href="{{ route('store2') }}/?school_name={{ $_REQUEST['school_name'] }}&current_grade={{ $_REQUEST['current_grade']}}&next_class={{ $_REQUEST['next_class'] }}"
        class="btn btn-primary pull-left">편성결과 엑셀로 받기(현재반 기준)</a>
</div>
-->




    <div class="container d-flext justify-content-center">
        <div class="container">
            <div class="container">
                <div class="col items-center">
                    <button type="submit" class="btn  pull-left">1.학교 정보 입력하기</button>
                    --->
                    <button type="submit" class="btn pull-left">2.엑셀 파일 올리기</button>
                    --->
                    <button class="btn pull-left">3. 이름 중복 및 데이터 확인하기->반편성하기</button>
                    --->

                    <button type="submit" class="btn pull-left">4.결과 확인 및 엑셀 다운로드</button>
                    --->
                    <button class="btn btn-primary pull-left">5.데이터 삭제하기</button>
                    <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing items-center">
                        <div class="statbox widget box box-shadow items-center">
                            <div class="widget-header itmes-center">
                                <div class="row items-center">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 items-center">
                                        <h2 class="mt-4 item-center mx-4 p-y4">{{ $_REQUEST['school_name'] }} 의 반편성 결과 및 데이터 삭제하기</h2>
                                        <div class="container">
                                            <a type="submit"
                                                href="{{ route('store1') }}/?school_name={{ $_REQUEST['school_name'] }}&current_grade={{ $_REQUEST['current_grade']}}&next_class={{ $_REQUEST['next_class'] }}"
                                                class="btn btn-primary pull-left">편성결과 엑셀로 받기(내년반 기준)</a>

                                            <a type="submit"
                                                href="{{ route('store2') }}/?school_name={{ $_REQUEST['school_name'] }}&current_grade={{ $_REQUEST['current_grade']}}&next_class={{ $_REQUEST['next_class'] }}"
                                                class="btn btn-primary pull-left">편성결과 엑셀로 받기(현재반 기준)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" widget-content-area">
                                <table>
                                    <a type="submit"
                                        href="{{ route('step04.delete') }}/?school_name={{ $_REQUEST['school_name'] }}&current_grade={{ $_REQUEST['current_grade']}}&next_class={{ $_REQUEST['next_class'] }}"
                                        class="btn btn-danger pull-left">학생 데이터 모두 삭제</a>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
