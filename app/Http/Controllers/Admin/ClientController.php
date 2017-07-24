<?php

namespace App\Http\Controllers\Admin;

use App\Cases;
use App\Matters;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mangesh\Repository\ClientRepository;
use App\ClientsInformation;



class ClientController extends Controller
{
    private $clientRepository;

    /**
     * ClientController constructor.
     * @param ClientRepository $clientRepository
     */
    public function __construct(ClientRepository $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }


    public function create(Request $request)
    {


        for($i=0;$i<=2;$i++){
                $name = "address".$i;
                if(!empty($request->$name)){
                    $address[] = $request->$name;
                }
        }
        $data = $this->clientRepository->create(array(
            "fullname"=>   $request->firstname." ".$request->lastname,
            "gender"=>      $request->gender,
            "clienttype"=>  $request->clienttype,
            "locbirth"=>     $request->locbirth,
            "maidenname"=>  $request->maidenname,
            "dob"=>         $request->dob,
            "address0"=>$address0 =(!empty($address[0])? $address[0]:""),
            "address1"=>$address1 =(!empty($address[1])? $address[1]:""),
            "address2"=>$address2 =(!empty($address[2])? $address[2]:""),
            "city"=>$request->city,
            "country"=>$request->country,
            "postcode"=>$request->postcode,
            "ninumber"=>$request->ninumber,
            "email"=>$request->emailid,
            "phone"=>$request->mobilenumber!=""?$request->mobilenumber:"-"."/".!empty($request->telnumber)?$request->telnumber:"-"."/".!empty($request->telwork)?$request->telwork:"-",
            "fax"=>$request->faxid,
            "clientlimit"=>$request->clientlimit,
            "introducer"=>$request->introducer,
            "introducer_def"=>$request->introducer_def

        ));
        if($data){
            \Session::flash('msg', 'Add Client Information Successfully.' );
            return view("admin.client.form");
        }
    }

    public function getallclient(){

        $clientall = ClientsInformation::get();
        return view("admin.client.viewclients",compact('clientall'));
    }

    public function getbyId($id){

        $clientinfo = $this->clientRepository->getdataByID($id);

        if($clientinfo){


           return view("admin.client.singleclient",compact('clientinfo'));

        }
        \Session::flash("msg","Some went wrong");
        return view("admin.client.singleclient",compact('clientinfo'));

    }

    public function addMatter(Request $request)
    {
        $date = date_create($request['matter_ope']);
        $date_op = date_format($date,"Y-m-d");
        $date1 = date_create($request['matter_clo']);
        $date_cl = date_format($date1,"Y-m-d");

        $matter = new Matters();
        $matter->matter_reference =$request->matter_ref;
        $matter->user_id =$request->client_ref;
        $matter->matter_type=$request->matter_type;
        $matter->matter_def =$request->matter_def;
        $matter->matter_stage =$request->current_stage;
        $matter->matter_op_date =$date_op;
        $matter->matter_cl_date =$date_cl;
        $matter->save();
        $insertId = $matter->id;
        if(!empty($insertId)){
            $clientall = ClientsInformation::get();
            \Session::flash("msg","Matter added Successfully");
            return view("admin.client.viewclients",compact('clientall'));
            //return view("admin.client.matter");
        }else{
            $clientall = ClientsInformation::get();
            \Session::flash("msg","Some Went Wrong");
            return view("admin.client.viewclients",compact('clientall'));
            //return view("admin.client.matter");

        }

    }

    public function getMatter($id)
    {
        $userMatterAll = Matters::where('user_id',$id)->get();
        if(!empty($userMatterAll)){
            return response()->json($userMatterAll);
        }

    }

    public function getViewMatter($id){
        echo env("DSN");
        exit();
        $singleMatterView = Matters::with('getOne')->where('id',$id)->get()->toArray();

        if(!empty($singleMatterView)){
            return view('admin.client.matter.view-matter',['singleMatter'=>$singleMatterView]);
        }
    }

    public function avtarStore(Request $request){
        $avatarName = $request->file("uploadtestfile");
        $destinationPath = baseUrl()."uploads/image/avatar/";
        $avatar->move($destinationPath, $avatarName->getClientOriginalName());

        $user = new User();

    }




}
