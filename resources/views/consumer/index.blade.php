@extends('layout.tamplate')

@section('title', "Consumer")

@section('content')
    <h1>Consumer Data</h1>
   <a href="{{url('/create')}}">Add Data</a>
    <table border="1">
       <thead>
          <tr>
             <th>No.</th>
             <th>Name</th>
             <th>Vehicle Type</th>
             <th>Registration Plate</th>
             <th>Day of Birth</th>
             <th>Gender</th>
             <th>Phone Number</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody align="center">
          @foreach ($data as $d)
          <tr>
             <td>{{ $loop->iteration }}</td>
             <td>{{ $d->name }}</td>
             <td>{{ $d->vehicle_type }}</td>
             <td>{{ $d->registration_plate }}</td>
             <td>{{ $d->day_of_birth }}</td>
             <td>{{ $d->gender }}</td>
             <td>{{ $d->phone_number }}</td>
             <td><a href="#">Delete</a> || <a href="#">Delete</a></td>
          </tr> 
          @endforeach
      </tbody>
    </table>
@endsection
