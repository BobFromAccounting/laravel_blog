
    <div class="form-group">
        {{ Form::label('title', 'Blog Title') }}
        {{ Form::text('title', null, ['class' => 'form-control', 'autofocus']) }}
    </div>
    <div class="form-group">
        {{ Form::label('body', 'Blog Body') }}
        {{ Form::textarea('body', null, ['class' => 'form-control', 'data-provide' => 'markdown', 'rows' => '15']) }}
    </div>