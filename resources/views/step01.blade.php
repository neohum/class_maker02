
@extends('layouts.app')
@section('content')
<div>




<br>
<br>
<div class="container">
    <a type="submit"
        href="{{ route('store1') }}/?school_name={{ $_REQUEST['school_name'] }}&current_grade={{ $_REQUEST['current_grade']}}&next_class={{ $_REQUEST['next_class'] }}"
        class="btn btn-primary pull-left">편성결과 엑셀로 받기(내년반 기준)</a>

    <a type="submit"
        href="{{ route('store2') }}/?school_name={{ $_REQUEST['school_name'] }}&current_grade={{ $_REQUEST['current_grade']}}&next_class={{ $_REQUEST['next_class'] }}"
        class="btn btn-primary pull-left">편성결과 엑셀로 받기(현재반 기준)</a>
</div>




    <div class="container">
        <div class="container">
            <div class="container">
                <div class="col items-center">
                    <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing items-center">
                        <div class="statbox widget box box-shadow items-center">
                            <div class="widget-header itmes-center">
                                <div class="row items-center">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 items-center">
                                        <h2 class="mt-4 item-center mx-4 p-y4">{{ $school_name }} 의 반편성 결과</h2>
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

                                        @foreach ( $new_data as $row)

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
