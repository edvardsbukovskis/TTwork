{{Form::open(array('action' => 'AnketasController@store'))}}
    {{Form::text('description')}}
        {{Form::text('nosaukums')}}
        {{Form::submit('Submit')}}
            {{Form::close()}}