jQuery(document).ready(function($){
    $('#check_all_groups').on('click',function(){
        if(this.checked){
            $('.group_list').each(function(){
                this.checked = true;
            });
        }else{
             $('.group_list').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.group_list').on('click',function(){
        if($('.group_list:checked').length == $('.group_list').length){
            $('#check_all_groups').prop('checked',true);
        }else{
            $('#check_all_groups').prop('checked',false);
        }
    });

	$('#delete_all').click(function(evnt){
        evnt.preventDefault();
        var ids = [];
        var token_element = document.getElementsByName('_token');
        var form_token = $(token_element).val();
        if($('.group_list:checked').length>0)
        {
    		$('.group_list:checked').each(function(index, value){
    			ids[index] = $(value).val();
            });
            //****************** ajax code started ******************//
    		$.ajax({
    			method: "POST",
    			url: "group/delete-all",
    			data: {'ids': ids, '_token':form_token }
    		})
    		.done(function( msg ) {
    			if(msg == "true"){
                    location.reload();
                }
		    });
        }
        else
        {
            alert("Please select a row")
        }

            
       
	});
        
});