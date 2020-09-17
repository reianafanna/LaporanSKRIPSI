	
<?php

$a=1;

			$hasil = $conn->query("select * from wisata");
			while ( $r = $hasil->fetch()) {

?>
	<div class="col-sm-4" style="background-color: white;margin-bottom: 10px;height: 500px;overflow: hidden;border:1px dashed grey">
        <h3><?php echo $r['nm']?></h3>
        <hr>
        <table class="table table-striped">
        <tr>
        <td>
        <a href="book.php?id=<?php echo $r['id'] ?>" class="btn btn-primary" role="button">Pilih</a>
       <hr>
        <a target="_BLANK" href="admin/data/<?php echo $r['pdf'] ?>" class="btn btn-danger" role="button">Detail</a>

        </td>
            <td><a href="admin/img/<?php echo $r['foto']?>"><img id="gal" src="admin/img/<?php echo $r['foto']?>" class="img img-rounded"  width="250" height="250"></a></td>

        </tr>
                <tr>
                    <td>Lama Tour</td>
                    <td><?php echo $r['lm']?></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><?php echo "IDR ".number_format($r['hrg'])?></td>
                </tr>

                <tr>
                    <td>Deskripsi</td>
                    <td><?php echo substr($r['desc'], 0,100)."....." ?></td>
                </tr>
            </table>    
    </div>		

<?php
			$a++;
			}

?>
