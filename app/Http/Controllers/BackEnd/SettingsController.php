<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller{
	public $pass_data;  
    public function __construct(){
    	$this->pass_data = array(
            "head"         => "General Settings",
            "page_heading" => "General Settings",
            "base_url"	   => route("admin.settings", "general")
        );
    }
    public function index($type = 'general'){
    	$this->pass_data["base_url"]     = route("admin.settings", $type);
    	switch($type){
    		case 'general':
    			return view("backend.settings.general", $this->pass_data);
    		break;
    		case 'social':
				$this->pass_data["head"]         = "Social Media Settings";
				$this->pass_data["page_heading"] = "Social Media Settings";				
    			return view("backend.settings.social", $this->pass_data);
    		break;
    	}
    	
    }
}
