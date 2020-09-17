	
<?php

include_once 'koneksi.php';
include_once 'header.php';





 $id = $_GET['id'];
 $r = $conn->query("select * from wisata where id='$id'")->fetch();

?>
<link href="js/ui/jquery-ui.css" rel="stylesheet">
<form action="book2.php" method="POST">
<input class="form-control" type="hidden" name="tglt" value="<?php echo date('Y-m-d')?>">
<input class="form-control" type="hidden" name="lm" value="<?php echo $r['lm']?>">
<input class="form-control" type="hidden" name="wis" value="<?php echo $r['nm']?>">
	<div class="col-sm-offset-3 col-sm-5">
         <div class="thumbnail">
           <div class="caption">
             <h3><?php echo $r['nm']?></h3>
             <hr>
             <table class="table table-striped">
             <tr>
             	<td>Nama</td>
             		<td><input class="form-control" type="text" name="nm" placeholder="masukan nama"></td>
             </tr>
             <tr>
             	<td>Alamat</td>
             		<td><input class="form-control" type="text" name="al" placeholder="masukan alamat"></td>
             </tr>
             <tr>
             	<td>E-mail</td>
             		<td><input class="form-control" type="text" name="em" placeholder="masukan email"></td>
             </tr>
             <tr>
             	<td>No. Hp</td>
             		<td><input class="form-control" type="text" name="hp" placeholder="masukan hp"></td>
             </tr>
             	<tr>
             		<td>Lama Tour</td>
             		<td><?php echo $r['lm']?></td>
             	</tr>
             	<tr>
             		<td>Harga / pax</td>
             		<td><?php echo "IDR ".number_format($r['hrg'])?></td>
             		 
             		 <input type="hidden" name="id" value="<?php echo $r['id']?>">
             		<input type="hidden" id="hrg" name="hrg" value="<?php echo $r['hrg']?>">
             	</tr>
             	<tr>
             		<td>Tanggal Tour</td>
             		<td><input id="datepicker" name="tglt" class="form-control" placeholder="yyyy-mm-dd" value="<?php echo date('Y-m-d') ?>"></td>
             	</tr>
             	<tr>
             		<td>Jumlah Orang</td>
             		<td>
             		<input type="" name="jml" id="jml" onchange="sisaa()"  class="form-control">
             		</td>
             	</tr>
             	<tr>
             		<td>Total Bayar</td>
             		<td><input class="form-control"  type="text" id="tot" name="tot"></td>
             	</tr>
             </table>
             <label><input type="checkbox" name="conf" required> Saya Bersedia meyetujui persyaratan</label>
             <p><button href="book.php?id=<?php echo $r['id'] ?>" class="btn btn-primary" role="button">Booking</button>
           </div>
         </div>
       </div>		
</form>
                <!-- Templatemo Script -->
      <script>
                    

//    For images only
                $('.flexslider').flexslider({
                      controlNav: false
                });

               

      </script>

<script type="text/javascript">
	
	function sisaa(){

       var a = document.getElementById("hrg").value;
      var b = document.getElementById("jml").value;
      var c = a*b;
      document.getElementById("tot").value=c;
      }

</script>

<script src="js/ui/external/jquery/jquery.js"></script>
<script src="js/ui/jquery-ui.js"></script>
<script>

$( "#accordion" ).accordion();



var availableTags = [
  "ActionScript",
  "AppleScript",
  "Asp",
  "BASIC",
  "C",
  "C++",
  "Clojure",
  "COBOL",
  "ColdFusion",
  "Erlang",
  "Fortran",
  "Groovy",
  "Haskell",
  "Java",
  "JavaScript",
  "Lisp",
  "Perl",
  "PHP",
  "Python",
  "Ruby",
  "Scala",
  "Scheme"
];
$( "#autocomplete" ).autocomplete({
  source: availableTags
});



$( "#button" ).button();
$( "#button-icon" ).button({
  icon: "ui-icon-gear",
  showLabel: false
});



$( "#radioset" ).buttonset();



$( "#controlgroup" ).controlgroup();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
  autoOpen: false,
  width: 400,
  buttons: [
    {
      text: "Ok",
      click: function() {
        $( this ).dialog( "close" );
      }
    },
    {
      text: "Cancel",
      click: function() {
        $( this ).dialog( "close" );
      }
    }
  ]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
  $( "#dialog" ).dialog( "open" );
  event.preventDefault();
});



$( "#datepicker" ).datepicker({
      // changeMonth: true,
      // changeYear: true,
        showButtonPanel: true,
        showMonthAfterYear:true,
      dateFormat: 'yy-mm-dd',
      inline:true
    });



$( "#slider" ).slider({
  range: true,
  values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
  value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
  function() {
    $( this ).addClass( "ui-state-hover" );
  },
  function() {
    $( this ).removeClass( "ui-state-hover" );
  }
);
</script>
