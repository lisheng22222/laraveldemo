<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Sample')</title>
</head>
<body>

	@foreach (['danger', 'warning', 'success', 'info'] as $msg)
	  @if(session()->has($msg))
	    <div class="flash-message">
	      <p class="alert alert-{{ $msg }}">
	        {{ session()->get($msg) }}
	      </p>
	    </div>
	  @endif
	@endforeach

	@yield('content')
</body>
</html>