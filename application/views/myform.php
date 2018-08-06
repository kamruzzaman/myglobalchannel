<html>
<head>
    <title>My Form</title>
    <style>


        .error{
            color: tomato;
        }

        input[type='text'],[type='email'],[type='password'],[type='submit']{
            padding: 5px;
            border-radius: 5px;
            color: blue;
            margin: 5px;
        }
    </style>
</head>
<body>
<div class="error">
        <?php echo validation_errors(); ?>

</div>

<?php echo form_open('form'); ?>


<table>
    <tr>
        <th>Username</th>
        <td>
            <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
            <span class="error"><?php echo form_error('username')?></span>
        </td>
    </tr>

    <tr>
        <th>Password</th>
        <td>
            <input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />
            <span class="error"><?php echo form_error('password')?></span>
        </td>
    </tr>

    <tr>

        <th>Password Confirm</th>
        <td>
            <input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />
            <span class="error"><?php echo form_error('passconf')?></span>
        </td>
    </tr>

    <tr>
        <th>Email Address</th>
        <td>
            <input type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="e.g. brainlabs@gmail.com" size="50" />
            <span class="error"><?php echo form_error('email')?></span>
        </td>

    </tr>

    <tr>
        <th>Language</th>
        <td>
            <input type="checkbox" name="mycheck" value="1" <?php echo set_checkbox('mycheck', '1'); ?> />C
            <input type="checkbox" name="mycheck" value="2" <?php echo set_checkbox('mycheck', '2'); ?> />C++
            <input type="checkbox" name="mycheck" value="3" <?php echo set_checkbox('mycheck', '3'); ?> />C#
            <input type="checkbox" name="mycheck" value="4" <?php echo set_checkbox('mycheck', '4'); ?> />Python
            <input type="checkbox" name="mycheck" value="5" <?php echo set_checkbox('mycheck', '5'); ?> />Java
            <input type="checkbox" name="mycheck" value="6" <?php echo set_checkbox('mycheck', '6'); ?> />Php
            <span class="error"><?php echo form_error('mycheck')?></span>
        </td>

    </tr>

    <tr>
        <th>Genger</th>
        <td>
            <input type="radio" name="myradio" value="1" <?php echo  set_radio('myradio', '1' ); ?> />Male
            <input type="radio" name="myradio" value="2" <?php echo  set_radio('myradio', '2'); ?> />Female
            <span class="error"><?php echo form_error('myradio')?></span>
        </td>

    </tr>

    <tr>
        <th></th>
        <td>
            <select name="myselect">
                <option value=" " <?php echo  set_select('myselect'); ?> >-- CLASS --</option>
                <option value="one" <?php echo  set_select('myselect', 'one' ); ?> >One</option>
                <option value="two" <?php echo  set_select('myselect', 'two'); ?> >Two</option>
                <option value="three" <?php echo  set_select('myselect', 'three'); ?> >Three</option>
            </select>
            <span class="error"><?php echo form_error('myselect')?></span>
        </td>
    </tr>

    <tr>
        <td><input type="submit" value="SubmiT" /></td>
    </tr>

</table>


</form>

</body>
</html>