
function rate(id){
	$.post(base_url+"transaction/voteItem", {"app_id": id}, function(output){
		if(output==1){
			$("#btn"+id).addClass("btn-primary");
		}else{
			alert(output);
		}
	});
}
function login(me,e)
{
    e.preventDefault();
    e.stopPropagation();
    
    var u = me.uname.value;
    var p = me.upass.value;
    
    var data_ = new FormData();
    
    data_.append('username',u);
    data_.append('password',p);
    
    $.ajax({
        url: base_url+"transaction/login",
        data: {"username":u,"password":p},
        type: "POST",
        success:function(res){
            var obj = JSON.parse(res);
            if(obj.session_data == true){
                document.location=base_url+'home/profile';
            } else {
                
            }
        }
    });
}