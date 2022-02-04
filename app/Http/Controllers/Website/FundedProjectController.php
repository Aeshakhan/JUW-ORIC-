<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\CMSResearch;
use App\Models\FundingOpportunity;
use App\Models\ResearchProject;
use Illuminate\Http\Request;

class FundedProjectController extends Controller
{
    public function index()
    {
        $resultSet = CMSResearch::latest()->first();
        $projects = ResearchProject::with('getProposal')->where('type','funded')->whereHas('getProposal',function ($query){
            $query->where('research_proposal_id','!=',null);
        })->get();
        return view('website.pages.funded-project',compact('resultSet','projects'));
    }
}
