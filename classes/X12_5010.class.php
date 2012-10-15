<?php

/*
 * X12 835 Dispenser Class
 * version: 0.0.1
 * Desc: This class library will process diferent kind of ANSI X12 files version 5010
 * from the GaiaEHR database
 *  
 */
 
/*
 * Invoke the session
 * This is important.
 */
if(!isset($_SESSION)) 
{
	session_name('GaiaEHR');
	session_start();
	session_cache_limiter('private');
}

/*
 * Reset the counter
 */
$_SESSION['site']['flops'] = 0;

/*
 * Invoke the Database Class Library
 */
include_once($_SESSION['site']['root'].'/classes/dbHelper.php');

class x12_5010
{
	
	private $dataBase;
	
	function __construct()
	{
	    $this->$dataBase = new dbHelper();
	    return;
	}
	
	/*
	 * Will gather all the data and create a well formatted X12 835 5010
	 * -- Health Care Claim Payment/Advice (The halth insurance send the answer to the clinic of doctor)
	 */
	public static function Generate835()
	{
		
	}
	
	/*
	 * Parse and check if the file is correctly formated X12 835 5010 Format
	 * -- Health Care Claim Payment/Advice (The halth insurance send the answer to the clinic of doctor)
	 */
	public static function Parse835()
	{
		
	}
	
	/*
	 * Parse and check if the file is correctly formatted x12 837 5010 Format
	 * --  	Health Care Claim (The the clinic or doctor sending the claim to the insurance)
	 */
	public static function Parse837()
	{
		
	}
	
}


?>