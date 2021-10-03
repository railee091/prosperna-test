<x-main/>
  <!-- Start #main -->
  <main id="main">
    <div class="container">
    <!--======container start======-->
      <div class="row">
        <!----contains brand and catch phrase---->
        <div class="row textRow">
          <div class="col-sm vertical-center">
            <div id="mainText">
              <div class="brand">
                 <img class="logo"src="{{ asset('img/logo.png') }}" alt="logo"/>
                  <i>
                    <span id="theFont">The</span>
                  </i>
                  <br/>
              </div>
              <h2>
                <span class="greenFont"><i>Fastest, Most Accurate</i></span>
              </h2>
              <h4>
                <span class="blackFont"><i>Way to Close your Books!</i></span>
              </h4>
            </div>
          </div>
        </div>
        <!----end---->

        <!----contains subscribe navigation---->
        <div class="steps rounded row align-items-center shadow-lg">

          <div class="firstBlock text-center col-sm-4">
            <a href="#" title=""><em>SCHEDULE A DEMO</em><span>Learn More About FloQast</span></a>
          </div>
          <div class="current col-sm-8 ">
            <h5 class="row">
              <em class="col-sm-12"><span class="blackFont">Learn How FloQast Can </span><span class="greenFont">Improve Your Month-end</span></em>
            </h5>
            <form class="row">
              <input type="email" class="form-control col-sm" id="subscriberFirstName" placeholder="First Name*">
              <input type="email" class="form-control col-sm" id="subscriberEmail" placeholder="Email*">
              <button type="submit" class="btn btn-success form-control col-sm">SCHEDULE NOW</button>
            </form>
          </div>
        </div>
        <!----end---->

    </div>
    <!--======container end======-->
  </main>
  <!-- End #main -->