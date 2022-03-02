<br>
			<div class="user_card">
				<div class="d-flex justify-content-center form_container">
				    <h2 style="margin: 0 0 30px;padding: 0;color: #fff;text-align: center;">Connexion</h2>
					<?= $this->Form->create(); ?>
					<label>E-mail</label>
					<?= $this->Form->input('email',array('type' => 'input_user')); ?>
					<label>Mot de passe</label>
					<?= $this->Form->input('password', array('type' => 'password')); ?>
					
				</div>
				<div class="d-flex justify-content-center mt-3 login_container">
				<?= $this->Form->submit('Se Connecter', array('class' => 'button')); ?>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<?= $this->Form->end(); ?>
		


		<style>
		html {
			height: 100%;
			}
			body {
			margin:0;
			padding:0;
			font-family: sans-serif;
			background: linear-gradient(#141e30, #243b55);
			}
		.user_card {
			position: absolute;
			top: 50%;
			left: 50%;
			width: 400px;
			padding: 40px;
			transform: translate(-50%, -50%);
			background: rgba(0,0,0,.5);
			box-sizing: border-box;
			box-shadow: 0 15px 25px rgba(0,0,0,.6);
			border-radius: 10px;
            top: 300px;
		}
		.form_container{
			position: relative;
		
		}
		.form_container label{
			left: 0;
			padding: 10px 0;
			font-size: 16px;
			color: #fff;
			pointer-events: none;
			transition: .5s;
		}
		

		
		.form_container input {
			width: 100%;
			padding: 10px 0;
			font-size: 16px;
			color: #fff;
			margin-bottom: 30px;
			border: none;
			border-bottom: 1px solid #fff;
			outline: none;
			background: transparent;
		}

		.button {
			position: relative;
			display: inline-block;
			padding: 10px 20px;
			font-size: 16px;
			text-decoration: none;
			text-transform: uppercase;
			overflow: hidden;
			transition: .5s;
			margin-top: 40px;
			letter-spacing: 4px
			}

			.button:hover {
			background: #03e9f4;
			color: #000;
			border-radius: 5px;
			box-shadow: 0 0 5px #03e9f4,
						0 0 25px #03e9f4,
						0 0 50px #03e9f4,
						0 0 100px #03e9f4;
			}

		
		</style>