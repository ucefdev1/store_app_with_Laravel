<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style1.css')}}">
    <title>{{$product->title}}</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Snap Pixel Code -->
    @if($product->sanp_pixel!=='')
        {{$product->sanp_pixel}}
    @endif
    <!-- End Snap Pixel Code -->
    <!-- Facebook Pixel Code -->
    @if(    $product->facebook_pixel!=='')
    {{$product->facebook_pixel}}
   @endif
    <!-- End Facebook Pixel Code -->

</head>



<body>


<main class="main-bg">
    <a class="floating-icon" href="https://api.whatsapp.com/send?phone={{$product->whatsapp}}">
        <h5 class="text-center px-3 py-2 "><i class="fab fa-whatsapp"></i> Whatsapp Us</h5>
    </a>
    <!--Sticky header-->
    <header class="site-header sticky-top py-1" style="background-color: #af0418;">
        <nav class=" d-flex flex-column flex-md-row justify-content-between" style="min-height: 10px; ">
        </nav>
    </header>
    <!--Header Section-->
    <div class="pt-4 position-relative overflow-hidden text-center ">
        <div class="row">
            <div class="col-4">
                <div class="row">
                    <img src="{{asset('img/UAE_Flag_Icon (1).svg')}}" width="75px" height="50px" style="display: block; margin: auto; height: 50px; width: 75px;">
                </div>
                <div class="row fw-bold">
                    <span>jumeirah, Dubai</span>
                    <span>UAE</span>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-center">

                <!--IMAGE
         <img src="../assets/img/Bazar-Logo.svg" width="180" height="80" style="margin-left: -25px;">-->
                <h5 class="pt-3" style="color: #af0418;"></h5>
            </div>

            <div class="col-4">
                <div class="row fw-bold">
                    <span>Contact Us</span>
                </div>
                <div>
                    <a href="{{$product->instagram}}" style="color: white;">
                        <img src="{{asset('/img/instagram.svg')}}" width="30px" height="30px">
                    </a>
                    <a href="mailto:{{$product->email}}" style="color: white;">
                        <img src="{{asset('/img/email.svg')}}" width="30px" height="30px">
                    </a>
                    <a href="https://api.whatsapp.com/send?phone={{$product->whatsapp}}" style="color: white;">
                        <img src="{{asset('/img/call.svg')}}" width="30px" height="30px">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--Producat Info-->


    <div class="position-relative overflow-hidden p-3 text-center">
        <div class="mx-auto">
            <h3 style="color: #af0418;" class="display-6 fw-bold">{{$product->title}}</h3>
        </div>
    </div>

    <!-- Slider main container -->


    <div id="carouselExampleIndicators" class="carousel slide p-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach($product_images as $key => $image)
                @if ($key === 0)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" class="active" aria-current="true" aria-label="Slide {{$key}}"></button>
                @else
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" aria-label="Slide {{$key}}"></button>
                @endif

            @endforeach
        </div>
        <div class="carousel-inner">

            @foreach($product_images as $key => $image)
                @if ($key === 0)
                    <div class="carousel-item active">
                        <img src="{{\Illuminate\Support\Facades\URL::to($image->image_path)}}" class="d-block w-100" alt="...">
                    </div>
                @else
                    <div class="carousel-item ">
                        <img src="{{\Illuminate\Support\Facades\URL::to($image->image_path)}}" class="d-block w-100" alt="...">
                    </div>
                @endif


            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--2nd Title-->
    <div class="container pb-2">
        <h4 style="color: #af0418;" class="text-center"></h4>
    </div>

    <!--old price-->

    <div class="container" dir="rtl">
        <h1 class="text-center"> السعر السابق {{$product->old_price}} درهم / AED</h1>
    </div>

    <!--new price-->
    <div class="container" dir="rtl">
        <h1 class="text-center " style="background-color: #af0418; color: white; padding: 25px; margin: 30px; border-radius: 25px;">السعر الآن {{$product->new_price}} درهم / AED</h1>
    </div>

    <!--Read More-->
    <div class="container-fluid">
        <h1 dir="rtl">تفاصيل المنتج:</h1>
        <div class="mx-auto pt-2">
            <p>{{$product->title}}</p>
        </div>
        <div class="mx-auto pt-2" dir="rtl">
            <button id="readMore" class="btn b-btn-outline active w-auto display-6 mb-5" style=" font-weight: 400 !important; font-size: 11px; background-color: #af0418; color: white;" onclick="showHideModal()" dir="rtl">اقرأ المزيد <i class="fas fa-arrow-down"></i></button>
        </div>
        <div id="product_description" class="mx-auto pt-2" style="display: block;" dir="rtl">
            <p style="white-space: pre-line"> {{$product->details}}</p>
        </div>
    </div>

    <!--delivery-->
    <div class="container-fluid">
        <div class="w-100 align-items-center">
            <img class="img img-fluid w-100 " src="{{asset('img/di.png')}}" alt="">
        </div>

    </div>
    <!--form-->

    <div class="container-fluid pt-5" dir="rtl">
        <form method="post" action="{{route('order',$product)}}">
            @csrf
            <div>

            </div>

            <div class="form-group  p-1">
                <input type="text" class="form-control input_x text-right" placeholder="Name / الاسم" name="name" id="name" required>
            </div>
            <div class="form-group  p-1">
                <input type="number" class="form-control input_x text-right" placeholder="Mobile / رقم التلفون" name="phone" id="phone" required>
            </div>
            <div class="form-group p-1">
                <select class="form-control input_x" name="city" id="city" required>
                    <option value="" disabled selected>Emirate/City الإمارة</option>
                    <option value="Abu Dhabi  / اْبوظبي">Abu Dhabi / اْبوظبي</option>
                    <option value="Dubai / دبي">Dubai / دبي</option>
                    <option value="Al Ain / العين">Al Ain / العين</option>
                    <option value="Sharjah / الشارقة">Sharjah / الشارقة</option>
                    <option value="Ajman / عجمان">Ajman / عجمان</option>
                    <option value="Ras Al-Khaimah / راس الخيمة">Ras Al-Khaimah / راس الخيمة</option>
                    <option value="Fujairah / الفجيرة">Fujairah / الفجيرة</option>
                </select>
            </div>

            @if(count($product->colors)>0)

            <div class="form-group p-1">
                <select class="form-control input_x" name="color" id="color" required>
                    <option value="" disabled selected>اللون / color</option>

                        @foreach($product->colors as $color)
                            <option value="{{$color->color}}">{{$color->color}}</option>
                        @endforeach

                </select>
            </div>
            @endif


            <div class="form-group p-1">
                <textarea class="form-control input_x" rows="3" name="adresse" id="adresse" required placeholder="Address Details: City, Area, Street, Tower Or Villa, Flat No.  /  العنوان"></textarea>
            </div>

            <div class="row" dir="ltr">
                <div class="col-6 ">
                    <h1 style="color: #af0418;">Sub Total:</h1>
                </div>
                <div class="col-6 ">
                    <h1 class="text-start" style="color: black">{{$product->new_price}} AED</h1>
                </div>
                <div class="col-12 text-center pt-2">
                    <h2 style="color: green; font-weight: bolder;">Free Delivery / التوصيل مجاني</h2>
                </div>

            </div>

            <div class="row" dir="ltr">
                <div class="container">
                    <div style="border-top: solid 3px #af0418;">

                    </div>

                </div>
                <div class="col-6 ">
                    <h1 style="color: #af0418;">Total / الإجمالي</h1>
                </div>
                <div class="col-6 ">
                    <h1 class="text-start" style="color: black">{{$product->new_price}} AED</h1>
                </div>
            </div>
            <button class="w-100 px-5 py-1 my-3  submit_btn" type="submit">اطلب الان</button>
            <div>
            </div>
        </form>
    </div>











</main>








<!--Scripts part-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="./js/main.js"></script>
<script>
    this.showHideModal();
    function showHideModal() {
        var x = document.getElementById("product_description");
        // var xx = document.getElementById("readMore");
        if (x.style.display === "none") {
            //  xx.style.display = "none";
            x.style.display = "block";
        } else {
            x.style.display = "none";


        }
    }

</script>
</body>

</html>
