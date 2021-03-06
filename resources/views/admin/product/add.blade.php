@extends('admin.master')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
  <form action="" method="POST">
    <div class="form-group">
      <label>Name</label>
      <input class="form-control" name="txtName" placeholder="Please Enter Username" />
    </div>
    <div class="form-group">
      <label>Price</label>
      <input class="form-control" name="txtPrice" placeholder="Please Enter Password" />
    </div>
    <div class="form-group">
      <label>Intro</label>
      <textarea class="form-control" rows="3" name="intro" id="intro"></textarea>
    </div>
    <div class="form-group">
      <label>Content</label>
      <textarea class="form-control" rows="3" name="content" id="content"></textarea>
    </div>
    <div class="form-group">
      <label>Images</label>
      <input type="file" name="fImages">
    </div>
    <div class="form-group">
      <label>Product Keywords</label>
      <input class="form-control" name="txtOrder" placeholder="Please Enter Category Keywords" />
    </div>
    <div class="form-group">
      <label>Product Description</label>
      <textarea class="form-control" rows="3" name="description"></textarea>
    </div>
    <div class="form-group">
      <label>Product Status</label>
      <label class="radio-inline">
        <input name="rdoStatus" value="1" checked="" type="radio">Visible
      </label>
      <label class="radio-inline">
        <input name="rdoStatus" value="2" type="radio">Invisible
      </label>
    </div>
    <button type="submit" class="btn btn-default">Product Add</button>
    <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection