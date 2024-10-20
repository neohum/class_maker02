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
                <div class="items-center col">
                    <button type="submit" class="btn pull-left">1.학교 정보 입력하기</button>
                    --->
                    <button type="submit" class="btn pull-left">2.엑셀 파일 올리기</button>
                    --->
                    <button class="btn pull-left">3. 이름 중복 및 데이터 확인하기->반편성하기</button>
                    --->

                    <button type="submit" class="btn pull-left">4.결과 확인 및 엑셀 다운로드</button>
                    --->
                    <button class="btn btn-primary pull-left">5.데이터 삭제하기</button>
                    <div id="flStackForm" class="items-center col-lg-12 layout-spacing layout-top-spacing">
                        <div class="items-center statbox widget box box-shadow">
                            <div class="widget-header itmes-center">
                                <div class="items-center row">
                                    <div class="items-center col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h2 class="mx-4 mt-4 item-center p-y4">{{ $_REQUEST['school_name'] }} 의 반편성 결과 및 데이터 삭제하기</h2>
                                        <div class="container">
                                            <a type="submit"
                                                href="{{ route('store1') }}/?school_name={{ $_REQUEST['school_name'] }}&current_grade={{ $_REQUEST['current_grade']}}&next_class={{ $_REQUEST['next_class'] }}"
                                                class="btn btn-primary pull-left">편성결과 엑셀로 받기(내년반 기준)</a>

                                            <a type="submit"
                                                href="{{ route('store2') }}/?school_name={{ $_REQUEST['school_name'] }}&current_grade={{ $_REQUEST['current_grade']}}&next_class={{ $_REQUEST['next_class'] }}"
                                                class="btn btn-primary pull-left">편성결과 엑셀로 받기(현재반 기준)</a>
                                        </div>
                                        <br>
                                        <br>

                                        <p>반편성을 다시 하시려면 아래 "학생 데이터 모두 삭제"를 클릭 하시면 처음으로 되돌아 갑니다.</p>
                                        <p>이름 중복은 표시하지만 분류하지 않습니다. 같은 반에 이름이 중복인 경우, 엑셀에서 수정하시면 됩니다. 또는 처음으로 되돌아가서 다시 반편성을 하셔도 됩니다.</p>
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
