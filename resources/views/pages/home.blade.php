@extends('layouts.app')

@section('cover')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="amalfi-coast.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h2>A mind stretched by new experiences can never go back to its old dimensions.</h2>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="beach-bora.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h2>A mind stretched by new experiences can never go back to its old dimensions.</h2>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="adventure.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h2>A mind stretched by new experiences can never go back to its old dimensions.</h2>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
@endsection

@section('content')

  
  <div class="container marketing">
    <br>
    <br>
    <p>Life. We get so carried away with the daily hustle and bustle that we forget to incorporate some pleasure in our journey, but we’ll tell you one thing: if you came across this website, you are already on the right path! There is so much beauty to see in this world and once your mind is stretched by new experiences, it will never go back to its old dimensions. Let’s broaden our horizons and create the memories of a lifetime together!</p>
    <br>
    <br>

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="160" height="160" src="dest.jpg">
          <h2>Destination</h2>
          <p>Where is it that you want to go to disconnect from your daily life? Which culture would you like to dive into and possibly change your perspective on life? Are you more of a mountain person or beach person, or would you rather just go on a safari? Compass voyage will guide you through the perfect trip for your personality and desires!</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="160" height="160" src="type.jpg">
          <h2>Type</h2>
          <p>It is very important to feel like you are in your element. Would you like to get out of your comfort zone and go on an arduous hike, or would you like to bask in the sun and enjoy the luxury of relaxation? We have the perfect plan for whatever it is that you would like to experience! </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="160" height="160" src="planning.jpg">
          <h2>Planning</h2>
          <p>After all of the talk, it is time to take action. “There are people who make things happen, there are people who watch things happen, and there are people who wonder what happened. To be successful, you need to be a person who makes things happen.” – James A. Lovel</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
  
  
      <!-- START THE FEATURETTES -->
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">The Views <span class="text-muted">They’ll blow your mind.</span></h2>
          <p class="lead">Let us help you plan the perfect trip that incorporates the perfect city views, landscape views and all types of views you’ve been thinking of. From personal experience, sight-seeing is amazing, but being able to zoom out from the city has been one of the most memorable experiences. </p>
        </div>
        <div class="col-md-5">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="beautiful-cliff.jpg">
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">The Food <span class="text-muted">Taste for yourself.</span></h2>
          <p class="lead">Trying a typical local dish from another country is an experience like no other. The flavors will be different from anything you have tried before and it will stay with you till the end of days. You will experience how those foods bring people together and the flavors will keep you coming back for more!</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="beef-blur.jpg">
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">The People <span class="text-muted">Expand Your Circle</span></h2>
          <p class="lead">Establish connections and build your network abroad! It is amazing what talking with people of different cultures will do to you. It’ll turn you into a story teller and will improve your understanding of other cultures!</p>
        </div>
        <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="circle.jpg">
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <!-- /END THE FEATURETTES -->
  
    </div><!-- /.container -->
@endsection