@extends('admin.layouts.main')

@section('title')
    أضافة مدينة

@endsection

@section('css')

@endsection
@section('breadcrumb-item')
المدن
@endsection
@section('breadcrumb-item2')
    إضافة مدينة جديد
@endsection

@section('breadcrumb-item-active')
    المدن
@endsection

@section('page-title')
    أضافة مدينة
@endsection

@section('content')
    @if($errors->any())
    @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
    @endif
    <div class="row">
        <div class="col-12">
            <div id="msg" class="alert alert-danger">
                <strong id="err-msg"></strong>
                </div>
            @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <strong>{{ session()->get('success') }} </strong>
                            </div>
                            @elseif(session()->has('error'))
                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <strong>{{ session()->get('success') }} </strong>
                            </div>
                            @endif
            <div class="card">
                <div class="card-body">
                    <form method="post" class="validation"  action="{{ route("store_delivery") }}" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="inputAddress" class="form-label">اسم المستلم   </label>
                            <input type="text" name="res_name" class="form-control" id="inputAddress" placeholder="مثال المكلا..">
                        </div>

                            <div class="mb-3 col-md-6">
                                <label for="inputAddress" class="form-label">بطاقة الهوية  </label>
                                <select required name="res_id_type" class="form-select mb-3">
                                    <option selected disabled>أختر  نوع بطاقة الهوية</option>
                                    <option value="بطاقة شخصية"> بطاقة شخصية </option>
                                    <option value="جواز سفر">  جواز سفر </option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputAddress" class="form-label">رقم الهوية   </label>
                                <input type="text" name="res_id_num" class="form-control" id="inputAddress" placeholder="مثال المكلا..">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputAddress" class="form-label">رقم الهاتف   </label>
                                <input type="text" name="phone" class="form-control" id="inputAddress" placeholder="مثال المكلا..">
                            </div>
                            <h2>
                                العنوان
                            </h2>
                            <div class="mb-3 col-md-6">
                                <label for="inputAddress" class="form-label">المحافظة  </label>
                                <select required id="state" class="form-select mb-3">
                                    <option selected disabled>أختر محافظة</option>

@foreach($states as $state)
<option value="{{ $state->id }}">{{ $state->name }}</option>

@endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="inputAddress" class="form-label">المدينة  </label>
                                <select required name="city" id="city" class="form-select mb-3">
                                    <option selected disabled>أختر مدينة</option>
                                    @isset($states)
                                    @foreach($states as $state)
                                    @foreach($state->city as $city)
                                    <option style="display: none;" class="citys state-{{$city->state_id}}" value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                    @endforeach
                                    @endisset
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
<script src="/assets/js/state_city.js"></script>
{{-- <script src="/assets/js/validation.js"></script> --}}

@endsection


