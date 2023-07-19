console.log('ajax_jquery js');

// https://api.jquery.com/jquery.ajax/
// https://www.w3schools.com/jquery/jquery_ref_ajax.asp


// dataType is Content-Type header of the response
// contentType (default: 'application/x-www-form-urlencoded; charset=UTF-8')

// Promise callbacks — .done(), .fail(), .always(), and .then() — are invoked, in the order they are registered.

$.get(URL,data,function(data,status,xhr),dataType)

$.getJSON(url,data,success(data,status,xhr))

$.post(URL,data,function(data,status,xhr),dataType)


$.ajax({
	url : "http://example.com/post.php",
	type : "POST",
	data : data,
	dataType : 'text || html || xml || json || jsonp || script'
	success : function(data,status,xhr){

	},
	error : function(a,b,c){

	}
});

$.ajax({
  method: "GET",
  url: "test.js",
  dataType: "script"
});

$.ajax({
  url: "script.php",
  method: "POST",
  data: { id : menuId },
  dataType: "html"
});
 

$.ajax({
  url: "script.php",
  method: "POST",
  data: { id : menuId },
  dataType: "html"
})
.done(function( msg ) {
  $( "#log" ).html( msg );
})
.fail(function( jqXHR, textStatus ) {
  alert( "Request failed: " + textStatus );
});