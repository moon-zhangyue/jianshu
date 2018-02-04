@if(count($errors)>0)
    <div class="alert alert-danger alert-dismissable" role="alert" >
        @foreach($errors->all() as $error)
            <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">
                &times;
            </button>
            <p>{{$error}}</p>
        @endforeach
    </div>
@endif