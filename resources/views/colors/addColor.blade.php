@extends('app')

@section('content')


    <div style="padding-top: 56px" class="container ">
        <div class="row ">
            <div class="col-md-4 offset-md-4">
                <div class="login-form   mt-4 p-4">
                    <form action="{{route('addColor')}}" method="post" class="row g-3 ">
                        @csrf
                        <h4>اضافة لون جديد</h4>
                        <div class="col-12">
                            <input type="text" name="color" class="form-control @error('color') is-invalid @enderror  "   placeholder="" value="{{old('username')}}">
                            @error('color')
                            <span class="invalid-feedback" role="alert">
                                        <strong>المرجو ملئ هذا الحقل</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-dark float-end">اضافة لون جديد</button>
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
