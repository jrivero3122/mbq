@extends('layouts.app')
@section('content')

<section class="home-section home-parallax home-fade home-full-height bg-dark-30" data-background="assets/images/installer1.jpg">
  <div class="titan-caption">
    <div class="caption-content">
      <div class="font-alt mb-30 titan-title-size-1">
          <div class="container">
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                  <h4 class="font-alt mb-0">Miami Tile Quotation</h4>
                  <hr class="divider-w mt-10 mb-20">
                  <form class="form" role="form" action="/search" method="GET">
                    <div class="row">
                      <div class="form-group col-lg-3">
                        <select id="inputState" class="form-control" name="heightTile">
                          <option selected>Height...</option>
                          <option value="12">12</option>
                          <option value="24">24</option>
                          <option value="36">36</option>
                          <option value="48">48</option>
                        </select>
                      </div>
                      <div class="form-group col-lg-1 text-center">
                        <p>X</p>
                      </div>
                      <div class="form-group col-lg-3">
                        <select id="inputState" class="form-control" name="widthTile">
                          <option selected>Width...</option>
                          <option value="12">12</option>
                          <option value="24">24</option>
                          <option value="36">36</option>
                          <option value="48">48</option>
                        </select>
                      </div>
                      <div class="form-group col-lg-2">
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Sqf" name="sqfTile">
                      </div>
                      <div class="form-group col-lg-3">
                        <select id="inputState" class="form-control" name="placeInstall">
                          <option selected>At...</option>
                          <option value="bathroom">Bathroom</option>
                          <option value="exterior">Exterior</option>
                        </select>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col text-center">
                        <button type="submit" class="btn btn-dark">Quote</button>
                      </div>
                    </div>
                    </div>
                  </form>
                </div>
              </div>
      </div>
    </div>
  </div>
</section>

<section class="module" id="about">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2 class="module-title font-alt">Welcome to Titan</h2>
        <div class="module-subtitle font-serif large-text">We’re an award winning London based digital agency, lovingly curating pixels for maximum impact. We don’t have a style — we have standards.</div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-2 col-sm-offset-5">
        <div class="large-text align-center"><a class="section-scroll" href="#services"><i class="fa fa-angle-down"></i></a></div>
      </div>
    </div>
  </div>
</section>

{{-- <!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">

      <form action="/search" method="GET">
          <div class="form-row">
            <div class="form-group col-lg-2">
              <select id="inputState" class="form-control" name="heightTile">
                <option selected>Height...</option>
                <option value="12">12</option>
                <option value="24">24</option>
                <option value="36">36</option>
                <option value="48">48</option>
              </select>
            </div>
            <div class="form-group col-lg-1 text-center">
              <h1>X</h1>
            </div>
            <div class="form-group col-lg-2">
              <select id="inputState" class="form-control" name="widthTile">
                <option selected>Width...</option>
                <option value="12">12</option>
                <option value="24">24</option>
                <option value="36">36</option>
                <option value="48">48</option>
              </select>
            </div>
            <div class="form-group col-lg-2">
              <input type="text" class="form-control" id="inputPassword4" placeholder="Sqf" name="sqfTile">
            </div>
            <div class="col-lg-1">
              <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" id="gridCheck1" name="bathroom">
                <label class="form-check-label" for="gridCheck1">
                  Bathroom
                </label>
              </div>
            </div>
            <div class="col-lg-1">
              <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" id="gridCheck1" name="exterior">
                <label class="form-check-label" for="gridCheck1">
                  Exterior
                </label>
              </div>
            </div>
            <div class="col-lg-2 text-center">
              <button type="submit" class="btn btn-dark">Quote</button>
            </div>
          </div>
        </form>
  </div>
</div>

  @if (count($users) > 0)
    <ul>
      @foreach ($users as $user)
        <li>{{$user->name}}</li>          
      @endforeach
    </ul>
  @else
      <p>No user</p>
  @endif --}}
  
  
  
      
  
  
@endsection
