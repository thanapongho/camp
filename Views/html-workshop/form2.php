<!DOCTYPE html> <html>
    <head>
        <title>form2</title>
    </head>
        <body>
            <form name="register" >
                เรียนอยู่สาขา : 
                <br>
                <input type="text" name="branch" size="10" />
                <br><br>
                สัตว์เลี้ยงที่ชอบมากที่สุด : 
                <select name="FPet">
                    <option value="1"> แมว </option>
                    <option value="2"> หมา </option>
                    <option value="3"> ผีเสื้อ </option>
                </select>
                <br><br>
                ข้อเสนอแนะ :
                <br>
                <textarea name="feedback" rows="4" > </textarea>
                <br><br>
                <input type="submit"  value="ยกเลิก">
                <input type="submit"  value="ยืนยัน">
            </form>
        </body>
</html>