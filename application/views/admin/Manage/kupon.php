

<center>
  <h1><strong>FORM HARGA KUPON</strong></h1>
  <h3>Tambah Kupon</h3>
</center>
<center>
<form onsubmit="return validasi()" class="container" action="<?php echo base_url();?>c_add/tambah_kupon" method="post" >
  <div class="form-group">
    <label for="Kupon">Kupon<font color="red">*</font>:</label>
    <input style="width:200px" class="form-control" type="text"
        placeholder="masukkan jumlah....." id="Kupon" name="kupon" minlength="1" maxlength="4">
  </div>
  <div class="form-group">
    <label for="Lembar">Lembar<font color="red">*</font>:</label>
    <input style="width:200px" class="form-control" placeholder="masukkan jumlah....." type="text" id="Lembar" name="lembar" minlength="1" maxlength="4">
  </div>
  <div class="form-group">
    <label for="harga">Harga<font color="red">*</font>:</label>
    <input style="width:200px" class="form-control" minlength="1" maxlength="7" placeholder="masukkan harga....." id="harga" type="text" name="harga">
  </div>
      <button type="submit" class="btn btn-default btn-lg">Tambah</button>
      <!-- Modal -->
      <script type="text/javascript">
        function validasi() {
          var kupon = document.getElementById("Kupon").value;
          var lembar = document.getElementById("Lembar").value;
          var harga = document.getElementById("harga").value;

          if (kupon!= "" && lembar != "" && harga != "") {
            return true;
          }else{
            alert('Data harus di isi semua');
            return false;
          }
        }
    </script>
</form>
</center>
