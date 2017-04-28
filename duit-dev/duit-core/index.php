<!-- MAIN PRODUCT PAGE HERE -->


<!DOCTYPE html>
<html>
<head>
<title>DUiT</title>

<script src="https://www.gstatic.com/firebasejs/3.7.5/firebase.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<style>
table, th, td{
	border: 1px solid black;
}

.hide {
	display: none;
}

.login_form{
	/*display: absolute;*/
	width: 500px;
    /* height: 100px; */
    margin: 0 auto;
}
</style>


</head>
<body>


<h1>DUiT</h1>


	<div class="container">

	<div class="login_form hide">
		Email: <input id="txtEmail" type = "email" placeholder="Email"><br>

		Password: <input id="txtPassword" type="password" placeholder="Password"><br>

		Display Name:<input id="user_name" type="text" placeholder="Du Name" value="test"><br>

		<button id="btnLogin" class="btn btn-action">Login</button>

		<button id="btnSignUp" class="btn btn-secondary">Sign Up</button>
	</div>

	<button id="btnLoginDisplay" class="btn btn-action">Login</button>

	<button id="btnLogout" class="btn btn-action hide">Log out</button>

	<button id="btnDisplayDus" class = "btn btn-action">Display</button>
	<button id="btnDisplayUsers" class = "btn btn-action">Display Users</button>
	<button id="btnDisplayTags" class = "btn btn-action">Display Tags</button>

	<button id="btnAddDu" class = "btn btn-action">Add Task</button>

	<div>
	Name:<input id="du_name" type="text" placeholder="Du Name" value="test">
	Note:<input id="du_note" type="text" placeholder="Note">
	Time Start:<input id="du_time_start" type="date" placeholder="mm/dd/yyyy">
			   <input id="du_time_start_time" type="time" = placeholder="00:00 (24 hour time)">
	Time End:<input id="du_time_end" type="date" placeholder="mm/dd/yyyy">
			 <input id="du_time_end_time" type="time" = placeholder="00:00 (24 hour time)">
	Deadline Date:<input id="du_time_deadline" type="date" placeholder="mm/dd/yyyy">
			      <input id="du_time_deadline_time" type="time" = placeholder="00:00 (24 hour time)">
	Status:
	<select id="du_status">
		<option value="Open">Open</option>
		<option value="Active">Active</option>
		<option value="Completed">Completed</option>
	</select>
	Priority:
	<select id="du_priority">
		<option value="none"> </option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
	</select>
	Tags:
	<input id="txtTags" type="text" placeholder="Tags">

	</div>



	</div>

<!-- Code meant for testing add user internally, this function is never called outside of this -->
<!-- 	<div>
		Display Name:<input id="user_name" type="text" placeholder="Du Name" value="test">
		<button id="btnAddUser" class = "btn btn-action">Add User</button>
	</div> -->

	<div>
		Tag Name:<input id="tag_name" type="text" placeholder="Tag Name" value="test">
		Tag Note:<input id="tag_note" type="text" placeholder="Tag Note" value="test">
		<button id="btnAddTag" class = "btn btn-action">Add Tag</button>
	</div>

	<div class="responseContainer">
	</div>


<script src="js/app.js"></script>

</body>
</html>