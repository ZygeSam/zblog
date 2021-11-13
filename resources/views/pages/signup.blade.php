@extends('layouts.app')
@section('content')
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Signup</h2>
                    <p>Hi there , welcome Zygers <span style="text-decoration: underline;">please , kindly </span> &nbsp;Join me on this platform by by filling this form and be  <span style="text-decoration: underline;">entitled</span> to &nbsp;@<strong>being an author on this amzing blog</strong>. Telling many stories from your own point of view, to an amazing audience
                        on <span style="text-decoration: underline;">Don't waste time!!!  </span>The world needs to hear your voice<br></p>
                </div>
                
                <form action="{{route('signup')}}" method="post">
                    
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach 
                        </div>
                    @endif

                    <div class="form-group"><label>Full Name</label><input class="form-control" type="text" name='name' value="{{old('name')}}"></div>
                    <div class="form-group"><label>Email</label><input class="form-control" type="email" name='email' value="{{old('email')}}"></div>
                    <div class="form-group"><label>Password</label><input class="form-control" type="password" name='password' value="{{old('password')}}"></div>
                    <div class="form-group"><button class="btn btn-primary btn-block">Send</button></div>
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                </form>
            </div>
            <p style="text-align:center; background:lightblue;margin-top:20px;">If filling the form is a little bit stressful or its not convienient for you, I don't know what to do for you agin but for comments and reviews, kindly hit me up at <strong>sakinbarnessamuel@gmail.com</strong>... I'll be waiting for you..<br></p>
        </section>
    </main>
@endsection