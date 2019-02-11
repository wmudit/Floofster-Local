var status = "FALSE";
var u_id = "";
var off = 0;

$(document).ready(function(){

	if(status == 'FALSE')
		document.getElementById("logout_icon").style.display = "none";
    	
});

function flquze2CtYPoA(s, user_id) { // set status
	status = s;
	u_id = user_id;
}

function flekPsH26oAcE(post_id, user_id) { // like	
	if(status == 'FALSE' || user_id == "") {
		$("#registration-login-form-popup").modal();
	}

	else if(status == 'TRUE') {
		//do something (like the post)
		//alert("else if");
		post_id = post_id.trim();
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if(this.readyState == 4 && this.status == 200){
				//alert(this.response.trim());
				if(this.response.trim() == "Liked") {
					var like = document.getElementById(post_id).innerHTML;
					var num = like / 1 + 1;
					document.getElementById(post_id).innerHTML = "" + num;
					var element, name, arr;
					element = document.getElementById(post_id + "_a");
					name = "color-active";
					arr = element.className.split(" ");
					if (arr.indexOf(name) == -1) {
						element.className += " " + name;
					}
					
				} else if(this.response.trim() == "Unliked") {
					var like = document.getElementById(post_id).innerHTML;
					var num = like / 1 - 1;
					document.getElementById(post_id).innerHTML  = "" + num;
					var element = document.getElementById(post_id + "_a");
  					element.className = element.className.replace(/\bcolor-active\b/g, "");
				}
			}
		};
		xhttp.open("GET", "helpers/like.php?post_id=" + post_id + "&user_id=" + user_id, true);
		//xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send();
	}
			
}

function flc69RHjpcq9E() { // update UI on login
	document.getElementById("logout_icon").style.display = "block";
	location.reload();
}

function flXoowiywsLOA() { // login
	var id = document.getElementById("login_email").value;
	var pass = document.getElementById("login_password").value;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200){
			var res = this.response.trim();
			if (res.indexOf("Success") == 0) {
				var id = res.substring(7, 24);
				status = 'TRUE';
				u_id = id;
				$("#registration-login-form-popup").modal('hide');
				flc69RHjpcq9E();
			} else {
				alert(this.response.trim());
				$("#registration-login-form-popup").modal('hide');
			}
					
		}
	};
	xhttp.open("POST", "login.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("email="+id+"&password="+pass); 
	//location.reload();
}

function openPhotoModal() {
	$("#update-header-photo").modal();
}

function flOSw3iH96wHc() { // register
	var fname = document.getElementById("register_fname").value;
	var lname =document.getElementById("register_lname").value;
	var email = document.getElementById("register_email").value;
	var username = document.getElementById("register_username").value;
	var password = document.getElementById("register_password").value;
	var img = document.getElementById("register_img").files[0];
	var gender = document.getElementById("register_gender").value;
	var checkbox = document.getElementById("register_check").value;

	var fd = new FormData();
	fd.append('image',img);
	fd.append('firstName',fname);
	fd.append('lastName',lname);
	fd.append('email',email);
	fd.append('password',password);
	fd.append('username',username);
	fd.append('gender',gender);

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			alert(this.response);
		}
	};
	xhttp.open("POST", "register.php", true);
	//xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	//xhttp.send("firstName="+fname+"&lastName="+lname+"&email="+email+"&password="+password+"&username="+username+"&gender="+gender);
	xhttp.send(fd);
}

function fLfXTH7Ch7t0Q(user_id) {
	var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if(this.readyState == 4 && this.status == 200){
				if(this.response.trim() == "Successful") {
					document.getElementById("logout_icon").style.display = "none";
					flquze2CtYPoA("FALSE");
				} else {
					alert(this.response.trim());
				}
			}
		};
		xhttp.open("GET", "signout.php?user_id=" + user_id, true);
		//xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send();
}

function getSinglePost(id) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			var json = JSON.parse(this.response);
			//alert(json.post.img);
			$("#open-photo-popup-v2").modal();
			document.getElementById("single_post_modal_img").src = json.post.img;
			/*var img = document.getElementById("single_post_modal_img");
			var width = img.naturalWidth;
			var height = img.naturalHeight;
			var ratio = img.naturalWidth/img.naturalHeight;
			alert(ratio);
			if(ratio < 0.80) {
				img.style.height = "-webkit-fill-available";
				img.style.width = "auto";

				var left = document.getElementsByClassName("open-photo-thumb");
				left[0].style.width = "img.clientWidth";
				var right = document.getElementsByClassName("open-photo-content");
				right[0].style.width = "calc(100% - img.clientWidth)";
			}
			var photo = document.getElementsByClassName("photo-item");
			setTimeout(function(){ alert(img.clientWidth + " " + photo[0].width); }, 3000);
*/
		}
	};
	xhttp.open("POST", "getSinglePost.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id="+id);
}

function singlePost(id) {
	var form = document.createElement("form");
    form.setAttribute("method", "get");
    form.setAttribute("action", "post.php");

    var params = {id: ''+ id};
    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
         }
    }

    document.body.appendChild(form);
    form.submit();
}