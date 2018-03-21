
/**********************************************************************************
***************************this function is should be *****************************
***************************called in every custom-{pagename}.js********************
***************************fetches store essential that will modal page************
***************************and will put the data to Replace holders****************
************************************************************************************/
	
function initStoreFromServer(callback){

	var storeName = decodeURI();
	
	if(storeName !== null)
	{
		var url = "/apies/store/get/"+storeName['name'];
	}
	else
	{
		window.location= "index.php";
	}
	$.ajax({
		type: "GET",
		url: url,
		dataType : 'JSON',
		success:function(Response)
		{					
			
			obj = JSON.parse(JSON.stringify(Response));

			if(obj.result)
			{
				//static
				$('.copyrightR').html('©'+(new Date()).getFullYear()+' All Rights Reserverd. '+obj.store.name+' Store with <i class="fa fa-heart-o" aria-hidden="true"></i> from <a href="#">B2C!</a>');

				$('#strNameR').text(obj.store.name);
				
				$('.phoneR').html('<a href="tel:'+obj.store.contact.phone+'">'+obj.store.contact.phone+'</a>');
				
				$('.emailR').html('<a href="mailto:'+obj.store.contact.email+'">'+obj.store.contact.email+'</a>');
				//static



				//address
				var addString = obj.store.address.adt_addressline1 + ' , ' +
								obj.store.address.adt_addressline2 + '<br>' +
								obj.store.address.adt_city + ' , '+
								obj.store.address.adt_state + '<br>'+
								obj.store.address.adt_pincode; 
				
				$('.addressR').html(addString);
				//address

				//social Links
				sobj = obj.store.socialLinks;
				
				for (var key in sobj) {
					var str = '<li><a href="'+sobj[key]+'"><i class="fa fa-'+key+'" aria-hidden="true"></i></a></li>';
					$('.socialLinksR').append(str);		
<<<<<<< HEAD
					console.log("dsg");			
=======
>>>>>>> a933f7dd1da827bb716886856cfacd309139f288
				}
				//social Links

				//categories
				var catLiAppend = "";
				obj.categories.forEach(function(item,i){
					catLiAppend = '<li><a href="store?name='+obj.store.name+'&catid='+item.category_id+'">'+item.cat_name+'</a></li>';
					$('#lg-cat-drpdowns').append(catLiAppend);
					$('#md-str-catholder').append(catLiAppend);
				});
				//categories
				callback(obj.store);
			}
			else
			{
				window.location = "index.php";
			}
		}     
	});
}

function getNewArrivals(store)
{
	$.ajax({
		type: "GET",
		url:"/apies/store/product/"+store.merchant_id+"/recent",
		dataType : 'JSON',
		success:function(Response)
		{					
			obj = JSON.parse(JSON.stringify(Response));

			if(obj.result)
			{
				obj.products.forEach(function(item){	
					var images = item['images'];
					$('#arrival-prdct-grid').append('<div class="product-item col-md-4 col-xs-2 col-sm-3 clearfix">\
														<div class="product discount product_filter">\
															<div class="product_image">\
																<img src="/apies/'+images.img_dir+images.img_name+'" alt="">\
															</div>\
															<div class="favorite favorite_left"></div>\
															<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>\
															<div class="product_info">\
																<h6 class="product_name"><a href="store?name='+store.name+'&pid='+item.product_id+'">'+item.p_name+'</a></h6>\
																<div class="product_price"><span>'+item.p_price+'</span></div>\
															</div>\
														</div>\
														<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>\
													</div>'
													);	
				});
			}
			else
			{

			}
		}     
	});	
}



function decodeURI(){
	var serializedArray = [];
	var suburl = document.location.toString().split('?');
	var params = [];


	if(suburl.length > 1)
	{
		params = suburl[1].split('&');

		if(params.length > 0)
		{
			params.forEach(function(item,i){
				var meta = item.split('=');
				serializedArray[meta[0]] = meta[1];	
			});

			if(!serializedArray)
			{
				return null;
			}
		}
		else
		{
			return null;
		}
	}
	else
	{
		return null;
	}

	return serializedArray;
}

