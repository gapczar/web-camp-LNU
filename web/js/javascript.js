function rate(id){
	$.post("user_func.php", {"app_id": id}, function(output){
		if(output==1){
			$("#btn"+id).addClass("btn-primary");
		}else{
			alert(output);
		}
	});
}