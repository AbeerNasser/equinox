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

                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="table-responsive mb-4">
                            <table class="table table-hover js-basic-example dataTable table_custom spacing5 text-center">
                                <thead>
                                    <tr>
                                        <th>إسم المستخدم</th>
                                        <th>رقم الهاتف</th>
                                        <th>البريد الالكتروني</th>
                                        <th> نوع الرسالة</th>
                                        <th>الرسالة</th>
                                        <th>عمليات</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>إسم المستخدم</th>
                                        <th>رقم الهاتف</th>
                                        <th>البريد الالكتروني</th>
                                        <th> نوع الرسالة</th>
                                        <th>الرسالة</th>
                                        <th>عمليات</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @if (count($contacts)==0)
                                        <tr>
                                            <td colspan="6" class="text-center">No messages</td>
                                        </tr>
                                    @else
                                        @foreach ($contacts as $index=>$contact)
                                            <tr>
                                                <td>{{$contact->name}}</td>
                                                <td>{{$contact->phone}}</td>
                                                <td>{{$contact->email}}</td>
                                                <td>{{$contact->subject['name']}}</td>
                                                <td>{{$contact->message}}</td>
                                                <td>
                                                    <button type="button" data-id="{{$contact->id}}" class="btn btn-danger" data-toggle="modal" data-target="#deleteContactModal">حذف</button>
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
    <div class="modal fade" id="deleteContactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

@endsection
