<?php
namespace Mangesh\Repository;
use App\ClientsInformation;

class ClientRepository {


    /**
     * @param $data
     */
    public function create($data)
    {
        $date = date_create($data['dob']);
        $date_format = date_format($date,"Y-m-d");
        $clientinfo = new ClientsInformation();
        $clientinfo->fullname=$data["fullname"];
        $clientinfo->gender=$data['gender'];
        $clientinfo->clienttype=$data['clienttype'];
        $clientinfo->locbirth=$data['locbirth'];
        $clientinfo->maidenname=$data['maidenname'];
        $clientinfo->dob=$date_format;
        $clientinfo->address0=$data['address0'];
        $clientinfo->address1=$data['address1'];
        $clientinfo->address2=$data['address2'];

        $clientinfo->city=$data['city'];
        $clientinfo->country = $data['country'];
        $clientinfo->postcode=$data['postcode'];
       /* $clientinfo->ninumber=$data['ninumber'];*/
        $clientinfo->email=$data['email'];
        $clientinfo->phone=$data['phone'];
        $clientinfo->fax=$data['fax'];
        $clientinfo->clientlimit=$data['clientlimit'];
        $clientinfo->introducer=$data['introducer'];
        $clientinfo->introducer_def=$data['introducer_def'];
        $clientinfo->save();

        $insertid = $clientinfo->id;
        if(isset($insertid)){
            return true;
        }
        return false;
    }

    public function getdataByID($client_id){

        $singleClient=ClientsInformation::find($client_id);

        if(!empty($singleClient)){
            return $singleClient;
        }
        return false;
    }

}