@extends('layouts.app')

@section('cover')
<div class="parallax p-img3">
        <div class="row h-100">
            <div class="col-md-12 align-self-center">
                <h1 class="para-head1 text-center">Packages</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-4">
        <h1>Europe Trip</h1>
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="germ.jpg">
        <p>Civilizations in Europe have been around for decades and the scenery and buildings are there to prove
            that! Walk through the cobblestone streets that are filled with stories, taste the European cuisine 
            that brings people together, and just dive into the culture.</p>
    </div>
    <div class="col-sm-4">
        <h1>South America Trip</h1>
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="machu-picchu.jpg">
        <p>Do you want to wander off the beaten path into the Machu Picchu, or just enjoy the carnivals in
            Rio De Janeiro? Being able to submerge yourself in the beauty, culture, and adventurous lands that
            are just begging to be explored, is something Compass Voyage can help come to life. </p>
    </div>
    <div class="col-sm-4">
        <h1>Customized</h1>
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="custom.jpg">
        <p>If you are a person who does not like to be bound to any continental borders, the customized package
            is for you. We will work around your desires and create the most flexible itinerary.</p>
    </div>
</div>
    
@endsection