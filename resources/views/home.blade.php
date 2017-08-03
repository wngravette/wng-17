@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<form action="/posts" method="post">
{{ csrf_field() }}
<textarea name="post"></textarea>
<input type="text" name="link" placeholder="link" />
<input type="submit">
</form>
@endsection
