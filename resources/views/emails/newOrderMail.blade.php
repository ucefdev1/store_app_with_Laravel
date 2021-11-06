@component('mail::message')
       لديك طلبية جديدة
       <br>===========<br>
       {{$prd->title}} ==المنتوج
       <br>
       {{$rqs->name}}==الاسم
       <br>
       {{$rqs->adresse}}==العنوان
       <br>
       {{$rqs->phone}} ==رقم الهاتف
       @if($rqs->color!==null)
           <br>
           {{$rqs->color}} ==اللون
       @endif
       <br>
       {{$rqs->city}} ==المدينة
       <br>
       {{$prd->new_price}}==الثمن




{{ config('app.name') }}
@endcomponent
