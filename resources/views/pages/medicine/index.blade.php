@extends('layouts.app')
@section('page')
 
<div class="card shadow-lg border border-dark mx-4 mt-4 card-default"><h2 class="py-2 bg-dark text-center text-light">Medicine Lists</h2>
  <div class="card-header">
    <h2 class="btn btn-info"><b>Create Medicine</b></h2>
  </div>
  <div class="card-body">
    <table class="table table-bordered text-dark text-center">
      <thead>
        <tr>
          <th scope="col">SL No.</th>
          <th scope="col">Name</th>
          <th scope="col">Status</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($medicine as $key=>$item)
        <tr>
          <td scope="row">{{++$key}}</td>
          
          <td>{{$item->name}}</td>
          <td>{{$item->status==1? 'Active' : 'Inactive'}}</td>
           
          <th class="text-center">
            <a href="{{route('medicines.edit',$item->id )}}">
          <button class="btn btn-primary text-dark"><b>EDIT</b></button>
          <button class="btn btn-danger text-dark"><b>Delete</b></button>
              
            
          </th>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
 
 
@endsection