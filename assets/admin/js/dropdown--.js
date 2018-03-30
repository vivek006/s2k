
$(document).ready(function() {
	var base=window.location.orgin;
	alert(base);
//-------get city name list----------
$('#state_id').change(function(){
    var state_id = this.value;
	$.ajax({
        url:'<?php echo base_url();?>admin/ajaxResult/'+state_id+'/city',
        success:function(data){
			$("#city_id").html(data);
        }
    });
})
//-------get state name list----------

$(window).load(function() {
    var country_id = 1;
	
	$.ajax({
        url:'<?php echo base_url();?>agency/ajaxResult/'+country_id+'/state',
        success:function(data){
			//alert(data);
			$("#state_id").html(data);
        }
    });
});
})
