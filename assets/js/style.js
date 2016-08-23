$(document).ready(function(){
	$('.paper_id').hide();
});
function id_paper(){
	var a = $('#category option:selected').val();
	if (a=="2")
		$('.paper_id').slideDown();
	else if (a=="1")
		$('.paper_id').slideUp();
	else 
		$('.paper_id').slideUp();
}	
$("select#category").change(id_paper);