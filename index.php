<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="main col-sm">

    <?php
echo '<div class="row">';
for ($i=0; $i<15;$i++){
    if ($i%3 == 0 && $i != 0){
        echo '</div><div class="row">';
    }
    echo '<div class="column">column '.($i+1).'</div>';

}
echo '</div>';
?>

    <div class="row">
			<div id="yeeky-round-name" class="col-sm">
			หวยยี่กีรอบที่ 
			</div>
			<div id="yeeky-date" class="col-sm">
			
			</div>
		</div>
		<div class="row">
			<div id="yeekee_show_result1" class="col-sm">
			480
			</div>
			<div id="yeekee_show_result2" class="col-sm">
			59
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
                <?php for($i=0;$i<89;$i=$i+1) {  ?>
                <div id="yeekee_block_group" class="btn-group mr-2" role="group" aria-label="First group">
                    <button type="button" id="yeekee_result_<?php echo $i ?>" class="btn btn-secondary yeekee-block"><?php echo $i; ?></button>
                    <input type="hidden" id="yeekee_status_<?php echo $i ?>" value="3"/>
                    <input type="hidden" id="yeekee_result3_<?php echo $i ?>" value="5<?php echo $i ?>"/>
                    <input type="hidden" id="yeekee_result2_<?php echo $i ?>" value="1<?php echo $i ?>"/>
                </div>
                <?php } ?>
			</div>
		</div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
	
    $(document).ready(function () {

		/*$.ajax({
			method: 'GET',
			url: 'https://api.tb8989.net/LineBot/Report/api/getReportAll/yeeky.php',
			success: function (result) {

                var getData = JSON.parse(result);
                console.log(getData);
                /*getData.forEach(element => {
                            const date = new Date(element.round_big)
                            const result = date.toLocaleDateString('th-TH', {year: 'numeric',month: 'long',day: 'numeric', })
                            document.getElementById("yeeky-date").innerHTML = result;

                            /*var table = document.getElementById("yeekytable");
                            var row = table.insertRow(1);
                            var cell1 = row.insertCell(0);
                            var cell2 = row.insertCell(1);
                            var cell3 = row.insertCell(2);
                            cell1.innerHTML = element.round;
                            cell2.innerHTML = element.topthree;
                            cell3.innerHTML = element.towbelow;
                        
                    })//end of foreach 
            }
        });//end of ajax*/

            $(".yeekee-block").click(function (e) {
                $('#yeekee_block_group').find('.yeekee-block').removeClass('yeekee-block-active');
                $('#' + e.target.id).addClass('yeekee-block-active');
                var id = $('#' + e.target.id).html().trim();
                var status = $('#yeekee_status_' + id).val();
                $('#yeekee_name_result').html($('#yeekee_name_' + id).val());
                if (status == '0') {
                    var shtml1 = '<strong class="text-center" style="display: block;font-size:0.85rem;color:#48526E;">ไม่มีรอบ</strong>';
                    var shtml2 = '<strong class="text-center" style="display: block;font-size:0.85rem;color:#48526E;">ไม่มีรอบ</strong>';
                    $('#yeekee_show_result1').html(shtml1);
                    $('#yeekee_show_result2').html(shtml2);
                } else if (status == '1') {
                    var shtml1 = '<strong class="text-center" style="display: block;font-size:0.85rem;color:#b9efb7;">เปิดรอบ</strong>';
                    var shtml2 = '<strong class="text-center" style="display: block;font-size:0.85rem;color:#b9efb7;">เปิดรอบ</strong>';
                    $('#yeekee_show_result1').html(shtml1);
                    $('#yeekee_show_result2').html(shtml2);
                } else if (status == '2') {
                    var shtml1 = '<strong class="text-center" style="display: block;font-size:0.85rem;color:#ffdea2;">รอผล</strong>';
                    var shtml2 = '<strong class="text-center" style="display: block;font-size:0.85rem;color:#ffdea2;">รอผล</strong>';
                    $('#yeekee_show_result1').html(shtml1);
                    $('#yeekee_show_result2').html(shtml2);
                } else if (status == '3') {
                    var shtml1 = '<strong class="lotto-prize-number text-center">' + $('#yeekee_result3_' + id).val() + '</strong>';
                    var shtml2 = '<strong class="lotto-prize-number text-center">' + $('#yeekee_result2_' + id).val() + '</strong>';
                    $('#yeekee_show_result1').html(shtml1);
                    $('#yeekee_show_result2').html(shtml2);
                } 
            });
        });
</script>
</body>
</html>