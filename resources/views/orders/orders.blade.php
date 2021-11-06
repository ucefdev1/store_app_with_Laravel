@extends('app')
@section('content')





    <div class="row fixed-bottom bg-light shadow-sm" >

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
                            <th>رقم المبيعة</th>
                            <th>حالة المبيعة</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <th scope="row">{{$order->id}}</th>
                                @if($order->status==='unshipped')
                                    <td> <span class="badge bg-danger">لم يتم الشحن</span>
                                    </td>
                                @else
                                    <td>  <span class="badge bg-success">تـم الشحن</span>
                                    </td>
                                @endif
                                <td class="text-end">
                                    <a class="btn btn-primary " data-bs-toggle="collapse" href="#collapseExample{{$order->id}}" role="button" aria-expanded="false" aria-controls="collapseExample{{$order->id}}">
                                        <i class="fas fa-info"></i>  التفاصيل
                                    </a>
                                    <a class="btn btn-danger " href="{{route('deleteOrder',$order)}}"> <i class="fas fa-trash"></i> </a>
                                </td>
                            </tr>

                            <tr >
                                <td colspan="3" >
                                    <div class="collapse" id="collapseExample{{$order->id}}">
                                        <div class="card">
                                            <div class="card-header">
                                                التفاصيل
                                            </div>
                                            <div class="card-body">
                                                @if($order->status==='unshipped')
                                                    <p>هذه الطلبية لم يمت شحنها بعد</p>
                                                    <a class="btn btn-warning" href="{{route('makeShip',$order)}}">وضع المنتوج في الشحن <i class="fas fa-shipping-fast"></i></a>
                                                    <hr>
                                                @endif
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <div class="row"> المنتج</div>
                                                        <div class="row">الاسم</div>
                                                        <div class="row">المدينة</div>
                                                        <div class="row">العنوان</div>
                                                        <div class="row">رقم الهاتف</div>
                                                        @if($order->color!=='none')
                                                            <div class="row">اللون</div>
                                                        @endif
                                                        <div class="row">الثمن الاجمالي</div>

                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row"> {{$order->product_name}}</div>
                                                        <div class="row">{{$order->name}}</div>
                                                        <div class="row">{{$order->city}}</div>
                                                        <div class="row">{{$order->adresse}}</div>
                                                        <div class="row">{{$order->phone}}</div>
                                                        @if($order->color!=='none')
                                                            <div class="row">{{$order->color}}</div>
                                                        @endif
                                                        <div class="row">AED {{$order->price}} </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
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


