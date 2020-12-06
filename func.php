<?php
	/* Get user list
	*
	*
	*/
	//echo '<pre>';
	function exchangeJson($module, $command, $arrayData){
		$arrayData['apiUserName'] = 'apiuser';
		$arrayData['apiPassword'] = 'apipwd';		
		//$arrayData 	= array_merge($apiUser,$arrayData);	
		//print_r($arrayData);	
		$jsonRequest = json_encode($arrayData);
		//echo "REQUEST for $command:".$jsonRequest."<br>";
		// send JSON request to server using php curl
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://localhost/Water/apiGateway.php?module='.$module.'&command='.$command);
		//curl_setopt($ch, CURLOPT_URL, 'http://localhost/apiGateway.php?module='.$module.'&command='.$command);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonRequest);
		$jsonResponse = curl_exec($ch);
		curl_close($ch); 
	   //echo "RESPONSE for $command:".$jsonResponse."<br><br>";
		$dataArr = json_decode($jsonResponse,true);
		return $dataArr;
	}
	function adminLogin($email,$mobile){
		$commandData['email'] 		= $email;
		$commandData['mobile']		= $mobile;
		$command 	= "AdminLogin";
		$module 	= "Master";				
		$dataArray 	= exchangeJson($module,$command,$commandData);
		return $dataArray;
		}
	function getCityList($id){
		$commandData['id'] = $id;
		$command = "GetCityName";
		$module = "Master";				
		$dataArray = exchangeJson($module,$command,$commandData);
		return $dataArray;
		}
	function getPressContact(){
		$command = "GetPressContactList";
		$module = "Master";				
		$dataArray = exchangeJson($module,$command,$commandData);
		return $dataArray;
		}
	function getPressRelease(){
		$command = "GetPressReleaseList";
		$module = "Master";				
		$dataArray = exchangeJson($module,$command,$commandData);
		return $dataArray;
		}
	function getTestimonialList(){
		$command = "GetTestimonial";
		$module = "Master";				
		$dataArray = exchangeJson($module,$command,$commandData);
		return $dataArray;
		}
		
	function getCityRestaurantList($id){
		$commandData['id'] = $id;
		$command = "GetCityRestaurantName";
		$module = "Master";				
		$dataArray = exchangeJson($module,$command,$commandData);
		return $dataArray;
		}
		
	function getStaticPagesList($type){
		$commandData['type'] = $type;
		$command = "GetStaticPageList";
		$module = "Master";				
		$dataArray = exchangeJson($module,$command,$commandData);
		return $dataArray;
		}
		
	function getPartnersList(){		
		$command = "GetPartnersName";
		$module = "Master";				
		$dataArray = exchangeJson($module,$command,$commandData);
		return $dataArray;
		}
		
	function getNewsList($startdate,$enddate,$id){
		$commandData['startdate'] 	= $startdate;
		$commandData['enddate']		= $enddate;
		$commandData['id']			= $id;
		$command = "GetNewsList";
		$module = "Master";				
		$dataArray = exchangeJson($module,$command,$commandData);
		return $dataArray;
		}
		
	function getFooterContactList(){
		$command = "GetFooterContact";
		$module = "Master";				
		$dataArray = exchangeJson($module,$command,$commandData);
		return $dataArray;
		}
		
	function writesignup($Name,$Position,$Restaurant,$Area,$AreaOther,$Address1,$Address2,$Mobile,$Telephone,$Email,$WebsiteURL,$Donation,$Message){
		$commandData['Name'] = $Name;
		$commandData['Position'] = $Position;
		$commandData['Restaurant'] = $Restaurant;
		$commandData['Area'] = $Area;
		$commandData['AreaOther'] = $AreaOther;
		$commandData['Address1'] = $Address1;
		$commandData['Address2'] = $Address2;
		$commandData['Mobile'] = $Mobile;
		$commandData['Telephone'] = $Telephone;
		$commandData['Email'] = $Email;
		$commandData['WebsiteURL'] = $WebsiteURL;
		$commandData['Donation'] = $Donation;
		$commandData['Message'] = $Message;
		$command = "WriteRestaurantSignUp";
		$module = "Master";				
		$dataArray = exchangeJson($module,$command,$commandData);
		return $dataArray;
		}
		
	function writeRegisterUpdates($FirstName,$LastName,$Email,$Organisation,$OptIn,$Mobile,$Telephone,$Address){
		$commandData['FirstName'] = $FirstName;
		$commandData['LastName'] = $LastName;
		$commandData['Email'] = $Email;
		$commandData['Organisation'] = $Organisation;
		$commandData['OptIn'] = $OptIn;
		$commandData['Mobile'] = $Mobile;
		$commandData['Telephone'] = $Telephone;
		$commandData['Address'] = $Address;		
		$command = "WriteUpdatesRegistration";
		$module = "Master";				
		$dataArray = exchangeJson($module,$command,$commandData);
		return $dataArray;
		}

	function writeApplyFunding($organization_name,$org_phone,$org_email,$org_address,$contact_person_name,$contact_person_email,$contact_person_phone,$contact_person_address,$website_address){
		$commandData['organization_name'] = $organization_name;
		$commandData['org_phone'] = $org_phone;
		$commandData['org_email'] = $org_email;
		$commandData['org_address'] = $org_address;
		$commandData['contact_person_name'] = $contact_person_name;
		$commandData['contact_person_email'] = $contact_person_email;
		$commandData['contact_person_phone'] = $contact_person_phone;
		$commandData['contact_person_address'] = $contact_person_address;
		$commandData['website_address'] = $website_address;
						
		$command = "WriteFunding";
		$module = "Master";				
		$dataArray = exchangeJson($module,$command,$commandData);
		return $dataArray;
		}
		
	
	?>
