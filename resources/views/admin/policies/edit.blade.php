@extends('admin.layouts.main')

@section('title')
    أضافة سياسة

@endsection

@section('css')

@endsection
@section('breadcrumb-item')
سياسات الموقع
@endsection
@section('breadcrumb-item2')
اضافة سياسة جديدة
@endsection

@section('breadcrumb-item-active')
    السياسات
@endsection

@section('page-title')
    أضافة سياسة
@endsection

@section('content')
         @if($errors->any())
        @foreach($errors->all() as $err)
            <p>{{$err}}</p>
            @endforeach
        @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>{{ session()->get('error') }} </strong>
                    </div>
                    @endif
                    <form method="post" action="{{route('update_policies',$policies->id)}}">
                        @csrf
                    <div class="row">

                            <div class="mb-3 col-md-6">
                                <label for="inputAddress" class="form-label">السياسة</label>
                                <input type="text" name="name" class="form-control" id="inputAddress" value="{{ $policies->police }}" placeholder="ماهي السياسة ؟">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputAddress" class="form-label">وصف السياسة</label>
                                <input type="text" name="des" class="form-control" id="inputAddress"  value="{{ $policies->description}}" placeholder="وصف السياسة">
                            </div>
                        <div class="mb-1 col-md-3">
                            <label for="inputAddress" class="form-label">الحالة</label>
                            <select name="is_active" class="form-select mb-3">
                                <option @if($policies->is_active==1) selected @endif value="1">نشط</option>
                                <option @if($policies->is_active==-1) selected @endif value="-1">غير نشط</option>


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


