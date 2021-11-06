@extends('app')
@section('head')
    <!--JQUERYYYY-->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <!--TinyMCE
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>-->
@endsection
@section('content')


    <div style="padding-top: 56px" class="container ">
        <div class="row ">
            <div class="col-md-4 offset-md-4">
                <div class="login-form   mt-4 p-4">
                    <form action="{{route('products.update',$Product->id)}}" method="post" enctype="multipart/form-data" class="row g-3 ">
                        @csrf
                        <h4>تعديل المنتوج</h4>




                        <div class="col-12">
                            <label >صور المنتوج</label>
                            <div class="row">
                                @foreach($product_images as $pr_image)
                                    <div class="col-4"> <img style="height: 50px; width: 50px;" class="" src="{{\Illuminate\Support\Facades\URL::to($pr_image->image_path)}}">
                                        <div class="pt-1 text-center"><a href="{{route('products.edit.destroy.image',$pr_image->id)}}" style="" class="btn btn-danger btn-sm  "><i class="fas fa-trash"></i></a></div>
                                    </div>
                                @endforeach

                            </div>
                        </div>


                        <div class="col-12">
                            <label >اضافة صور جديدة للمنتوج</label>
                            <input class="form-control  @error('image') is-invalid @enderror " accept="image/png, image/gif, image/jpeg" name="image[]" type="file" id="formFileMultiple" multiple >
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                        <strong>الرجاء ملئ جميع الحقول المطلوبة</strong>
                                    </span>
                            @enderror
                        </div>

                        @if(count($product_colors)>0)

                            <div class="col-12">
                                <label >ألوان المنتوج</label>
                                <div class="row">
                                    @foreach($product_colors as $pr_color)
                                        <div class="col-12 m-1">
                                            <div class="row">
                                                <div class="col-6">   <p class="d-inline">{{$pr_color->color}}</p></div>
                                                <div class="col-6 text-end">   <a href="{{route('products.edit.destroy.color',$pr_color->id)}}" style="" class="btn btn-warning btn-sm  "><i class="fas fa-trash"></i></a> </div>
                                            </div>

                                        </div>
                                    @endforeach

                                </div>
                            </div>

                        @endif




                        <div class="col-12">
                            <input class="form-check-input checkme" type="checkbox" id="colorYes"  name="colorYes" value="{{old('colorYes')}}">
                            <label class="form-check-label" for="colorYes">هل تريد اضافة لون أخر؟ </label>
                        </div>
                        @error('colors')
                        <span class="invalid-feedback" role="alert">
                                        <strong>الرجاء اختيار الألوان</strong>
                                    </span>
                        @enderror



                        <div class="col-12">
                            <div id="autoUpdate" class="autoUpdate" style="display: none;">
                                <div class="colors">
                                    <div class="card">
                                        <div class="card-body">
                                            @foreach($colors as $color)
                                                <input type="checkbox" name="colors[]" id="{{$color->id}}" value="{{$color->color}}"/>
                                                <label class="form-check-label" for="{{$color->id}}">{{$color->color}} </label><br>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>





                        <div class="col-12">
                            <label>عنوان المنتوج</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror  "   placeholder="عنوان المنتوج" value="{{$Product->title}}">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>الرجاء ملئ جميع الحقول المطلوبة</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label>السعر السابق</label>
                            <input type="number" step="0.01" name="old_price" class="form-control @error('old_price') is-invalid @enderror  "   placeholder="السعر السابق" value="{{$Product->old_price}}">
                            @error('old_price')
                            <span class="invalid-feedback" role="alert">
                                        <strong>الرجاء ملئ جميع الحقول المطلوبة</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label>السعر الان</label>
                            <input type="number" step="0.01" name="new_price" class="form-control @error('new_price') is-invalid @enderror  "   placeholder="السعر الان" value="{{$Product->new_price}}">
                            @error('new_price')
                            <span class="invalid-feedback" role="alert">
                                        <strong>الرجاء ملئ جميع الحقول المطلوبة</strong>
                                    </span>
                            @enderror
                        </div>




                        <div class="col-12">
                            <label>تفاصيل المنتج</label>
                            <textarea id="mytextarea" rows="4"  type="text" name="details" class="form-control @error('details') is-invalid @enderror  "   placeholder="تفاصيل المنتج" >{{$Product->details}}</textarea>
                            @error('details')
                            <span class="invalid-feedback" role="alert">
                                        <strong>الرجاء ملئ جميع الحقول المطلوبة</strong>
                                    </span>
                            @enderror
                        </div>


                        <div class="col-12">
                            <label>رقم الواتساب</label>
                            <input type="number" name="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror  "   placeholder="رقم الواتصاب" value="{{$Product->whatsapp}}">
                            @error('whatsapp')
                            <span class="invalid-feedback" role="alert">
                                        <strong>الرجاء ملئ جميع الحقول المطلوبة</strong>
                                    </span>
                            @enderror
                        </div>




                        <div class="col-12">
                            <label>رابط الانستاغرام</label>
                            <input type="text" name="instagram" class="form-control @error('instagram') is-invalid @enderror  "   placeholder="رابط الانستاغرام" value="{{$Product->instagram}}">
                            @error('instagram')
                            <span class="invalid-feedback" role="alert">
                                        <strong>الرجاء ملئ جميع الحقول المطلوبة</strong>
                                    </span>
                            @enderror
                        </div>


                        <div class="col-12">
                            <label>الايمايل</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror  "   placeholder="الايمايل" value="{{$Product->email}}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>الرجاء ملئ جميع الحقول المطلوبة</strong>
                                    </span>
                            @enderror
                        </div>






                        <div class="col-12">
                            <label>ايمايل الاشعارات</label>
                            <input type="email" name="notif" class="form-control @error('notif') is-invalid @enderror  "   placeholder="ايمايل الاشعارات" value="{{$Product->notif}}">
                            @error('notif')
                            <span class="invalid-feedback" role="alert">
                                        <strong>الرجاء ملئ جميع الحقول المطلوبة</strong>
                                    </span>
                            @enderror
                        </div>


                        <div class="col-12">
                            <label>سنابشات بكسل</label>
                            <input type=text" name="sanp_pixel" class="form-control @error('sanp_pixel') is-invalid @enderror  "   placeholder="سنابشات بكسل" value="{{$Product->sanp_pixel}}">
                            @error('sanp_pixel')
                            <span class="invalid-feedback" role="alert">
                                        <strong>الرجاء ملئ جميع الحقول المطلوبة</strong>
                                    </span>
                            @enderror
                        </div>


                        <div class="col-12">
                            <label>فايسبوك بكسل</label>
                            <input type="text" name="facebook_pixel" class="form-control @error('facebook_pixel') is-invalid @enderror  "   placeholder="فايسبوك بكسل" value="{{$Product->facebook_pixel}}">
                            @error('facebook_pixel')
                            <span class="invalid-feedback" role="alert">
                                        <strong>هذا الاسم موجود سابقا, المرجو اختيار اسم دخول جديد.</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark float-end">تحديث بيانات المنتوج</button>
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

@section('foot')
    <!--MY JS-->
    <script src="{{asset('js/main.js')}}"></script>


@endsection
