 @extends('layouts.layout')
 @section('content')
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
