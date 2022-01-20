@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="text-center"> Show {{ $user->name }} Information</h1>
    <form method="post" action="{{ route('users.store') }}">
        @csrf
        <div class="mb-3">
          <label  class="form-label">User name</label>
          <input type="text" class="form-control" value="{{ $user->name }}"Readonly>
        </div>
        <div class="mb-3">
            <label  class="form-label">Email address</label>
            <input type="email" class="form-control" value="{{ $user->email }}"Readonly>
          </div>
       
        
          <a href="{{ route('users.index') }}" class="btn btn-primary">Submit</a>
      </form>
</div>
@endsection