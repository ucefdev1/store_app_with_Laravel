@extends('app')
@section('content')

<div class="container" style="padding-top: 56px">
    <div class="row">
        <div class="col-md-12  mt-4 mb-2">
            <a class="btn btn-light w-100 h-100 p-4 shadow-sm" style="border-radius: 25px" href="{{route('orders')}}">
                <div class="card bg-light " style="border-radius: 25px; border: none;">
                    <div class="row align-items-center">
                        <div class="col-12"><i class="fas fa-store-alt fa-3x"></i></div>
                        <div class="col-12 h3">المبيعات</div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-12  my-2">
            <a class="btn btn-light w-100 h-100 p-4 shadow-sm" style="border-radius: 25px" href="{{route('products')}}">
                <div class="card bg-light " style="border-radius: 25px; border: none;">
                    <div class="row align-items-center">
                        <div class="col-12"><i class="fab fa-product-hunt fa-3x"></i></div>
                        <div class="col-12 h3">المنتوجات</div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-12  my-2">
            <a class="btn btn-light w-100 h-100 p-4 shadow-sm" style="border-radius: 25px" href="{{route('users')}}">
                <div class="card bg-light " style="border-radius: 25px; border: none;">
                    <div class="row align-items-center">
                        <div class="col-12"><i class="fas fa-users fa-3x"></i></div>
                        <div class="col-12 h3">المستخدمين</div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-12  my-2">
            <a class="btn btn-light w-100 h-100 p-4 shadow-sm" style="border-radius: 25px" href="{{route('settings')}}">
                <div class="card bg-light " style="border-radius: 25px; border: none;">
                    <div class="row align-items-center">
                        <div class="col-12"><i class="fas fa-cog fa-3x"></i></div>
                        <div class="col-12 h3">الاعدادات</div>
                    </div>
                </div>
            </a>
        </div>


    </div>
</div>
@endsection()
