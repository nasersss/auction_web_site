<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div class="table-responsive">
                        <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="products-datatable">
                            <thead class="table-light">
                            <tr>

                                <th>شعار الماركة</th>
                                <th>اسم الصنف</th>
                                <th>الحالة</th>
                                <th style="width: 75px;">العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)


                            <tr>
                                <td class="table-user">
                                    {{$user->role}}
                                </td>
                                <td>{{$user->name}}</td>
                                <td>
                                    @if($user->is_active==1)
                                    <span class="badge badge-success-lighten">نشط</span>
                                    @else
                                        <span class="badge badge-danger-lighten">غير نشط</span>
                                    @endif
                                </td>




                                <td>
                                    <a href="edit_categories/{{$user->id}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="toggle_categories/{{$user->id}}" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
</body>
</html>