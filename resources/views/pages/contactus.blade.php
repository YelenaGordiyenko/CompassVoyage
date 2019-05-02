@extends('layouts.app')

@section('cover')
<div class="parallax p-img1">
        <div class="row h-100">
            <div class="col-md-12 align-self-center">
                <h1 class="para-head text-center">Contact Us</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')

<h3>Give us the opportunity to help you achieve your dreams and check off your bucket lists. We will find you the
 best suited getaway! </h3>


    <div class="row">
        <div class="col-md-6">
            <div class="card p-4">
                <h1>Contact</h1>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @else

                    <form class="form" action="contactus" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="first_name">First Name</label> 
                            <input class="form-control" type="text" id="first_name" required placeholder="Enter your first name" name="first_name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label> 
                            <input class="form-control" type="text" id="last_name" required placeholder="Enter your last name" name="last_name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" id="email" required placeholder="Enter your email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" class="form-control" rows="3"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Send</button>
                    </form>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <br>
            <h1 class="text-center">Contact Info</h1>
            <br>
            <ul class="list-unstyled text-center">
                    <li>
                      <p>
                        <i class="fa fa-home mr-3"></i> Asheville, NC 28804, US</p>
                    </li>
                    <li>
                      <p>
                        <i class="fa fa-envelope mr-3"></i><a href="mailto: info@compassvoyage.com">info@compassvoyage.com</a>
                    </li>
                    <li>
                      <p>
                        <i class="fa fa-phone mr-3"></i> (828) 333-7304</p>
                    </li>
                  </ul>
        </div>
    </div>

@endsection