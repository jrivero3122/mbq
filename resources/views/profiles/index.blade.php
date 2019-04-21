@extends('layouts.app')
@section('content')

@if ($profile)
<section class="module">
    <div class="container">
        <div class="row multi-columns-row post-columns">
        <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="team-item">
            <div class="team-image"><img src="/storage/cover_image/{{$profile->cover_image}}" alt="Member Photo"/>
                    <div class="team-detail">
                    <h5 class="font-alt">Hi all</h5>
                    <p class="font-serif">{{$profile->description}}</p>
                    <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                    </div>
                </div>
                <div class="team-descr font-alt">
                    {{-- <div class="team-name">{{$profile->name}} {{$profile->last_name}}</div> --}}
                    {{-- <div class="team-role">Installer</div> --}}
                </div>
                <a href="profiles/{{$profile->id}}/edit" class="btn btn-primary btn-sm">Edit my profile</a>  
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
            <h4 class="font-alt mb-0">Personal info</h4>
            <hr class="divider-w mt-10 mb-20">
            <h6 class="font-alt"><span class="icon-tools-2"></span> Name: {{$profile->name}}</h6>
            <h6 class="font-alt"><span class="icon-tools-2"></span> Last Name: {{$profile->last_name}}</h6>
            <h6 class="font-alt"><span class="icon-tools-2"></span> Email: {{$profile->email}}</h6>
            <h6 class="font-alt"><span class="icon-tools-2"></span> Address: {{$profile->address}}</h6>
            <h6 class="font-alt"><span class="icon-tools-2"></span> State: {{$profile->state}}</h6>
            <h6 class="font-alt"><span class="icon-tools-2"></span> ZIP: {{$profile->zip}}</h6>
            <h6 class="font-alt"><span class="icon-tools-2"></span> Movil: {{$profile->movil}}</h6>
            <h6 class="font-alt"><span class="icon-tools-2"></span> About Me: {{$profile->description}}</h6>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
                <h4 class="font-alt mb-0">My Rates</h4>
                <hr class="divider-w mt-10 mb-20">
                <h6 class="font-alt"><span class="icon-tools-2"></span> Basic: $ {{$profile->rate->basic}}</h6>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for bathroom: $ {{$profile->rate->bathroom}}</h6>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for big size: $ {{$profile->rate->bigsize}}</h6>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for kitchen: $ {{$profile->rate->kitchen}}</h6>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for exterior: $ {{$profile->rate->exterior}}</h6>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for porcelain: $ {{$profile->rate->porcelain}}</h6>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for ceramic: $ {{$profile->rate->ceramic}}</h6>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for mosaic: $ {{$profile->rate->mosaic}}</h6>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for glass: $ {{$profile->rate->glass}}</h6>
        </div>
        </div>
    @else
      <p>No user</p>
    @endif
</section>
    
@endsection
