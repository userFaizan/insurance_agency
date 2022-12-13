<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Agency;
use App\Models\AgencyAccountingInfo;
use App\Models\AgencyAddtionalLocation;
use App\Models\AgencyDbaAdd;
use App\Models\EAndOInfo;
use App\Models\AgencyLicenseInfo;
use App\Models\AgencyNonResidentialState;
use App\Models\AgencyLogInInfo;

use Illuminate\Support\Facades\Storage;
class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \view
     */
    public function index()
    {
        $data = Agency::all();
        return view('agency.agency_list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \view
     */
    public function create()
    {
        return view('agency.add_agency');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $agency = Agency::create([
            'name' =>$request->name,
            'logo' => $request->file('logo')->store('images'),
            'principal_agent' =>$request->principal_agent,
            'address' =>json_encode($request->address),
            'phone' =>json_encode($request->phone),
            'fax' =>json_encode($request->fax),
            'email' =>json_encode($request->email),
            'webiste' =>json_encode($request->webiste),
            'notes' =>$request->notes,
            'file' => $request->file('file')->store('images'),
          ]);
          $agency->save();
          $agency_account = AgencyAccountingInfo::create([
            'ein_letter' => $request->file('ein_letter')->store('images'),
            'void_checks' => $request->file('void_checks')->store('images'),
            'tax_id' =>$request->tax_id,
            'business_type' =>$request->business_type,
            'fiscal_month_start' =>$request->fiscal_month_start,
            'fiscal_month_end' =>$request->fiscal_month_end,
            'income_tax' =>$request->income_tax,
            'franchise_tax_due' =>$request->franchise_tax_due,
            'sales_tax_due' =>$request->sales_tax_due,
            'routing_no' =>$request->routing_no,
            'type_of_account' =>$request->type_of_account,
            'account_no' =>$request->account_no,
            'agency_id' => $agency->id,
          ]);
          $agency_account->save();

          $agency_eand = EAndOInfo::create([
            'file' => $request->file('file')->store('images'),
            'policy_no' => $request->policy_no,
            'effective_date' =>$request->effective_date,
            'expiration_date' =>$request->expiration_date,
            'policy_limits' =>$request->policy_limits,
            'agency_id' => $agency->id,

          ]);
          $agency_eand->save();

          $agency_licences = AgencyLicenseInfo::create([
            'file' => $request->file('file')->store('images'),
            'resident_state' =>$request->resident_state,
            'npn_no' =>$request->npn_no,
            'license_no' =>$request->license_no,
            'license_type' =>$request->license_type,
            'expiration_date' =>$request->expiration_date,
            'upload_date' =>$request->upload_date,
            'agency_id' => $agency->id,
          ]);
          $agency_licences->save();

          $agency_state = AgencyNonResidentialState::create([
            'state' =>$request->state,
            'license_no' =>$request->license_no,
            'license_type' =>$request->license_type,
            'expiration_date' =>$request->expiration_date,
            'agency_id' => $agency->id,
          ]);
          $agency_state->save();

          $agency_log = AgencyLogInInfo::create([
            'company' =>$request->company,
            'website' =>$request->website,
            'user_name' =>$request->user_name,
            'password' =>$request->password,
            'pin' =>$request->pin,
            'notes' =>$request->notes,
            'agency_id' => $agency->id,
          ]);
          $agency_log->save();

          $agency_add = AgencyDbaAdd::create([
            'dba' =>json_encode($request->dba),
            'dba_name' =>$request->dba_name,
            'doi_registered' =>json_encode($request->doi_registered),
            'exp_date' =>$request->exp_date,
            'agency_id' => $agency->id,
          ]);
          $agency_add->save();

          $agency_location = AgencyAddtionalLocation::create([
            'manager' =>$request->manager,
            'address' =>$request->address,
            'phone' =>$request->phone,
            'fax' =>$request->fax,
            'email' =>$request->email,
            'notes' =>$request->notes,
            'agency_id' => $agency->id,
          ]);
        $agency_location->save();

        return redirect()->route('agency.index')
        ->with('message','Agency Created successfully !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \view
     */
    public function show($id)
    {
        return view('agency.agency_view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \view
     */
    public function edit($id)
    {
        return view('agency.agency_edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Agency::find($id);
        $data->agencyAccountingInfo()->delete();
        $data->agencyAdditionalLocation()->delete();
        $data->agencyDbaAdd()->delete();
        $data->AgencyLicenseInfo()->delete();
        $data->agencyLoginInfo()->delete();
        $data->agencyNonResidentialState()->delete();
        $data->agencyEandOInfo()->delete();
        $data->delete();
        return redirect()->route('agency.index')
                        ->with('message','Agency Deleted successfully !!');
    }
}
