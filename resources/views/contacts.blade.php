@extends('layouts.app')
​
@section('custom-css')
<link rel="stylesheet" href="{{asset('css/contacts.css')}}">


@section('content')
<div class="container ">
    <form class="dioboia" action="https://formsubmit.co/matteo.polonio@gmail.com" method="POST">
        <input type="hidden" name="_captcha" value="false" />
        <input type="hidden" name="_subject" value="Someone texted you!" />
        <input type="hidden" name="_next" value="https://martagoldinart.netlify.app/#/thx" />


        <h1 class="my-4">Contact Us</h1>

        <input type="text" class="form-control mb-3" name="name" placeholder="Name" required />
        <input type="text" class="form-control mb-3" name="lastname" placeholder="Lastname" required />
        <input type="email" class="form-control my-3" name="email" placeholder="Email" required />
        <textarea name="message" class="form-control mb-3" id="exampleFormControlTextarea1" rows="3"
            placeholder="Type your message"></textarea>

        <input class="" type="submit" value="Submit" />


    </form>
</div>
@endsection