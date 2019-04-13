@extends('layouts.app')
@section('content')

<section class="module">
    <div class="container">
        <div class="row multi-columns-row post-columns">
        <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="team-item">
                <div class="team-image"><img src="assets/images/profile1.jpg" alt="Member Photo"/>
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
            <h6 class="font-alt"><span class="icon-tools-2"></span> Movil: {{$profile->movil}}</h6>
            <h6 class="font-alt"><span class="icon-tools-2"></span> About Me: {{$profile->description}}</h6>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
                <h4 class="font-alt mb-0">My Rates</h4>
                <hr class="divider-w mt-10 mb-20">
                <h6 class="font-alt"><span class="icon-tools-2"></span> Basic: $ {{$profile->rate->basic}}</h6>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for bathroom: $ {{$profile->rate->bathroom}}</h6>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for big size: $ {{$profile->rate->bigsize}}</h6>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for exterior: $ {{$profile->rate->exterior}}</h6>
        </div>
        </div>
</section>

<div class="container p-5">

  @if ($profile)
    <div class="container">
        <div class="row">
            <div class="float-left text-center pr-5 pb-4">
                <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" width="140" height="140" class="rounded-circle">
                <div class="pt-2"> 
                <a href="profiles/{{$profile->id}}/edit" class="btn btn-dark btn-sm">Edit profile</a>  
                </div>  
            </div>
            <div class="mt-3">
                <h1>{{$profile->name}} {{$profile->last_name}}</h1>
                <small>{{$profile->email}}</small>             
            </div>
        </div>
    </div>
      <div class="container">
          <div class="row">
          <div class="col">
              <div>
                  <h1>Personal Info</h1>
                  <div><b>Address:</b> {{$profile->address}}</div>
                  <div><b>Movil: </b> {{$profile->movil}}</div>
                  <div><b>About me:</b> {{$profile->description}}</div>
              </div>
          </div>
          <div class="col">
            <div>
                <h1>My rates</h1>
                <div><b>Basic:</b> {{$profile->rate->basic}}</div>
                <div><b>Add for bathroom: </b> {{$profile->rate->bathroom}}</div>
                <div><b>Add for big size:</b> {{$profile->rate->bigsize}}</div>
                <div><b>Add for exterior:</b> {{$profile->rate->exterior}}</div>
            </div>
        </div>
        </div>
      </div>

      
        
  @else
      <p>No user</p>
  @endif

</div>
    
@endsection
