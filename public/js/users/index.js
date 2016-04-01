jQuery(document).ready(function($){
    $('#check_all_users').on('click',function(){
        if(this.checked){
            $('.user_list').each(function(){
                this.checked = true;
            });
        }else{
             $('.user_list').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.user_list').on('click',function(){
        if($('.user_list:checked').length == $('.user_list').length){
            $('#check_all_users').prop('checked',true);
        }else{
            $('#check_all_users').prop('checked',false);
        }
    });

	$('#delete_all').click(function(evnt){
		evnt.preventDefault();
		var ids = [];

		var token_element = document.getElementsByName('_token');
		var form_token = $(token_element).val();
		if($('.user_list:checked').length > 0){

			$('.user_list:checked').each(function(index, value){
				ids[index] = $(value).val();
			});
			$.ajax({
				method: "POST",
				url: "user/delete-all",
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
			alert("please select a row");
		}
	});
});


