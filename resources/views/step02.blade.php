@extends('layouts.app')
@section('content')
<div>




    <br>
    <br>

<div class="container">
    <a type="submit"
        href="{{ route('step02.store1') }}/?school_name={{ $_REQUEST['school_name'] }}&current_grade={{ $_REQUEST['current_grade']}}&next_class={{ $_REQUEST['next_class'] }}"
        class="btn btn-primary pull-left">편성결과 엑셀로 받기(내년반 기준)</a>

    <a type="submit"
        href="{{ route('step02.store2') }}/?school_name={{ $_REQUEST['school_name'] }}&current_grade={{ $_REQUEST['current_grade']}}&next_class={{ $_REQUEST['next_class'] }}"
        class="btn btn-primary pull-left">편성결과 엑셀로 받기(현재반 기준)</a>
    <a type="submit"
        href="{{ route('step02.delete') }}/?school_name={{ $_REQUEST['school_name'] }}&current_grade={{ $_REQUEST['current_grade']}}&next_class={{ $_REQUEST['next_class'] }}"
        class="btn btn-danger pull-left">학생 데이터 모두 삭제</a>
</div>





    <div class="container d-flext justify-content-center">
        <div class="container">
            <div class="container">
                <div class="items-center col">
                    {{-- <button type="submit" class="btn pull-left">1.학교 정보 입력하기</button> --}}
                    {{-- --->
                    <br>
                    <br>
                    <button type="submit" class="btn pull-left">2.엑셀 파일 올리기</button>
                    --->
                    <br>
                    <br> --}}
                    {{-- <button class="btn pull-left">3. 중복된 이름 찾기(클릭하세요)</button>
                    --->
                    <br>
                    <br>
                    <a type="submit"
                        href="{{ route('step03') }}/?school_name={{ $_REQUEST['school_name'] }}&current_grade={{ $_REQUEST['current_grade']}}&current_class={{ $_REQUEST['current_class'] }}&next_grade={{ $_REQUEST['next_grade'] }}&next_class={{ $_REQUEST['next_class'] }}"
                        class="btn btn-primary pull-left">4.반편성 1과정(클릭하기)</a>

                    ---> --}}
                    <br>
                    <br>

                    <div id="flStackForm" class="items-center col-lg-12 layout-spacing layout-top-spacing">
                        <div class="items-center statbox widget box box-shadow">
                            <div class="widget-header itmes-center">
                                <div class="items-center row">
                                    <div class="items-center col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h2 class="mx-4 mt-4 item-center p-y4">{{ $school_name }} 의 반편성 결과</h2>
                                    </div>
                                </div>
                            </div>
                            <div class=" widget-content-area">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>학교명</th>
                                            <th>학년</th>
                                            <th>반</th>
                                            <th>이름</th>
                                            <th>성별</th>
                                            <th>새로운 반</th>
                                            <th>이름 중복</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ( $data as $row)

                                        <tr>
                                            <td>{{ $row->school_name }}</td>
                                            <td>{{ $row->grade }}</td>
                                            <td>{{ $row->class }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->sex}}</td>
                                            <td>{{ $row->next_class }}</td>
                                            <td>{{ $row->name_split }}</td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
