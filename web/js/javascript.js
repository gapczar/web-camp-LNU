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