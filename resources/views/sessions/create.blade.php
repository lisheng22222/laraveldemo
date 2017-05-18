@extends('layouts.default')
@section('title','注册')

@section('content')
	
	<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>注册</h5>
    </div>

    <div class="panel-body">
    	 @if (count($errors) > 0)
    	  <div class="alert alert-danger">
    	      <ul>
    	          @foreach($errors->all() as $error)
    	          <li>{{ $error }}</li>
    	          @endforeach
    	      </ul>
    	  </div>
    	@endif

      <form method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="email">邮箱：</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>

          <div class="form-group">
            <label for="password">密码：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
          </div>

          <button type="submit" class="btn btn-primary">登录</button>
      </form>

      <hr>

    </div>
  </div>
</div>

@stop