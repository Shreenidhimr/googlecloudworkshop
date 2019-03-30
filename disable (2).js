var closealert=false;
function allLetter(uname)  
{   
    var letters = /^[ A-Za-z]+$/;  
    if(uname.value.match(letters))  
    {  
		closealert=false;
		return true;  
    }  
    else  
    {  
		if(!closealert)
		{
			alert('name must have alphabet characters only');  
			closealert=true;
		}
		uname.focus();  
		uname.value="";
	    //return false; 
    }  
}  
var closealert=false;
function alphanumeric(uadd)  
{   
    var letters = /^[ ,#0-9a-zA-Z /- ]+$/;  
    if(uadd.value.match(letters))  
    {  
		closealert=false;
		return true;  
    }  
    else  
    {  
		if(!closealert){
    alert('ADDRESS must have alphanumeric characters only');  
		closealert=true;
		}
		uadd.focus();  
	uadd.value="";
    //return false;  
    }  
}

function allnum(unum)
{
		var num = /^[0-9]+$/;
		if(unum.value.match(num))
		{
			closealert=false;
			return true;
		}
		else
		{
		if(!closealert){
			alert('Enter valid number');
			closealert=true;
		}
			unum.focus();
			unum.value="";
			//return false;
		}
}

function occupation(uname)
{   
    var letters = /^[ A-Za-z]+$/;  
    if(uname.value.match(letters))  
    {  
		closealert=false;
		return true;  
    }  
    else  
    {  
		if(!closealert){
		alert('invalid OCCUPATION');  
		closealert=true;
		}
		uname.focus();  
		uname.value="";
	    //return false; 
    } 
}
