<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<div class="support_form">
    <div class="support_form_div" id="support_form_div">
        <form action="#" class="support_form" id="support_form" onsubmit="handleFormSubmission(); return false;">
            <div class="first_name" id="first_name">
                <label class="first_name_label" for="first_name_input">First name</label><br>
                <input class="first_name_input" id="first_name_input" type="text" required><br>
            </div>
            <div class="last_name" id="last_name">
                <label class="last_name_label" for="last_name_input">Last name</label><br>
                <input class="last_name_input" id="last_name_input" type="text" required><br>
            </div>
            <div class="email" id="email">
                <label class="email_label" for="email_input">Email</label><br>
                <input class="email_input" id="email_input" type="email" required><br>
            </div>
            <div class="phone" id="phone">
                <label class="phone_label" for="phone_input">Phone number</label><br>
                <input class="phone_input" id="phone_input" type="text" required><br>
            </div>
            <div class="category" id="category">
                <label class="category_label" for="phone_input">Category</label><br>
                <select class="category_select" id="category_select">
                    <option>Questions</option>
                    <option>Feedback</option>
                    <option>Problems</option>
                    <option>Contribution</option>
                    <option>Others (please specify further)</option>
                </select> <br>
            </div>
            <div class="message" id="message">
                <label class="message_label" for="message_input">Phone number</label><br>
                <textarea class="message_input" id="message_input" required></textarea><br>
            </div>
            <div class="agree" id="agree">
                <label for="agree_checkbox" class="agree_label" id="agree_label">I agree that my data is being stored and used to contact me.</label><br>
                <input type="checkbox" class="agree_checkbox" id="agree_checkbox" required>
            </div>
            <div class="submit" id="submit">
                <button class="submit_button" id="submit_button" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
