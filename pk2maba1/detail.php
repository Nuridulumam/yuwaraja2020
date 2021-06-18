<?php
    include "connect.php";
    if($_POST['idx']) {
        $id = $_POST['idx'];      
        $sql = mysql_query("SELECT * FROM cluster1 WHERE nim = '$id'");
        while ($result = mysql_fetch_array($sql)){
		?>
        <form action="" method="post">
            
            <div class="form-group">
                <label>Kesalahan Maba :</label>
                 <textarea name="pesan" class="form-control"><?php echo $sql['keterangan']; ?></textarea>
            </div>
            
              <button class="btn btn-primary" type="submit">Update</button>
        </form>     
        <?php } }
?>