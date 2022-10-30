<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Employe;
use App\Charts\UserChart;
use Illuminate\Http\Request;
use App\Charts\MonthlyUsersChart;
use Illuminate\Support\Facades\DB;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employes = Employe::all();

        return view("employes.index")->with([
            "employes"=> $employes
        ]);
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employes.create');
    }
    public function statistiques(MonthlyUsersChart $chart)
    {
        return view('employes.statistiques', ['chart' => $chart->build()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
          $this->validate($request,[

                "fullname"=>"required|unique:employes,fullname",
                "resgistration_number"=> "required|numeric|unique:employes,resgistration_number",
                "depart"=>"required",
                "hire_date"=>"required",
                "phone"=>"required|numeric",
                "adress"=>"required",
                "city"=>"required",               
            ]);

            $data  = $request->except(["_token"]);
            Employe::create($data);

            //method 2 storing data 
            // $employe = new Employe;
            // $this->validate($request,[
            //     "resgistration_number"=>"required|numeric",
            //     "fullname"=>"required",
            //     "depart"=>"required",
            //     "hire_date"=>"required",
            //     "city"=>"required",
            //     "phone"=>"required|numeric|max:10",
            //     "adress"=>"required"
               
            // ]);
            // $employe->resgistration_number = $request->resgistration_number;
            // $employe->fullname = $request->fullname;
            // $employe->depart = $request->depart;
            // $employe->hire_date = $request->hire_date;
            // $employe->phone = $request->phone;
            // $employe->adress = $request->adress;
            // $employe->city = $request->city;

            // $employe->save();

           
            session()->flash('message','Employe added Successfully!');

            return redirect()->route("employes.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $employe = Employe::where("id",$id)->first();
        //or 
        $employe = Employe::find($id);

        return view('employes.show')->with([
            "employe" => $employe
        ]);
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employe = Employe::find($id);

        return view('employes.edit')->with([
            "employe" => $employe
        ]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $employe = Employe::find($id);

        $this->validate($request,[
            "fullname"=>"required|unique:employes,id,".$employe->id,//dont forget to add always a  comma after id
            // "resgistration_number"=> "required|numeric",
          
            "resgistration_number"=> "required|numeric|unique:employes,id,".$employe->id,  //when we using update it ignore id 
            "depart"=>"required",
            "hire_date"=>"required",
            "phone"=>"required|numeric",
            "adress"=>"required",
            "city"=>"required",               
        ]);

        $data  = $request->except(["_token","_method"]);
        $employe->update($data);

        //method 2 
      
        // $employe = Employe::find($id);

        // $this->validate($request,[
        //     "resgistration_number"=>"required|numeric",
        //     "fullname"=>"required",
        //     "depart"=>"required",
        //     "hire_date"=>"required",
        //     "city"=>"required",
        //     "phone"=>"required|numeric|max:10",
        //     "adress"=>"required"
           
        // ]);

        //  $employe->resgistration_number = $request->input('resgistration_number');
        //  $employe->fullname = $request->input('fullname');
        //  $employe->depart = $request->input('depart');
        //  $employe->hire_date = $request->input('hire_date');
        //  $employe->phone = $request->input('phone');
        //  $employe->adress = $request->input('adress');
        //  $employe->city = $request->input('city');
        
        //  $employe->update();

         session()->flash('message','Employe updated Successfully!');;

        return redirect()->route("employes.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employe = Employe::find($id);

        $employe->delete();

        session()->flash('message','Employe deleted Successfully!');

        return redirect()->route('employes.index');
    }
    public function WorkCertificate($id){

            $employe = Employe::find($id);

            return view("employes.WorkCertificate")->with([
                "employe" => $employe
            ]);
    }
    public function VacationRequest($id){
        
        $employe = Employe::find($id);

        return view("employes.VacationRequest")->with([

            "employe" => $employe
        ]);
    }
    //  public function ChartEmployes()
    // {
        
    // }
}
