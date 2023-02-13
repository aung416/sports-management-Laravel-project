<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <div class="container">
    <a href="{{url('/admin_team')}}" class="btn btn-primary my=3">Team</a>

     <form action="{{route('add.create')}} "  method="post">
    @csrf
      <div class="form-group">
        <label for="">Team Name</label>
        <input type="string" class="form-control" name="team_name" placeholder="Enter the team name">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <!-- <div class="form-group">
        <label for="">Player01 Name</label>
        <input type="string" class="my-2" name="player_name1" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion1" placeholder="Enter the player position"><br>

        <label for=""> Player02 Name</label>
        <input type="string" class="my-2" name="player_name2" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion2" placeholder="Enter the player position"><br>

        <label for=""> Player03 Name</label>
        <input type="string" class="my-2" name="player_name3" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion3" placeholder="Enter the player position"><br>

        <label for=""> Player04 Name</label>
        <input type="string" class="my-2" name="player_name4" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion4" placeholder="Enter the player position"><br>

        <label for=""> Player05 Name</label>
        <input type="string" class="my-2" name="player_name5" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion5" placeholder="Enter the player position"><br>

        <label for="">Player06 Name </label>
        <input type="string" class="my-2" name="player_name6" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion6" placeholder="Enter the player position"><br>

        <label for=""> Player07 Name</label>
        <input type="string" class="my-2" name="player_name7" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion7" placeholder="Enter the player position"><br>

        <label for=""> Player08 Name</label>
        <input type="string" class="my-2" name="player_name8" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion8" placeholder="Enter the player position"><br>

        <label for=""> Player09 Name</label>
        <input type="string" class="my-2" name="player_name9" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion9" placeholder="Enter the player position"><br>

        <label for="">Player10 Name</label>
        <input type="string" class="my-2" name="player_name10" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion10" placeholder="Enter the player position"><br>

        <label for=""> Player11 Name</label>
        <input type="string" class="my-2" name="player_name11" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion11" placeholder="Enter the player position"><br>

        <label for=""> Player12 Name</label>
        <input type="string" class="my-2" name="player_name12" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion12" placeholder="Enter the player position"><br>

        <label for="">Player13 Name </label>
        <input type="string" class="my-2" name="player_name13" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion13" placeholder="Enter the player position"><br>

        <label for="">Player14 Name </label>
        <input type="string" class="my-2" name="player_name14" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion14" placeholder="Enter the player position"><br>

        <label for="">Player15 Name </label>
        <input type="string" class="my-2" name="player_name15" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion15" placeholder="Enter the player position"><br>

        <label for="">Player16 Name </label>
        <input type="string" class="my-2" name="player_name16" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion16" placeholder="Enter the player position"><br>

        <label for=""> Player17 Name</label>
        <input type="string" class="my-2" name="player_name17" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion17" placeholder="Enter the player position"><br>

        <label for=""> Player18 Name</label>
        <input type="string" class="my-2" name="player_name18" placeholder="Enter the player name">
        <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position</label>
        <input type="string" class="my-2" name="postion18" placeholder="Enter the player position">
 -->


        <!-- <input type="string" class="form-control" name="player_name3" placeholder="Enter the player name">
        <input type="string" class="form-control" name="player_name4" placeholder="Enter the player name">
        <input type="string" class="form-control" name="player_name5" placeholder="Enter the player name">
        <input type="string" class="form-control" name="player_name6" placeholder="Enter the player name">
        <input type="string" class="form-control" name="player_name7" placeholder="Enter the player name">
        <input type="string" class="form-control" name="player_name8" placeholder="Enter the player name">
        <input type="string" class="form-control" name="player_name9" placeholder="Enter the player name">
        <input type="string" class="form-control" name="player_name10" placeholder="Enter the player name">
        <input type="string" class="form-control" name="player_name11" placeholder="Enter the player name">
        <input type="string" class="form-control" name="player_name12" placeholder="Enter the player name">
        <input type="string" class="form-control" name="player_name13" placeholder="Enter the player name">
        <input type="string" class="form-control" name="player_name14" placeholder="Enter the player name">
        <input type="string" class="form-control" name="player_name15" placeholder="Enter the player name">
        <input type="string" class="form-control" name="player_name16" placeholder="Enter the player name">
        <input type="string" class="form-control" name="player_name17" placeholder="Enter the player name">
        <input type="string" class="form-control" name="player_name18" placeholder="Enter the player name"> -->
      <!-- </div> -->
       <input type="submit" class="btn btn-primary" value="Submit">
  </form>
   </div>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>