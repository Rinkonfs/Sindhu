@extends('layouts.app')

@section('content')

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
                        </div>
                      </form>
                </div>
                <div id="accountDetail">

                </div>
            </div>
        </div>
    </div>
</section>


@endsection
