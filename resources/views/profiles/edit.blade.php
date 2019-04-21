@extends('layouts.app')
@section('content')

@if ($profile)
<section class="module">
    <div class="container">
        <div class="row multi-columns-row post-columns">
    <form method="POST" action="/profiles/{{$profile->id}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
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
                {{-- <a href="profiles/{{$profile->id}}/edit" class="btn btn-primary btn-sm">Edit my profile</a>   --}}
                <div class="form-group">
                    <input type="file" class="form-control-file" name="cover_image">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
            <h4 class="font-alt mb-0">Personal info</h4>
            <hr class="divider-w mt-10 mb-20">
            <h6 class="font-alt"><span class="icon-tools-2"></span> Name:</h6>
            <div class="form-group">
                <input class="form-control input-sm" type="text" value="{{$profile->name}}" placeholder="" name="name"/>
            </div>
            <h6 class="font-alt"><span class="icon-tools-2"></span> Last Name: {{$profile->last_name}}</h6>
            <div class="form-group">
                <input class="form-control input-sm" type="text" value="{{$profile->last_name}}" placeholder="" name="lastName"/>
            </div>
            <h6 class="font-alt"><span class="icon-tools-2"></span> Email:</h6>
            <div class="form-group">
                <input class="form-control input-sm" type="email" value="{{$profile->email}}" placeholder="" name="email"/>
            </div>
            <h6 class="font-alt"><span class="icon-tools-2"></span> Address:</h6>
            <div class="form-group">
                <input class="form-control input-sm" type="text" value="{{$profile->address}}" placeholder="" name="address"/>
            </div>
            <h6 class="font-alt"><span class="icon-tools-2"></span> State:</h6>
            <div class="form-group">
                <input class="form-control input-sm" type="text" value="{{$profile->state}}" placeholder="" name="state"/>
            </div>
            <h6 class="font-alt"><span class="icon-tools-2"></span> ZIP:</h6>
            <div class="form-group">
                <input class="form-control input-sm" type="text" value="{{$profile->zip}}" placeholder="" name="zip"/>
            </div>
            <h6 class="font-alt"><span class="icon-tools-2"></span> Movil:</h6>
            <div class="form-group">
                <input class="form-control input-sm" type="text" value="{{$profile->movil}}" placeholder="" name="movil"/>
            </div>
            <h6 class="font-alt"><span class="icon-tools-2"></span> About Me:</h6>
            <div class="form-group">
                <textarea type="text" class="form-control" id="description" name="description" rows="3">{{$profile->description}}</textarea>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
                <h4 class="font-alt mb-0">My Rates</h4>
                <hr class="divider-w mt-10 mb-20">
                <h6 class="font-alt"><span class="icon-tools-2"></span> Basic: $ {{$profile->rate->basic}}</h6>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" id="basicRate" name="basicRate" value="{{$profile->rate ? $profile->rate->basic : 'Basic Rate' }}">
                </div>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for bathroom: $ {{$profile->rate->bathroom}}</h6>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" id="bathroomRate" name="bathroomRate" value="{{$profile->rate ? $profile->rate->bathroom : ''}}">
                </div>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for kitchen: </h6>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" name="kitchenRate" value="{{$profile->rate ? $profile->rate->kitchen : ''}}">
                </div>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for big size: $ {{$profile->rate->bigsize}}</h6>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" id="bigTileRate" name="bigTileRate" value="{{$profile->rate ? $profile->rate->bigsize : ''}}">
                </div>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for exterior: $ {{$profile->rate->exterior}}</h6>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" id="exteriorRate" name="exteriorRate" value="{{$profile->rate ? $profile->rate->exterior : ''}}">
                </div>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for porcelain:</h6>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" name="porcelainRate" value="{{$profile->rate ? $profile->rate->porcelain : ''}}">
                </div>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for ceramic:</h6>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" name="ceramicRate" value="{{$profile->rate ? $profile->rate->ceramic : ''}}">
                </div>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for mosaic:</h6>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" name="mosaicRate" value="{{$profile->rate ? $profile->rate->mosaic : ''}}">
                </div>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Add for glass:</h6>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" name="glassRate" value="{{$profile->rate ? $profile->rate->glass : ''}}">
                </div>
        </div>
    </div>
    {{-- <div class="text-center">
        <button type="submit" class="btn btn-primary btn-sm">Update</button>
    </div> --}}
    </form>
    @else
      <p>No user</p>
    @endif
</section>
    
@endsection
