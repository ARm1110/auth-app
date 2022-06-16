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
     <form action="{{ route('tasks.store') }}" method="POST">
         @csrf
         <div class="mb-3 mt-3">
             <label for="uname" class="form-label">title:</label>
             <input type="text" class="form-control" name="title">

         </div>
         <div class="mb-3">
             <label class="form-label">body:</label>
             <input type="textarea" class="form-control" name="body">
         </div>
         <div class="mb-3">
             <label class="form-label">deadLine:</label>
             <input type="date" class="form-control" name="deadLine">
         </div>

         <button type="submit" class="btn btn-primary">Submit</button>
     </form>
 @endsection
