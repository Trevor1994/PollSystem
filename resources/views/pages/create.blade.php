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

  <button type="button" class="btn btn-primary" button onclick="myFunction()">Multiple-Choice</button>

  <button type="button" id="add" class="btn btn-secondary" onclick="clone();">Add Question</button>

<div id="container">
  <div id="multi" style="margin: 20px;">
    <div class="row">
      <div class="col-lg-6">
        <div id="question" class="input-group">
          <span class="input-group-addon">
            <input type="checkbox" aria-label="Checkbox for following text input">
          </span>
          <input type="text" class="form-control" aria-label="Text input with checkbox" style="padding-bottom: 20px;">
        </div>
      </div>
    </div>
  </div>
</div>  


  <hr>

  <div class="form-group">

    <button type="submit" class="btn btn-success">Submit</button>


  </div>

  @include ('layouts.errors')

</form>
@endsection
