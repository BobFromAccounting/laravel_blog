{{ Form::open(array('action' => 'AuthController@store')) }}
    <div class="form-group">
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['class' => 'form-control', 'autofocus', 'required']) }}
    </div>
    <div class="form-group">
        {{ Form::label('first_name', 'First Name') }}
        {{ Form::text('first_name', null, ['class' => 'form-control', 'required']) }}
    </div>
    <div class="form-group">
        {{ Form::label('last_name', 'Last Name') }}
        {{ Form::text('last_name', null, ['class' => 'form-control', 'required']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['class' => 'form-control', 'required']) }}
    </div>
    <div class="form-group">
        {{ Form::label('password_confirmation', 'Confirm Password') }}
        {{ Form::password('password_confirmation', ['class' => 'form-control', 'required']) }}
    </div>
        {{ Form::submit('Create User', array('class' => 'btn btn-info'))}}
        <a class="btn btn-default" href="{{{ action('AuthController@login') }}}">Cancel</a>
{{ Form::close() }}