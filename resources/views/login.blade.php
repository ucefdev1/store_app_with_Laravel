@extends('app')

@section('content')

    <div style="padding-top: 56px" class="container ">
        <div class="row ">
            <div class="col-md-4 offset-md-4">
                <div class="login-form  shadow mt-4 p-4">
                    @if(session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{session('status')}}
                        </div>
                        @endif

                    <form action="{{route('login')}}" method="post" class="row g-3 ">
                       @csrf
                        <h4>مرحبا</h4>
                        <div class="col-12">
                            <label>اسم الدخول</label>
                            <input type="text" name="username" class="form-control   @error('username') is-invalid @enderror " placeholder="اسم الدخول">
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                        <strong>المرجو ملئ هذا الحقل</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label>الباسوورد</label>
                            <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror " placeholder="الباسوورد">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>الباسوورد غير صحيح</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe" name="rememberlog">
                                <label class="form-check-label" for="rememberMe">تذكرني</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark float-end">تسجيل الدخول</button>
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
