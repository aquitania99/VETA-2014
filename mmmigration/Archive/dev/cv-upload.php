<?php
     
                     
       $name=name($_REQUEST["name"]);
    $email=email($_REQUEST["email"]);
    $message=message($_REQUEST["message"]);
     

   
    $filename=$_FILES["uploaded_file"]["name"];
    $filetype=$_FILES["uploaded_file"]["type"];
    $filesize=$_FILES["uploaded_file"]["size"];
    $filetemp=$_FILES["uploaded_file"]["tmp_name"];


       
    if($filetype=="application/octet-stream" or $filetype=="text/plain" or $filetype=="application/msword")
    {
   
        $message= '
   
   
            <table cellspacing="0" cellpadding="8" border="0" width="400">
            <tr>
                <td colspan="2"></td>
            </tr>
            <tr bgcolor="#eeeeee">
                <td style="font-family:Verdana, Arial; font-size:11px; color:#333333;"><strong>Name</strong></td>
                <td style="font-family:Verdana, Arial; font-size:11px; color:#333333;">'.$name.'</td>
            </tr>
            <tr><td colspan="2" style="padding:0px;"><img src="images/whitespace.gif" alt="" width="100%" height="1" /></td></tr>
            <tr bgcolor="#eeeeee">
              <td style="font-family:Verdana, Arial; font-size:11px; color:#333333;"><strong>email</strong></td>
              <td style="font-family:Verdana, Arial; font-size:11px; color:#333333;">'.$email.'</td>
              </tr>
            <tr><td colspan="2" style="padding:0px;"><img src="images/whitespace.gif" alt="" width="100%" height="1" /></td></tr>
            <tr bgcolor="#eeeeee">
              <td style="font-family:Verdana, Arial; font-size:11px; color:#333333;"><strong>message</strong></td>
              <td style="font-family:Verdana, Arial; font-size:11px; color:#333333;">'.$message.'</td>
              </tr>               
            <tr><td colspan="2" style="padding:0px;"><img src="images/whitespace.gif" alt="" width="100%" height="1" /></td></tr>
         </table>


           

';

    // MAIL SUBJECT

    $subject = "Uploaded CV";
   
    // TO MAIL ADDRESS
   
   
    $to="blossomingdesigns@gmail.com";

/*
    // MAIL HEADERS
                       
    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    $headers .= "From: MMMigration <blossomingdesigns@gmail.com>\n";

*/
 


    // MAIL HEADERS with attachment

    $fp = fopen($uploaded_file, "rb");
    $file = fread($fp, $uploaded_filee_size);

    $file = chunk_split(base64_encode($file));
    $num = md5(time());
   
        //Normal headers

    $headers  = "From: MMMigration<blossomingdesigns@gmail.com>\r\n";
       $headers  .= "MIME-Version: 1.0\r\n";
       $headers  .= "Content-Type: multipart/mixed; ";
       $headers  .= "boundary=".$num."\r\n";
       $headers  .= "--$num\r\n";

        // This two steps to help avoid spam   

    $headers .= "Message-ID: <".$now." TheSystem@".$_SERVER['SERVER_NAME'].">\r\n";
    $headers .= "X-Mailer: PHP v".phpversion()."\r\n";         

        // With message
       
    $headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
       $headers .= "Content-Transfer-Encoding: 8bit\r\n";
       $headers .= "".$message."\n";
       $headers .= "--".$num."\n"; 

        // Attachment headers

    $headers  .= "Content-Type:".$uploaded_file_type." ";
       $headers  .= "name=\"".$uploaded_file."\"r\n";
       $headers  .= "Content-Transfer-Encoding: base64\r\n";
       $headers  .= "Content-Disposition: attachment; ";
       $headers  .= "filename=\"".$uploaded_file."\"\r\n\n";
       $headers  .= "".$file."\r\n";
       $headers  .= "--".$num."--";

   
   
    // SEND MAIL
       
       @mail($to, $subject, $message, $headers);
   

     fclose($fp);

    echo '<font style="font-family:Verdana, Arial; font-size:11px; color:#333333; font-weight:bold">Attachment has been sent Successfully.<br /></font>';
}
else
    {
        echo '<font style="font-family:Verdana, Arial; font-size:11px; color:#F3363F; font-weight:bold">Wrong file format. Mail was not sent.</font>';
        //echo "<script>window.location.href='mmm-recruitment.html';</script>";
    }

?>