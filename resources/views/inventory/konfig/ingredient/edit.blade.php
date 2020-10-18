@extends('master')
@section('inventory','aktif')
@section('judul',"Ingredients")
@section('ingredient',"active")

@section('konten')
<div class="col-md-7" style="margin:0 auto;">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Edit The Ingredient</h4>
                <p class="card-category">Edit the Ingredient into your system</p>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('inventory.config.ingredient.update',$ing->id)}}">
                    {{csrf_field()}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                        <label class="bmd-label-floating">Ingredient Name</label>
                        <input type="text" class="form-control" name="ingredient" value="{{$ing->name}}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Edit Ingredient</button>
                <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
