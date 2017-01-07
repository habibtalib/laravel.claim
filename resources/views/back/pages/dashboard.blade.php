@extends('back.layouts.admin')


@section('content')




<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
  
      <div class="x_content">



        <div class="animated fadeInLeft col-md-3 col-sm-3 col-xs-12 col-md-offset-2 profile_left">

          <div class="profile_img">

            <!-- end of image cropping -->
            <div id="crop-avatar">
              <!-- Current avatar -->
              <img class="hvr-float-shadow img-responsive avatar-view" src="{{ asset('upload/avatars/' . auth::user()->avatar) }}" alt="Avatar" title="Change the avatar">

            </div>
            <!-- end of image cropping -->

          </div>
          <h3> {{ auth::user()->claimName }}</h3>

          <ul class="list-unstyled user_data">

            <li><i class="fa fa-list-ol user-profile-icon"></i> Claim No.: {{ auth::user()->claimNo }}</li>
            <li><i class="fa fa-briefcase user-profile-icon"></i> Case File#: {{ auth::user()->caseFile }}</li>
            <li><i class="fa fa-calendar user-profile-icon"></i> D/A: {{ auth::user()->da }}</li>

            <li>Insurance Corp: {{ auth::user()->insurance }}</li>
            <li>Insured:: {{ auth::user()->insured }}</li>
            <li>Coverage Type: {{ auth::user()->coverageType }}</li>

          </ul>

          <br>
        </div>


        <div class="animated fadeInRight col-md-5 col-sm-9 col-xs-12">

          <div class="col-md-12 col-sm-12 col-xs-12 profile_details">
              <div class="well profile_view">

                <div class="col-sm-12">

                  <h4 class="brief"><i>Location:</i></h4>
                  <strong>
                  <h2> {{ auth::user()->location }} </h2>	
                  </strong>
                   
                    <h4>Date: {{ auth::user()->transDate }} </h4>
                    <ul class="list-unstyled">
                      <li><i class="fa fa-clock-o"></i> Time: {{ auth::user()->transtime }} </li>
                      <li><i class="fa fa-archive"></i> Exam Type: {{ auth::user()->examType }} </li>
                      <li><i class="fa fa-user"></i> Provider: {{ auth::user()->Provider }} </li>
                    </ul>

                </div>

                <div class="col-md-12 hidden-xs hidden-sm  bottom" style="padding: 15px">
	

<small>

<p>
It is important that you are on time for the examination(s) in order to process your claim as soon as possible. If you have any inquiry regarding the examination(s) please do not hesitate to call our Claims Department at (718) 925-0505.
</p>


<p>
***The Personal Injury Protection Coverage - New York (PP 05 87) provides under “Proof of Claim; Medical and Earnings Reports” that: “The eligible injured person shall submit to medical examination by physicians selected by, or acceptable to, the company when, and as often as, the company may reasonably require.”  Also, Part 65.15 of Title 11 of Regulation 68 of the New York Insurance Law provides that: “All medical examinations requested by the insurer shall be held at a place and time reasonably convenient to the applicant and in a facility properly equipped for the performance of the medical examination.  The insurer shall inform the applicant at the time of the examination scheduled that the applicant will be reimbursed for any loss of earnings and reasonable transportation expenses incurred in complying with the request.”***  		
</p>


<p>
Failure to appear for the examination(s) may result in a denial of your past, present and future benefits. You have the right to be accompanied by an attorney for the examination(s). 	
</p>

<p>
<b>
It is necessary to bring a photo ID, also your x-rays  if you have any for the doctor to review. 		
</b>
</p>

<p>
If you do not write or speak English, make sure you are accompanied by an interpreter.
Minors must be accompanied by a parent or guardian. If you need to cancel or reschedule please notify our office at least 24 hours prior to the appointment date. Otherwise the appointment(s) will be considered a NO SHOW.	
</p>


</small>




                
                </div>



              </div>
            </div>
        </div>	{{-- end of col 2 --}}




      </div>
    </div>
  </div>
</div>




@stop





