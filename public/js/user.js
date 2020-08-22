$(function () {
	var fullUrl = 'http://localhost:8000/api/users';
	$.ajax({
		url : fullUrl,
		success : function(response) {
			var users = response.data[0];
			$.each(users, function (name, status) {
				$(".userTable").find("tBody").append($("<tr><td>"+name + "</td>" + "<td>" +status + "</td></tr>"));
			});
		}
	});
});


$(function() {
	var ides = 0;
	$(document).on('click','.card-body .input-feilds .btn-primary',function(e){
		e.preventDefault();
		var myArray = [];
		var nameValue = $(this).parents('form').find('.first-name').val();
		var lastValue = $(this).parents('form').find('.last-name').val();

		if($(this).find('i').hasClass('fa-plus')  && nameValue != '' && lastValue != ''){

			if(nameValue != null && lastValue != null){
				var formData = {
					first_name: nameValue,
					last_name: lastValue
				}

				$.ajax({
					type: 'post',
					url: 'http://localhost:8000/api/new-user-store',
					data: formData,
					dataType:'json',
					success: function (response) {}
				});
			}

			ides++;
			var myrowId = $(this).parents('form').attr('id');
			var myidSplit = myrowId.split('-');
			var increaent = parseInt(myidSplit[1])+1;
			var myrow = $(this).parents('form');
			var myClone = $(myrow).clone();
			$(myClone).insertAfter(myrow)
			$(myrow).next().attr('id','form-'+increaent);
			$(myrow).next().find('input').val('')
			$(myrow).next().find('i').addClass('fa-plus')
			$(this).find('i').removeClass('fa-plus');
			$(this).find('i').addClass('fa-minus');
			$(this).find('i').removeClass('fa-plus');
			$(this).find('i').addClass('fa-minus');

		}else if($(this).find('i').hasClass('fa-minus')){
			$(this).parents('form').remove();
		}
	})
});