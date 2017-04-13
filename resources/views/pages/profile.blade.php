@extends ('layouts.master')


@section ('content')

<h1>Profile Settings</h1>

<hr>

<form method="POST" action="/profile">
    {{ csrf_field() }}

  <div class="form-group">
    <label for="change_email">Change Email:</label>
    <input type="change_email" class="form-control" id="change_email" name="change_email">
  </div>

  <div class="form-group">
    <label for="change_password">Change Password:</label>
    <input type="change_password" class="form-control" id="change_password" name="change_password">
  </div>

  <hr>

  <button type="button" class="btn btn-success">Save</button>

</form>

@endsection
