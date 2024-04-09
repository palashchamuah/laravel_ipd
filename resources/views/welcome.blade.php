<!doctype html>
<html>
  <head>
    <link rel ="stylesheet" href="{{asset('css/form.css')}}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>Hospital IPD Count</title>
  </head>
  <body>

  <form id="form" action='save' method ='post' enctype="multipart/form-data">
   @csrf
   <h2>Fill Up the IPD Data</h2>

   <div class="form-group">
      <label for="name">Select Your Hospital Name</label>
      <br />
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i>            </div>
         <select name="hospital" id="hospital"  name="hospital" class="form-control select2" required>
                              <option value="" selected disabled>Select your hospital</option>
                              @foreach($hosp as $data)
                              <option value="{{ $data->hosp_name }}">{{ $data->hosp_name }}</option>
                              @endforeach
                                
                              </select>
                              @if($errors->has('hospital'))
                              <span class="text-danger">{{ $errors->first('hospital') }}</span>
                              @endif
         </div>
      </div>
   
   <div class="form-group">
      <label for="email">Select Date</label>
      <br />
      <div class="input-group">
      <input type="date" name="date" id="date" class="form-control" required>
                            @if($errors->has('date'))
                            <span class="text-danger">{{ $errors->first('date') }}</span>
                            @endif
      </div>
   </div>
   
   <div class="form-group">
      <label for="ipd_count">Enter Total IPD Count</label>
      <br />
      <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i>            </div>
                            <input type="number" name="ipd" id="ipd" class="form-control" required>
                            @if($errors->has('ipd'))
                            <span class="text-danger">{{ $errors->first('ipd') }}</span>
                            @endif
         </div>
      </div>
   </div>
   
   <div class="form-group">
   <label for="image">Upload File</label>
                            <input type="file" name="file" id="file" class="form-control-file" required>
                            @if($errors->has('file'))
                            <span class="text-danger">{{ $errors->first('file') }}</span>
                            @endif
      </div>
   </div>
   
   
   <button type="submit" class="btn btn-secondary">Submit</button>
</form>
</body>
</html>
