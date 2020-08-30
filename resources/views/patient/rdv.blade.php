@extends('layouts.app')

@section('content')
<p>{{dd(Auth::user())}}</p>
@endsection