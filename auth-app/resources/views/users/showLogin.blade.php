 @extends('layouts.layout')
 @section('content')
     @if (session('error'))
         <div class="alert alert-danger">
             {{ session('error') }}
         </div>
     @endif

     <form action="{{ route('users.login') }}" method="POST">
         @csrf
         <div class="mb-3 mt-3">
             <label for="uname" class="form-label">email:</label>
             <input type="text" class="form-control" name="email">

         </div>
         <div class="mb-3">
             <label for="pwd" class="form-label">Password:</label>
             <input type="password" class="form-control" name="password">

         </div>

         <button type="submit" class="btn btn-primary">Submit</button>
     </form>
   
 @endsection
