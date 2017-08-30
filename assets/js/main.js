function formatNumberIndonesiaTd(){
	var items = $("td.number")
	$.each(items,function (index,item) {
		var floatNilai = parseFloat($(item).text());
		if( !floatNilai){ //Jika bukan angka, jangan di format
			$(item).html($(item).text());
		}else{
			$(item).html(accounting.formatNumber(parseFloat($(item).text()), 2, ".", ","));
		}
	});
}
