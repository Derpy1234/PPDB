<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NISN</label>
        <input name="nisn" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama">
       
            <label for="" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" onfocus="this.size=3;" onblur='this.size=1;' onchange='this.size=1; this.blur();' class="form-select" aria-label="Default select example">
                <option selected hidden>Jenis Kelamin</option>
                <option value="cia1">Pria</option>
                <option value="cia2">Wanita</option>
            </select>
       
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">NAMA</label>
        <textarea name="nama" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Tujuan Peminjaman"></textarea>
    </div>
    <div class="d-flex flex-column w-50" >
        <label for="" class="form-label">Asal Sekolah</label>
        <select name="asal_sekolah" onfocus="this.size=3;" onblur='this.size=1;' onchange='this.size=1; this.blur();' class="form-select" aria-label="Default select example">
            <option selected hidden>Asal Sekolah</option>
            <option value="cia1">cia1</option>
            <option value="cia2">cia2</option>
            <option value="cia3">cia3</option>
            <option value="cia4">cia4</option>
            <option value="cia5">cia5</option>
          </select>
    </div>
    <div class="d-flex flex-column w-50">
        <label for="exampleFormControlInput1" class="form-label">EMAIL</label>
        <input name="email" class="form-control" id="exampleFormControlInput1">
    </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">no.hp</label>
        <textarea name="no.hp" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Keterangan Laptop"></textarea>
      </div> 
      <label for="exampleFormControlInput1" class="form-label">no.hp Ayah</label>
      <input name="no.hp ayah" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Teacher Name">
      <label for="exampleFormControlInput1" class="form-label">no.hp ibu</label>
      <input name="no.hp ibu" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Teacher Name">
      <br>
      <button type="submit" class="tombol_login">Kirim</button> 
</form>
</div>
</body>
</html>