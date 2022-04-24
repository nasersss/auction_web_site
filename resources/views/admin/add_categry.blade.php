@extends('admin.layouts.main')

@section('title')
    أضافة صنف

@endsection

@section('css')

@endsection
@section('breadcrumb-item')
    اصناف السيارات
@endsection
@section('breadcrumb-item2')
    إضافة صنف جديد
@endsection

@section('breadcrumb-item-active')
    الأصناف
@endsection

@section('page-title')
    الأصناف
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-xl-6" data-select2-id="6">
                            <div class="mb-3">
                                <label for="projectname" class="form-label">أسم الشركة</label>
                                <input type="text" id="projectname" class="form-control" placeholder="Enter project name">
                            </div>

                            <div class="mb-3">
                                <label for="project-overview" class="form-label">Overview</label>
                                <textarea class="form-control" id="project-overview" rows="5" placeholder="Enter some brief about project.."></textarea>
                            </div>

                            <!-- Date View -->
                            <div class="mb-3 position-relative" id="datepicker1">
                                <label class="form-label">Start Date</label>
                                <input type="text" class="form-control" data-provide="datepicker" data-date-container="#datepicker1" data-date-format="d-M-yyyy" data-date-autoclose="true">
                            </div>

                            <div class="mb-3">
                                <label for="project-budget" class="form-label">Budget</label>
                                <input type="text" id="project-budget" class="form-control" placeholder="Enter project budget">
                            </div>



                        </div> <!-- end col-->


                    </div>
                    <!-- end row -->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>



@endsection

@section('script')

@endsection


