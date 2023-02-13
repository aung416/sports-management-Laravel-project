<x-app-layout>
    <x-slot name="header">
    <head>
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
        display: grid;
        background:green;
        grid-template-columns: repeat(3, 1fr);
      }
      .sidebar {
        background-color: #f1f1f1;
        width: 200px;
        height: 100vh;
        overflow: scroll;
        padding: 20px;
        position:relative;
       ;
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
        width: 300px;
        height: 200px;
        background-color: white;
        border: 1px solid lightgray;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
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
        <a href="{{ url('/admin_match_upcomming') }}">Upcomming Matches</a>
        <a href="{{ url('/football_score')}}">Football Score</a>
        <a href="#"> </a>
       </div>
        <div class="card-holder">
          <div class="card">
            <h2>Match 1</h2>
            <p>CSE VS EEE</p><br><br><br>
            <p>March 20th, 2023</p>
            <p>2:30 PM</p>
          </div>
          <div class="card">
            <h2>Match 2</h2>
            <p>CSE VS MATH</p><br><br><br>
            <p>March 16th, 2023</p>
            <p>2:30 PM</p>
          </div>

  
        </div>
    </main>
  </body>
    </x-slot>
    
  

    
</x-app-layout>
