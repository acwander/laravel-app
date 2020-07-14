@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class='border-bottom'>{{ $user->username }}'s Scorecards</h1>
    <p>{{ $user->profile->about }}</p>
    <div class='row-12 pt-4'>
        <p>Most recent scorecard</p>
        <p>Oldest scorecard</p>
    </div>
</div>
@endsection
