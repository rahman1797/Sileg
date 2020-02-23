<table class="container" style="margin:30px auto;" border="1">
    <tr>
      <th><center>No</center></th>
      <th><center>kupon</th>
      <th><center>Lembar</th>
      <th><center>Harga(Rp)</th>
      <th><center>Aksi</th>

    </tr>
    <?php
    $no = 1;
    foreach($kupon as $k){
    ?>
    <tr>
      <td><center><?php echo $no++ ?></td>
      <td><center><?php echo $k->kupon ?></td>
      <td><center><?php echo $k->lembar ?></td>
      <td><center><?php echo $k->harga ?></td>

      <td><center>
            <?php echo anchor('c_main/edit_kupon/'.$k->id_kupon,'Edit'); ?> |
            <?php echo anchor('c_main/hapus_kupon/'.$k->id_kupon,'Hapus'); ?>
      </td>
    </tr>
    <?php } ?>
  </table>
