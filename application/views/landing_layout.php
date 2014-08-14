<!DOCTYPE html>
<html>
<head>
	<title>Jamia Connect</title>
	<style type="text/css">
		body {
	      text-align: center;
	      /*background: url("http://dash.ga.co/assets/anna-bg.png");*/
	      background: url("/jmiconnect/assets/images/bg.png");
	      background-size: cover;
	      background-position: center;
	      color: white;
	      font-family: helvetica;
	      height: 100%;
    	}
    	p {
    		font-size: 20px;
    	}
    	input {
    		-webkit-transition: all 0.30s ease-in-out;
			-moz-transition: all 0.30s ease-in-out;
			-ms-transition: all 0.30s ease-in-out;
			-o-transition: all 0.30s ease-in-out;
			border: 0;
    		padding: 10px;
    		margin-left: 5px;
			outline: none;
			border: 0px solid #DDDDDD;
    	}
    	input:focus {
		    abox-shadow: 0 0 9px rgba(81, 203, 238, 1);
		    box-shadow: 0 0 5px 1.50px rgba(255,0,0,1);
		    border: 0px solid rgba(81, 203, 238, 1);
		}
    	input[type="submit"] {
    		background: red;
    		color: white;
    	}
    	.center-align {
    		position: relative;
			top: 50%;
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(100%);
    	}
	</style>
</head>
<body>
	<div class="center-align">
		<h1>Welcome to Jamia Connect</h1>
		<p>A place to get in touch, collaborate and share with JMI'tes</p>
		<form>
			<input type="email" placeholder="Email" name="email" autofocus>
			<input type="password" placeholder="Password" name="password">
			<input type="submit" name="submit" value="Login">
		</form>
	</div>
</body>
</html>