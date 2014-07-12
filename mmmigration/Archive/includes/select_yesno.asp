<%	response.write "<select name="""&selectName&"""  id="""&selectName&""">"
	if defaultAnswer = "1" then ' answer is yes
		response.write "<option value=""No"">No</option>"&chr(13)
		response.write "<option value=""Yes"" selected>Yes</option>"&chr(13)
	else ' answer is no
		response.write "<option value=""No"" selected>No</option>"&chr(13)
		response.write "<option value=""Yes"">Yes</option>"&chr(13)
	end if
	response.write "</select>"&chr(13) %>