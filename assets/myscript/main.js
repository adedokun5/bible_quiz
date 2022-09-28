function fullName( fullname ) 
{
	if (!fullname.match('[0-9]')  ) 
	{
		document.getElementById('name_field_msg').innerHTML = '';
		document.getElementById('full_name').style.border = '1px solid green';
		return true;
	}
	else{
		document.getElementById('name_field_msg').innerHTML = 'Texts Only';
		document.getElementById('full_name').style.border = '1px solid red';
	}
}

function emailAddress( email ) 
{
	if ( email.match( '[@]' ) && email.match( '[.]' )  ) 
	{
		document.getElementById('email_field_msg').innerHTML = '';
		document.getElementById('email').style.border = '1px solid green';
		return true;
	}
	else{
		document.getElementById('email_field_msg').innerHTML = 'Invalid Email';
		document.getElementById('email').style.border = '1px solid red';
	}		
}

function phoneNumber( phone_num ) 
{
	if ( phone_num.match( '^[0]' ) && phone_num.match( '[0-9]{11}' )  ) 
	{
		document.getElementById('phn_no_field_msg').innerHTML = '';
		document.getElementById('phone_num').style.border = '1px solid green';
		return true;
	}
	else{
		document.getElementById('phn_no_field_msg').innerHTML = 'Invalid Phone Number';
		document.getElementById('phone_num').style.border = '1px solid red';
	}		
}

function statE( state ) 
{
	if ( !state.match('[0-9]')  ) 
	{
		document.getElementById('state_field_msg').innerHTML = '';
		document.getElementById('state').style.border = '1px solid green';
		return true;
	}
	else{
		document.getElementById('state_field_msg').innerHTML = 'Texts Only';
		document.getElementById('state').style.border = '1px solid red';
	}
}

function imageType( img_type ) 
{
	if ( img_type == 'jpg' || img_type == 'png' || img_type == 'jpeg'  ) 
	{
		document.getElementById('passport_field_msg').innerHTML = '';
		document.getElementById('passport').style.border = '1px solid green';
		return true;
	}
	else{
		document.getElementById('passport_field_msg').innerHTML = 'Only jpg or png file are accepted';
		document.getElementById('passport').style.border = '1px solid red';
	}
}

function matchPasswords( password, con_password ) 
{
	if ( password === con_password  ) 
	{
		document.getElementById('password_field_msg').innerHTML = '';
		document.getElementById('pword').style.border = '1px solid green';
		document.getElementById('con_pword').style.border = '1px solid green';
		return true;
	}
	else{
		document.getElementById('password_field_msg').innerHTML = "Passwords Doesn't Match";
		document.getElementById('pword').style.border = '1px solid red';
		document.getElementById('con_pword').style.border = '1px solid red';
	}
}

function addAdminSubmitBtn() 
{
	var fullname = document.getElementById('full_name').value;
	var email = document.getElementById('email').value;
	var phone_num = document.getElementById('phone_num').value;
	var state = document.getElementById('state').value;
	var image_name = document.getElementById('passport').value;
	var password = document.getElementById('pword').value;
	var con_password = document.getElementById('con_pword').value;
	var dot_pos = image_name.lastIndexOf('.');
	var img_type = image_name.substr( dot_pos + 1, 3 );
	var username = document.getElementById('username').value;
	
	if ( fullname.length > 0 ) 
	{
		var res1 = fullName( fullname );
	}
	if ( email.length > 0 ) 
	{
		var res2 = emailAddress( email );
	}
	if ( phone_num.length > 0 ) 
	{
		var res3 = phoneNumber( phone_num );
	}
	if ( img_type.length > 0 ) 
	{
		var res4 = imageType( img_type );
	}	
	if ( username.length > 0 ) 
	{
		document.getElementById('username').style.border = '1px solid green';
	}	
	if ( state.length > 0 ) 
	{
		var res5 = statE( state );
	}
	if ( password.length > 0 && con_password.length > 0 ) 
	{
		var res6 = matchPasswords( password, con_password );	
	}

	if ( ( res1 && res2 && res3 && res4 && res5 && res6 == 1) && username.length > 0  ) 
	{
		document.getElementById('save_btn').disabled = '';
	} 
	else 
	{
		document.getElementById('save_btn').disabled = 'disabled';
	}
}

function passwordType() 
{
	var pword = document.getElementById('pword').type;
	if ( pword == 'password' ) 
	{
		document.getElementById('pword').type = 'text';
		document.getElementById('con_pword').type = 'text';
	} 
	else 
	{
		document.getElementById('pword').type = 'password';
		document.getElementById('con_pword').type = 'password';
	}
}

function bookOfTheBible( book ) 
{
	document.getElementById('botb_field_msg').innerHTML = '';
	//when book name start with a number
	if ( book.match('^[1-3]')  ) 
	{
		if ( book.length > 1 ) 
		{
			//book name
			var cur_book = book.substr( 1 );

			if ( !cur_book.match('[0-9]') ) 
			{
				document.getElementById('botb').style.border = '1px solid green';
				return true;
			}
			else 
			{
				document.getElementById('botb').style.border = '1px solid red';
				document.getElementById('botb_field_msg').innerHTML = 'Invalid book of the Bible';
			}
		} 
	} 
	else 
	{	
		if ( !book.match('[0-9]') ) 
		{
			document.getElementById('botb').style.border = '1px solid green';
			return true;
		}
		else
		{
			document.getElementById('botb').style.border = '1px solid red';
			document.getElementById('botb_field_msg').innerHTML = 'Invalid book of the Bible';
		}
		
	}
}

function bookChapter( chapter ) 
{
	if ( chapter.match('[a-zA-Z]') ) 
	{
		document.getElementById('chapter').style.border = '1px solid red';
		document.getElementById('chapter-field-msg').innerHTML = 'Numbers only';
	} 
	else 
	{
		document.getElementById('chapter').style.border = '1px solid green';
		document.getElementById('chapter-field-msg').innerHTML = '';
		return true;
	}
}

function bibleVersion( version ) 
{
	if ( version.match('[0-9]') ) 
	{
		document.getElementById('version').style.border = '1px solid red';
		document.getElementById('version-field-msg').innerHTML = 'Texts only';
	} 
	else 
	{
		document.getElementById('version').style.border = '1px solid green';
		document.getElementById('version-field-msg').innerHTML = '';
		return true;
	}
}

function bibleVerse( verse ) 
{
	document.getElementById('verse-field-msg').innerHTML = '';
	//when book name start with a number
	if ( verse.match('[a-zA-Z]')  ) 
	{	
		if ( !verse.match('^[0-9]{1,}') || verse.match('[a-zA-Z]{2,}') || !verse.match('[a-bA-B]') ) 
		{
			document.getElementById('verse').style.border = '1px solid red';
			document.getElementById('verse-field-msg').innerHTML = 'Invalid Verse';
		}
		else
		{
			document.getElementById('verse').style.border = '1px solid green';
			return true;
		}
	}
	else
	{
		if ( verse.match('[a-zA-Z]') ) 
		{
			document.getElementById('verse').style.border = '1px solid red';
			document.getElementById('verse-field-msg').innerHTML = 'Invalid Verse';
		} 
		else 
		{
			document.getElementById('verse').style.border = '1px solid green';
			return true;
		}
	}
}

function addQuestionBtn() 
{
	var book_of_the_bible = document.getElementById('botb').value;
	var chapter = document.getElementById('chapter').value;
	var verse = document.getElementById('verse').value;
	var version = document.getElementById('version').value;
	var passage = document.getElementById('passage').value;

	if ( book_of_the_bible.length > 0 ) 
	{
		var res1 = bookOfTheBible( book_of_the_bible );		
	}
	if ( chapter.length > 0 ) 
	{
		var res2 =bookChapter( chapter );		
	}	
	if ( verse.length > 0 ) 
	{
		var res3 =bibleVerse( verse );		
	}
	if ( version.length > 0 ) 
	{
		var res4 =bibleVersion( version );		
	}
	if ( passage.match('[a-zA-Z]') ) 
	{
		document.getElementById('passage').style.border = '1px solid green';
	}	

	if ( ( res1 && res2 && res3 && res4 == 1 ) && passage.match('[a-zA-Z]') ) 
	{
		document.getElementById('save_ques').disabled = '';
	} 
	else 
	{
		document.getElementById('save_ques').disabled = 'disabled';
	}
}

function updateNameBtn() 
{
	var fullname = document.getElementById('full_name').value;

	if ( fullname.length > 0 ) 
	{
		var result = fullName( fullname );
	}

	if ( result == 1 ) 
	{
		document.getElementById('update_name_btn').disabled = '';
	}
	else
	{
		document.getElementById('update_name_btn').disabled = 'disabled';
	}
}

function updatePasswordBtn() 
{
	var password = document.getElementById('pword').value;
	var con_password = document.getElementById('con_pword').value;

	if ( password.length > 0 && con_password.length > 0 ) 
	{
		var result = matchPasswords( password, con_password );
	}

	if ( result == 1 ) 
	{
		document.getElementById('update_password_btn').disabled = '';
	}
	else
	{
		document.getElementById('update_password_btn').disabled = 'disabled';
	}
}

function updatePassportBtn() 
{
	var image_name = document.getElementById('passport').value;
	var dot_pos = image_name.lastIndexOf('.');
	var img_type = image_name.substr( dot_pos + 1, 3 );

	if ( img_type.length > 0 ) 
	{
		var result = imageType( img_type );
	}

	if ( result == 1 ) 
	{
		document.getElementById('update_passport_btn').disabled = '';
	}
	else
	{
		document.getElementById('update_passport_btn').disabled = 'disabled';
	}
}