@extends('Backend_Pages.adminDash')

@section('dashView')


<div class="container-fluid">    
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('crud.index') }}">
                <i class="fas fa-arrow-left"></i> Product
            </a>
        </li>
        <li class="breadcrumb-item active collaspe">
           Coupon  
        </li>
        
    </ol>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <p>{!! \Session::get('success') !!}</p>
            </ul>
        </div>
    @endif

   <div  class="card mb-3" >
        <div class="card-header" data-toggle="collapse" data-target="#Coupon">
            <i class="fas fa-ticket-alt"></i> Coupon
            <span style="float:right;" data-toggle="collapse" data-target="#Coupon"><i class="fas fa-minus"></i></span>
        </div>
        <form  id="Coupon" class="card-body collapse show" method="POST" action="{{route('coupon.form')}}" enctype="multipart/form-data">
         @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Coupon Name</label>
                <div  class="col-sm-10">    
                    <input type="text"  placeholder="Write the name of your coupon " name="coupon_name" class="form-control input-lg" required />
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Coupon Code</label>
                <div class="col-sm-10">
                    <input type="text"  placeholder="Write the code name of your coupon,this will be showed to your customer " name="coupon_code" class="form-control input-lg" required/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">End Date</label>
                <div  class="col-sm-10">  
                    <input name="end_date" class="form-control" type="date" value=" " id="example-date-input" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Discount Pecentage</label>
                <div  class="col-sm-10">  
                    <input type="number" name="discount_percentage" placeholder="Write the discount percentage per order"  class="form-control input-lg" required />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Dicount Amount Limit</label>
                <div  class="col-sm-10">  
                    <input type="number" placeholder="Write the amount you want your discount to be valid upto" name="amount_exceed" class="form-control input-lg" required />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Product Category </label>
                <div class="col-sm-10" id="catDiv">

                    <div class="catName"><input type="checkbox" id="select-all"> All</div> 
                    
                    
                    @foreach (App\Models\Category\productCategory::with('child')->where('cat_p_id',0)->get() as $cat_item)
                    
                    @if ($cat_item->child->count()>0)
                    
                        <div class="catName"> <input type="checkbox" name="catValue[]" value="{{$cat_item->cat_name}}" /> {{$cat_item->cat_name}}</div> 
                            @foreach ($cat_item->child as $submenu)
                                <div class="catName"> <input type="checkbox" name="catValue[]" value="{{$submenu->cat_name}}" /> {{$submenu->cat_name}}</div>
                            @endforeach
                    @endif
                    @if ($cat_item->child->count()==0)
                        <div class="catName"> <input type="checkbox" name="catValue[]" value="{{$cat_item->cat_name}}" /> {{$cat_item->cat_name}}</div> 
                    @endif
                  @endforeach
                </div>
            </div>
            {{-- <div class="form-group row">
                <label class="col-sm-2 col-form-label">Product Category </label>
                <div  class="col-sm-10">    
                    <select type="text" name="category" class="form-control input-lg" required>
                        <option selected disabled>Select Category</option>
                        @foreach (App\Models\Category\productCategory::with('child')->where('cat_p_id',0)->get() as $cat_item)    
                        @if ($cat_item->child->count()>0)
                            <option value="{{$cat_item->cat_name}}">{{$cat_item->cat_name}}</option>    
                            @foreach ($cat_item->child as $submenu)
                              <option value="{{$submenu->cat_name}}"> --{{$submenu->cat_name}}</option>    
                            @endforeach
                            
                        @endif
                        @if ($cat_item->child->count()==0)
                           <option value="{{$cat_item->cat_name}}">{{$cat_item->cat_name}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div> --}}
            <div class="text-center">
                <input type="submit" name="add" class="btn btn-primary" value="Add Coupon" />
            </div>
        </form>
    </div>



        {{--                                        DELIVERY                                                       --}}
        {{--                                        DELIVERY                                                       --}}
        {{--                                        DELIVERY                                                       --}}
        {{--                                        DELIVERY                                                       --}}


    <div  class="card mb-3" >
        <div class="card-header" data-toggle="collapse" data-target="#Delivery">
            <i class="fa fa-truck" aria-hidden="true"></i> Delivery Charge
            <span style="float:right;" data-toggle="collapse" data-target="#Delivery"><i class="fas fa-minus"></i></span>
        </div>
        
        <form  id="Delivery" class="card-body collapse show" method="POST" action="{{route('deliverycharge')}}" >  
        @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Delivery Charge</label>
                <div  class="col-sm-10">    
                    <input type="number"  placeholder="Enter your delivery charge" name="delivery_charge" class="form-control input-lg" required />
                </div>
            </div>
            
            <div class="text-center">
                <input type="submit" name="add" class="btn btn-primary" value="Save Charge" />
            </div>
            
        </form>
    </div>
    

</div> 
<script>
document.getElementById('select-all').onclick = function() {
  var checkboxes = document.getElementsByName('catValue[]');
  for (var checkbox of checkboxes) {
    checkbox.checked = this.checked;
  }
}




</script>
@endsection