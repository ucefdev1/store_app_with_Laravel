@extends('app')
@section('content')

    <div class="row fixed-bottom bg-light shadow-sm" >

        <div class="col-md-12   my-2 px-5">
            <a class="btn btn-primary w-100 h-100 shadow-sm" style="border-radius: 25px" href="{{route('addProduct')}}">
                <div class="card bg-transparent " style="border-radius: 25px; border: none;">
                    <div class="row align-items-center">
                        <div class="col-12"><i class="fas fa-plus-square fa-1x"></i> اضافة منتج جديد</div>
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
                            <th>رقم المنتوج</th>
                            <th>اسم المنتوج</th>
                            <th>التفاصيل</th>
                        </tr>
                        </thead>
                        <tbody>


                            @foreach($products as $product)
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->title}}</td>

                                    <td class="text-end">
                                            <a  href="{{route('products.edit',$product)}}" class="btn btn-primary " ><i class="far fa-edit"></i></a>
                                            <a target="_blank"  href="{{\Illuminate\Support\Facades\URL::to('product/'.$product->id)}}" class="btn btn-success " ><i class="fas fa-eye"></i></a>
                                            <a  href="{{route('products.destroy',$product)}}" class="btn btn-danger " ><i class="fas fa-trash"></i></a>
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
