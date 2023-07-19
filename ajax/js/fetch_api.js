console.log('fetch api js');



(function(){
	getUserData();
})();


function formSubmit(e){
	e.preventDefault();
	let formData = new FormData(e.target); // return FormData type

	// we can use Array.from() method to get array of objects
	// let arrFormData = Array.from(formData);
	// console.log(arrFormData);

	// we can user Object.fromEntries() method
	let objFormData = Object.fromEntries(formData.entries());
	// console.log(objFormData);

	// $_POST in PHP will recognize the only the form data (application/x-www-form-urlencoded or multipart/form-data) 
	// with a specified content type header

	let postOptions = {
		method : "POST",
		headers: {"Content-type": "application/x-www-form-urlencoded; charset=UTF-8"},
		body: JSON.stringify(objFormData),
	};

	fetch('http://localhost/ajax/post.php', postOptions)
    .then(response => {
    	return response.json();
	})
    .then(json => {
    	console.log(json);
    	alert('user created successfully');
    	getUserData();
    })
    .catch(error => {
    	console.log('error reached');
    	console.log(error); 
	});

}

function getUserData(){
	fetch('http://localhost/ajax/get-users-data.php', {})
	.then(response => response.json())
	.then(json => getUserTableData(json))
	.catch(error => console.log(error));
}


function getUserTableData(data){
	let userTableHtml =  "";
	// console.log(typeof data); //object
	data.map(ele => {
		userTableHtml += `<tr>
							<td>${ele.name}</td>
							<td>${ele.password}</td>
							<td>${ele.gender}</td>
			    		</tr>`;
	});
	document.querySelector('tbody#user-data').innerHTML = userTableHtml;
}