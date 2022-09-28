<?php

	function persistData_2( $data )
	{
		$dt = '';
		if ( isset( $_POST[$data] ) ) 
		{
			$dt = $_POST[$data];
		}
		return $dt;
	}

	function persistData( $data, $pass )
	{
		$dt = '';
		if ( isset( $_POST[$data] ) && !$pass ) 
		{
			$dt = $_POST[$data];
		}
		return $dt;
	}

	function persistData_3( $data )
	{
		$dt = '';
		if ( $data ) {
			$dt = $data;
		}
		return $dt;
	}

	function encPword( $data )
	{
		if ( $data ) 
		{
			$enc_data = password_hash( $data, PASSWORD_DEFAULT );
		}

		return $enc_data;
	}

	function decPword( $data, $enc_data )
	{
		return password_verify( $data, $enc_data );
	}
?>