$( document ).ready( function() {
	var raptorArray = $.csv.toArrays( 'permdata.csv' );
	$.each(raptorArray, function(index, val) {
    console.log(val.category);
	});
});