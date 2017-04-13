@extends ('layouts.master')

@section ('content')

<h1>Create a Poll</h1>

<hr>

<form method="POST" action="/polls">
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="title" class="form-control" id="title" name="title">
  </div>

  <div class="form-group">
    <label for="description">Description:</label>
    <textarea id="description" name="description" class="form-control"></textarea>
  </div>

  <button type="button" class="btn btn-primary">Multi-Choice</button>

  <button type="button" class="btn btn-primary">True/False</button>

  <button type="button" class="btn btn-primary">Short Answer</button>

</form>

@endsection
