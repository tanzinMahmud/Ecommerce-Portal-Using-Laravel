$(function(){
	// alert('present');

});

function searchProduct(e,f) {
	console.log(f);
	if (e==='') {
		$('#mainDiv').show();
		$('#appendDiv').empty();
	}else{
		$.get('search/'+e,function(data) {
		var d = $.parseJSON(data);
		//console.log(d);
		$('#mainDiv').hide();
		$('#appendDiv').empty();
		if ($.isEmptyObject(d)) {
			$('#appendDiv').append('<div class="well text-center row">No Product Found</div>');
		}
		else {
			$.each(d,function(i,v){
				//console.log(v);
				$('#appendDiv').append('<div class="col-md-3 col-sm-6">'+
						                  '<span class="thumbnail">'+
						                      '<img style="height:220px; width:220px; margin:auto;display: block;padding: 20px;" src="'+f+'/'+v["img_path"]+'" alt="...">'+
						                      '<h4>'+v["title"]+'</h4>'+
						                      '<div class="ratings">'+
						                              '<span class="glyphicon glyphicon-star"></span>'+
						                              '<span class="glyphicon glyphicon-star"></span>'+
						                              '<span class="glyphicon glyphicon-star"></span>'+
						                              '<span class="glyphicon glyphicon-star"></span>'+
						                              '<span class="glyphicon glyphicon-star-empty"></span>'+
						                          '</div>'+
						                      '<p>'+v["short_desc"]+'</p>'+
						                       '<p>Stock: '+v["stock"]+'</p>'+
						                      '<hr class="line">'+
						                      '<div class="row">'+
						                        '<div class="col-md-6 col-sm-6">'+
						                          '<p class="price">$ '+v["price"]+'</p>'+
						                        '</div>'+
						                        '<div class="col-md-6 col-sm-6">'+
						                         '<a href="user/cart/'+v["id"]+'">	<button class="btn btn-info right" > BUY ITEM</button></a>'+
						                        '</div>'+

						                      '</div>'+
						                  '</span>'+
						                '</div>');
			});
		}

	});
	}
}