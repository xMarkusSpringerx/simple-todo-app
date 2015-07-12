<h1>Grundgerüst</h1>

<div class="content">
	@if (Session::has('message'))
        <div class="flash alert-info">
            <p>{{ Session::get('message') }}</p>
        </div>
	@endif


	@if ($errors->any())
	    <div class='flash alert-danger'>
            @foreach ( $errors->all() as $error )
                <p>{{ $error }}</p>
            @endforeach
	    </div>
	@endif
saf
	@yield('content')
</div>
