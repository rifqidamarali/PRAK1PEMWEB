<html>
<head>
<style>	
@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
body {
				background: #ecf0f1 ;
			}
			.container > header h1,
			.container > header h2 {
				color: black;

}

*:after,
*:before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -o-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}

.form-4 {
    /* Size and position */
    width: 300px;
    margin: 60px auto 30px;
    padding: 10px;
    position: relative;

    /* Font styles */
    font-family: 'Raleway', 'Lato', Arial, sans-serif;
    color: white;
    text-shadow: 0 2px 1px rgba(0,0,0,0.3);
}

.form-4 h1 {
    font-size: 22px;
    padding-bottom: 20px;
}

.form-4 input[type=text],
.form-4 input[type=password] {
    /* Size and position */
    width: 100%;
    padding: 8px 4px 8px 10px;
    margin-bottom: 15px;

    /* Styles */
    border: 1px solid #4e3043; /* Fallback */
    border: 1px solid rgba(78,48,67, 0.8);
    background: rgba(0,0,0,0.15);
    border-radius: 2px;
    box-shadow: 
        0 1px 0 rgba(255,255,255,0.2), 
        inset 0 1px 1px rgba(0,0,0,0.1);
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;

    /* Font styles */
    font-family: 'Raleway', 'Lato', Arial, sans-serif;
    color: #fff;
    font-size: 13px;
}

/* Placeholder style (from http://stackoverflow.com/questions/2610497/change-an-inputs-html5-placeholder-color-with-css) */

.form-4 input::-webkit-input-placeholder {
    color: rgba(37,21,26,0.5);
    text-shadow: 0 1px 0 rgba(255,255,255,0.15);
}

.form-4 input:-moz-placeholder {
    color: rgba(37,21,26,0.5);
    text-shadow: 0 1px 0 rgba(255,255,255,0.15);
}

.form-4 input:-ms-input-placeholder {
    color: rgba(37,21,26,0.5);
    text-shadow: 0 1px 0 rgba(255,255,255,0.15);
}

.form-4 input[type=text]:hover,
.form-4 input[type=password]:hover {
    border-color: #333;
}

.form-4 input[type=text]:focus,
.form-4 input[type=password]:focus,
.form-4 input[type=submit]:focus {
    box-shadow: 
        0 1px 0 rgba(255,255,255,0.2), 
        inset 0 1px 1px rgba(0,0,0,0.1),
        0 0 0 3px rgba(255,255,255,0.15);
    outline: none;
}

/* Fallback */
.no-boxshadow .form-4 input[type=text]:focus,
.no-boxshadow .form-4 input[type=password]:focus {
    outline: 1px solid white;
}

.form-4 input[type=submit] {
    /* Size and position */
    width: 100%;
    padding: 8px 5px;
    
    /* Styles */
    background: white;

    background: -webkit-gradient(linear, 0 0, 0 100%, from(rgba(99,64,86,0.5)), to(rgba(76,49,65,0.7)));
    background: -webkit-linear-gradient(rgba(99,64,86,0.5), rgba(76,49,65,0.7));
    background: linear-gradient(rgba(99,64,86,0.5), rgba(76,49,65,0.7));    
    border-radius: 5px;
    border: 1px solid #4e3043;
    box-shadow: inset 0 1px rgba(255,255,255,0.4), 0 2px 1px rgba(0,0,0,0.1);
    cursor: pointer;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;

    /* Font styles */
    color: white;
    text-shadow: 0 1px 0 rgba(0,0,0,0.3);
    font-size: 16px;
    font-weight: bold;
    font-family: 'Raleway', 'Lato', Arial, sans-serif;
}

.form-4 input[type=submit]:hover {
    box-shadow: 
        inset 0 1px rgba(255,255,255,0.2), 
        inset 0 20px 30px rgba(99,64,86,0.5);
}

/* Fallback */
.no-boxshadow .form-4 input[type=submit]:hover {
    background: #594642;
}

.form-4 label {
    display: none;
    padding: 0 0 5px 2px;
    cursor: pointer;
}

.form-4 label:hover ~ input {
    border-color: #333;
}

.no-placeholder .form-4 label {
    display: block;
}

</style>
<body>
    <div class = "container">
        	<section class="main">
				<form class="form-4" action="hasilform.php" method="POST">
				    <h1 style="color: black;">Login</h1>
				    <p>
				        <label for="login">Username or email</label>
				        <input type="text" name="uname" placeholder="Username or email" required>
				    </p>
				    <p>
				        <label for="password">Password</label>
				        <input type="password" name='pwd' placeholder="Password" required> 
				    </p>

				    <p>
				        <input type="submit" name="submit" value="Go">
				    </p>       
				</form>​
			</section>
<!--
<form action="hasilform.php" method="POST">
Uname: <input type="text" name="uname"> <br>
Pwd: <input type="password" name="pwd"> <br>
<input type ="submit" value="Enter">
</form>-->

</div>
</body>
</head>
</html>