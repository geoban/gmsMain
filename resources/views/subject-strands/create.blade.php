@extends('layouts.master')
@section('content')
    <div class="container">
        @include('layouts.errors')
        <form method="POST" action="/subject-strands/store">
            @csrf
          <div class="form-group">
            <div class="form-group">
                <label for="">Subjects</label>
              <select class="form-control" id="sel1" name="subject_id">
                <option value = "Math">MATH</option>
                <option value = "Science">SCIENCE</option>
                <option value = "History">HISTORY</option>
                <option value = "PE">PE</option>
              </select>
            </div>
      
            <div>
            <label for="sel1">Strands</label>
              <select class="form-control" id="sel1" name="strand_id">
                <option value = "Strand 1">QWERT</option>
                <option value = "Strand 2">ASDFF</option>
                <option value = "Strand 3">ZXCVV</option>
                <option value = "Strand 4">TYUUU </option>
              </select>
            </div>
            <label for="title">Semester</label>
            <input type="text" class="form-control" name='semester' aria-describedby="emailHelp" placeholder="Semester" required="">
            <label for="title">Grade Level</label>
            <input type="text" class="form-control" name='grade_level' aria-describedby="emailHelp" placeholder="Grade Level" required="">
          </div>
           
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection