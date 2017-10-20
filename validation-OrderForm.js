// JavaScript Document
   
      // Form validation code will come here.
      function validate()
      {
      
         if( document.dporderform.shopname.value == "" )
         {
            alert( "Please provide your ShopName / College Name!" );
            document.dporderform.shopname.focus() ;
            return false;
         }
		  if( document.dporderform.address.value == "" )
         {
            alert( "Please provide your Address!" );
            document.dporderform.address.focus() ;
            return false;
         }
		  if( document.dporderform.city.value == "" )
         {
            alert( "Please provide your City!" );
            document.dporderform.city.focus() ;
            return false;
         }
		  if( document.dporderform.postalcode.value == "" )
         {
            alert( "Please provide your Postal Code!" );
            document.dporderform.postalcode.focus() ;
            return false;
         }
         
        if( document.dporderform.district.value == "" )
         {
            alert( "Please provide your District" );
            document.dporderform.district.focus() ;
            return false;
         }
		 
		  if( document.dporderform.district.value == "" )
         {
            alert( "Please provide your District" );
            document.dporderform.district.focus() ;
            return false;
         }
		 
		  if( document.dporderform.state.value == "" )
         {
            alert( "Please provide your State" );
            document.dporderform.state.focus() ;
            return false;
         }
         
		  if( document.dporderform.name.value == "" )
         {
            alert( "Please provide your Name" );
            document.dporderform.name.focus() ;
            return false;
         }
         
         if( document.dporderform.mobile.value == "" ||
         isNaN( document.dporderform.mobile.value ) ||
         document.dporderform.mobile.value.length != 10 )
         {
            alert( "Please provide a mobile in the format #####." );
            document.dporderform.mobile.focus() ;
            return false;
         }
          if( document.dporderform.email.value == "" )
         {
            alert( "Please provide your Email" );
            document.dporderform.email.focus() ;
            return false;
         }
       
	   	if ( ( dporderform.board[0].checked == false ) && ( dporderform.board[1].checked == false ) ) 
		{
		alert ( "Please Choose Yes or No" ); 
		document.dporderform.board[0].focus() ;
		return false;
		}
         return( true );
      }
 
