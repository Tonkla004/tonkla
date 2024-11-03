<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ฟอร์มผู้ส่ง</title>
    <style>
        body {
            background-color: #ff4d4d;  /* Red background */
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 900px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }
        h2 {
            text-align: center;
            color: #0d6efd;  /* Blue text */
            margin-bottom: 20px;
        }
        .form-label {
            color: #0d6efd;  /* Blue text for labels */
        }
        .form-control {
            background-color: white;  /* White input fields */
        }
    </style>
</head>
<body>
    <div class="container">
    <center> <img src=thaipost.jpg>
        <h2>ข้อมูลผู้ส่ง</h2>
        <form class="row g-3">
            <!-- Horizontal layout for Receiver's Details -->
            <div class="col-md-6">
                <label for="namerub" class="form-label">ชื่อผู้ส่ง</label>
                <input type="text" class="form-control" id="namerub" placeholder="ชื่อ" required>
            </div>
            <div class="col-md-6">
                <label for="lastname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="lastname" placeholder="นามสกุล" required>
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">เบอร์โทร</label>
                <input type="tel" class="form-control" id="phone" placeholder="xxx-xxx-xxxx" required>
            </div>
            <div class="col-md-6">
                <label for="province" class="form-label">จังหวัด</label>
                <select class="form-select" id="province" required onchange="updateDistricts()">
                    <option selected disabled value="">เลือกจังหวัด</option>
      <option>ราชบุรี</option>
      <option>เชียงใหม่</option>
      <option>นครราชสีมา</option>
      <option>กาญจนบุรี</option>
      <option>ตาก</option>
      <option>อุบลราชธานี</option>
      <option>สุราษฎร์ธานี</option>
      <option>ชัยภูมิ</option>
      <option>แม่ฮ่องสอน</option>
      <option>เพชรบูรณ์</option>
      <option> ลำปาง	</option>
      <option>อุดรธานี	</option>
      <option>เชียงราย	</option>
      <option>น่าน	</option>
      <option>เลย	</option>
      <option>ขอนแก่น	</option>
      <option>	พิษณุโลก	</option>
      <option>	บุรีรัมย์	</option>
      <option>นครศรีธรรมราช	</option>
      <option>สกลนคร	</option>
      <option>นครสวรรค์</option>
      <option>ศรีสะเกษ	</option>
      <option>กำแพงเพชร	</option>
      <option>ร้อยเอ็ด	</option>
      <option>สุรินทร์</option>
      <option>อุตรดิตถ์	</option>
      <option>สงขลา	</option>
      <option>สระแก้ว	</option>
      <option>กาฬสินธุ์	</option>
      <option>อุทัยธานี	</option>
      <option>สุโขทัย	</option>
      <option>	แพร่	</option>
      <option>ประจวบคีรีขันธ์	</option>
      <option>จันทบุรี	</option>
      <option>พะเยา	</option>
      <option>เพชรบุรี</option>
      <option>ลพบุรี	</option>
      <option>ชุมพร	</option>
      <option>นครพนม	</option>
      <option>	สุพรรณบุรี	</option>
      <option>มหาสารคาม	</option>
      <option>ฉะเชิงเทรา	</option>
      <option>ตรัง	</option>
      <option>	ปราจีนบุรี	</option>
      <option>	กระบี่</option>
      <option>พิจิตร	</option>
      <option>ยะลา	</option>
      <option>อลำพูน	</option>
      <option>นราธิวาส	</option>
      <option>ชลบุรีอ</option>
      <option>มุกดาหาร	</option>
      <option>	บึงกาฬ	</option>
      <option>	พังงา	</option>
      <option>	ยโสธร</option>
      <option>	หนองบัวลำภู	</option>
      <option>	สระบุรี	</option>
      <option>	ระยอง	</option>
      <option>	พัทลุง	</option>
      <option>	ระนอง	</option>
      <option>	อำนาจเจริญ	</option>
      <option>	หนองคาย</option>
      <option>	ตราด	</option>
      <option>	พระนครศรีอยุธยา	</option>
      <option>	สตูล</option>
	    <option>ชัยนาท	</option>
      <option>	นครปฐม	</option>
	    <option>นครนายก	</option>
	    <option>ปัตตานี	</option>
	    <option>กรุงเทพมหานคร	</option>
      <option>	ปทุมธานี	</option>
	    <option>สมุทรปราการ	</option>
	    <option>อ่างทอง</option>
      <option>	สมุทรสาคร	</option>
	    <option>สิงห์บุรี	</option>
	    <option>นนทบุรี	</option>
      <option>	ภูเก็ต	</option>
	    <option>สมุทรสงคราม</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="district" class="form-label">อำเภอ</label>
                <select class="form-select" id="district" required onchange="updateSubdistricts()">
                    <option selected disabled value="">เลือกอำเภอ</option>
                    <option>อำเภอเมืองราชบุรี</option>
                    <option> อำเภอจอมบึง</option>
                    <option> อำเภอสวนผึ้ง</option>
                    <option> อำเภอดำเนินสะดวก</option>
                    <option> อำเภอบ้านโป่ง</option>
                    <option> อำเภอบางแพ</option>
                    <option>อำเภอโพธาราม</option>
                    <option> อำเภอปากท่อ</option>
                    <option> อำเภอวัดเพลง</option>
                    <option> อำเภอบ้านคา</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="subdistrict" class="form-label">ตำบล</label>
                <select class="form-select" id="subdistrict" required>
                    <option selected disabled value="">เลือกตำบล</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="house_number" class="form-label">บ้านเลขที่</label>
                <input type="text" class="form-control" id="house_number" placeholder="บ้านเลขที่" required>
            </div>
            <div class="col-md-6">
                <label for="postal_code" class="form-label">รหัสไปรษณีย์</label>
                <input type="text" class="form-control" id="postal_code" placeholder="รหัสไปรษณีย์" required>
            </div>
            <div class="col-md-12">
                <label for="address" class="form-label">รายละเอียดที่อยู่ </label>
                <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">เช่น ซอย,ถนน,หมู่,ชื่อหมู่บ้าน</label>
</div>
            </div>
            <div class="col-md-6">
                <label for="orderdate" class="form-label">วันที่ส่ง</label>
                <input type="date" id="orderdate" name="daterub" class="form-control" required>
            </div>
            <div class="col-md-12 text-center mt-4">
                <button class="btn btn-primary" type="submit">บันทึกข้อมูล</button>
                <button class="btn btn-secondary" type="button" onclick="location.href='xfrom.php'">ไปที่ฟอร์มผู้รับ</button>
            </div>
        </form>
    </div>
    <center> <img src=tyu.jpg>
</body>
</html>