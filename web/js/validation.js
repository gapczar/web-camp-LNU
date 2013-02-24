function validation(){
	
	this.empty	= function( val ){
		if( val == "" || val == null ){
			return false;
		}else{
			return true;
		}
	}
	
	this.check_num	=	fsunction( nums ){
		var num	=	new RegExp(/^([0-9]+)$/);
		
		return num.test( nums);
	}
	
	this.check_alpha	=	function( letter ){
		var alpha	=	new RegExp(/^([a-zA-Z]+)$/);
		
		return alpha.test( letter);
	}
	
	this.alpha_num	=	function( an ){
		var alpha_num	=	new RegExp(/^([0-9a-zA-Z]+)$/);
		
		return alpha_num.test( an );
	}
	
	this.check_username	=	function( keys ){
		var check_keys	=	new RegExp(/^([0-9a-zA-Z_-])$/);
	}
}
