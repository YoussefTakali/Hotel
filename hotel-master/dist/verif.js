function alphabetique(ch) {
	for(let i=0; i<ch.length; i++)
	{
		if (((ch[i]).toUpperCase() <'A') || ((ch[i]).toUpperCase() >'Z'))
			{return false;}
	}
}
function verif(){
    n1=f.name.value;
    if((n1.length==0)||(alphabetique(n1)==false))
    {
   swal.fire("Invalid Name");
    return false;
    }
    em=f.email.value;
    if(em.length==0)
    {
   swal.fire("Invalid Email");
    return false;
    }
}