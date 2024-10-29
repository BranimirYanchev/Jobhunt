<div class="form-page-container">
    <div class="profile-info-form-container">
        <div class="heading" align="center">
            <h1>Информация</h1>
        </div>

        <form id="profile-info-form" method="POST">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="place_of_living">Place of living:</label>
            <input type="text" id="place_of_living" name="place_of_living" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="1234567890" required>

            <label for="dob">Date of Birth (DD/MM/YYYY):</label>
            <input type="date" id="dob" name="dob" required>

            <input type="submit" value="Submit" id="submit-btn">
        </form>
    </div>
</div>

<script src="assets/elements/profile-info-form/script.js"></script>