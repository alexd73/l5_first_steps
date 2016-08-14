<div class="form-group">
    {!! Form::label('slug') !!}
    {!! Form::text('slug', NULL, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('title') !!}
    {!! Form::text('title', NULL, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('excerpt') !!}
    {!! Form::textarea('excerpt', NULL, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('content') !!}
    {!! Form::textarea('content', NULL, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('published') !!}
    {!! Form::checkbox('published', TRUE, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
</div>
