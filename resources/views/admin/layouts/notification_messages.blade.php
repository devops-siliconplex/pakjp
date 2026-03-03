@if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissable fade show alert-msg">
        <button class="close" data-dismiss="alert" aria-label="Close"></button>
        <br>{{$error}}
    </div>
    @endforeach
@endif


@if(session()->has('success'))
    <div class="alert alert-success alert-msg">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger alert-msg">
        {{ session()->get('error') }}
    </div>
@endif