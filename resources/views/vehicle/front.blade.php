@extends('layouts.main')

@section('title' , 'Vehicle')
@section('heading' , 'Vehicle List')
@section('breadcrumb' , 'Vehicle List')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
      <p>{{ $message }}</p>
</div>
    
@endif

<div class="container border m-2 ">

</div>

@endsection