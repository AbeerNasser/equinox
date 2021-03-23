
@extends('layouts.dashboard')

@section('title', 'الاخبار')
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
            <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#addModal">إضافة خبر جديد</button><br />
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="table-responsive mb-4">
                        <table class="table table-hover js-basic-example dataTable table_custom spacing5">
                            <thead>
                                    <tr>
                                        <th>#</th>
                                        <th >صورة الخبر</th>
                                        <th >عنوان الخبر</th>
                                        <th >تفاصيل الخبر</th>
                                        <th >كاتب الخبر</th>
                                        <th >عمليات</th>
                                    </tr>
                            </thead>
                            <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th >صورة الخبر</th>
                                        <th >عنوان الخبر</th>
                                        <th >تفاصيل الخبر</th>
                                        <th >كاتب الخبر</th>
                                        <th >عمليات</th>
                                    </tr>
                            </tfoot>
                            <tbody>
                                    @if (count($newes)==0)
                                        <tr>
                                            <td colspan="6" class="text-center">No newes</td>
                                        </tr>
                                    @else
                                        @foreach ($newes as $index=>$newe)
                                            <tr>
                                                <td>{{$index+1}}</td>
                                                <td>
                                                    <a href="{{asset('uploads/newes/'.$newe->image)}}" target="_blank"><img src="{{asset('uploads/newes/'.$newe->image)}}" width="100px" /></a>
                                                </td>
                                                <td>{{$newe->title}}</td>
                                                <td>{{$newe->description}}</td>
                                                <td>{{$newe->user['name']}}</td>
                                                <td>
                                                   <button type="button" data-id="{{$newe->id}}" class="btn btn-success" data-toggle="modal" data-target="#editModalnewe">تعديل</button>
                                                   <button type="button" data-id="{{$newe->id}}" class="btn btn-danger" data-toggle="modal" data-target="#deleteModalnewe">حذف</button>
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
    <div class="modal fade" id="deleteModalnewe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">حذف الخبر</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>هل أنت متأكد من حذف هذا العنصر ؟</p>
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
    <div class="modal fade" id="editModalnewe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label class="form-label">صورة الخبر</label>
                            <input type="file" class="form-control image" name="image">
                        </div>
                        <div class="form-group">
                            <img src="{{asset('uploads/newes/default.png')}}" width="100px" class="img-thumbnail image-preview">
                        </div>
                            <div class="form-group mb-0">
                                <label class="form-label">عنوان الخبر</label>
                                <input type="text" class="form-control" name="title" />
                            </div>
                            <div class="form-group mb-0">
                                <label class="form-label">تفاصيل الخبر</label>
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
                    <h5 class="modal-title" id="exampleModalLabel">إضافة خبر جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addForm" action="{{url('Dashboard/newes')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="modal-body">
                            <div class="form-group ">
                                <label class="form-label">عنوان الخبر</label>
                                <input type="text" class="form-control" name="title" />
                            </div>
                            <div class="form-group">
                                <label class="form-label">صورة الخبر</label>
                                <input type="file" class="form-control image" name="image">
                            </div>
                            <div class="form-group">
                                <img src="{{asset('uploads/newes/default.png')}}" width="100px" class="img-thumbnail image-preview">
                            </div>
                            <div class="form-group">
                                <label class="form-label">تفاصيل الخبر</label>
                                <textarea class="form-control" rows="5" name="description"></textarea>
                            </div>
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
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
