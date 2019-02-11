	<!-- Footer -->
	<footer class="w3-container w3-theme-d3 w3-padding-16">
  		<h4 class="text-center">The Pet Network &copy; 2018</h4>
	</footer>
	
	<script>		
	
		// Accordion
		function myFunction(id) {
    		var x = document.getElementById(id);
    		if (x.className.indexOf("w3-show") == -1) {
        		x.className += " w3-show";
        		x.previousElementSibling.className += " w3-theme-d1";
    		} else { 
        		x.className = x.className.replace("w3-show", "");
        		x.previousElementSibling.className = 
        		x.previousElementSibling.className.replace(" w3-theme-d1", "");
    		}
		}

		// Used to toggle the menu on smaller screens when clicking on the menu button
		function openNav() {
    		var x = document.getElementById("navDemo");
    		if (x.className.indexOf("w3-show") == -1) {
        		x.className += " w3-show";
    		} else { 
        		x.className = x.className.replace(" w3-show", "");
    		}
		}
		
		function like(id,user_id, to_user_id, from_username){		

			if(status == 'TRUE'){
				var xhttp = new XMLHttpRequest();
				
				xhttp.open("GET", "helpers/like.php?post_id="+id+"&user_id="+user_id+"&to_user_id="+to_user_id+"&from_username="+from_username, false);
				xhttp.send();			
				document.getElementById("likes"+id).innerHTML = xhttp.responseText;
				document.getElementById("like_button_"+id).style.display = "none";
				document.getElementById("dislike_button_"+id).style.display = "inline";
			} else{
				open_signin_form();
			}
							
			
		}
		
		function dislike(id,user_id){
			var xhttp = new XMLHttpRequest();
			
			xhttp.open("GET", "helpers/dislike.php?post_id="+id+"&user_id="+user_id, false);
			xhttp.send();			
			document.getElementById("likes"+id).innerHTML = xhttp.responseText;
			document.getElementById("like_button_"+id).style.display = "inline";
			document.getElementById("dislike_button_"+id).style.display = "none";
		}
		
		function comment(post_id, user_id){
			var comment_text = document.getElementById("comment").innerHTML ;
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200){
					comment_text = "oK";
					
				}
			};
			xhttp.open("GET", "helpers/comment.php?post_id="+post_id+"&user_id="+user_id+"&comment="+comment_text, true);
			xhttp.send();
			location.reload();
			
		}

		function check_like(post_id, user_id){
			var xhttp = new XMLHttpRequest();
			xhttp.open("GET", "helpers/check_like?post_id="+post_id+"&user_id="+user_id, false);
			xhttp.send();
			if(xhttp.responseText == "true"){
				document.getElementById("like_button_"+post_id).style.display = "none";
				document.getElementById("dislike_button_"+post_id).style.display = "inline";
			}
		}

		function opennn() {
			var status = '<?php echo $_SESSION['login_status']; ?>';
			//alert(status);

			if(status == 'FALSE')
				$("#signInModal").modal();
			
		}

		

	</script>


</body>
</html>