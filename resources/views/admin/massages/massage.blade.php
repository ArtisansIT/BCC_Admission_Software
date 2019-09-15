@if (Session::has('create'))

    <p class="alert alert-success" >{{ Session::get('create')}}</p>

@elseif(Session::has('update'))

    <p class="alert alert-info " >{{ Session::get('update')}}</p>

@elseif(Session::has('delete'))

    <p class="alert alert-danger" >{{ Session::get('delete')}}</p>
    
@elseif(Session::has('nothing'))

    <p class="alert alert-danger" >{{ Session::get('delete')}}</p>
@elseif(Session::has('password_update'))

    <p class="alert alert-success" >{{ Session::get('password_update')}}</p>

@endif