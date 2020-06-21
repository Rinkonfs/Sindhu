@include('inc.head')
<style>
    .left {
  width: 200px;
  padding: 10px;
}

.left ul {
  
  background-color: #F2F2F2;
  padding: 0px;
}

.left ul li {
  list-style: none;
  line-height: 30px;
}

.left ul li a {
  color: #000000;
  display: block;
  padding: 5px;
  text-align: center;
  text-decoration: none;
  width: 190px;
}

.left ul li a:hover {
  background-color: #E4E4E4;
}
</style>
</head>
  <body>
<!-- Navbar Starts -->
    @include('inc.nav')
<!-- Navbar Ends -->

<section class="py-md-5" style="height:600px;">
    <div class="container">
        <h1>DASHBOARD</h1>
        <div class="row">
            <div class="col-xs-8">
                <div class="list-group" style="border:2px solid red;">
                    <span class="list-group-item" style="background-color: black;color:#7b7d80;font-weight:700;font-size:18px">
                        Menu
                    </span>
                    <a href="#" class="list-group-item">
                        Account Detail
                    </a>
                    <a href="#" class="list-group-item">
                        Order History
                    </a>
                    <a href="#" class="list-group-item">
                        Support 
                    </a>
                    <a href="#" class="list-group-item">
                        Track Order
                    </a>
                </div>        
            </div>
            <div class="col-xs-4 card-body" style="padding: 50px;">
                <div id="accountDetail">
                    <form>
                        <div class="row">
                          <fieldset class="col-sm-6 form-group">
                            <div class="form-group">
                              <label class="form-control-label" for="ownername">Owner name</label>
                              <input class="form-control" id="ownername" placeholder="Your Name" type="text">
                            </div>
                            <!-- form-group -->
                      
                            <div class="form-group">
                              <label class="form-control-label" for="owneremail">Email address</label>
                              <input aria-describedby="emailHelp" class="form-control" id="owneremail" placeholder="Enter email" type="email">
                            </div>
                            <!-- form-group -->
                          </fieldset>
                          <!-- fieldset -->
                      
                          <fieldset class="form-group col-sm-6">
                            
                            <div class="form-group">
                              <label class="form-control-label" for="petname">Animal name</label>
                              <input class="form-control" id="petname" placeholder="Your Pet's name" type="text">
                            </div>
                            <!-- form-group -->
                      
                            <div class="form-group">
                              <label class="form-control-label" for="pettype">Animal type</label>
                              <select class="form-control" id="pettype">
                                <option>
                                  Choose
                                </option>
                                <option value="cat">
                                  Dog
                                </option>
                                <option value="cat">
                                  Cat
                                </option>
                                <option value="bird">
                                  Other
                                </option>
                              </select>
                            </div>
                          </fieldset>
                       
                        <button class="btn btn-primary" type="submit">Submit</button>
                      </form>
                </div>
                <div id="accountDetail">

                </div>
            </div>
        </div>
    </div>
</section>







<!-- footer Starts-->
    @include('inc/footer')
<!-- footer Ends-->

<!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
        </svg>
    </div>
<!-- Java Scripts -->
    @include('inc/scripts')
    
  </body>
</html>