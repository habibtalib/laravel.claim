<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as Cls;

use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreUser as ValidateRequest;
use App\Http\Requests\StoreUserPassword as ValidateRequestPass;
use Validator;

//use this for the picture and intervention
use Image;
use File;

use brypt;
use Hash;

use Response;


class TrClaim extends Controller
{

    public $form,$route;
    public $rList,$rCreate,$rEdit;
    public $category,$unit,$item;


    public function __construct(){
        $this->form = "Users";     //plural
        $this->route = "user";
        $this->rList = "back.ref_user.list";
        $this->rCreate = "back.ref_user.create";
        $this->rEdit = "back.ref_user.edit";
    }

    public function index()
    {
        $form = $this->form;
        $route = $this->route;
        return view($this->rList,compact('form','route'));
    }

    public function create()
    {
    }

    public function store(ValidateRequest $request)
    {
        $data =  $request->all();
    }

    public function show($id)
    {
    }

   
    public function edit($id)
    {
        $form = $this->form;
        $route = $this->route;

        $data = Cls::findorfail($id);
        return view($this->rEdit,compact('data','form','route'));
    }

    public function editProfile($id)
    {
    }

    public function update(ValidateRequest $request, $id)
    {
    }

    public function updatePassword(ValidateRequestPass $request, $id)
    {
    }
    public function avatar(Request $request, $id){


    }
    public function deleteAvatar(Request $request,$id){
    }
    public function destroy($id)
    {
    }
    public function delete(Request $request)
    {
    }

    public function apiItem()
    {

        $data = Cls::all(['id', 'code', 'name']);
        foreach ($data as $key => $value) {
            $list[$key]['id'] = $value->id;
            $list[$key]['text'] = $value->code; 
        }
        return json_encode($list); 
    }


    public function apiClaim(Request $request)
    {

        $data = Cls::whereClaimno($request->claimno)->first();
        if ($data){
            if (Hash::check($request->pass, $data['password']))
            {
            
                return response( $data , 200);    

            }
        }
        return response('Error', 404);
    }

    public function apiClaimNo($claimNo)
    {
        $data = Cls::whereClaimno($claimNo)->get();
        return  $data; 
    }







}
