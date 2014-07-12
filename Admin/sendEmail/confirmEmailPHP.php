<?php
        // Send Confirmation Email
            $to  = 'aquitania99@gmail.com' . ', '; // note the comma
            // subject
            $subject = 'VETA - Email Sent Confirmation';

            // message
            $message = '
            <html>
            <head>
            <title>Email addresses that have been sent</title>
            </head>
            <body style=\'font-size:1em; color:#777777; text-align:left;\'>
            <p>These are the Email Addresses to what the Classifieds Email, has been sent!</p>
            <table>
                <tr>
                <th><b>Email Address</b></th>
                </tr>
                <tr>
                <td>.'.$testEmail.'<br /></td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                </tr>
            </table>
            </body>
            </html>
            ';

            // To send HTML mail, the Content-type header must be set
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            // Additional headers
            $headers .= 'To: Australia Veta Check <veta@check.com>' . "\r\n";
            $headers .= 'From: VETA Email Marketing Server <info@australiaveta.com.au>' . "\r\n";
            $headers .= 'Bcc: sergio@sevenstudio.com.au' . "\r\n";

            // Mail it
            mail($to, $subject, $message, $headers);
?>
