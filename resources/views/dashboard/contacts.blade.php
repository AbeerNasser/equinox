@extends('layouts.dashboard')

@section('title', 'رسائل التواصل')
@section('content')

        <div class="section-body">
            <div class="container-fluid">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#addUserModal">إضافة مستخدم جديد</button><br />

                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="table-responsive mb-4">
                            <table class="table table-hover js-basic-example dataTable table_custom spacing5 text-center">
                                <thead>
                                    <tr>
                                        <th>إسم المستخدم</th>
                                        <th>رقم الهاتف</th>
                                        <th>صورة المستخدم</th>
                                        <th>عمليات</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>إسم المستخدم</th>
                                        <th>رقم الهاتف</th>
                                        <th>صورة المستخدم</th>
                                        <th>عمليات</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @if (count($users)==0)
                                        <tr>
                                            <td colspan="5" class="text-center">No users</td>
                                        </tr>
                                    @else
                                        @foreach ($users as $index=>$user)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>
                                                    <a href="{{asset('uploads/clients/'.$user->image)}}" target="_blank"><img src="{{asset('uploads/clients/'.$user->image)}}" width="100px" /></a>
                                                </td>
                                                <td>
                                                    <button type="button" data-id="{{$user->id}}" class="btn btn-secondary" data-toggle="modal" data-target="#editUserModal">تعديل</button>
                                                    <button type="button" data-id="{{$user->id}}" class="btn btn-danger" data-toggle="modal" data-target="#deleteUserModal">حذف</button>
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
    <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">حذف عنصر</h5>
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

    <!-- Add Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">إضافة مستخدم جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addForm" action="{{url('Dashboard/clients')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">إسم المستخدم</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">رقم التليفون</label>
                            <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone">
                            @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                            <div class="form-group">
                                <label class="form-label">صورة العميل</label>
                                <input type="file" class="form-control image" name="image">
                            </div>
                            <div class="form-group">
                                <img src="{{asset('uploads/clients/default.jpg')}}" width="100px" class="img-thumbnail image-preview">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">حفظ البيانات</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعديل بيانات مستخدم سابق</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editForm" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">إسم المستخدم</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">رقم التليفون</label>
                            <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone">
                            @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">صورة العميل</label>
                            <input type="file" class="form-control image" name="image">
                        </div>
                        <div class="form-group">
                            <img src="{{asset('uploads/clients/default.jpg')}}" width="100px" class="img-thumbnail image-preview">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">حفظ البيانات</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
