
@extends('layouts.app')
@section('content')
<div>




<br>
<br>




    <div class="container d-flext justify-content-center">
        <div class="container">
            <div class="container">
                <div class="items-center col">

                    <br>
                    <br>
                    <a type="submit"
                        href="{{ route('step02') }}/?school_name={{ $_REQUEST['school_name'] }}&current_grade={{ $_REQUEST['current_grade']}}&current_class={{ $_REQUEST['current_class'] }}&next_grade={{ $_REQUEST['next_grade'] }}&next_class={{ $_REQUEST['next_class'] }}"
                        class="btn btn-primary pull-left">3. 반편성하기(학생 배치 및 중복 이름 체크)</a>


                    <div id="flStackForm" class="items-center col-lg-12 layout-spacing layout-top-spacing">
                        <div class="items-center statbox widget box box-shadow">
                            <div class="widget-header itmes-center">
                                <div class="items-center row">
                                    <div class="items-center col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h2 class="mx-4 mt-4 item-center p-y4">{{ $school_name }} 의 반별 인원 현황</h2>
                                    </div>
                                </div>
                            </div>
                            <div class=" widget-content-area">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>

                                            <th>학년</th>
                                            <th>반</th>
                                            <th>총인원</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ( $school_info as $key => $value)
                                        <tr>
                                            <td>{{ $current_grade }}</td>
                                            <td>{{ $key }}</td>
                                            <td>{{ $value}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div id="flStackForm" class="items-center col-lg-12 layout-spacing layout-top-spacing">
                        <div class="items-center statbox widget box box-shadow">
                            <div class="widget-header itmes-center">
                                <div class="items-center row">
                                    <div class="items-center col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h2 class="mx-4 mt-4 item-center p-y4">{{ $school_name }} 의 데이터 입력 결과</h2>
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
