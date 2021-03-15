@extends('layouts.dashboard')

@section('title', 'الموضوعات')
@section('content')

        <div class="section-body">
            <div class="container-fluid">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#addSubjModal">إضافة موضوع جديد</button><br />

                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="table-responsive mb-4">
                            <table class="table table-hover js-basic-example dataTable table_custom spacing5">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> اسم الموضوع</th>
                                        <th>عمليات</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th> اسم الموضوع</th>
                                        <th>عمليات</th>
                                    </tr>
                                </tfoot>

                                <tbody class="text-center">
                                    @if (count($subjects)==0)
                                        <tr>
                                            <td colspan="3" class="text-center">No subjects</td>
                                        </tr>
                                    @else
                                        @foreach ($subjects as $index=>$offer)
                                            <tr>
                                                <td>{{$index+1}}</td>
                                                <td>{{$offer->name}}</td>
                                                <td>
                                                    <button type="button" data-id="{{$offer->id}}" class="btn btn-secondary" data-toggle="modal" data-target="#editSubjModal">تعديل</button>
                                                    <button type="button" data-id="{{$offer->id}}" class="btn btn-success" data-toggle="modal" data-target="#deleteSubjModal">حذف</button>

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
    <div class="modal fade" id="deleteSubjModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">حذف عنصر</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>هل أنت متأكد من حذف هذا العرض ؟</p>
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
    <div class="modal fade" id="addSubjModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">إضافة موضوع جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addForm" enctype="multipart/form-data" action="{{url('Dashboard/subjects')}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">اسم الموضوع</label>
                            <input type="text" class="form-control" name="name" >
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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
    <div class="modal fade" id="editSubjModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تعديل الموضوع</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editForm" enctype="multipart/form-data" action="" method="post">
                    @csrf
                    @method('put')
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">اسم الموضوع</label>
                            <input type="text" class="form-control" name="name" >
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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
