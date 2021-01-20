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
    <div class="card mb-3">
        <div class="card-header" data-toggle="collapse" data-target="#Coupon">
            <i class="fas fa-ticket-alt"></i> Hompage Slider
            <span style="float:right;" data-toggle="collapse" data-target="#Coupon"><i class="fas fa-minus"></i></span>
        </div>
        {{-- <img id="blah" src="#" alt="your image" /> --}}
        <form class="card-body collapse show" method="post" action="{{url('settings')}}" enctype="multipart/form-data">
            @csrf
            <div style="object-fit: cover;display: flex;justify-content:space-around; flex-wrap: wrap;" class="gallery">

                {{-- <div class="gallery-item">
                    <img class="gallery-image" src="{{asset('images/1-700.webp')}}"
                alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of
                coffee on a saucer"
                >
            </div>

            <div class="gallery-item">
                <img class="gallery-image"
                    src="https://images.unsplash.com/photo-1515260268569-9271009adfdb?w=500&h=500&fit=crop"
                    alt="sunset behind San Francisco city skyline">
            </div> --}}
            <div style="text-align: center;width:180px;height:180px;" class="gallery-item">
                <input type="image"
                    src="https://images.unsplash.com/photo-1515260268569-9271009adfdb?w=500&h=500&fit=crop"
                    alt="sunset behind San Francisco city skyline" width="175px" />
                <input type="file" id="my_file" style="display: none;" />
            </div>
            <div style="padding:10px;border:2px solid grey;border-radius:2px;width:180px;height:180px;"
                class="gallery-item">
                <input id="imageReplace" type="image"
                    src="data:image/jpeg;base64,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"
                    width="155" height="auto">
                <input onchange="readURL(this);" type="file" id="my_file" style="display: none;" />
            </div>
            <button style="background:none;border:2px solid grey;border-radius:2px;width:180px;height:180px;"
                class="gallery-item">
                <i class="fas fa-plus"></i></button>
            <button style="background:none;border:2px solid grey;border-radius:2px;width:180px;height:180px;"
                class="gallery-item">
                <i class="fas fa-plus"></i></button>
            <button style="background:none;border:2px solid grey;border-radius:2px;width:180px;height:180px;"
                class="gallery-item">
                <i class="fas fa-plus"></i></button>
            <button style="background:none;border:2px solid grey;border-radius:2px;width:180px;height:180px;"
                class="gallery-item">
                <i class="fas fa-plus"></i></button>




    </div>

</div>
<div class="input-group control-group increment">
    <input type="file" onchange="readURL(this);" id="#blah" name="filename[]" class="form-control">
    <div class="input-group-btn">
        <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
    </div>
</div>

<div class="clone hide">
    <div class="control-group input-group" style="margin-top:10px">
        <input type="file" name="filename[]" class="form-control">
        <div class="input-group-btn">
            <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i>
                Remove</button>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

</form>
</div>
</div>


<script type="text/javascript">
    $(document).ready(function () {

        $(".btn-success").click(function () {
            var html = $(".clone").html();
            $(".increment").after(html);
        });

        $(".container-fluid").on("click", ".btn-danger", function () {
            $(this).parents(".control-group").remove();
        });

    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imageReplace').attr('src', e.target.result)
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("input[type='image']").click(function () {
        $("input[id='my_file']").click();
    });

</script>
@endsection
