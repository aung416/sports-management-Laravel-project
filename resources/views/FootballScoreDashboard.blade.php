<x-app-layout>
    <x-slot name="header">
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
    <style>
      /* Add your CSS styles here */
      body{
        position: relative;
      }
      /* header {
        background-color: #333;
        color: white;
        padding: 20px;
        text-align: center;
       position: sticky;
      } */
      h1 {
        margin: 0;
      }
      main {
        display: flex;
      }

      .card-holder{
        width: 500px;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
      }
      .sidebar {
        background-color: #f1f1f1;
        width: 200px;
        height: 100vh;
        overflow: scroll;
        padding: 20px;
        position:relative;
       
      }
      .sidebar {
        background-color: #f1f1f1;
        position:right;
       float:right;
      }
      .sidebar a {
        color: black;
        display: block;
        padding: 10px;
        text-decoration: none;
      }
      .sidebar a.active {
        background-color: #4CAF50;
        color: white;
      }
      .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
      }
      .main-content {
        width: calc(100% - 200px);
        padding: 20px;
        height: calc(100% - 800px);
      }
      .card {
        width: 900px;
        height: 600px;
        /* background-color: white;
        border: 1px solid light;
        box-shadow: 2px 2px 5px rgba(1, 1, 1,0); */
        border-radius: 5px;
        margin: 20px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <main>
      <div class="sidebar">
        <!-- Add your navigation links here -->
        <a class="active" href="#">Dashboard</a>
        <a href="{{ url('/admin_team') }}">Teams</a>
        <a href="{{ url('/admin_match') }}">Matches</a>
        <a href="{{ url('/admin_match_upcomming') }}" >Upcomming Matches</a>
        <a href="{{ url('/football_score')}}" Style="color:green">Football Score</a>
       </div>
         
    <div class="card table-responsive">
     
    <table class="table table-striped ">
               <thead class="table-dark">
                 <tr>
                 <th scope="col">Match no.</th>
                  <th scope="col">Team Name</th>
                   <th scope="col">Score</th>
                     <th scope="col">Team Name</th>
                     <th scope="col">Action</th>
                </tr>
             </thead>
           @foreach($addScore as $key=>$data) 
          <tbody >
              <tr >
                <th scope="row">{{$key+1}}</th>
               <th><p style="color:blue"> {{$data-> team_name1}}</p>  </th>
               <th><p style="color:red"> {{$data-> football_score}}</p></th>
               <th><p style="color:blue"> {{$data-> team_name2}}</p></th>
               <th>
                  <a href="{{ url('/footballscore/edit/'.$data->id) }} " class="btn btn-success">Edit</a>
                  <a href="{{ url('/footballscore/delete/'.$data->id) }} " onclick="return confirm('Do you want to delete')" class="btn btn-danger">Delete</a>
                </th>
               </tr>
                  </tbody>
                  @endforeach 
             </table>
             {{$addScore->links()}}
            
    </div>
   
    <div class="sidebar1">
             <a href=" {{url('/footballscore_form')}}"class="btn btn-secondary">Add Score</a>
       </div>
    </main>
  </body>
    </x-slot>
    
  

    
</x-app-layout>
