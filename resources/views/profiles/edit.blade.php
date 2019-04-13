@extends('layouts.app')
@section('content')

<div class="container p-5">

  @if ($profile)
    <div class="container">
        <div class="row">
            <div class="col-2 text-center pr-5 pb-4">
                <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" width="140" height="140" class="float-left rounded-circle">
                {{-- <div class="pt-2"> 
                    <button type="button" class="btn btn-dark btn-sm">Edit profile</button>  
                </div>   --}}
            </div>
            <div class="col">
                <h1>{{$profile->name}}</h1>
                <small>{{$profile->email}}</small>             
            </div>
        </div>
    </div>
    <div class="container">
        <form method="POST" action="/profiles/{{$profile->id}}">
            @method('PUT')
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h2>Personal Info</h2>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" value="{{$profile->name}}" name="name">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname" value="{{$profile->last_name}}" name="lastName">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" value="{{$profile->address}}" name="address">
                        </div>
                        <div class="form-group">
                            <label for="phone">Movil</label>
                            <input type="text" class="form-control" id="lastname" value="{{$profile->movil}}" name="movil">
                        </div>
                        <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" value="{{$profile->email}}" name="email">
                            </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="textarea" class="form-control" id="description" value="{{$profile->description}}" name="description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <h2>My Rates</h2>
                        <div class="form-group">
                            <label for="basicRate">Basic</label>
                            <input type="text" class="form-control" id="basicRate" name="basicRate" value="{{$profile->rate ? $profile->rate->basic : 'Basic Rate' }}">
                        </div>
                        <div class="form-group">
                            <label for="bathroomRate">Add Value for Bathroom</label>
                            <input type="text" class="form-control" id="bathroomRate" name="bathroomRate" value="{{$profile->rate ? $profile->rate->bathroom : ''}}">
                        </div>
                        <div class="form-group">
                            <label for="bigTileRate">Add Value for Big Tile</label>
                            <input type="text" class="form-control" id="bigTileRate" name="bigTileRate" value="{{$profile->rate ? $profile->rate->bigsize : ''}}">
                        </div>
                        <div class="form-group">
                            <label for="exteriorRate">Add Value for Exterior Tile</label>
                            <input type="text" class="form-control" id="exteriorRate" name="exteriorRate" value="{{$profile->rate ? $profile->rate->exterior : ''}}">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-dark btn-block">Update</button>
            </form>
    </div>
  @else
      <p>No user</p>
  @endif

</div>
    
@endsection
