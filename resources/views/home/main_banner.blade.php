<div class="main-banner">
    <div class="container">
      <div class="row">

        <!-- ***** Main Banner Area Start ***** -->
   @if(session()->has('message'))

            <div class="alert alert-success">



            {{session()->get('message')}}

             <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">x</button>

             </div>

            @endif

        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h2>Book is Knowledge</h2>
            <h3>Knowledge is Power</h3>
            <div class="buttons">
              <div class="border-button">
                <a href="explore">Explore Top Books</a>
              </div>
              <div class="main-button">
                <a href="https://youtu.be/dQw4w9WgXcQ?si=k_-AS8clTfRFHuNp">Watch Our Videos</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="">
            <div class="item">
              <img src="assets/images/banner.png" alt="">
            </div>
            <div class="item">
              <img src="assets/images/banner2.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->
