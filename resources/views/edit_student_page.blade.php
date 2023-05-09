@extends('layout')
@section('content')
                    
<div class="col-12 col-lg-6 grid-margin">
  <div class="card">
      <div class="card-body">
        <p class="alert-success">
                <?php 
                  $exception = Session::get('add_student_message');
                  if($exception){
                    echo $exception;
                    Session::put('add_student_message', null);
                  }
                ?>
              </p>  
          <h2 class="card-title">Add student</h2>
          <form class="forms-sample" method="post" action="{{URL::to('/add-student')}}">
            {{csrf_field()}}
              <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control p-input" name="student_name" placeholder="Name">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control p-input" name="student_email" placeholder="Email">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Mobile</label>
                  <input type="text" class="form-control p-input" name="student_mobile" placeholder="Mobile">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Course</label>
                  <input type="text" class="form-control p-input" name="student_course" placeholder="Course">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Payment</label>
                  <input type="text" class="form-control p-input" name="student_course_payment_status" placeholder="paid/not_paid">
              </div>
<!--
              <div class="form-group">
                  <label>Upload file</label>
                  <div class="row">
                    <div class="col-12">
                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                      <input type="file" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">
                    </div>
                  </div>
              </div>
-->
              <button type="submit" class="btn btn-success">Submit</button>
          </form>
      </div>
  </div>
</div>
@endsection