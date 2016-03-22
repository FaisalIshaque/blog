<!--  -->
<div class="form-group">

	{!! Form::label('titel', 'Title:') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

	{!! Form::label('body', 'Body:') !!}
	{!! Form::textarea('body', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

	{!! Form::label('author', 'author:') !!}
	{!! Form::text('author', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

	{!! Form::label('published_at', 'Published On:') !!}
	{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}

</div>

<div class="form-group">

	{!! Form::submit($submitBtnTxt, ['class' => 'btn btn-primary form-control']) !!}

</div>