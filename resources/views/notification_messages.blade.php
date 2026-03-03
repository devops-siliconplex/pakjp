
@if ($errors->any())
    @foreach ($errors->all() as $error)
    <p style='color:red; font-weight:bold;'>
        <br>{{$error}}
    </p>
    @endforeach
@endif


@if(session()->has('success'))
    <p style='color:green; font-weight:bold;'>
        {{ session()->get('success') }}
    </p>
@endif

@if(session()->has('error'))
    <p style='color:red; font-weight:bold;'>
        {{ session()->get('error') }}
    </p>
@endif