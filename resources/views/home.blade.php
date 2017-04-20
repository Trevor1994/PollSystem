@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

                  <div class="active-polls">
                    <h1 class="cover-heading">Active Polls</h1>

                    <h4 class="poll-title"> Title</h4>

                    <p class="poll-post-meta">Januray 1, 2017 <a href="#">Trevor</a>
                  </div>

                  <div class="closed-polls">
                    <h1 class="cover-heading">Closed Polls</h1>

                    <h4 class="poll-title"> Title</h4>

                    <p class="poll-post-meta">Januray 1, 2017 <a href="#">Trevor</a>
                  </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
