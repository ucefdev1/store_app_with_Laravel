@extends('app')
@section('content')

    <div class="container" style="padding-top: 56px">

        <div class="row fixed-bottom bg-light shadow-sm" >

            <div class="col-md-12   my-2 px-5">
                <a class="btn btn-primary w-100 h-100 shadow-sm" style="border-radius: 25px" href="{{route('dashboard')}}">
                    <div class="card bg-transparent " style="border-radius: 25px; border: none;">
                        <div class="row align-items-center">
                            <div class="col-12"><i class="fas fa-home fa-1x"></i>الرئيسية</div>
                        </div>
                    </div>
                </a>
            </div>

        </div>


        <div class="row">
            <div class="col-md-12  mt-4 mb-2">
                <a class="btn btn-light w-100 h-100 p-4 shadow-sm" style="border-radius: 25px" href="{{route('colors')}}">
                    <div class="card bg-light " style="border-radius: 25px; border: none;">
                        <div class="row align-items-center">
                            <div class="col-12"><i class="fas fa-palette fa-3x"></i></div>
                            <div class="col-12 h3">الألوان</div>
                        </div>
                    </div>
                </a>
            </div>



        </div>
    </div>
@endsection()
