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
</head>



<body>


<main class="main-bg">

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
                    <a href="{{$product->whatsapp}}" style="color: white;">
                        <img src="{{asset('img/instagram.svg')}}" width="30px" height="30px">
                    </a>
                    <a href="mailto:{{$product->email}}" style="color: white;">
                        <img src="{{asset('img/email.svg')}}" width="30px" height="30px">
                    </a>
                    <a href="https://api.whatsapp.com/send?phone={{$product->whatsapp}}" style="color: white;">
                        <img src="{{asset('img/call.svg')}}" width="30px" height="30px">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--Producat Info-->
    <div class="position-relative overflow-hidden p-3 text-center" style="min-height: 100vw;">
        <div class="mx-auto align-items-center">
            <h3 style="color: green;" class="display-6 fw-bold">تم ارسال الطلب بنجاح <br> سنتصل بكم في أقرب وقت</h3>
        </div>
        <div class="py-5 px-2">
            <img class="img img-fluid" src="{{asset('img/undraw_verified_re_4io7.svg')}}">
        </div>
    </div>









</main>








<!--Scripts part-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="./js/main.js"></script>
</body>

</html>
