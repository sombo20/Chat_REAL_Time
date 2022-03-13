window.onload = function(){

var select = function(a){
	return document.querySelector(a)
}
	var modal = select(".modal")
	var chamar_modal = select("#upload")
	var close_modal = select("#close")
	
	chamar_modal.addEventListener("click",function(){
	   modal.style.display ="flex"
	})
	
	close_modal.addEventListener("click",function(){
		modal.style.display ="none"
	})
	
	var httpRequest;
	
	document.getElementById("mandar").onclick = function()
	{
	var entrada = document.getElementById("mensagem").value;
	requisita("Enviar.php", entrada);
	};
	
	function requisita(url, entrada)
	{
	httpRequest = new XMLHttpRequest();
	
	httpRequest.onreadystatechange = mostraconteudo;
	httpRequest.open("GET", "Enviar.php?mensagem=" + entrada, true);
	httpRequest.send();
	}
	
	function mostraconteudo()
	{
	if(httpRequest.readyState === XMLHttpRequest.DONE)
	{
	if(httpRequest.status === 200)
	{
	document.getElementById("mensagem").value=""
	}
	else
	{
	alert("Algum problema !");
	}
	}
	}
	
	
}

$(function() {
        $('.submit').on('click', function() {
            var file_data = $('.file').prop('files')[0];
            if(file_data != undefined) {
                var form_data = new FormData();                  
                form_data.append('file', file_data);
                $.ajax({
                    type: 'POST',
                    url: 'upload.php',
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success:function(response) {
                        if(response == 'success') {
                             alert("Enviada");
                        } else {
                            alert('Something went wrong. Please try again.');
                        }
  
                        $('.file').val('');
                    }
                });
            }
            return false;
        });
    });
