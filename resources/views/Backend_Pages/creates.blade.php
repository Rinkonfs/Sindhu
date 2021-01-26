@extends('Backend_Pages.adminDash')

@section('dashView')

<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('crud.index') }}">
                <i class="fas fa-arrow-left"></i> Dashboard
            </a>
        </li>
        <li class="breadcrumb-item active collaspe">
            Settings
        </li>

    </ol>
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <p>{!! \Session::get('success') !!}</p>
        </ul>
    </div>
    @endif

    <!--========= Slider Container(Desktop) START=======-->
    <div class="card mb-3">
        <div class="card-header" data-toggle="collapse" data-target="#sliderDesktop" aria-expanded="false"
            aria-controls="sliderDesktop">
            <i class="fas fa-desktop"></i> Hompage Slider (Desktop)
            <span style="float:right;" data-toggle="collapse" data-target="#sliderDesktop"><i
                    class="fas fa-minus"></i></span>
        </div>

        <div id="sliderDesktop" class="card-body collapse">
            <div class="container-fluid">
                <div class="row">
                    <!--========= Single Slider START=======-->
                    <form class="col-md-4 mb-2 p-md-5" method="post" action="{{url('desktopslider')}}"
                        enctype="multipart/form-data">
                        {{-- @method('PATCH')  --}}
                        @csrf
                        <div class="card">
                            <input type="file" accept="image/*" name="image1" onChange="changePicture(this,id)"
                                id="desktopimage1_file" style="display:none" required />
                            <img onclick="klik(id)" id="desktopimage1" class="card-img-top pointer"
                                src="{{asset('images/dummy_icons/placeholder.gif')}}" alt="Card image cap"
                                style="max-height:250px">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen-nib"></i></span>
                                    </div>
                                    <input name="desktopimage1_name" type="text" class="form-control"
                                        placeholder="Name of the Image" required />
                                </div>
                                <div style="display:flex;padding:5px;align-content: center;">
                                    <button style="flex:1;margin:5px;" class="btn btn-success">Create</button>
                                    {{-- <button style="flex:1;margin:5px;" class="btn btn-danger"><i
                                            class="fas fa-trash-alt"></i></button> --}}
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-8">
                        <div style="height:500px;overflow-y:scroll">

                            <table class="table table-hover border">
                                <thead>
                                    <tr>
                                        <th>Picture</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($desktop as $desktopdata)
                                    <tr>
                                        <td><img src="./uploads/desktop/{{$desktopdata->filename}}"
                                                alt="{{$desktopdata->name}}" width="auto" height="150px" /></td>
                                        <td>{{$desktopdata->name}}</td>
                                        <form method="POST"
                                            action="{{ url('desktop_slider_destroy', [$desktopdata->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td><button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash"></i></button></td>
                                        </form>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--========= Slider Container(Mobile) START=======-->
    <div class="card mb-3">
        <div class="card-header" data-toggle="collapse" data-target="#sliderMobile" aria-expanded="false"
            aria-controls="sliderMobile">
            <i class="fas fa-desktop"></i> Hompage Slider (Mobile)
            <span style="float:right;" data-toggle="collapse" data-target="#sliderMobile"><i
                    class="fas fa-minus"></i></span>
        </div>

        <div id="sliderMobile" class="card-body collapse">
            <div class="container-fluid">
                <div class="row">
                    <!--========= Single Slider START=======-->
                    <form class="col-md-4 mb-2 p-md-5" method="post" action="{{url('mobileslider')}}"
                        enctype="multipart/form-data">

                        @csrf
                        <div class="card">
                            <input type="file" accept="image/*" name="mobileimage" onChange="changePicture(this,id)"
                                id="mobileimage_file" style="display:none" required />
                            <img onclick="klik(id)" id="mobileimage" class="card-img-top pointer"
                                src="{{asset('images/dummy_icons/placeholder.gif')}}" alt="Card image cap"
                                style="max-width:450px;">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen-nib"></i></span>
                                    </div>
                                    <input name="mobileimage_name" type="text" class="form-control"
                                        placeholder="Name of the Image" required />
                                </div>
                                <div style="display:flex;padding:5px;align-content: center;">
                                    <button style="flex:1;margin:5px;" class="btn btn-success">Create</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-8">
                        <div style="height:500px;overflow-y:scroll">

                            <table class="table table-hover border">
                                <thead>
                                    <tr>
                                        <th>Picture</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mobile as $mobiledata)
                                    <tr>
                                        <td><img src="./uploads/mobile/{{$mobiledata->filename}}"
                                                alt="{{$mobiledata->name}}" width="auto" height="150px" /></td>
                                        <td>{{$mobiledata->name}}</td>
                                        <form method="POST"
                                            action="{{ url('mobile_slider_destroy', [$mobiledata->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td><button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash"></i></button></td>
                                        </form>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--========= New Arrival Product Container START=======-->
    <div class="card mb-3">
        <div class="card-header" data-toggle="collapse" data-target="#newArrival" aria-expanded="false"
            aria-controls="newArrival">
            <i class="fas fa-award"></i> New Arrival
            <span style="float:right;" data-toggle="collapse" data-target="#newArrival"><i
                    class="fas fa-minus"></i></span>
        </div>
        <div id="newArrival" class="card-body collapse show">
            <div class="container-fluid">
                <div class="row">
                    <!--========= Single Slider START=======-->
                    <form class="col-md-3 col-sm-12 p-md-2 mb-2" method="post" action="{{url('newarrival')}}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <input type="file" name="newarrivalimage" onChange="changePicture(this,id)"
                                id="newArivalImage1_file" style="display:none;" />
                            <img onclick="klik(id)" id="newArivalImage1" class="card-img-top pointer" src=""
                                alt="Card image" style="max-height:250px">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="websiteSetting_prod_name">Name:</label>
                                    <input name="websiteSetting_prod_name" type="text" class="form-control"
                                        placeholder="Name of the Image" required />
                                </div>

                                <div class="form-group">
                                    <label for="websiteSetting_category">Select Category:</label>
                                    <select class="form-control" name="websiteSetting_category"
                                        id="websiteSetting_category" required>
                                        <option selected="selected" disabled>Choose Category</option>
                                        @foreach ($category as $catItem)
                                        <option value="{{$catItem->cat_name}}">{{$catItem->cat_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button style="width:100%" type="submit" class="btn btn-info">Create</button>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-9 border">
                        <div style="height:500px;overflow-y:scroll">

                            <table class="table table-hover border">
                                <thead>
                                    <tr>
                                        <th>Picture</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($newarrival as $newarrivalItem)
                                    <tr>
                                        <td><img src="./uploads/newarrival/{{$newarrivalItem->filename}}"
                                                alt="{{$newarrivalItem->name}}" width="auto" height="150px" /></td>
                                        <td>{{$newarrivalItem->name}}</td>
                                        <td>{{$newarrivalItem->category}}</td>
                                        <form method="POST"
                                            action="{{ url('newarrival_destroy', [$newarrivalItem->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td><button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash"></i></button></td>
                                        </form>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========= Featured Container START=======-->
    {{-- <div class="card mb-3">
        <div class="card-header" data-toggle="collapse" data-target="#Featuredproduct" aria-expanded="false"
            aria-controls="Featuredproduct">
            <i class="fas fa-sun"></i> Featured Products
            <span style="float:right;" data-toggle="collapse" data-target="#Featuredproduct"><i
                    class="fas fa-minus"></i></span>
        </div>
       
        <form id="Featuredproduct" class="card-body collapse" method="post" action="{{url('settings')}}"
    enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row">
            <!--========= Single Slider START=======-->
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img class="card-img-top pointer" src="{{asset('images/dummy_icons/placeholder.gif')}}"
                        alt="Card image cap" style="max-height:250px">
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-pen-nib"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Name of the Image" />
                        </div>
                        <div style="display:flex;padding:5px;">
                            <button style="flex:1;margin:5px;" class="btn btn-warning">Update</button>

                        </div>
                    </div>
                </div>
            </div>

            <!--========= Single Slider START=======-->
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img class="card-img-top pointer" src="{{asset('images/dummy_icons/placeholder.gif')}}"
                        alt="Card image cap" style="max-height:250px">
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-pen-nib"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Name of the Image" />
                        </div>
                        <div style="display:flex;padding:5px;">
                            <button style="flex:1;margin:5px;" class="btn btn-warning">Update</button>

                        </div>
                    </div>
                </div>
            </div>

            <!--========= Single Slider START=======-->
            <div class="col-md-4 mb-2">
                <div class="card">
                    <img class="card-img-top pointer" src="{{asset('images/dummy_icons/placeholder.gif')}}"
                        alt="Card image cap" style="max-height:250px">
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-pen-nib"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Name of the Image" />
                        </div>
                        <div style="display:flex;padding:5px;">
                            <button style="flex:1;margin:5px;" class="btn btn-warning">Update</button>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </form>
</div> --}}
<!--========= New Deal Product Container START=======-->
<div class="card mb-3">
    <div class="card-header" data-toggle="collapse" data-target="#newDeal" aria-expanded="false"
        aria-controls="newDeal">
        <i class="fas fa-percentage"></i> New Deal
        <span style="float:right;" data-toggle="collapse" data-target="#newDeal"><i class="fas fa-minus"></i></span>
    </div>
    <div id="newDeal" class="card-body collapse">
        <form class="row" method="post" action="{{url('newdealupdate',"$newdeal[0]->id")}}">
            @csrf
            <div class="col-md-4">
                <label for="image">
                    {{-- value="{{$newdeal->imagelink1}}" --}}
                    <input type="file" name="image_main" onChange="changePicture(this,id)" id="featured_file"
                         style="display:none;" />
                    <pre>(Upload picture size:1,172px × 1,280px)</pre>
                    <img onclick="klik(id)" id="featured" class="img-fluid pointer"
                        src="/uploads/newdeal/{{$newdeal[0]->imagelink1}}" alt="Sindhu Store Deal Image" required />
                </label>
            </div>
            <div class="col-md-8">
                <div class="form-group row">
                    <label for="Title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Title" name="title" value="{{$newdeal[0]->title}}"
                            placeholder="E.g. New Deal Every Week" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="SubTitle" class="col-sm-2 col-form-label">Sub title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="SubTitle" name="sub_title"
                            value="{{$newdeal[0]->subtitle}}"
                            placeholder="E.g. Exclusive Sarees with Great Deals Every Week" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ProductName" class="col-sm-2 col-form-label">Product Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ProductName" value="{{$newdeal[0]->productname}}"
                            placeholder="E.g. Lal Golapi Sharee" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="Price" name="price" placeholder="E.g. Tk 2000"
                            value="{{$newdeal[0]->price}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="DiscountPrice" class="col-sm-2 col-form-label">Discount Price</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="DiscountPrice" name="discount_price"
                            value="{{$newdeal[0]->discountprice}}" placeholder="E.g. Tk 1800" required>
                    </div>
                </div>
                <div class="row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Images</label>
                    <div class="col-md-3">
                        <label for="image">
                            <input type="file" accept="image/*" name="image1" onChange="changePicture(this,id)"
                                 id="image1_file" style="display:none" required />
                            <img onclick="klik(id)" id="image1" class="img-thumbnail pointer"
                                src="/uploads/newdeal/{{$newdeal[0]->imagelink2}}"
                                alt="Sindhu Store Deal Product Images" height="200px" width="200px">
                        </label>

                    </div>
                    <div class="col-md-3">
                        <label for="image">
                            <input type="file" accept="image/*" name="image2" onChange="changePicture(this,id)"
                                id="image2_file" style="display:none" required />
                            <img onclick="klik(id)" id="image2" class="img-thumbnail pointer"
                                src="/uploads/newdeal/{{$newdeal[0]->imagelink3}}"
                                alt="Sindhu Store Deal Product Images" height="200px" width="200px">
                        </label>
                    </div>
                    <div class="col-md-3">
                        {{-- <input type="file" accept="image/*" name="image"/> --}}
                        <label for="image">
                            <input type="file" accept="image/*" onChange="changePicture(this,id)" name="image3"
                                 id="image3_file" style="display:none" required />

                            <img onclick="klik(id)" id="image3" class="img-thumbnail pointer"
                                src="/uploads/newdeal/{{$newdeal[0]->imagelink4}}"
                                alt="Sindhu Store Deal Product Images" height="200px" width="200px">
                        </label>
                    </div>

                </div>
            </div>
            {{-- onclick="checkFields()" --}}
            <button  type="submit" class="btn btn-success btn-lg">Upload</button>
        </form>

    </div>
</div>

</div>



<script type="text/javascript">
    // $(document).ready(function () {

    //     $(".btn-success").click(function () {
    //         var html = $(".clone").html();
    //         $(".increment").after(html);
    //     });

    //     $(".container-fluid").on("click", ".btn-danger", function () {
    //         $(this).parents(".control-group").remove();
    //     });

    // });

    // function readURL(input) {
    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();
    //         reader.onload = function (e) {
    //             $('#imageReplace').attr('src', e.target.result)
    //         };
    //         reader.readAsDataURL(input.files[0]);
    //     }
    // }

    // document.getElementById("image3").click(function () {
    //     document.getElementById("image3_file").click();
    // });
    function klik(x) {
        console.log("klik", x);
        var y = x + "_file";
        document.getElementById(y).click();
        console.log("this", document.getElementById(y).value)

        // document.getElementById(x).src = window.URL.createObjectURL(this.files[0])
        // document.getElementById(y).change(
        //     function(event){
        //         document.getElementById(x).attr('src',URL.createObjectURL(event.target.files[0]));
        //     }
        // );
        // document.getElementById(x).src =;
    }

    function changePicture(x, z) {
        var y = z.split("_");
        console.log("clicked change picture")
        document.getElementById(y[0]).src = window.URL.createObjectURL(x.files[0])

    }

    // function checkFields() {
    //     var mainP = document.getElementById("featured_file").value;
    //     var one = document.getElementById("image1_file").value;
    //     var two = document.getElementById("image2_file").value;
    //     var three = document.getElementById("image3_file").value;
    //     if (mainP == empty) document.getElementById("featured").style.border = "2px solid red"
    // }

    const images = document.querySelectorAll('img');
    // console.log(images)
    images.forEach(replaceEmptySrc);

    function replaceEmptySrc(image) {
        if (image.getAttribute('src') === '') {
            var you = '/images/dummy_icons/placeholder.png';
            image.src = you;
            console.log(you);
        } else {
            console.log("Hi visitor , Image is okay");
        }
    }

</script>
@endsection
