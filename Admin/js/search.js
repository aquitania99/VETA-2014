function send() {
	document.forms["searchForm"].submit();
}

function searchPerson() {
	var email = $('#emailAddress').val();
	var fullName = $('#fullName').val();
	var fromDate = $('#fromDate').val();
	var toDate = $('#toDate').val();
	var search = $('#search').val();
	var sendData = {'search': search, 'email': email, 'fullName': fullName, 'fromDate': fromDate, 'toDate': toDate};
	//
	//alert('ready to search for : ' + email + ' ' + fullName + ' ' + fromDate + ' ' + toDate + '\n');
	//
	if (email.length === 0 && fullName.length === 0 && fromDate.length === 0 && toDate.length === 0) {
		//alert('you have to specify one search parameter or a data range!! \n\n');
	}
	//
	else {

		//
		$.ajax({
			type: "POST",
			url: "classes/classFind.php",
			data: sendData,
			success: function (data) {
				if (data.success == "yes") {
					alert('returning something....' + data);
					$('#results').show();
				}
			}
		});
	}
}
//
$(function () {
	$(".datepicker").datepicker({currentText: "Now"});
});
//
function add() {
	$('#search').replaceWith('<button class="btn btn-danger pull-left" name="search" id="search"  ><i class="icon-user icon-white"></i> New Counsellor</button>');
	//
	$('#actionsForm').show('slow');
	//
	$('#action').val(1);
	$('#action').change();
	//
}
//
function edit(pos) {
	var data = $('#data' + pos).val();
	var nData = data.split(",");
	console.log(data, nData);
	$('#actionsForm').show('slow');
	//
	$('#recID').val(nData[0]);
	$('#firstName').val(nData[2]);
	$('#firstName').change();
	$('#lastName').val(nData[3]);
	$('#firstName').change();
	$('#emailAddress').val(nData[4]);
	//$('#emailAddress').addClass('uneditable-input');
	$('#emailAddress').change();
	$('#mobile').val(nData[5]);
	$('#mobile').change();
	$('#password').val(nData[6]);
	$('#password').change();
	//
	$('#action').val(2);
	$('#action').change();
	//
	$('#search').replaceWith('<button class="btn btn-warning pull-left" name="update" id="update"  ><i class="icon-circle-arrow-up icon-white"></i> Update Counsellor</button>');
}
//

function del(pos) {
	var data = $('#data' + pos).val();
	var nData = data.split(",");
	var sendData = {'recID': nData[0], 'email': nData[4]};
	console.log(data, nData);
	//
	$.ajax({
		type: "POST",
		url: "classes/counsellors.php",
		data: sendData,
		success: function (data) {
			if (data.success == "yes") {
				alert('returning something....' + data);
				$('#results').show();
			}
		}
	});
}
