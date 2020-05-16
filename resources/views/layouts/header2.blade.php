  <!-- Masthead -->     
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Build a landing page for your business or project and generate more leads!</h1>
        </div>
        <div class="col-md-19 col-lg-28 col-xl-7 mx-auto">
        <div class="input-group">
              <div class="form-group">
                 
           <select class="form-control form-control-lg"  onchange="location = this.value;" style="background: #ffff; color: #232b2b;" >
                <option selected>Please, open this select hotel...</option>
               <option value="{{ url('/') }}">Vista</option>
                <option value="{{ route('hotel', $user='Alta') }}">Alta</option>
                  <option value="3"><a href="">Home3</option>
              </select>
             
              </div>     
                 <div class="col-12 col-md-5">
                <button type="submit" class="btn btn-block btn-lg btn-primary" onclick="window.location.href='{{ route('reserve') }}'">Reserve Area!</button>
              </div>
            
              </div>
        </div>
      </div>
    </div>
  </header>