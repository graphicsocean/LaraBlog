@extends('admin.app')
@section('content')
<h1> >>> hello {{Auth::user()->name}}</h1>
@endsection
