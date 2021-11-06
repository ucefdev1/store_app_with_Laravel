@extends('app')
@section('content')

    <div class="row fixed-bottom bg-light shadow-sm" >

        <div class="col-md-12   my-2 px-5">
            <a class="btn btn-primary w-100 h-100 shadow-sm" style="border-radius: 25px" href="{{route('addUser')}}">
                <div class="card bg-transparent " style="border-radius: 25px; border: none;">
                    <div class="row align-items-center">
                        <div class="col-12"><i class="fas fa-user-plus fa-1x"></i> اضافة مستخدم جديد</div>
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
                            <th>رقم المستخدم</th>
                            <th>اسم المستخدم</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->username}}</td>
                                @if($user->role!=='admin')
                                    <td class="text-end">
                                        <form action="{{route('destroy',$user)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" href="#" class="btn btn-danger " ><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
