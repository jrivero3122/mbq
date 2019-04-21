<form class="form" role="form" action="/search" method="GET">
    <div class="row">
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
        <p>X</p>
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
      <div class="form-group col-lg-3">
        <input type="text" class="form-control" placeholder="Sqf" name="sqfTile">
      </div>
      <div class="form-group col-lg-2">
        <select id="inputState" class="form-control" name="placeInstall">
          <option selected>At...</option>
          <option value="bathroom">Bathroom</option>
          <option value="exterior">Exterior</option>
          <option value="kitchen">Kitchen</option>
        </select>
      </div>
      <div class="form-group col-lg-2">
        <select id="inputState" class="form-control" name="typeOfTile">
            <option selected>Type of Tile...</option>
            <option value="ceramic">Ceramic</option>
            <option value="porcelain">Porcelain</option>
            <option value="mosaic">Mosaic</option>
            <option value="glass">Glass</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col text-center">
        <button type="submit" class="btn btn-b btn-circle">Quote</button>
      </div>
    </div>
    </div>
  </form>