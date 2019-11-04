ajax = new XMLHttpRequest();
function login(){
	document.getElementById('login').style.display='block';
}
function filter(){
	var ele = document.getElementsByName('Type'); 
    for(i = 0; i < ele.length; i++) { 
        if(ele[i].checked) 
        {
        	var checked = ele[i].value ; 
        }
    }
    var html = "<div class = card>"
    document.getElementById("test").innerHTML = html+ajax.responseText+"<br><br><button><a href='login.php'>Login</button></a></div>";
	ajax.open("GET", "filter.php?checked=" + checked, true);
  	ajax.send(null);
}
function validate(){
    var pay = document.getElementsByName('Price'); 
    for(i = 0; i < pay.length; i++) { 
        if(pay[i].checked) 
        {
        	var Price = pay[i].value ;
        	alert(Price); 
        }
    }
	ajax.open("GET", "test2.php?Price=" + Price , true);
  	ajax.send(null);
}