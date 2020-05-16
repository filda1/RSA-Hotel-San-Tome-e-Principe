 <!-- Footer -->
 <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">

             <!--   <li class="list-inline-item">
          
              <a href="{{ url('/about') }}">{{ __('messages.About') }}</a>
            </li>-->
          
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="{{ url('/contact') }}"  style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Contact') }}</a>
            </li>
            <li class="list-inline-item">
            <a href="{{ route('location') }}"  style="color:#47775D;font-weight:bold;font-family:Century Gothic;">&nbsp; {{ __('messages.Localização') }}</a>
            </li>
            <!-- <li class="list-inline-item">
            <a href="{{ route('comments') }}"  style="color:#47775D;font-weight:bold;font-family:Century Gothic;">&nbsp; {{ __('messages.Comentarios') }}</a>  </li>-->

            <li class="list-inline-item">
            <a href="{{ route('methodspayment') }}"  style="color:#47775D;font-weight:bold;font-family:Century Gothic;">&nbsp;{{ __('messages.TituloPagamentos') }}</a>
            </li>
            
            <li class="list-inline-item">
            <a href="{{ route('validation') }}"  style="color:#47775D;font-weight:bold;font-family:Century Gothic;">&nbsp;{{ __('messages.TituloValidações') }}</a>
            </li>
            
            
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="https://www.facebook.com/rocasantoantonioecolodge/">
                <i class="fab fa-facebook fa-2x fa-fw" style="color:#47775D;"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="https://www.tripadvisor.com.br/Profile/santoantonioecolodge?fid=b8bc2f70-7301-4962-ad7f-506caee2d07c">
                <i class="fab fa-tripadvisor fa-2x fa-fw" style="color:#47775D;"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.instagram.com/roca.santoantonio/">
                <i class="fab fa-instagram fa-2x fa-fw" style="color:#47775D;"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="user/vendor/jquery/jquery.min.js"></script>
  <script src="user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
  @section('footer')
        @show