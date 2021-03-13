
@extends('layouts.dashboard')

@section('title', 'المشاريع')
@section('content')

    <div class="section-body">
        <div class="container-fluid">
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $err)
                        <li>{{$err}}</li>
                    @endforeach
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#addModal">إضافة مشروع جديد </button><br />
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="table-responsive mb-4">
                        <table class="table table-hover js-basic-example dataTable table_custom spacing5">
                            <thead>
                                    <tr>
                                        <th width="10%">#</th>
                                        <th width="20%">صورة المشروع</th>
                                        <th width="20%">إسم المشروع</th>
                                        <th width="30%">تفاصيل المشروع</th>
                                        <th width="20%">عمليات</th>
                                    </tr>
                            </thead>
                            <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>صورة المشروع</th>
                                        <th>إسم المشروع</th>
                                        <th>تفاصيل المشروع</th>
                                        <th>عمليات</th>
                                    </tr>
                            </tfoot>
                            <tbody>
                                    @if (count($projects)==0)
                                        <tr>
                                            <td colspan="5" class="text-center">No Projects</td>
                                        </tr>
                                    @else
                                        @foreach ($projects as $index=>$project)
                                            <tr>
                                                <td>{{$index+1}}</td>
                                                <td>
                                                    <a href="{{asset('uploads/projects/'.$project->image)}}" target="_blank"><img src="{{asset('uploads/projects/'.$project->image)}}" width="100px" /></a>
                                                </td>
                                                <td>{{$project->name}}</td>
                                                <td>{{$project->description}}</td>
                                                <td>
                                                   <button type="button" data-id="{{$project->id}}" class="btn btn-success" data-toggle="modal" data-target="#editModalproject">تعديل</button>
                                                   <button type="button" data-id="{{$project->id}}" class="btn btn-danger" data-toggle="modal" data-target="#deleteModalproject">حذف</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteModalproject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">حذف خدمة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>هل أنت متأكد من حذف هذا المشروع ؟</p>
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" action="" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">تأكيد الحذف</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editModalproject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعديل خدمة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editForm" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                            <div class="form-group">
                                <label class="form-label">صورة المشروع</label>
                                <input type="file" class="form-control image" name="image">
                            </div>
                            <div class="form-group">
                                <img src="{{asset('uploads/projects/default.jpg')}}" width="100px" class="img-thumbnail image-preview">
                            </div>
                            <div class="form-group mb-0">
                                <label class="form-label">إسم المشروع</label>
                                <input type="text" class="form-control" name="name" />
                            </div>
                            <div class="form-group mb-0">
                                <label class="form-label">تفاصيل المشروع</label>
                                <textarea class="form-control" rows="5" name="description"></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">تعديل البيانات</button>
                        <button type="button" class="btn btn-secondary mx-2" data-dismiss="modal">إلغاء</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">إضافة خدمة جديدة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addForm" action="{{url('Dashboard/projects')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="modal-body">
                            <div class="form-group ">
                                <label class="form-label">إسم المشروع</label>
                                <input type="text" class="form-control" name="name" />
                            </div>
                            <div class="form-group">
                                <label class="form-label">صورة المشروع</label>
                                <input type="file" class="form-control image" name="image">
                            </div>
                            <div class="form-group">
                                <img src="{{asset('uploads/projects/default.jpg')}}" width="100px" class="img-thumbnail image-preview">
                            </div>
                            <div class="form-group">
                                <label class="form-label">تفاصيل المشروع</label>
                                <textarea class="form-control" rows="5" name="description"></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">حفظ البيانات</button>
                        <button type="button" class="btn btn-secondary mx-2" data-dismiss="modal">إلغاء</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
