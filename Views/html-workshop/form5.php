<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <form name="register">
        <h2>แบบสอบถามข้อมูลส่วนบุคคล</h2>
        <hr size="1"/>
        สัตว์เลี้ยงที่ชอบมากที่สุด : <select name="prefix">
            <option value="1"selected> นาย </option>
            <option value="2"> นาง </option>
            <option value="3"> นางสาว </option>
            </select> </br></br>
        ชื่อ <input type="text" name="Fname" value="" maxlength="5" /> 
        นามสกุล <input type="text" name="Lname" value="" maxlength="5" /> </br></br>
        วันเกิด <input type="date" name="email" value=""  /> </br></br>
        รหัสนิสิต <input type="number" name="age" value="" size="8"></br></br>
        อีเมล <input type="email" name="email" value=""  /> </br></br>
        รหัสผ่าน <input type="password" name="password" value="" /> </br></br>
        <hr size="1"/>
        คณะ <select name="faculty" disabled>
            <option value="1"> คณะแพทยศาสตร์ </option>
            <option value="2"> คณะพยายาลศาสตร </option>
            <option value="3"selected> คณะวิทยาการสารสนเทศ </option>
            </select> </br></br>
        นิสิตชั้นปีที่ <select name="nisit" disabled>
            <option value="1"selected> 2 </option>
            </select> </br></br>
        มกุล </br> <input type="Radio" name="cluster" value="0-3"> Cluster 0 - Cluster 3 </br>
        <input type="Radio" name="cluster" value="4-6"> Cluster 4 - Cluster 6 </br>
        <input type="Radio" name="cluster" value="7-9"> Cluster 7 - Cluster 9 </br></br>
        ภาษาที่ถนัด : </br> <input type="checkbox" name="HTML" value="HTML"> HTML </br>
        <input type="checkbox" name="CSS" value="CSS"> CSS </br>
        <input type="checkbox" name="CSS" value="MySQL"> MySQL </br>
        <input type="checkbox" name="CSS" value="JS"> JS </br>
        <input type="checkbox" name="PHP" value="PHP"> PHP </br> </br>
        <input type="submit" value="ยกเลิก"> <input type="submit" value="บันทึก">
        
    </form>
</body>

</html>