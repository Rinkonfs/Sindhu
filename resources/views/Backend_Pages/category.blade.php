@extends('Backend_Pages.adminDash')

@section('dashView')


<div class="container-fluid">    
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('adminDashboard') }}">
                <i class="fas fa-arrow-left"></i> Product
            </a>
        </li>
        <li class="breadcrumb-item active collaspe">
           Coupon  
        </li>
    </ol>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div  class="card mb-3" >
                    <div class="card-header" data-toggle="collapse" data-target="#category">
                        Add Category
                        <span style="float:right;" data-toggle="collapse" data-target="#category"><i class="fas fa-minus"></i></span>
                    </div>
                    <form  id="category" class="card-body collapse show" method="POST" action="{{route('categoryForm')}}">
                     @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div  class="col-sm-10">    
                                <input type="text"  placeholder="Write Category Name" name="cat_name" class="form-control input-lg" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Parent </label>
                            <div  class="col-sm-10">    
                                <select type="text" name="cat_p_id" class="form-control input-lg" required>
                                    <option selected disabled>Select Category</option>
                                    <option value="0" >None</option>
                                    @foreach (App\Models\Category\productCategory::with('parent')->where('cat_p_id',0)->get() as $cat_p_item)  
                                    
                                    <option value="{{$cat_p_item->id}}">{{$cat_p_item->cat_name}}</option>    
                                    {{-- @if ($cat_p_item->count()>0)
                                       // 
                                    @endif
                                    @if ($cat_p_item->count()==0)
                                       <option value="0">{{$cat_item->cat_name}}</option>
                                    @endif --}}
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Description</label>
                            <div  class="col-sm-10">  
                                <textarea type="text" name="cat_desc" class="form-control input-lg" ></textarea>
                            </div>      
                        </div>    
                        <div class="text-center">
                            <input type="submit" name="add" class="btn btn-primary" value="Add Category" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        Category List
                    </div>
                   
                    <div class="card-body">    
                        <div class="table-responsive">    
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Category Name</th>
                                        <th>Parent Category</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                
                                {{-- <tfoot>
                                    <tr>
                                        <th>Category ID</th>
                                        <th>Parent Category</th>
                                        <th>Items</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>     --}}
                                
                                <tbody>
                                    @foreach ($cats as $cat)
                                    <tr>
                                        
                                            <td>{{$cat->id}} </td>
                                            <td>{{$cat->cat_name}} </td>

                                            @if($cat->cat_p_id != 0)
                                                <td>
                                                    @foreach ( App\Models\Category\productCategory::where('id',$cat->cat_p_id)->get() as $item )
                                                        {{$item->cat_name}}
                                                    @endforeach 
                                                </td>
                                            @else
                                                    <td style="color:#D3D3D3;">No Parent</td>
                                            @endif
                                       
                                        <td>
                                            {{-- <form action = "#" method="post"> --}}
                                                {{-- @csrf --}}
                                                {{-- @method    ('DELETE') --}}
                                                <a href="/delete/{{$cat->id}}" style="margin-top:5px;" type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>&nbsp;</a>
                                            {{-- </form>     --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                            {{-- {!! $data->links() !!} --}}
                        </div> 
                    </div>       
                </div>       
            </div>
        </div>
    </div>
    
@endsection