<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\registrationForm;
use App\Models\TeamCreateForm;
use App\Models\MatchCreateForm;
use App\Models\FootballscoreFrom;
use App\Models\MatchUpcommingForm;
use Session;


class MyController extends Controller
{
    //home page route.....
    public function home() {
        $addScore=FootballscoreFrom::all();
        $addMatch=MatchCreateForm::simplePaginate(7);
        return view('homepage',compact('addScore'),compact('addMatch')); }
        public function about() {
            return view('About'); }
  //football page route....
    public function football()
    { 
        $addScore=FootballscoreFrom::all();
        $addMatch=MatchCreateForm::simplePaginate(7);
        return view('Football',compact('addScore'),compact('addMatch')); }

    //circket page  route....
public function cricket(){
    return view('Cricket');}

    public function volleyball()
    {
         return view('volleyball');
    } 
    public function carrom()
    {
         return view('carrom');
    }
    //Team in Admin panel.....
public function admin_teams(){
                                  // $addTeam=TeamCreateForm::all();
    $addTeam=TeamCreateForm::simplePaginate(7);
    return view('Team_Dashboard',compact('addTeam'));}
public function teamForm(){
    return view('Team_form');}
public function teamStore(Request $request){
                                       // dd($request->all());
       $team_create_forms=TeamCreateForm::create($request->all());
       return redirect('/admin_team');}
public function editStore($id=null){
    $team_edit=TeamCreateForm::find($id);
            return view('team_name_edit',compact('team_edit'));}
public function updateStore(Request $request,$id){
                                   // dd($request->all());  
        $team_create_forms=TeamCreateForm::find($id);
        $team_create_forms->team_name=$request->team_name;
        $team_create_forms->save();
        return redirect('/admin_team');}
public function deleteStore($id=null){
    $delete_team=TeamCreateForm::find($id);
    $delete_team->delete();
    return redirect('/admin_team');}



//Match in Admin panel.....
public function admin_match(){
    $addMatch=MatchCreateForm::simplePaginate(7);
    return view('MatchDashboar',compact('addMatch'));}
public function matchForm(){
    return view('matchCreateForm');}
public function matchStore(Request $request){
                        // dd($request->all());
       $match_create_forms=MatchCreateForm::create($request->all());
    return redirect('/admin_match');}

public function editMStore($id=null){
    $match_edit=MatchCreateForm::find($id);
            return view('match_name_edit',compact('match_edit'));}
public function updateMStore(Request $request,$id){
                                   // dd($request->all());  
        $match_create_forms=MatchCreateForm::find($id);
        $match_create_forms->team_name1=$request->team_name1;
        $match_create_forms->team_name2=$request->team_name2;
        $match_create_forms->date_time=$request->date_time;
        $match_create_forms->save();
        return redirect('/admin_match');}
public function deleteMStore($id=null){
    $delete_match=MatchCreateForm::find($id);
    $delete_match->delete();
    return redirect('/admin_match');}


    //Match Upcomming in Admin panel.....
public function admin_match_upcomming(){
    $addMatchUpcomming=MatchUpcommingForm::simplePaginate(7);
    return view('MatchUpcommingDashboar',compact('addMatchUpcomming'));}
public function matchUpcommingForm(){
    return view('matchUpcommingCreateForm');}
public function matchUpcommingStore(Request $request){
                        // dd($request->all());
       $match_create_forms=MatchUpcommingForm::create($request->all());
    return redirect('/admin_match_upcomming');}



public function editMUStore($id=null){
    $match_upcomming_edit=MatchUpcommingForm::find($id);
            return view('match_upcomming_name_edit',compact('match_upcomming_edit'));}
public function updateMUStore(Request $request,$id){
                                   // dd($request->all());  
        $match_create_forms=MatchUpcommingForm::find($id);
        $match_create_forms->team_name1=$request->team_name1;
        $match_create_forms->team_name2=$request->team_name2;
        $match_create_forms->date_time=$request->date_time;
        $match_create_forms->save();
        return redirect('/admin_match_upcomming');}
public function deleteMUStore($id=null){
    $delete_match=MatchUpcommingForm::find($id);
    $delete_match->delete();
    return redirect('/admin_match_upcomming');}


//Football score........
public function football_score(){
    $addScore=FootballscoreFrom::simplePaginate(7);
    return view('FootballScoreDashboard',compact('addScore'));}
public function footballscoreForm(){
    return view('FootballScoreForm');}
public function footballscoreStore(Request $request){
                  // dd($request->all());
       $football_score_forms=FootballscoreFrom::create($request->all());
    return redirect('/football_score');}

    public function editFStore($id=null){
        $fscore_edit=FootballscoreFrom::find($id);
                return view('football_score_edit',compact('fscore_edit'));}
    public function updateFStore(Request $request,$id){
                                       // dd($request->all());  
            $football_score_forms=FootballscoreFrom::find($id);
            $football_score_forms->team_name1=$request->team_name1;
            $football_score_forms->football_score=$request->football_score;
            $football_score_forms->team_name2=$request->team_name2;
            $football_score_forms->save();
            return redirect('/football_score');}
    public function deleteFStore($id=null){
        $delete_football_score=FootballscoreFrom::find($id);
        $delete_football_score->delete();
        return redirect('/football_score');}





    public function registration()
    {
         return view('registration form');
    }
 public function registrationStore(Request $request)
    {
         $p = $request->C_position;
        if($p=="")
        {
            $Position=$request->F_position;
        }
        else
        {
            $Position=$request->C_position;
        }
        //    dd($request->all());
           $registration_form=registrationForm::create(
         [
            'Team_Name'=>$request->Team_Name,
            'Player_Name'=>$request->Player_Name,
            'Player_ID'=>$request->Player_ID,
            'Player_Age'=>$request->Player_Age,
            'Session'=>$request->Session,
            'Player_Address'=>$request->Player_Address,
            'Email'=>$request->Email,
            'Contract_Number'=>$request->Team_Name,
            'Blood_Group'=>$request->Blood_Group,
            'Medical_History'=>$request->Medical_History,
            'Sports_Category'=>$request->Sports_Category,
            'Position'=>$Position,
         ]
        );
        return 'registration successful';

    }
}
