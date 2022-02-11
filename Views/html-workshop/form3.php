<!DOCTYPE html>
<html>
    <head> 
    </head>
        <body>
            <form name="register" >
                ชื่อผู้ฉีดวัคซีน : 
                <br>
                <input type="text" name="branch" size="10" />
                <br><br>
                ความรู้สึกฉันตอนนี้ :
                <br>
                <textarea name="feelNOW" rows="4" > </textarea>
                <br><br>    
                <input type="Radio" name="feel" value="good"> โขคดี 
                <br>
                <input type="Radio" name="feel" value="bad"> โชคร้าย
                <br>
                <input type="Radio" name="feel" value="okay"> ยอมรับในโชคชะตา
                <br><br>
                <input type="checkbox" name="confirm" required> ยืนยันข้อมูล
                <br><br>
                <input type="submit"  value="ยกเลิก">
                <input type="submit"  value="ยืนยัน">
            </form>
        </body>
</html>