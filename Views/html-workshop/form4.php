<!DOCTYPE html>
<html>
    <head> 
    </head>
        <body>
            <form name="register" >
                ชื่อจริง : 
                <br>
                <input type="text" name="Fname" value="ชาคริต" size="10" readonly/>
                <br>
                นามสกุล :
                <br>
                <input type="text" name="Lname" value="บุญประเสริฐ" size="10" disabled/>
                <br>
                Email :
                <br>
                <input type="text" name="email" size="50" />
                <br>
                PIN :
                <br>
                <input type="password" name="PIN" size="4" maxlength="4" />
                <br><br>

                อายุ :
                <input type="number" name="age" min="1" max="30">
                
                
                <br><br>
                <input type="submit"  value="ยกเลิก">
                <input type="submit"  value="ยืนยัน">
            </form>
        </body>
</html>