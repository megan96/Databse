
.button1 {
		background-color: red;
		border: none;
		color: white;
		padding: 20px 200px;
		display: block;
		font-size: 50px;
		margin: 50px 5px;
		cursor: pointer;
		border-radius: 50px;
		border: 2px solid #e7e7e7;
	}
	.button1:hover {
		background-color: white;
		color: red;
		box-shadow: 0px 12px 300px 0 rgba(0,0,0,0.10),0 17px 50px 0 rgba(0,0,0,0.19);
	}
	.SignInForm {
	
	
		display: none;
		position: fixed;
		top: 0px;
		width: 100%;
		height: 100%;
		overflow: auto;
		padding-top: 60px;
	}
	.closex {
		position:absolute;
		right:1%;
		top:0;
		color:#000;
		font-size:40px;
		font-weight:bold;
		color:red;		
	}
	.SignInFormDetails {
		background-color:white;
		margin: 5% auto 15% auto;
		border: 2px solid #888;
		width: 80%;
	}
	.AnimatedForm {
		animation: animate_zoom 0.4s;
	}
	@keyframes animatezoom {
		from {transform: scale(0)}
		to {transform: scale(1)}
	}
	.container {
		background-color:#fff7f1;
		padding:16px 15px;
		display:block;
		font-size:20px;
		margin:20px 0;
	}
	input[type=text], input[type=password], input[type=email] {
		width: 100%;
		padding: 10px 3px
		display:inline-block;
		margin:12px 0;
		border:2px solid #e5e5e5;
	}
	button {
 		background-color:#cfcfcf;
 		border:none;
 		color:white;
 		padding:5px;
 		margin:20px 0;
 		cursor:pointer;
		width:100%;
 	}
	.cancelButton {
		width:auto;
		padding:5px;
		background-color:red;
		float:left;
		margin: 0;
	}
	span.passwordRecovery {
		float:right;
		padding-top: 5px
	}
	.SignUpForm {
		display: none;
		position: fixed;
		top: 0;
		width: 100%;
		height: 100%;
		overflow: auto;
		padding-top: 20px;
		
	}
	.cancelButton1 {
		background-color:red;
		float:left;
	}
	.signupButton {
		background-color:green;
		float:right;
	}
	.cancelButton1,.signupButton {
  		padding: 20px;
  		width: 50%;
  		margin: 0px -1px 0px -1px;
  		display: inline;
	}
	@media screen and (max-width: 300px) {
		span.passwordRecovery {
		display: inline;
		float: none;
		}
		.cancelButton,.signupButton {
		width: 100%;
		}
	}
