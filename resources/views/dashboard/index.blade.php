
@extends('layouts.dashboard')

@section('title', 'الصفحة الرئيسية')
@section('content')
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="mb-4">
                            <h2>رئيسية لوحة تحكم النظام</h2>
                            <small>الصفحة الرئيسية للوحة تحكم نظام تطبيق EQUINOX</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-body">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <div class="ribbon-box green counter">
                                    {{$projects}}
                                </div>
                                <a href="{{url('Dashboard/projects')}}" class="my_sort_cut text-muted">
                                    <i class="icon-layers"></i>
                                    <span>المشاريع</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <div class="ribbon-box green counter">
                                    {{$leaders}}
                                </div>
                                <a href="{{url('Dashboard/leaders')}}" class="my_sort_cut text-muted">
                                    <i class="icon-users"></i>
                                    <span>المديرين</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <div class="ribbon-box green counter">
                                    {{$users}}
                                </div>
                                <a href="{{url('Dashboard/users')}}" class="my_sort_cut text-muted">
                                    <i class="fa fa-users"></i>
                                    <span>المشرفين</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <div class="ribbon-box green counter">
                                    {{$services}}
                                </div>
                                <a class="my_sort_cut text-muted" href="{{url('Dashboard/services')}}">
                                    <i class="icon-globe"></i>
                                    <span>الخدمات</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <div class="ribbon-box green counter">
                                    {{$newes}}
                                </div>
                                <a class="my_sort_cut text-muted" href="{{url('Dashboard/newes')}}">
                                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                    <span>الاخبار</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
