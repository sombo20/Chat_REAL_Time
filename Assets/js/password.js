window.onload = function(){
	var eye = document.querySelector("#change")
	var bool = true
	var password = document.querySelector("#password")
	
	eye.addEventListener("click",function(){
		if(bool){
		  eye.setAttribute("class","fa fa-eye-slash")
		  password.type = "text"
		  bool = false
		}else{
		  eye.setAttribute("class","fa fa-eye")
		  password.type = "password"
		  bool = true
		}
	})
	
	//alert()
}