<%	
if defaultDate = "" then
	defaultDate = now()
end if
response.write "<select name="""&selectName&""" id="""&selectName&""" "&disabledValue&"><option value="""">--</option>"&chr(13)
for yearCount = 1930 to cint(year(defaultDate))
	response.write "<option value="""&yearCount&""">"&yearCount&"</option>"&chr(13)
next
response.write "</select>" %>