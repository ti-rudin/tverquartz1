<?php
$to = 'adminemail@mail.com';

if ( isset( $_POST['submit'] ) ) {
    if (!empty($_POST['phone'])) {
        $phone = "Телефон: <b>". $_POST['phone'] ."</b><br>";
    }
    if (!empty($_POST['name'])) {
        $name = "Имя: <b>". $_POST['name'] ."</b><br>";
    }
    if (!empty($_POST['level1'])) {
        $level1 = "Планировка кухни: <b>". $_POST['level1'] ."</b><br>";
    }
    if (!empty($_POST['level2-1'])) {
        $level21 = "Высота, мм: <b>". $_POST['level2-1'] ."</b><br>";
    }
    if (!empty($_POST['level2-2'])) {
        $level22 = "Ширина, мм: <b>". $_POST['level2-2'] ."</b><br>";
    }
    if (!empty($_POST['level2-3'])) {
        $level23 = "Длина, мм: <b>". $_POST['level2-3'] ."</b><br>";
    }
    if (!empty($_POST['level3-1']) or !empty($_POST['level3-2']) or !empty($_POST['level3-3']) or !empty($_POST['level3-4']) or !empty($_POST['level3-5']) or !empty($_POST['level3-6'])) {
        $level3 = "Материал фасада: <b>". $_POST['level3-1'] ." ". $_POST['level3-2'] ." ". $_POST['level3-3'] ." ". $_POST['level3-4'] ." ". $_POST['level3-5'] ." ". $_POST['level3-6'] ."</b><br>";
    }
    if (!empty($_POST['level5-1']) or !empty($_POST['level5-2']) or !empty($_POST['level5-3']) or !empty($_POST['level5-4']) or !empty($_POST['level5-5']) or !empty($_POST['level5-6'])) {
        $level5 = "Бытовая техника: <b>". $_POST['level5-1'] ." ". $_POST['level5-2'] ." ". $_POST['level5-3'] ." ". $_POST['level5-4'] ." ". $_POST['level5-5'] ." ". $_POST['level5-6'] ."</b><br>";
    }
    if (!empty($_POST['formData'])) {
        $formData = "Название формы: <b>". $_POST['formData'] ."</b><br>";
    }


    if($_FILES)
    {
        $filepath = array();
        $filename = array();
        $file2 = array();
        $i = 0;
        foreach ($_FILES["file"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $filename[$i][0] = $_FILES["file"]["tmp_name"][$key];
                $filename[$i][1] = $_FILES["file"]["name"][$key];
                $i++;
            }
        }
    }


    $body = "
        $formData
        $name
        $phone
        $level1
        $level21
        $level22
        $level23
        $level3
        $level5
        -------------------------------------<br>Каталог сайтов Landistore.com
";



    send_mail($to, $body, $filename);
}

function send_mail($to, $body, $filename)
{
    $subject = 'Заявка с сервиса на подбор кухни';
    $boundary = "--".md5(uniqid(time()));
    $sendfrom   = "support@sitename.ru";
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .="Content-Type: multipart/mixed; text/html; charset=\"utf-8\"; boundary=\"".$boundary."\"\r\n";
    $multipart = "--".$boundary."\r\n";
    $multipart .= "Content-type: text/html; charset=\"utf-8\"\r\n";
    $multipart .= "Content-Transfer-Encoding: quoted-printable\r\n\r\n";

    $body = $body."\r\n\r\n";

    $multipart .= $body;
    foreach ($filename as $key => $value) {
        $fp = fopen($value[0], "r");
        $content = fread($fp, filesize($value[0]));
        fclose($fp);
        $file .= "--".$boundary."\r\n";
        $file .= "Content-Type: application/octet-stream\r\n";
        $file .= "Content-Transfer-Encoding: base64\r\n";
        $file .= "Content-Disposition: attachment; filename=\"".$value[1]."\"\r\n\r\n";
        $file .= chunk_split(base64_encode($content))."\r\n";
    }
    $multipart .= $file."--".$boundary."--\r\n";
    mail($to, $subject, $multipart, $headers);
}
?>

<script language = 'javascript'>
    var delay = 10;
    setTimeout("document.location.href='thank.html'", delay);
</script>
