@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
                 {!! $error !!}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-dark" role="alert" style="background-color:#F5F5DC; color:#4c0000;">
             {!!session('success')!!}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-dark" role="alert" style=" background-color:#F5F5DC; color:#4c0000;">
         {!!session('error')!!} 
    </div>
@endif