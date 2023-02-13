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
        <a href="{{ url('/admin_team') }}" Style="color:green">Teams</a>
        <a href="{{ url('/admin_match') }}">Matches</a>
        <a href="{{ url('/admin_match_upcomming') }}">Upcomming Matches</a>
        <a href="{{ url('/football_score')}}">Football Scores</a>
       </div>
       <div class="card table-responsive">
     
     <table class="table table-striped ">
                <thead class="table-dark">
                  <tr>
                   <th scope="col">Team No.</th>
                    <th scope="col">Team</th>
                    <th scope="col">Action</th>
                 </tr>
              </thead>
              @foreach($addTeam as $key=>$data) 
           <tbody >
               <tr >
               <th scope="row">{{$key+1}}</th>
                <th><p style="color:blue"> {{$data-> team_name}}</p>  </th>
                <th>
                  <a href="{{ url('/team/edit/'.$data->id) }} " class="btn btn-success">Edit</a>
                  <a href="{{ url('/team/delete/'.$data->id) }} " onclick="return confirm('Do you want to delete')" class="btn btn-danger">Delete</a>
                </th>
                </tr>
                   </tbody>
                   @endforeach 
              </table>
              {{$addTeam->links()}}
     </div>
    
       <!-- @foreach($addTeam as $key=>$data)
       <div class="card">
        
            <table class="table table-sm">
            <thead class="thead-green">
                  <tr style="text-align: center;">
                   <th scope="col">{{$data-> team_name}}</th>
                 </tr>
               </thead>
               <thead c>
                  <tr>
                   <th scope="col">No.</th>
                      <th scope="col"> Name</th>
                    <th scope="col">Position</th>
                  <th scope="col">Jersey No.</th>
                 </tr>
               </thead>
             <tbody>
               <tr>
                <th scope="row">1</th>
                <td>{{$data-> player_name1}}</td>
                <td>{{$data-> postion1}}</td>
                <td>2</td>
               </tr>
               <tr>
                <th scope="row">2</th>
                <td>{{$data-> player_name2}}</td>
                <td>{{$data-> postion2}}</td>
                <td>2</td>
               </tr>
               <tr>
                <th scope="row">3</th>
                <td>{{$data-> player_name3}}</td>
                <td>{{$data-> postion3}}</td>
                <td>2</td>
               </tr>
               <tr>
                <th scope="row">4</th>
                <td>{{$data-> player_name4}}</td>
                <td>{{$data-> postion4}}</td>
                <td>2</td>
               </tr>
               <tr>
                <th scope="row">5</th>
                <td>{{$data-> player_name5}}</td>
                <td>{{$data-> postion5}}</td>
                <td>2</td>
               </tr>
               <tr>
                <th scope="row">6</th>
                <td>{{$data-> player_name6}}</td>
                <td>{{$data-> postion6}}</td>
                <td>2</td>
               </tr>
               <tr>
                <th scope="row">7</th>
                <td>{{$data-> player_name7}}</td>
                <td>{{$data-> postion7}}</td>
                <td>2</td>
               </tr>
               <tr>
                <th scope="row">8</th>
                <td>{{$data-> player_name8}}</td>
                <td>{{$data-> postion8}}</td>
                <td>2</td>
               </tr>
               <tr>
                <th scope="row">9</th>
                <td>{{$data-> player_name9}}</td>
                <td>{{$data-> postion9}}</td>
                <td>2</td>
               </tr>
               <tr>
                <th scope="row">10</th>
                <td>{{$data-> player_name10}}</td>
                <td>{{$data-> postion10}}</td>
                <td>2</td>
               </tr>
               <tr>
                <th scope="row">11</th>
                <td>{{$data-> player_name11}}</td>
                <td>{{$data-> postion11}}</td>
                <td>2</td>
               </tr>
               <tr>
                <th scope="row">12</th>
                <td>{{$data-> player_name12}}</td>
                <td>{{$data-> postion12}}</td>
                <td>2</td>
               </tr>
               <tr>
                <th scope="row">13</th>
                <td>{{$data-> player_name13}}</td>
                <td>{{$data-> postion13}}</td>
                <td>2</td>
               </tr>
               <tr>
                <th scope="row">14</th>
                <td>{{$data-> player_name14}}</td>
                <td>{{$data-> postion14}}</td>
                <td>2</td>
               </tr>
               <tr>
                <th scope="row">15</th>
                <td>{{$data-> player_name15}}</td>
                <td>{{$data-> postion15}}</td>
                <td>2</td>
               </tr>
               <tr>
                <th scope="row">16</th>
                <td>{{$data-> player_name16}}</td>
                <td>{{$data-> postion16}}</td>
                <td>2</td>
               </tr>
               <tr>
                <th scope="row">17</th>
                <td>{{$data-> player_name17}}</td>
                <td>{{$data-> postion17}}</td>
                <td>2</td>
               </tr>
               <tr>
                <th scope="row">18</th>
                <td>{{$data-> player_name18}}</td>
                <td>{{$data-> postion18}}</td>
                <td>2</td>
               </tr>
             </tbody>
           </table>
            
    </div>  
    @endforeach  -->
 
       <div class="sidebar1">
             <a href=" {{url('/team_form')}}"class="btn btn-secondary">Add Team</a>
       </div>

    </main>
  </body>
  
    </x-slot>
    
  

    
</x-app-layout>
