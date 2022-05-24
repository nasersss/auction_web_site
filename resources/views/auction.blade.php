<!DOCTYPE html>
<html lang="en">

<head>
    <title>المزادات المتوفؤة</title>
    @include('header.head')
    <style>
        @import url(../fonts/DIN.css);
        .btn-search{
            font-family: DIN-light, sans-serif, Arial;
        }
        .fd-select {
            display: block;
            width: 100%;
            padding: 0.45rem 2.5rem 0.45rem 0.9rem;
            -moz-padding-start: calc(0.9rem - 3px);
            font-size: 0.9rem;
            font-weight: 400;
            line-height: 1.5;
            color: #6c757d;
            background-color: #fff;
            background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e);
            background-repeat: no-repeat;
            background-position: right 0.9rem center;
            background-size: 16px 12px;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            font-family: DIN-light, sans-serif, Arial;
            
        }

    </style>
</head>

<body>
    @extends('master')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="s007 mt-3">
                        <form method="post" action="{{ route('auction') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="inner-form">
                                <div class="basic-search">
                                    <div class="input-field">
                                        <div class="icon-wrap">
                                            <img src="/assets/images/search.png" width="30">
                                        </div> <input id="search" type="text" placeholder="بحث..." />

                                        <div class="result-count" onclick="myFunction()">
                                            <img src="/assets/images/Advanced_Search.png" width="30">بحث متقدم
                                        </div>
                                    </div>
                                </div>
                                <div class="advance-search" id="myDIV">

                                    <div class="row">
                                        <div class="input-field">
                                            <label for="inputAddress" class="form-label"
                                                style="text-align: right;">ماركة المركبة</label>
                                            <div>
                                                <select name="category_id" class="fd-select">
                                                    <option selected disabled value="">أختر احدى الماركات</option>
                                                    @isset($categories)
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <label for="inputAddress" class="form-label" style="text-align: right;">لون
                                                المركبة</label>
                                            <div>
                                                <select data-trigger="" name="color" class="fd-select">
                                                    <option selected disabled value="">أختر احد الاللوان</option>
                                                    <option value="أزرق">أزرق</option>
                                                    <option value="أحمر">أحمر</option>
                                                    <option value="أخضر">أخضر</option>
                                                    <option value="رمادي">رمادي</option>
                                                    <option value="أسود">أسود</option>
                                                    <option value="أبيض">أبيض</option>
                                                    <option value="بنفجسي">بنفجسي</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <label for="inputAddress" class="form-label" style="text-align: right;">نوع
                                                المركبة</label>
                                            <div>
                                                <select name="vehicle_type" class="fd-select">
                                                    <option value="" selected disabled>أختر نوع المركبة</option>
                                                    @isset($vehicleTypes)
                                                        @foreach ($vehicleTypes as $vehicleType)
                                                            <option value="{{ $vehicleType->id }}">{{ $vehicleType->name }}
                                                            </option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="input-field">
                                            <label for="inputAddress" class="form-label"
                                                style="text-align: right;">المحافظة</label>
                                            <div>
                                                <select id='state' name="states" class="fd-select mb-3">
                                                    <option selected disabled>أختر محافظة</option>
                                                    @isset($states)
                                                        @foreach ($states as $state)
                                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <label for="inputAddress" class="form-label"
                                                style="text-align: right;">المدينة</label>
                                            <div>
                                                <select data-trigger="" name="address" id='city' class="fd-select mb-3">
                                                    <option value="" selected disabled>أختر مدينة</option>
                                                    @isset($states)
                                                        @foreach ($states as $state)
                                                            @foreach ($state->city as $city)
                                                                <option style="display: none !important;"
                                                                    class="citys state-{{ $city->state_id }}"
                                                                    value="{{ $city->id }}">{{ $city->name }}</option>
                                                            @endforeach
                                                        @endforeach
                                                    @endisset
                                                </select>
                                            </div>
                                        </div>
                                        <script>
                                            const states = document.getElementById('state');
                                            const city = document.getElementById('city');
                                            states.addEventListener('click', function() {
                                                city.value = '.أختر مدينة ';
                                                var citys = document.getElementsByClassName('citys');
                                                for (let index = 0; index < citys.length; index++) {
                                                    citys[index].style.display = 'none';
                                                }
                                                citys = document.getElementsByClassName('state-' + states.value);
                                                for (let index = 0; index < citys.length; index++) {
                                                    citys[index].style.display = 'block';
                                                }
                                            })
                                        </script>
                                        <div class="input-field">
                                            <label for="inputAddress" class="form-label" style="text-align: right;">تارخ
                                                ووقت انتهاء المزاد</label>
                                            <div class="input-select mb-3">
                                                <input name="date_of_end_auction" type="datetime-local"
                                                    class="fd-select" style="margin: 0;padding: 0;height: 38px;"
                                                    id="inputAddress" placeholder="مثال باص ...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="justify-content: end;">
                                        <div class="input-field">
                                            <button class="btn-search">بحث</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="row" id="ads">
                <!-- Category Card -->


                @if ($auctions != null)
                    @foreach ($auctions as $auction)
                        <div class=" col-12  col-md-6  col-lg-4 my-3">
                            <div class="card rounded">
                                <div class="card-image">

                                    @if ($auction->state == 'مستخدم')
                                        <div class="card-notify-year" style="background-color:#6c76e4">

                                            {{ 'مستخدم' }}
                                        </div>
                                    @else
                                        <div class="card-notify-year" style="background-color:#ff4444">
                                            {{ 'جديد' }}
                                        </div>
                                    @endif


                                    @foreach ($auction->auctionImage as $image)
                                        @php
                                            $im = explode('_', $image->image);
                                        @endphp
                                        @if ($im[1] == 'main')
                                            <img class="img-fluid" src="{{ $image->image }}" alt="" />
                                        @endif
                                    @endforeach
                                </div>
                                <div class="card-image-overlay m-auto">
                                    <span class="card-detail-badge">{{ $auction->model }}</span>
                                    <span class="card-detail-badge">{{ $auction->city->state->name }} -
                                        {{ $auction->city->name }}</span>
                                    <span class="card-detail-badge">{{ $auction->odometer }}km</span>
                                </div>
                                <div class="card-body text-center">
                                    <div class="ad-title m-auto">
                                        <h5>{{ $auction->name }}</h5>
                                        <h2>العطاء الحالي ${{ $auction->stare_price }}</h2>
                                        <h2>تاريخ انتهاء المزاد</h2>
                                        <h2 id=""> {{ $auction->date_of_end_auction }}</h2>

                                    </div>
                                    <a class="ad-btn" href="{{ route('action_detail', $auction->id) }}">مشاهدة
                                        التفاصيل</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h1>لاتوجد مزادات حالية</h1>
                @endisset


        </div>

    </div>
@endsection
<script src="/assets/js/search.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
