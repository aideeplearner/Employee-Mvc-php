<div class="modal fade" id="employeeModal" tabindex="-1" role="dialog" aria-labelledby="employeeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="employeeModalLabel">New Employee</h5>
                <button type="button" class="btn btn-success btn-back" data-dismiss="modal">
                    <i class="fas fa-arrow-left"></i> BACK
                </button>
            </div>
            <div class="modal-body">
                <form id="employee" action="<?php echo ROOT ?>index.php?controller=main&action=addEmployee" method="POST">
                    <div class="form-group">
                        <label for="firstName">Name <span class="required">*</span></label>
                        <input type="text" class="form-control" name="name" id="name" required>
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Date of birth <span class="required">*</span></label>
                        <input type="date" name="dob" class="form-control" id="dob" required>
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="form-group">
                        <label for="email">Date of join <span class="required">*</span></label>
                        <input type="date" name="doj" class="form-control" id="doj" required>
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="form-group">
                        <label for="department">Department <span class="required">*</span></label>
                        <select class="form-control" id="department" name="designation" required>
                            <option value="" disabled selected>Select your department</option>
                            <?php
                            while ($row = mysqli_fetch_row($data["designation"])) {
                                $designation[$row[1]] = $row[0];
                                echo "<option value=$row[0]>$row[1]</option>";
                            }
                            ?>
                        </select>
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="form-group">
                        <label for="city">City <span class="required">*</span></label>
                        <select class="form-control" id="city" name="city" required>
                            <option value="" id="city" disabled selected>Select your city</option>
                            <?php
                            while ($row = mysqli_fetch_row($data["city"])) {
                                $city[$row[1]] = $row[0];
                                echo "<option value=$row[0]>$row[1]</option>";
                            }
                            ?>
                        </select>
                        <i class="fas fa-check"></i>
                    </div>

                    <div class="form-group">
                        <label for="address">Address <span class="required">*</span></label>
                        <input type="text" class="form-control" id="address" name="address" required>
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="form-group">
                        <label for="state">State <span class="required">*</span></label>
                        <select class="form-control" id="state" name="state" required>
                            <option value="" id="state" disabled selected>Select your state</option>
                            <?php
                            while ($row = mysqli_fetch_row($data["state"])) {
                                $states[$row[1]] = $row[0];
                                echo "<option value=$row[0]>$row[1]</option>";
                            }
                            ?>

                        </select>
                        <i class="fas fa-check"></i>
                    </div>


                    <div class="form-group">
                        <label for="phone">Salary <span class="required">*</span></label>
                        <input type="number" class="form-control" name="salary" id="salary" required>
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="form-group">
                        <label for="country">Country <span class="required">*</span></label>
                        <select class="form-control" name="country" id="country" required>
                            <option id="country" value="" disabled selected>Select your country</option>
                            <?php
                            while ($row = mysqli_fetch_row($data["country"])) {
                                $country[$row[1]] = $row[0];
                                echo "<option value=$row[0]>$row[1]</option>";
                            }
                            ?>
                        </select>
                        <i class="fas fa-check"></i>
                    </div>

                    <div class="form-group">
                        <label for="profile-photo">Profile Photo</label>
                        <input type="file" class="form-control-file" id="profile-photo" accept="image/*">
                        <small class="form-text text-muted">Upload a photo for your profile. Accepted
                            formats:
                            JPG, PNG, GIF.</small>
                    </div>


            </div>
            <div class="modal-footer">

                <button type="submit" onclick="success()" class="btn btn-submit">SUBMIT</button>
            </div>
            </form>
        </div>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>


</div>