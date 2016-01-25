@extends('layouts.adminMaster')

@section('style')
	{{-- <link href="css/style.css" rel="stylesheet"> --}}
	<link href="/css/jquery.stepy.css" rel="stylesheet">
	<link href="/css/custom.css" rel="stylesheet">
	{{-- <link href="css/style-responsive.css" rel="stylesheet"> --}}

@stop

@section('body-content')
	    
	    <!-- <div class="row">
	    	<div class="col-md-8 col-md-offset-2">
	    		
	    		<div id="errMsgUser" role="alert">
	    			
	    		</div>
	    	</div> 
	    </div> -->
	  <div class="row">
	      <div class="col-md-8 col-md-offset-2">
	          <div class="square-widget">
	              <div class="widget-container">
	                  <div class="stepy-tab">
	                  </div>
	                  {{-- <form id="default" class="form-horizontal"> --}}
	                  {!! Form::open(['url'=>'user/store', 'class'=>'form-horizontal','id'=>'default']) !!}
	                  {!! Form::hidden('userId', Auth::user()->id, ['id'=>'userId']) !!}
	                      <fieldset title="Initial Info">
	                          <legend>Personal Information</legend>
	                          <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Full Name</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-user-secret"></i></div>
		                                {!! Form::text('full_name','',['id' => 'full_name' ,'class'=>'form-control','placeholder'=>'Enter your full name']) !!}
		                              </div>
		                              <span id="errMsgUserFull" class="error-msg"></span>
	                              </div>
	                            </div>

	                            <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Address 1</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-road"></i></div>
		                                {!! Form::text('address1','',['id' => 'address1' ,'class'=>'form-control','placeholder'=>'Enter Address ']) !!}
		                              </div>
		                              <span id="errMsgUserAdd" class="error-msg"></span>
	                              </div>
	                            </div>

	                            <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Address 2</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-road"></i></div>
		                                {!! Form::text('address2','',['class'=>'form-control','placeholder'=>'Enter Address']) !!}
		                              </div>
	                              </div>
	                            </div>

	                            <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Gender</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-male"></i>/<i class="fa fa-female"></i></div>
		                                {!! Form::select('gender',[
		                                '' => '--Select your gender',
		                                'male'=>'Male',
		                                'female'=>'Female'], null, ['id'=>'gender','class'=>'form-control']) !!}
		                              </div>
		                              <span id="errMsgUserGen" class="error-msg"></span>
	                              </div>
	                            </div>

	                            <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Country</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-globe"></i></div>
		                                {!! Form::select('country',[

		                                	''=>'--Select your country',
		                                	'AF'=>'Afghanistan',
		                                	'AX'=>'Aland Islands',
		                                	'AL'=>'Albania',
		                                	'DZ'=>'Algeria',
		                                	'AS'=>'American Samoa',
		                                	'AD'=>'Andorra',
		                                	'AO'=>'Angola',
		                                	'AI'=>'Anguilla',
		                                	'AQ'=>'Antarctica',
		                                	'AG'=>'Antigua and Barbuda',
		                                	'AR'=>'Argentina',
		                                	'AM'=>'Armenia',
		                                	'AW'=>'Aruba',
		                                	'AU'=>'Austratda',
		                                	'AT'=>'Austria',
		                                	'AZ'=>'Azerbaijan',
		                                	'BS'=>'Bahamas',
		                                	'BH'=>'Bahrain',
		                                	'BD'=>'Bangladesh',
		                                	'BB'=>'Barbados',
		                                	'BY'=>'Belarus',
		                                	'BE'=>'Belgium',
		                                	'BZ'=>'Betdze',
		                                	'BJ'=>'Benin',
		                                	'BM'=>'Bermuda',
		                                	'BT'=>'Bhutan',
		                                	'BO'=>'Botdvia',
		                                	'BA'=>'Bosnia and Herzegovina',
		                                	'BW'=>'Botswana',
		                                	'BV'=>'Bouvet Island',
		                                	'BR'=>'Brazil',
		                                	'IO'=>'British Indian Ocean Territory',
		                                	'BN'=>'Brunei Darussalam',
		                                	'BG'=>'Bulgaria',
		                                	'BF'=>'Burkina Faso',
		                                	'BI'=>'Burundi',
		                                	'KH'=>'Cambodia',
		                                	'CM'=>'Cameroon',
		                                	'CA'=>'Canada',
		                                	'CV'=>'Cape Verde',
		                                	'KY'=>'Cayman Islands',
		                                	'CF'=>'Central African Repubtdc',
		                                	'TD'=>'Chad',
		                                	'CL'=>'Chile',
		                                	'CN'=>'China',
		                                	'CX'=>'Christmas Island',
		                                	'CC'=>'Cocos (Keetdng) Islands',
		                                	'CO'=>'Colombia',
		                                	'KM'=>'Comoros',
		                                	'CG'=>'Congo',
		                                	'CD'=>'Congo, The Democratic',
		                                	'CK'=>'Cook Islands',
		                                	'CR'=>'Costa Rica',
		                                	'CI'=>'Cote D\'ivoire',
		                                	'HR'=>'Croatia',
		                                	'CU'=>'Cuba',
		                                	'CY'=>'Cyprus',
		                                	'CZ'=>'Czech Repubtdc',
		                                	'DK'=>'Denmark',
		                                	'DJ'=>'Djibouti',
		                                	'DM'=>'Dominica',
		                                	'DO'=>'Dominican Repubtdc',
		                                	'EC'=>'Ecuador',
		                                	'EG'=>'Egypt',
		                                	'SV'=>'El Salvador',
		                                	'GQ'=>'Equatorial Guinea',
		                                	'ER'=>'Eritrea',
		                                	'EE'=>'Estonia',
		                                	'ET'=>'Ethiopia',
		                                	'FK'=>'Falkland Islands',
		                                	'FO'=>'Faroe Islands',
		                                	'FJ'=>'Fiji',
		                                	'FI'=>'Finland',
		                                	'FR'=>'France',
		                                	'GF'=>'French Guiana',
		                                	'PF'=>'French Polynesia',
		                                	'TF'=>'French Southern',
		                                	'GA'=>'Gabon',
		                                	'GM'=>'Gambia',
		                                	'GE'=>'Georgia',
		                                	'DE'=>'Germany',
		                                	'GH'=>'Ghana',
		                                	'GI'=>'Gibraltar',
		                                	'GR'=>'Greece',
		                                	'GL'=>'Greenland',
		                                	'GD'=>'Grenada',
		                                	'GP'=>'Guadeloupe',
		                                	'GU'=>'Guam',
		                                	'GT'=>'Guatemala',
		                                	'GG'=>'Guernsey',
		                                	'GN'=>'Guinea',
		                                	'GW'=>'Guinea-bissau',
		                                	'GY'=>'Guyana',
		                                	'HT'=>'Haiti',
		                                	'HM'=>'Heard Mcdonald Island',
		                                	'VA'=>'Holy See(Vatican City State)',
		                                	'HN'=>'Honduras',
		                                	'HK'=>'Hong Kong',
		                                	'HU'=>'Hungary',
		                                	'IS'=>'Iceland',
		                                	'IN'=>'India',
		                                	'ID'=>'Indonesia',
		                                	'IR'=>'Iran, Islamic Repubtdc',
		                                	'IQ'=>'Iraq',
		                                	'IE'=>'Ireland',
		                                	'IM'=>'Isle of Man',
		                                	'IL'=>'Israel',
		                                	'IT'=>'Italy',
		                                	'JM'=>'Jamaica',
		                                	'JP'=>'Japan',
		                                	'JE'=>'Jersey',
		                                	'JO'=>'Jordan',
		                                	'KZ'=>'Kazakhstan',
		                                	'KE'=>'Kenya',
		                                	'KI'=>'Kiribati',
		                                	'KP'=>'Korea',
		                                	'KR'=>'Korea, Repubtdc of',
		                                	'KW'=>'Kuwait',
		                                	'KG'=>'Kyrgyzstan',
		                                	'LA'=>'Lao People\'s Democratic Repubtdc',
		                                	'LV'=>'Latvia',
		                                	'LB'=>'Lebanon',
		                                	'LS'=>'Lesotho',
		                                	'LR'=>'tdberia',
		                                	'LY'=>'tdbyan Arab Jamahiriya',
		                                	'td'=>'tdechtenstein',
		                                	'LT'=>'tdthuania',
		                                	'LU'=>'Luxembourg',
		                                	'MO'=>'Macao',
		                                	'MK'=>'Macedonia',
		                                	'MG'=>'Madagascar',
		                                	'MW'=>'Malawi',
		                                	'MY'=>'Malaysia',
		                                	'MV'=>'Maldives',
		                                	'ML'=>'Matd',
		                                	'MT'=>'Malta',
		                                	'MH'=>'Marshall Islands',
		                                	'MQ'=>'Martinique',
		                                	'MR'=>'Mauritania',
		                                	'MU'=>'Mauritius',
		                                	'YT'=>'Mayotte',
		                                	'MX'=>'Mexico',
		                                	'FM'=>'Micronesia',
		                                	'MD'=>'Moldova',
		                                	'MC'=>'Monaco',
		                                	'MN'=>'Mongotda',
		                                	'ME'=>'Montenegro',
		                                	'MS'=>'Montserrat',
		                                	'MA'=>'Morocco',
		                                	'MZ'=>'Mozambique',
		                                	'MM'=>'Myanmar',
		                                	'NA'=>'Namibia',
		                                	'NR'=>'Nauru',
		                                	'NP'=>'Nepal',
		                                	'NL'=>'Netherlands',
		                                	'AN'=>'Netherlands Antilles',
		                                	'NC'=>'New Caledonia',
		                                	'NZ'=>'New Zealand',
		                                	'NI'=>'Nicaragua',
		                                	'NE'=>'Niger',
		                                	'NG'=>'Nigeria',
		                                	'NU'=>'Niue',
		                                	'NF'=>'Norfolk Island',
		                                	'MP'=>'Northern Mariana Islands',
		                                	'NO'=>'Norway',
		                                	'OM'=>'Oman',
		                                	'PK'=>'Pakistan',
		                                	'PW'=>'Palau',
		                                	'PS'=>'Palestinian Territory, Occupied',
		                                	'PA'=>'Panama',
		                                	'PG'=>'Papua New Guinea',
		                                	'PY'=>'Paraguay',
		                                	'PE'=>'Peru',
		                                	'PH'=>'Phitdppines',
		                                	'PN'=>'Pitcairn',
		                                	'PL'=>'Poland',
		                                	'PT'=>'Portugal',
		                                	'PR'=>'Puerto Rico',
		                                	'QA'=>'Qatar',
		                                ], null, [ 'id' =>'country' ,'class'=>'form-control']) !!}
		                              </div>
		                              <span id="errMsgUserCon" class="error-msg"></span>
	                              </div>
	                            </div>
	                          
	                      </fieldset>
	                      <fieldset title="Contact Info">
	                          <legend>Contact Information</legend>

	                          <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Username</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
		                                {!! Form::text('username','',['id'=>'username', 'class'=>'form-control','placeholder'=>'Enter a username']) !!}
		                              </div>
		                              <span id="errMsgUser" class="error-msg"></span>
	                              </div>
	                            </div>

	                            <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Phone Number</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-mobile"></i></div>
		                                {!! Form::text('phone_number','',[ 'id'=>'phone_number' ,'class'=>'form-control','placeholder'=>'Enter a valid phone number', 'required'=>'required']) !!}
		                              </div> 
		                              <span id="errMsgPhone" class="error-msg"></span>
	                              </div>
	                            </div> 

	                            <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Email</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-at"></i></div>
		                                {!! Form::email('email','', [ 'id' => 'email','class'=>'form-control','placeholder'=>'Enter a E-mail address', 'required'=>'required']) !!}
		                              </div>
		                              <span id="errMsgEmail" class="error-msg"></span>
	                              </div>
	                            </div>

	                            <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Password</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
		                                {!! Form::password('password',[ 'id'=>'password' ,'class'=>'form-control','placeholder'=>'Enter a password']) !!}
		                              </div>
		                              <span id="errMsgPass" class="error-msg"></span>
	                              </div>
	                            </div>

	                            <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Password</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
		                                {!! Form::password('re-password',[ 'id'=>'rpassword' ,'class'=>'form-control','placeholder'=>'Re-enter a password']) !!}
		                              </div>
		                              <span id="errMsgRPass" class="error-msg"></span>
	                              </div>
	                            </div>
	                      </fieldset>

	                      <fieldset title="Referral Info">
	                          <legend>Referral Information</legend>

	                          <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Referrar ID</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
		                                {!! Form::text('referrar_id','', ['id'=>'referrar_id', 'class'=>'form-control','placeholder'=>'Enter your Referrar\'s ID']) !!}
		                              </div>
		                              <span id="errMsgRef" class="error-msg"></span>
	                              </div>
	                            </div>

	                            <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Upper Lavel ID</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
		                                {{-- <input type="text" class="form-control" id="exampleInputAmount" placeholder=""> --}}
		                                {!! Form::text('upline_id','', ['id'=>'upline_id', 'class'=>'form-control','placeholder'=>'Enter your imediate ID']) !!}
		                              </div> 
		                              <span id="errMsgUp" class="error-msg"></span>
	                              </div>
	                            </div>

	                            <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Placement</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-sitemap"></i></div>
		                                {!! Form::select('placement',[], null, ['id' => 'placement', 'class'=>'form-control']) !!}
		                                {{-- <select id="placement" class="form-control" name="placement"></select> --}}
		                              </div>
	                              </div>
	                            </div>

	                            {{-- <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Package</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-sitemap"></i></div>
		                                {!! Form::select('package',[
		                                '' => '--Select--',
		                                '300'	=> '$ 300',
		                                '700'	=> '$ 700',
		                                '1000' 	=> '$ 1000',
		                                '2000' 	=> '$ 2000',
		                                '4000' 	=> '$ 4000',
		                                '10000' => '$ 10000',], null, ['id' => 'package', 'class'=>'form-control']) !!}
		                              </div>
	                              </div>
	                            </div> --}}
	                      </fieldset>
	                      <fieldset title="Final Step">
	                          <legend>Final Step Information</legend>
	                          <div class="form-group">
	                              <div class="col-md-12">
	                                  <p>Congratulations This is the Final Step</p>
	                              </div>
	                          </div>
	                      </fieldset>
	                      <button class="btn btn-info finish">
	                          Finish </button>
	                  </form>
	                  @if (count($errors) > 0)
	                      <div class="alert alert-danger">
	                          <ul>
	                              @foreach ($errors->all() as $error)
	                                  <li class="userRegErr">{{ $error }}</li>
	                              @endforeach
	                          </ul>
	                      </div>
	                  @endif
	              </div>
	          </div>
	      </div>
	  </div>

	  <div class="row">
	  	<div class="terms-widget">
	  		<div class="tw-header">
	  			Terms & Condition
	  		</div>
	  		<div class="tw-body">
	  			
	  		</div>
	  	</div> 
	  </div>  
	    
@stop

@section('script')
	{{-- // <script src="/"></script> --}}
	{!! Html::script('js/custom/userRegister.js') !!}
	{!! Html::script('js/jquery.stepy.js') !!}
	
	{{-- {!! Html::script('js/jquery-1.10.2.min.js') !!} --}}
	{{-- {!! Html::script('js/jquery-ui-1.9.2.custom.min.js') !!} --}}
	{{-- {!! Html::script('js/jquery-migrate-1.2.1.min.js') !!} --}}
	{{-- {!! Html::script('js/bootstrap.min.js') !!} --}}
	{{-- {!! Html::script('js/modernizr.min.js') !!} --}}
	{{-- {!! Html::script('js/jquery.nicescroll.js') !!} --}}
	{!! Html::script('js/jquery.validate.min.js') !!}
	{!! Html::script('js/validation-init.js') !!}
	
	<script>
	    /*=====STEPY WIZARD====*/
	    $(function() {
	        $('#default').stepy({
	            backLabel: 'Previous',
	            block: true,
	            nextLabel: 'next',
	            titleClick: true,
	            titleTarget: '.stepy-tab'
	        });

	    });


	    /*=====STEPY WIZARD End====*/



	</script>    
@stop