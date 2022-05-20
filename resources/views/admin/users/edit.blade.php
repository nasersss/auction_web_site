@extends('admin.layouts.main')

@section('title')
    تعديل المستخدمين

@endsection

@section('css')

@endsection
@section('breadcrumb-item')
بيانات المستخدمين
@endsection
@section('breadcrumb-item2')
تحديث بيانات المستخدمين
@endsection

@section('breadcrumb-item-active')
    المستخدمين
@endsection

@section('page-title')
     تحديث المستخدمين
@endsection

@section('content')
         @if($errors->any())
        @foreach($errors->all() as $err)
            <p>{{$err}}</p>
            @endforeach
        @endif
    <div class="row">
        <div class="col-12">
            @include('message')
            <div class="card">
                <div class="card-body">
                    {{-- @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>{{ session()->get('error') }} </strong>
                    </div>
                    @endif --}}
                    <form method="post" action="{{route('update_users',$users->id)}}">
                        @csrf
                    <div class="row">

                            <div class="mb-3 col-md-6">
                                <label for="inputAddress" class="form-label">اسم المستخدم</label>
                                <input type="text" name="name" class="form-control" disabled id="inputAddress" value="{{ $users->name }}" placeholder="اسم المستخدم">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputAddress" class="form-label">الايميل</label>
                                <input type="text" name="des" class="form-control" disabled id="inputAddress"  value="{{ $users->email}}" >
                            </div>
                            <div class="mb-1 col-md-3">
                                <label for="inputAddress" class="form-label">الصلاحية</label>
                                <select name="role" class="form-select mb-3">
                                    <option @if($users->role==1) selected @endif value="1">مدير </option>
                                    <option @if($users->role==2) selected @endif value="2">مستخدم</option>

                                </select>
                            </div>
                        <div class="mb-1 col-md-3">
                            <label for="inputAddress" class="form-label">الحالة</label>
                            <select name="is_active" class="form-select mb-3">
                                <option @if($users->is_active==1) selected @endif value="1">نشط</option>
                                <option @if($users->is_active==-1) selected @endif value="-1">غير نشط</option>


                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">إضافة</button>

                    </div>
                    </form>
                    <!-- end row -->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>



@endsection

@section('script')

@endsection


