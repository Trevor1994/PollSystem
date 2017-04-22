@extends ('layouts.app')

<script type="text/javascript" src="{!! asset('js/functions.js') !!}"></script>

@section ('content')


<h1>Create a Poll</h1>

<hr>

<form method="POST" action="/pages/home">
    {{ csrf_field() }}

  <div class="form-group">
    <label for="title">Title:</label>
    <input type="title" class="form-control" id="title" name="title">
  </div>

  <div class="form-group">
    <label for="body">Poll Body:</label>
    <textarea id="body" name="body" class="form-control"></textarea>
  </div>

  <button type="button" class="btn btn-secondary" button onclick="myFunction()">Multi-Choice</button>

  <div id="multi">
    <div class="row">
      <div class="col-lg-6">
        <div class="input-group">
          <span class="input-group-addon">
            <input type="checkbox" aria-label="Checkbox for following text input">
          </span>
          <input type="text" class="form-control" aria-label="Text input with checkbox">
        </div>
      </div>
    </div>
  </div>

  <button type="button" class="btn btn-secondary">True/False</button>

  <button type="button" class="btn btn-secondary">Short Answer</button>

  <hr>

  <div class="form-group">

    <button type="submit" class="btn btn-success">Submit</button>

  </div>

  @include ('layouts.errors')

</form>
@endsection
