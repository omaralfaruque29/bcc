@extends('layout')
@section('content')
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Serial</th>
                          <th>Teacher ID</th>
                          <th>Teacher Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Course</th>
                          <th>Payment Status</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($allTeacher as $aTeacher)
                      <tr>
                          <td>{{$aTeacher->id}}</td>
                          <td>{{$aTeacher->id}}</td>
                          <td>{{$aTeacher->teacher_name}}</td>
                          <td>{{$aTeacher->teacher_email}}</td>
                          <td>{{$aTeacher->teacher_mobile}}</td>
                          <td>{{$aTeacher->teacher_course}}</td>
                          <td>{{$aTeacher->teacher_payment_status}}</td>
                          <td>
                            <label class="badge badge-info">enrolled</label>
                          </td>
                          <td>
                            <a href="{{URL::to('/view-teacher/'.$aTeacher->id)}}" id="view"><button class="btn btn-outline-primary">View</button></a>
                            <a href="{{URL::to('/edit-teacher/'.$aTeacher->id)}}" id="edit"><button class="btn btn-outline-primary">Edit</button></a>
                            <a href="{{URL::to('/delete-teacher/'.$aTeacher->id)}}" id="delete"><button class="btn btn-outline-primary">Delete</button></a>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
@endsection