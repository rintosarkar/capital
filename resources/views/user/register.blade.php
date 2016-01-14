@extends('layouts.adminMaster')

@section('style')
	{{-- <link href="css/style.css" rel="stylesheet"> --}}
	<link href="/css/jquery.stepy.css" rel="stylesheet">
	{{-- <link href="css/style-responsive.css" rel="stylesheet"> --}}

@stop

@section('body-content')
	    
	  <div class="row">
	      <div class="col-md-12">
	          <div class="square-widget">
	              <div class="widget-container">
	                  <div class="stepy-tab">
	                  </div>
	                  {{-- <form id="default" class="form-horizontal"> --}}
	                  {!! Form::open(['url'=>'user/store', 'class'=>'form-horizontal','id'=>'default']) !!}
	                      <fieldset title="Initial Info">
	                          <legend>Personal Information</legend>
	                          <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Full Name</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-user-secret"></i></div>
		                                {!! Form::text('full_name','',['class'=>'form-control','placeholder'=>'Enter your full name']) !!}
		                              </div>
	                              </div>
	                            </div>

	                            <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Address 1</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-road"></i></div>
		                                {{-- <input type="text" class="form-control" id="exampleInputAmount" placeholder="Address 1"> --}}
		                                {!! Form::text('address1','',['class'=>'form-control','placeholder'=>'Enter Address 1']) !!}
		                              </div>
	                              </div>
	                            </div>

	                            <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Address 2</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-road"></i></div>
		                                {!! Form::text('address2','',['class'=>'form-control','placeholder'=>'Enter Address 2']) !!}
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
		                                'female'=>'Female'], null, ['class'=>'form-control']) !!}
		                              </div>
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
		                                ], null, ['class'=>'form-control']) !!}
		                              </div>
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
		                                {!! Form::text('username','',['class'=>'form-control','placeholder'=>'Enter a username']) !!}
		                              </div>
	                              </div>
	                            </div>

	                            <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Phone Number</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-mobile"></i></div>
		                                {!! Form::text('phone_number','',['class'=>'form-control','placeholder'=>'Enter a valid phone number']) !!}
		                              </div>
	                              </div>
	                            </div>

	                            <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Email</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-at"></i></div>
		                                {!! Form::email('email','', ['class'=>'form-control','placeholder'=>'Enter a E-mail address']) !!}
		                              </div>
	                              </div>
	                            </div>

	                            <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Password</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
		                                {!! Form::password('password',['class'=>'form-control','placeholder'=>'Enter a password']) !!}
		                              </div>
	                              </div>
	                            </div>

	                            <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Password</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
		                                {!! Form::password('re-password',['class'=>'form-control','placeholder'=>'Re-enter a password']) !!}
		                              </div>
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
	                              </div>
	                            </div>

	                            <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Placement</label>
	                              <div class="col-md-6 col-sm-6">
		                              <div class="input-group">
		                                <div class="input-group-addon"><i class="fa fa-sitemap"></i></div>
		                                {!! Form::select('placement',[
		                                '' => '--Select--',
		                                '1'=>'Left',
		                                '2'=>'Right'], null, ['id' => 'placement', 'class'=>'form-control']) !!}
		                              </div>
	                              </div>
	                            </div>
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
	<script src="/js/jquery.stepy.js"></script>
	
	<script>
	    /*=====STEPY WIZARD====*/
	    $(function() {
	        $('#default').stepy({
	            backLabel: 'Previous',
	            block: true,
	            nextLabel: 'Next',
	            titleClick: true,
	            titleTarget: '.stepy-tab'
	        });
	    });
	</script>    
@stop