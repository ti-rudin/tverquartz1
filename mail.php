<!--Данный шаблон был приобретён на сайте Landistore.com-->
<!--Landistore - интернет-магазин качественных сайтов для вашего бизнеса-->
<!--(с) Все права защищены-->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['phone'])) {
        $phone = "Телефон: <b>". $_POST['phone'] ."</b><br>";
    }
    if (!empty($_POST['formData'])) {
        $formData = "Название формы: <b>". $_POST['formData'] ."</b><br>";
    }

    $to = "elboltman@gmail.com";
    $sendfrom   = "support@sitename.ru";
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "Новая заявка с сайта";
    $message = "<!DOCTYPE html>
<html lang=\"ru\">
<head>
<title>Новая заявка с сайта</title>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width\">
<style type=\"text/css\">
    #outlook a{padding:0;}.ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}  body, table, td, a{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;}table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;}img{-ms-interpolation-mode:bicubic;}body{margin:0; padding:0;}img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}table{border-collapse:collapse !important;}  body{height:100% !important; margin:0; padding:0; width:100% !important;}.appleBody a {color:#68440a; text-decoration: none;}.appleFooter a {color:#999999; text-decoration: none;}  @media screen and (max-width: 525px) {  table[class=\"wrapper\"]{width:100% !important;}  td[class=\"logo\"]{text-align: left;padding: 20px 0 20px 0 !important;}  td[class=\"logo\"] img{margin:0 auto!important;}  td[class=\"mobile-hide\"]{display:none;}  img[class=\"mobile-hide\"]{display: none !important;}  img[class=\"img-max\"]{max-width: 100% !important;height:auto !important;}  table[class=\"responsive-table\"]{width:100%!important;}  td[class=\"padding\"]{padding: 10px 5% 15px 5% !important;}  td[class=\"padding-copy\"]{padding: 10px 5% 10px 5% !important;text-align: center;}  td[class=\"padding-meta\"]{padding: 30px 5% 0px 5% !important;text-align: center;}  td[class=\"no-pad\"]{padding: 0 0 20px 0 !important;}  td[class=\"no-padding\"]{padding: 0 !important;}  td[class=\"section-padding\"]{padding: 50px 15px 50px 15px !important;}  td[class=\"section-padding-bottom-image\"]{padding: 50px 15px 0 15px !important;}  td[class=\"mobile-wrapper\"]{padding: 10px 5% 15px 5% !important;}  table[class=\"mobile-button-container\"]{margin:0 auto;width:100% !important;}  a[class=\"mobile-button\"]{width:80% !important;padding: 15px !important;border: 0 !important;font-size: 16px !important;}  }
</style>
</head>
<body style=\"margin: 0; padding: 0;\">
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
    <tr>
        <td bgcolor=\"#f8f8f8\">
            <div align=\"center\" style=\"padding: 0px 15px 0px 15px;\">
                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"500\" class=\"wrapper\">
                    <tr>
                        <td style=\"padding: 20px 0px 30px 0px;\" class=\"logo\">
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                <tr>
                                    <td width=\"100\" align=\"left\"><a href=\"https://landistore.com\" target=\"_blank\"><img alt=\"Logo\" src=\"https://landistore.com/resource/email/email_logo.png\" width=\"52\" height=\"78\" style=\"display: block;\" border=\"0\"></a></td>
                                    <td width=\"400\" align=\"right\" class=\"mobile-hide\">
                                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                            <tr>
                                                <td align=\"right\" style=\"padding: 0 0 5px 0; font-size: 14px; font-family: Arial, sans-serif; color: #666666; text-decoration: none;\"><span style=\"color: #666666; text-decoration: none;\">Landistore - интернет-магазин сайтов.<br>Зачем придумывать то, что уже есть и работает?</span></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
    <tr>
        <td bgcolor=\"#ffffff\" align=\"center\" style=\"padding: 70px 15px 70px 15px;\" class=\"section-padding\">
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"500\" class=\"responsive-table\">
                <tr>
                    <td>
                        <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <td>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                        <tbody>
                                             <tr>
                                                  <td class=\"padding-copy\">
                                                      <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                          <tr>
                                                              <td>
                                                                  <img src=\"https://landistore.com/resource/email/responsive-email.jpg\" width=\"500\" height=\"200\" border=\"0\" alt=\"Новая заявка с сайта\" style=\"display: block; padding: 0; color: #666666; text-decoration: none; font-family: Helvetica, arial, sans-serif; font-size: 16px; width: 500px; height: 200px;\" class=\"img-max\">
                                                              </td>
                                                            </tr>
                                                        </table>
                                                  </td>
                                              </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                        <tr>
                                            <td align=\"center\" style=\"font-size: 25px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;\" class=\"padding-copy\">Новая заявка с сайта</td>
                                        </tr>
                                        <tr>
                                            <td align=\"center\" style=\"padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;\" class=\"padding-copy\">
                                                Поздравляем, только что кто-то оставил заявку на вашем сайте.<br><br>
                                                $formData
                                                $phone
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
    <tr>
        <td bgcolor=\"#f8f8f8\" align=\"center\" style=\"padding: 30px 15px 30px 15px;\" class=\"section-padding\">
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"500\" style=\"padding:0 0 20px 0;\" class=\"responsive-table\">
                <tr>
                    <td valign=\"top\" style=\"padding: 40px 0 0 0;\" class=\"mobile-hide\"><a href=\"https://landistore.com\" target=\"_blank\"><img src=\"https://landistore.com/resource/email/email_logo.png\" alt=\"Landistore\" width=\"105\" height=\"105\" border=\"0\" style=\"display: block; width: 105px; height: 105px;\"></a></td>
                    <td style=\"padding: 40px 0 0 0;\" class=\"no-padding\">
                        <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
                            <tr>
                                <td align=\"left\" style=\"padding: 0 0 5px 25px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #333333;\" class=\"padding-copy\">Landistore</td>
                            </tr>
                            <tr>
                                 <td align=\"left\" style=\"padding: 0px 0 15px 25px; font-size: 16px; line-height: 24px; font-family: Helvetica, Arial, sans-serif; color: #666666;\" class=\"padding-copy\">Каталог готовых сайтов для вашего бизнеса</td>
                            </tr>
                            <tr>
                                <td style=\"padding:0 0 45px 25px;\" align=\"left\" class=\"padding\">
                                    <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"mobile-button-container\">
                                        <tr>
                                            <td align=\"center\">
                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"mobile-button-container\">
                                                    <tr>
                                                        <td align=\"center\" style=\"padding: 0;\" class=\"padding-copy\">
                                                            <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"responsive-table\">
                                                                <tr>
                                                                    <td align=\"center\"><a href=\"https://landistore.com\" target=\"_blank\" style=\"font-size: 15px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #ffffff; text-decoration: none; background-color: #8d32b4; border-top: 10px solid #8d32b4; border-bottom: 10px solid #8d32b4; border-left: 20px solid #8d32b4; border-right: 20px solid #8d32b4; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; display: inline-block;\" class=\"mobile-button\">Перейти на сайт &rarr;</a></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>";
    $send = mail ($to, $subject, $message, $headers);

    if ($send == 'true')
    {

    }
    else
    {
        echo '<center>
 
<b>Ошибка. Сообщение не отправлено!</b>
 
</center>';
    }
} else {
    http_response_code(403);
    echo "Попробуйте еще раз";
}?>