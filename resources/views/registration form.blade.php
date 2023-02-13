<!DOCTYPE html>
<html>
  <head>
    <title>Online Registration</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<link rel="stylesheet" href="css/style.css">
    <style>
      /* Style the form elements */
      form {
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        background-color: lightgray;
        border-radius: 5px;
        box-sizing: border-box;
      }
      label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
      }
      input{
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        box-sizing: border-box;
        border: 1px solid gray;
        border-radius: 5px;
      }
      textarea
      {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        box-sizing: border-box;
        border: 1px solid gray;
        border-radius: 5px;
      }
      select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        box-sizing: border-box;
        border: 1px solid gray;
        border-radius: 5px;
      }

      input[type="submit"] {
        background-color: green;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: darkgreen;
      }
      #dynamic-form {
        display: none;
      }
      #dynamic-form1 {
        display: none;
      }
      #home_div {
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        border-radius: 5px;
      
      }
      input[type="home"] {
        background-color: white;
        color: blue;
        display: block;
        padding: 10px 20px;
        border-radius: 0;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div>

    </div>
    <h1 style="text-align: center;">Registration Form</h1>
    <form  method="post" action= "{{route('event.create')}}" >
        @csrf
        <label >Team Name:</label>
        <select name="Team_Name">
          <option value="">Select team</option>
          <option value="cse" >CSE</option>
          <option value="eee" >EEE</option>
          <option value="math">MATH</option>
        </select>
        <label for="team_name">Your Name:</label>
        <input type="string" id="name" name="Player_Name"><br><br>
  
        <label for="id">Your ID:</label>
        <input type="string" id="your_id" name="Player_ID"><br><br>

        <label for="your_age">Your Age:</label>
        <input type="string" id="your_age" name="Player_Age"><br><br>

        <label for="session">Session:</label>
        <input type="string" id="your_session" name="Session"><br><br>
         
        <label for="players">Player address:</label>
        <textarea id="players" name="Player_Address" rows="4" cols="50"></textarea><br><br>

        <label for="email">Email:</label>
        <input type="string" id="email" name="Email"><br><br>

        <label for="contact_number">Contact Number:</label>
        <input type="string" id="contact_number" name="Contract_Number"><br><br>

        <label for="blood_group">Blood Group:</label>
        <select name="Blood_Group">
          <option value="">Select blood group</option>
          <option value="A+" >A+</option>
          <option value="B+" >B+</option>
          <option value="AB+" >AB+</option>
          <option value="O+" >O+</option>
          <option value="A-" >A-</option>
          <option value="B-" >B-</option>
          <option value="AB-" >AB-</option>
          <option value="O-" >O-</option>
        </select>
        <label for="medical_history">Medical History/ Previous Injuries:</label>
        <textarea id="medical_history" name="Medical_History" rows="4" cols="50"></textarea><br><br>

      
        
        <label for="option_select">Choose Sports</label>
        <select id="option_select"  name="Sports_Category">
        <option value="">Select sports</option>
        <option value="football">FOOTBALL</option>
        <option value="cricket" >CIRCKET</option>
        <option value="batminton" >VOLLEYBALL</option>
        <option value="batminton" >CARROM</option>
      </select>
        <div id="dynamic-form">  
              <label >Select Positon:</label>
              <select name="F_position">
              <option value="">Choose</option>
                <option value="goal_kipper">GOAL KIPPER</option>
                <option value="deffender">DEFENDER</option>
                <option value="midfielder">MIDFIELDER</option>
                <option value="forward">FORWARD</option>
              </select>
          </div>
      <div id="dynamic-form1">
              <label >Select type of player:</label>
              <select  name="C_position">
              <option value="" >Choose</option>

                <option value="batsman" >BATSMAN</option>
                <option value="bawler" >BAWLER</option>
                <option value="wicket_kipper" >WICKET_KIPPER</option>
                <option value="all-rounder" >ALL-ROUNDER</option>
              </select>
          </div>
          <input type="submit" value="Submit">
        </form> 

        
    <script>
      $(document).ready(function() {
        $("#option_select").change(function() {
              
          if ($(this).val() == "football") {
            $("#dynamic-form").show();
            $("#dynamic-form1").hide();
          }
          else if ($(this).val() == "cricket") {
            $("#dynamic-form1").show();
            $("#dynamic-form").hide();
          }
           else {
            $("#dynamic-form").hide();
            $("#dynamic-form1").hide();
          }
        });
      });
    </script>
  </body>
</html>