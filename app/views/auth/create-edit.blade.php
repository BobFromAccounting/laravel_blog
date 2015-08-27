{{ Form::open(array('action' => 'UsersController@store')) }}
    <div class="form-group">
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['class' => 'form-control', 'autofocus']) }}
    </div>
    <div class="form-group">
        {{ Form::label('firstName', 'First Name') }}
        {{ Form::text('firstName', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('lastName', 'Last Name') }}
        {{ Form::text('lastName', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::text('password', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('passwordConfirm', 'Confirm Password') }}
        {{ Form::text('passwordConfirm', null, ['class' => 'form-control']) }}
    </div>
        {{ Form::submit('Create User', array('class' => 'btn btn-info'))}}
        <a class="btn btn-default" href="{{{ action('UsersController@login') }}}">Cancel</a>
{{ Form::close() }}