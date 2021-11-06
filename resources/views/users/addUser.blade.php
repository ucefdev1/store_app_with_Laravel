@extends('app')

@section('content')


    <div style="padding-top: 56px" class="container ">
        <div class="row ">
            <div class="col-md-4 offset-md-4">
                <div class="login-form   mt-4 p-4">
                    <form action="{{route('addUser')}}" method="post" class="row g-3 ">
                        @csrf
                        <h4>اضافة مستخدم جديد</h4>
                        <div class="col-12">
                            <label>اسم الدخول</label>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror  "   placeholder="اسم الدخول" value="{{old('username')}}">
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                        <strong>هذا الاسم موجود سابقا, المرجو اختيار اسم دخول جديد.</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label>الباسوورد</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror " placeholder="الباسوورد">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>الباسوورد غير مطابق</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label>تأكيد الباسوورد</label>
                            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror " placeholder="تأكيد الباسوورد">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                        <strong>الباسوورد غير مطابق</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark float-end">اضافة مستخدم جديد</button>
                        </div>
                    </form>
                    <!--
                     <hr class="mt-4">
                     <div class="col-12">
                         <p class="text-center mb-0">Have not account yet? <a href="#">Signup</a></p>
                     </div>
                    -->
                </div>
            </div>
        </div>
    </div>


@endsection()
