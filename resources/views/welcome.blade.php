@extends('layouts.app')
@section('content')

<div class="jumbotron bgHome">
    <div class="container py-5">
        <div class="logo_laravel ">
            <div class="wherefood_logo SizeLogo">
                <img class="SizeLog" src={{asset("storage/img/WHEREFOOD.png")}} alt="wherefood_logo">
             </div>
        </div>
    </div>
</div>

@endsection
<style>
.bgHome{
background: rgb(23,60,23);
background: linear-gradient(0deg, rgba(23,60,23,1) 54%, rgba(61,112,42,1) 55%, rgba(127,223,87,1) 100%);
}
.SizeLogo{
    width: 50px
}
</style>