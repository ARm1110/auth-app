 @extends('layouts.layout')
 @section('content')
     @if ($errors->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     @endif
     <form action="{{ route('users.register') }}" method="post" class="was-validated">
         @csrf
         <div class="mb-3 mt-3">
             <label for="uname" class="form-label">first name:</label>
             <input type="text" class="form-control" id="uname" name="firstName">


         </div>
         <div class="mb-3 mt-3">
             <label for="uname" class="form-label">last name :</label>
             <input type="text" class="form-control" id="uname" name="lastName">


         </div>
         <div class="mb-3 mt-3">
             <label for="uname" class="form-label">data :</label>
             <input type="date" class="form-control" id="uname" name="date">


         </div>
         <div class="mb-3 mt-3">
             <label for="uname" class="form-label">email :</label>
             <input type="email" class="form-control" id="uname" name="email">


         </div>
         <div class="mb-3 mt-3">
             <label for="uname" class="form-label">password:</label>
             <input type="password" class="form-control" id="password" name="password">


         </div>
         <div class="mb-3 mt-3">
             <label for="uname" class="form-label">phone number :</label>
             <input type="text" class="form-control" id="uname" name="phoneNumber">


         </div>
         <div class="mb-3 mt-3">
             <label for="uname" class="form-label">gender:</label><br>
             <input type="radio" name="gender" value="male">male<br>
             <input type="radio" name="gender" value="female">female<br>


         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
     </form>
 @endsection
