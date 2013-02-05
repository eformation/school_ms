<?php

$code = array(
	'name'	=> 'code',
	'id'	=> 'code',
	'value'	=> set_value('code'),
	'maxlength'	=> 10,
	'size'	=> 30,
);

$idno = array(
	'name'	=> 'idno',
	'id'	=> 'idno',
	'value'	=> set_value('idno'),
	'maxlength'	=> 10,
	'size'	=> 30,
);

$fname = array(
	'name'	=> 'fname',
	'id'	=> 'fname',
	'value'	=> set_value('fname'),
	'maxlength'	=> 10,
	'size'	=> 30,
);

$lname = array(
	'name'	=> 'lname',
	'id'	=> 'lname',
	'value'	=> set_value('lname'),
	'maxlength'	=> 10,
	'size'	=> 30,
);

if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<?php echo form_open($this->uri->uri_string()); ?>

    <div class="tabbable">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#student" data-toggle="tab">Student</a></li>
            <li><a href="#teacher" data-toggle="tab">Teacher</a></li>
            <li><a href="#school" data-toggle="tab">School</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="student"></div>
            <div class="tab-pane" id="teacher"></div>
            <div class="tab-pane" id="school"></div>
                <table>
                    <tr>
                        <td><?php echo form_label('School code', $code['id']); ?></td>
                        <td><?php echo form_input($code); ?></td>
                        <td style="color: red;"><?php echo form_error($code['name']); ?><?php echo isset($errors[$code['name']])?$errors[$code['name']]:''; ?></td>
                    </tr>

                    <tr>
                        <td><?php echo form_label('ID No', $idno['id']); ?></td>
                        <td><?php echo form_input($idno); ?></td>
                        <td style="color: red;"><?php echo form_error($idno['name']); ?><?php echo isset($errors[$idno['name']])?$errors[$idno['name']]:''; ?></td>
                    </tr>

                    <tr>
                        <td><?php echo form_label('First Name', $fname['id']); ?></td>
                        <td><?php echo form_input($fname); ?></td>
                        <td style="color: red;"><?php echo form_error($fname['name']); ?><?php echo isset($errors[$fname['name']])?$errors[$fname['name']]:''; ?></td>
                    </tr>

                    <tr>
                        <td><?php echo form_label('Last Name', $lname['id']); ?></td>
                        <td><?php echo form_input($lname); ?></td>
                        <td style="color: red;"><?php echo form_error($lname['name']); ?><?php echo isset($errors[$lname['name']])?$errors[$lname['name']]:''; ?></td>
                    </tr>        

                    <?php if ($use_username) { ?>
                    <tr>
                        <td><?php echo form_label('Username', $username['id']); ?></td>
                        <td><?php echo form_input($username); ?></td>
                        <td style="color: red;"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td><?php echo form_label('Email Address', $email['id']); ?></td>
                        <td><?php echo form_input($email); ?></td>
                        <td style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('Password', $password['id']); ?></td>
                        <td><?php echo form_password($password); ?></td>
                        <td style="color: red;"><?php echo form_error($password['name']); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('Confirm Password', $confirm_password['id']); ?></td>
                        <td><?php echo form_password($confirm_password); ?></td>
                        <td style="color: red;"><?php echo form_error($confirm_password['name']); ?></td>
                    </tr>

                    <?php if ($captcha_registration) {
                            if ($use_recaptcha) { ?>
                    <tr>
                        <td colspan="2">
                                <div id="recaptcha_image"></div>
                        </td>
                        <td>
                                <a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
                                <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
                                <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                                <div class="recaptcha_only_if_image">Enter the words above</div>
                                <div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
                        </td>
                        <td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
                        <td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
                        <?php echo $recaptcha_html; ?>
                    </tr>
                    <?php } else { ?>
                    <tr>
                        <td colspan="3">
                                <p>Enter the code exactly as it appears:</p>
                                <?php echo $captcha_html; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
                        <td><?php echo form_input($captcha); ?></td>
                        <td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
                    </tr>
                    <?php }
                    } ?>
                </table>
            
        </div>
    </div>
<?php echo form_submit('register', 'Register'); ?>
<?php echo form_close(); ?>