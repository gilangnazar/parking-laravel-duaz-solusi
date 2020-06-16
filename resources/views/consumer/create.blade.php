@extends('layout.tamplate')

@section('title', "add data")

@section('content')
<h1>Form add Consumer</h1>
   <form action="{{url('/')}}">
       <label for="name">Name</label><br>
       <input type="text" name="name" id="name"><br>
       <label for="vehicle_type">Vehicle Type</label><br>
       <select name="vehicle_type" id="vehicle_type">
          <option value="Car">Car</option>
          <option value="Motorcycle">Motorcycle</option>
       </select><br>
       <label for="registration_plate">Registration Plate</label><br>
       <input type="text" name="registration_plate" id="registration_plate"><br>
       <label for="day_of_birth">Day of Birth</label><br>
       <input type="date" name="day_of_birth" id="day_of_birth"><br>
       <label for="gender">Gender</label>
       <select name="gender" id="gender">
          <option value="l">Male</option>
          <option value="p">Female</option>
       </select><br>
       <label for="phone_number">Phone Number</label><br>
       <input type="text" name="phone_number" id="phone_number"><br>
       <button name="submit">Submit</button>
    </form>
@endsection
