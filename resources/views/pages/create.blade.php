@extends ('layouts.master')

@section ('content')


<h1>Create a Poll</h1>

<hr>

<form method="POST" action="/polls">
    {{ csrf_field() }}

  <div class="form-group">
    <label for="title">Title:</label>
    <input type="title" class="form-control" id="title" name="title">
  </div>

  <div class="form-group">
    <label for="description">Description:</label>
    <textarea id="description" name="description" class="form-control"></textarea>
  </div>

  <button type="button" class="btn btn-secondary">Multi-Choice</button>

  <button type="button" class="btn btn-secondary">True/False</button>

  <button type="button" class="btn btn-secondary">Short Answer</button>

  <hr>

  <button type="button" class="btn btn-success">Submit</button>

</form>

@endsection
