var name='Thank you ';
function Sub(){
    var sure = confirm('Do you really want to submit the form?');


    if(sure) {
	 alert('Submited!,Thank you ' + document.getElementById("firstname").value);
        return true;
    }
    else {
        return false;
    }
}

