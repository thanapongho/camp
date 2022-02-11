<!DOCTYPE html>
<html>
    <head> 
        <title>แบบสอบถาม</title>
    </head>
    <body>
        <h1>แบบสอบถามข้อมูลนิสิตสาขา SE</h1>
        <hr>
        <h3>1. ข้อมูลส่วนตัว</h3>
            <form method="post" action="<?php echo site_url().'/Student/show_value'; ?>" enctype="multipart/form-data">
            คำนำหน้า <select name="name_title">
                        <option value="นาย">นาย</option>
                        <option value="นาง">นาง</option>
                        <option value="นางสาว">นางสาว</option>
                    </select>
            รหัสนิสิต <input type="number" name="id">
            <br><br>
            ชื่อ <input type="text" name="first_name">
            นามสกุล <input type="text" name="last_name">
            <br><br>
            วันเกิด <input type="date" name="dob">
            อีเมล <input type="email" name="email">
            
            <hr>
            <h3>2. ข้อมูลการเรียน</h3>
            นิสิตชั้นปีที่ <input type="radio" name="year" value="1"> 1
                    <input type="radio" name="year" value="2"> 2
                    <input type="radio" name="year" value="3"> 3
                    <input type="radio" name="year" value="4"> 4
            <br><br>
            มกุล <select name="cluster">
                    <option value="0">Cluster 0</option>
                    <option value="1">Cluster 1</option>
                    <option value="2">Cluster 2</option>
                    <option value="3">Cluster 3</option>
                    <option value="4">Cluster 4</option>
                    <option value="5">Cluster 5</option>
                    <option value="6">Cluster 6</option>
                    <option value="7">Cluster 7</option>
                    <option value="8">Cluster 8</option>
                    <option value="9">Cluster 9</option>
                </select>
            <br><br>
            ภาษาที่ถนัด <br>
                <input type="checkbox" name="code[]" value="C"> C <br>
                <input type="checkbox" name="code[]" value="C++"> C++ <br>
                <input type="checkbox" name="code[]" value="HTML"> HTML <br>
                <input type="checkbox" name="code[]" value="CSS"> CSS <br>
                <input type="checkbox" name="code[]" value="PHP"> PHP <br>
                <input type="checkbox" name="code[]" value="MYSQL"> MYSQL <br>
                <input type="checkbox" name="code[]" value="JS"> JS <br>
            <br><hr>
            <h3>3. รูปภาพและไฟล์ข้อมูล</h3>
            <br>
            รูปภาพนิสิต <input type="file" name="image" accept="image/*">
            <br><br>
            ไฟล์ pdf <input type="file" name="file" accept=".pdf">
            <br><br>
            <hr>
            <input type="reset" value="ยกเลิก">
            <input type="submit" value="บันทึก">
            <br><br>
            </form>
        
    </body>
</html>