<!DOCTYPE html>
<html>
    <head> 
        <title>รายละเอียดข้อมูลนิสิต</title>
    </head>
    <body>
    <img src="<?php echo base_url().'/picture/Buu-logo11.png'; ?>" width="60" height="60"> 
    <font size="100">รายละเอียดข้อมูลนิสิต</font>
    <hr>
    <h3>1. ข้อมูลส่วนตัว</h3>
        รหัสนิสิต : <?php echo $id ?> <br><br>
        คำนำหน้า : <?php echo $name_title.' '.$first_name.' '.$last_name ?> <br><br>
        วันเกิด : <?php echo $dob ?> <br><br>
        อีเมล : <?php echo $email ?> <br><br>
    <hr><h3>ช้อมูลการเรียน</h3>
        นิสิตชั้นปี : <?php echo $year ?> <br><br>
        มกุล : <?php echo $cluster ?> <br><br>
        ภาษาที่ถนัด<br>
        <?php $i=1; foreach($code as $value){
            echo $i.'. ';
            echo $value.'<br>';
            $i++;
        } ?>
        <br>
    <hr><h3>รูปภาพและไฟล์ข้อมูล</h3>
    <img src="<?php echo base_url().'/picture/'.$image; ?>" width="200" > <br>
    <embed type="application/pdf" src="<?php echo base_url().'/file/'.$file; ?>" width="1000" height="1000"> 

    </body>
</html>