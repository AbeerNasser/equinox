
@extends('layouts.dashboard')

@section('title', 'المديرين')
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
            <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#addModal">إضافة مدير جديد </button><br />
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="table-responsive mb-4">
                        <table class="table table-hover js-basic-example dataTable table_custom spacing5">
                            <thead>
                                <tr>
                                        <th width="10%">#</th>
                                        <th width="20%">صورة المدير</th>
                                        <th width="20%">إسم المدير</th>
                                        <th width="30%">وظيفة المدير</th>
                                        <th width="20%">عمليات</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                        <th>#</th>
                                        <th>صورة المدير</th>
                                        <th>إسم المدير</th>
                                        <th>وظيفة المدير</th>
                                        <th>عمليات</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                    @if (count($leaders)==0)
                                        <tr>
                                            <td colspan="5" class="text-center">No leaders</td>
                                        </tr>
                                    @else
                                        @foreach ($leaders as $index=>$leader)
                                            <tr>
                                                <td>{{$index+1}}</td>
                                                <td>
                                                    <a href="{{asset('uploads/leaders/'.$leader->photo)}}" target="_blank"><img src="{{asset('uploads/leaders/'.$leader->photo)}}" width="100px" /></a>
                                                </td>
                                                <td>{{$leader->name}}</td>
                                                <td>{{$leader->description}}</td>
                                                <td>
                                                   <button type="button" data-id="{{$leader->id}}" class="btn btn-success" data-toggle="modal" data-target="#editModalleader">تعديل</button>
                                                   <button type="button" data-id="{{$leader->id}}" class="btn btn-danger" data-toggle="modal" data-target="#deleteModalleader">حذف</button>
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
    <div class="modal fade" id="deleteModalleader" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">حذف المدير</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>هل أنت متأكد من حذف هذا المدير ؟</p>
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
    <div class="modal fade" id="editModalleader" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعديل بيانات المدير</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editForm" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                            <div class="form-group mb-0">
                                <label class="form-label">إسم المدير</label>
                                <input type="text" class="form-control" name="name" />
                            </div>
                            <div class="form-group mb-0">
                                <label class="form-label">وظيفة المدير</label>
                                <input type="text" class="form-control" name="description" />
                            </div>
                            <div class="form-group">
                                <label class="form-label">صورة المدير</label>
                                <input type="file" class="form-control image" name="photo">
                            </div>
                            <div class="form-group">
                                <img src="{{asset('uploads/leaders/default.png')}}" width="100px" class="img-thumbnail image-preview">
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
                    <h5 class="modal-title" id="exampleModalLabel">إضافة مدير جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addForm" action="{{url('Dashboard/leaders')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="modal-body">
                            <div class="form-group ">
                                <label class="form-label">إسم المدير</label>
                                <input type="text" class="form-control" name="name" />
                            </div>
                            <div class="form-group">
                                <label class="form-label">وظيفة المدير</label>
                                <input type="text" class="form-control" name="description" />
                            </div>
                            <div class="form-group">
                                <label class="form-label">صورة المدير</label>
                                <input type="file" class="form-control image" name="photo">
                            </div>
                            <div class="form-group">
                                <img src="{{asset('uploads/leaders/default.png')}}" width="100px" class="img-thumbnail image-preview">
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
