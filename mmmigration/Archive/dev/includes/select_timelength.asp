<%	
if defaultDate = "" then
	defaultDate = now()
end if
response.write "<select name="""&selectName&"_years"" class=""pinline"" "&disabledValue&">"&chr(13)
for i = 0 to 50
	if i = 1 then
		response.write "<option value="""&i&""">"&i&" Yr</option>"&chr(13)
	else
		response.write "<option value="""&i&""">"&i&" Yrs</option>"&chr(13)
	end if
next
response.write "</select>"
response.write "<select name="""&selectName&"_months"" class=""pinline"" "&disabledValue&">"&chr(13)
for monthCount = 0 to 12
	if monthCount = 1 then
		response.write "<option value="&monthCount&">"&monthCount&" Mth</option>"&chr(13)
	else
		response.write "<option value="&monthCount&">"&monthCount&" Mths</option>"&chr(13)
	end if
next
response.write "</select>"
 %>