<?=form_open(base_url() . 'main/login')?>

<?if($this->session->flashdata('flashError')):?>
<div class='flashError'>
	<?=$this->session->flashdata('flashError')?>
</div>
<?endif?>

<fieldset>
	<legend>Login Form</legend>
	<ul>
		<li>
			<label>Email</label>
			<?=form_input('userEmail', set_value('userEmail'))?>
			<?=form_error('userEmail')?>
		</li>
		<li>
			<label>Password</label>
			<?=form_password('userPassword')?>
			<?=form_error('userPassword')?>
		</li>
		<li>
			<?=form_submit('', 'Login')?>
		</li>
	</ul>
</fieldset>
<?=form_close()?>
