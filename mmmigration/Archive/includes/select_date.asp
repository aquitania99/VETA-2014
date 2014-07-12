<%	
if defaultDate = "" then
	defaultDate = now()
end if
response.write "<select name=""startDay"" id=""startDay"" "&disabledValue&"><option value="""">--</option>"&chr(13)
for dayCount = 1 to 31
	if len(dayCount) <= 1 then
		dayCount = "0"&dayCount
	end if
	response.write "<option value="&dayCount&">"&dayCount&"</option>"&chr(13)
next
response.write "</select><select name=""startMonth"" class=""pinline"" "&disabledValue&"><option value="""">--</option>"&chr(13)
for monthCount = 1 to 12
	response.write "<option value="&monthCount&">"&monthname(monthCount)&"</option>"&chr(13)
next
response.write "</select><select name=""startYear"" class=""pinline"" "&disabledValue&"><option value="""">--</option>"&chr(13)
for yearCount = year(defaultDate)-70 to year(defaultDate)-10
	response.write "<option value="""&yearCount&""">"&yearCount&"</option>"&chr(13)
next
response.write "</select>" %>