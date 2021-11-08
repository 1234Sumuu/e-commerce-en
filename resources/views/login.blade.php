@extends('master')
@extends('content')
<div class ="container customer-login">
    <div class ="row">
        <div class = "col-sm-4 col-sm-offset-4">
            <form action="loin" methid="post">
                <div class ="form-group">
                    @csrf
                    <label for="exampleInputEmail1">Email Address</label>"
                    <input type="email" name="email" class="form-control" id ="exampleInputEmail1" placeholder="Your email address">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Your Password. </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                </div>
                <button type="submit" class= "btn btn-primary">Login</button>
                {{-- <button type="submit" class= "btn btn-default">Signup</button> --}}
            </form>
        </div>
    </div>
</div>
@endsection