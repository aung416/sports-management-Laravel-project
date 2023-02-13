<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Football Score</title>
  </head>
  <body>
   <div class="container">
    <a href="{{url('/football_score')}}" class="btn btn-primary my=3">Football Score</a>

     <form action="{{url('footballscore/update/' .$fscore_edit->id)}}"  method="post">
    @csrf
      <div class="form-group">
        <label for="">Team Name1</label>
        <input type="string" class="form-control" name="team_name1"value="{{$fscore_edit->team_name1}}" placeholder="Enter the team name">
      </div>
      <div class="form-group">
        <label for="">Score</label>
        <input type="string" class="form-control" name="football_score"value="{{$fscore_edit->football_score}}" placeholder="Enter the score">
      </div>
      <div class="form-group">
        <label for="">Team Name2</label>
        <input type="string" class="form-control" name="team_name2"value="{{$fscore_edit->team_name2}}" placeholder="Enter the player name">

      </div>
       <input type="submit" class="btn btn-primary" value="Submit">
  </form>
   </div>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>