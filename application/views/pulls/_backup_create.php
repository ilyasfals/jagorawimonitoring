<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<script src="<?php echo base_url('assets/js/jquery.backstretch.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/form.js');?>"></script>

<link href="<?php echo base_url('assets/css/form-elements.css');?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/style-form.css');?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/media-queries.css');?>" rel="stylesheet" />



<div class="row">
    <div class="col-sm-12 msf-form">

        <form role="form" action="<?php echo base_url('pulls/create');?>" method="post" class="form-inline">
            <fieldset>
                <h4>Gerbang Tol <span class="step">(Step 1 / 7)</span></h4>
                <div class="form-group">
                    <label for="gerbang-tol">Gerbang Tol:</label><br>
                    <input type="text" name="gerbang_tol" class="gerbang_tol form-control" id="gerbang-tol">
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name:</label><br>
                    <input type="text" name="last-name" class="last-name form-control" id="last-name">
                </div>
                <div class="form-group">
                    <label for="height">Height:</label><br>
                    <input type="text" name="height" class="height form-control" id="height">
                </div>
                <div class="form-group">
                    <label for="weight">Weight:</label><br>
                    <input type="text" name="weight" class="weight form-control" id="weight">
                </div>
                <br>
                <button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
            </fieldset>

            <fieldset>
                <h4>Place and Date of Birth <span class="step">(Step 2 / 7)</span></h4>
                <div class="form-group">
                    <label for="birth-city">City:</label><br>
                    <input type="text" name="birth-city" class="birth-city form-control" id="birth-city">
                </div>
                <div class="form-group">
                    <label for="birth-state">State / Province:</label><br>
                    <input type="text" name="birth-state" class="birth-state form-control" id="birth-state">
                </div>
                <div class="form-group">
                    <label for="birth-country">Country:</label><br>
                    <input type="text" name="birth-country" class="birth-country form-control" id="birth-country">
                </div>
                <div class="form-group">
                    <label for="birth-date">Date (YYYY/MM/DD):</label><br>
                    <input type="text" name="birth-date" class="birth-date form-control" id="birth-date">
                </div>
                <br>
                <button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
                <button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
            </fieldset>

            <fieldset>
                <h4>Address and Contact Information <span class="step">(Step 3 / 7)</span></h4>
                <div class="form-group">
                    <label for="address">Address:</label><br>
                    <input type="text" name="address" class="address form-control" id="address">
                </div>
                <div class="form-group">
                    <label for="address-city">City:</label><br>
                    <input type="text" name="address-city" class="address-city form-control" id="address-city">
                </div>
                <div class="form-group">
                    <label for="address-state">State / Province:</label><br>
                    <input type="text" name="address-state" class="address-state form-control" id="address-state">
                </div>
                <div class="form-group">
                    <label for="address-country">Country:</label><br>
                    <input type="text" name="address-country" class="address-country form-control" id="address-country">
                </div>
                <div class="form-group">
                    <label for="address-postal-code">Postal Code:</label><br>
                    <input type="text" name="address-postal-code" class="address-postal-code form-control" id="address-postal-code">
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone:</label><br>
                    <input type="text" name="telephone" class="telephone form-control" id="telephone">
                </div>
                <div class="form-group">
                    <label for="mobile-phone">Mobile Phone:</label><br>
                    <input type="text" name="mobile-phone" class="mobile-phone form-control" id="mobile-phone">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label><br>
                    <input type="text" name="email" class="email form-control" id="email">
                </div>
                <br>
                <button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
                <button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
            </fieldset>

            <fieldset>
                <h4>Social Media Profiles <span class="step">(Step 4 / 7)</span></h4>
                <div class="form-group">
                    <label for="social-facebook">Facebook:</label><br>
                    <input type="text" name="social-facebook" class="social-facebook form-control" id="social-facebook">
                </div>
                <div class="form-group">
                    <label for="social-twitter">Twitter:</label><br>
                    <input type="text" name="social-twitter" class="social-twitter form-control" id="social-twitter">
                </div>
                <div class="form-group">
                    <label for="social-google-plus">Google Plus:</label><br>
                    <input type="text" name="social-google-plus" class="social-google-plus form-control" id="social-google-plus">
                </div>
                <div class="form-group">
                    <label for="social-instagram">Instagram:</label><br>
                    <input type="text" name="social-instagram" class="social-instagram form-control" id="social-instagram">
                </div>
                <div class="form-group">
                    <label for="social-pinterest">Pinterest:</label><br>
                    <input type="text" name="social-pinterest" class="social-pinterest form-control" id="social-pinterest">
                </div>
                <br>
                <button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
                <button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
            </fieldset>

            <fieldset>
                <h4>About You <span class="step">(Step 5 / 7)</span></h4>
                <div class="form-group">
                    <label for="about-you">Tell us a bit about yourself:</label><br>
                    <textarea name="about-you" class="about-you form-control" id="about-you"></textarea>
                </div>
                <br>
                <button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
                <button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
            </fieldset>

            <fieldset>
                <h4>Why You Want To Join <span class="step">(Step 6 / 7)</span></h4>
                <div class="form-group">
                    <label for="why-join">Tell us why you want to join our application:</label><br>
                    <textarea name="why-join" class="why-join form-control" id="why-join"></textarea>
                </div>
                <br>
                <button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
                <button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
            </fieldset>

            <fieldset>
                <h4>Other Form Elements <span class="step">(Step 7 / 7)</span></h4>
                <div class="radio-buttons-1">
                    <p>Radio Buttons 1:</p>
                    <label class="radio-inline">
                        <input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-1"> Option 1
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-2"> Option 2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-3"> Option 3
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-4"> Option 4
                    </label>
                </div>
                <div class="radio-buttons-2">
                    <p>Radio Buttons 2:</p>
                    <label class="radio-inline">
                        <input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-1"> Option 1
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-2"> Option 2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-3"> Option 3
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-4"> Option 4
                    </label>
                </div>
                <br>
                <div class="checkboxes-1">
                    <p>Checkboxes 1:</p>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-1"> Option 1
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-2"> Option 2
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-3"> Option 3
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-4"> Option 4
                    </label>
                </div>
                <div class="checkboxes-2">
                    <p>Checkboxes 2:</p>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-1"> Option 1
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-2"> Option 2
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-3"> Option 3
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-4"> Option 4
                    </label>
                </div>
                <br>
                <div class="selects-1">
                    <p>Select 1:</p>
                    <select class="form-control" name="select-1">
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                    </select>
                </div>
                <div class="selects-2">
                    <p>Select 2:</p>
                    <select class="form-control" name="select-2">
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                    </select>
                </div>
                <br>
                <button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
                <button type="submit" class="btn">Submit</button>
            </fieldset>

        </form>

    </div>
</div>