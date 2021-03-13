
@extends('layouts.dashboard')

@section('title', 'الصفحة الرئيسية')
@section('content')
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="mb-4">
                            <h2>رئيسية لوحة تحكم النظام</h2>
                            <small>الصفحة الرئيسية للوحة تحكم نظام تطبيق سدره</small>
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
                                <div class="ribbon-box green counter">100
                                    {{-- {{$projects}} --}}
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
                                <div class="ribbon-box green counter">20
                                    {{-- {{$clients}} --}}
                                </div>
                                <a href="{{url('Dashboard/clients')}}" class="my_sort_cut text-muted">
                                    <i class="icon-users"></i>
                                    <span>العملاء</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <div class="ribbon-box green counter">40
                                    {{-- {{$offers}} --}}
                                </div>
                                <a href="{{url('Dashboard/offers')}}" class="my_sort_cut text-muted">
                                    <i class="fa fa-gift"></i>
                                    <span>العروض</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <div class="ribbon-box green counter">10
                                    {{-- {{$services}} --}}
                                </div>
                                <a class="my_sort_cut text-muted" href="{{url('Dashboard/services')}}">
                                    <i class="icon-globe"></i>
                                    <span>الخدمات</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
