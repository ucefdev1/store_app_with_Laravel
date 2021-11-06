@extends('app')
@section('content')

    <div class="row fixed-bottom bg-light shadow-sm" >

        <div class="col-md-12   my-2 px-5">
            <a class="btn btn-primary w-100 h-100 shadow-sm" style="border-radius: 25px" href="{{route('addColorPage')}}">
                <div class="card bg-transparent " style="border-radius: 25px; border: none;">
                    <div class="row align-items-center">
                        <div class="col-12"><i class="fas fa-plus fa-1x"></i> اضافة لون جديد</div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-12   my-2 px-5">
            <a class="btn btn-success w-100 h-100 shadow-sm" style="border-radius: 25px" href="{{route('dashboard')}}">
                <div class="card bg-transparent " style="border-radius: 25px; border: none;">
                    <div class="row align-items-center">
                        <div class="col-12"><i class="fas fa-home fa-1x"></i>الرئيسية</div>
                    </div>
                </div>
            </a>
        </div>

    </div>



    <div class="container" style="padding-top: 56px; padding-bottom: 38px;">

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>اللون</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($colors as $color)
                            <tr>
                                <td>{{$color->color}}</td>
                                <td class="text-end">
                                        <a type="submit" href="{{\Illuminate\Support\Facades\URL::to('colors/delete/'.$color->id)}}" class="btn btn-danger " ><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
