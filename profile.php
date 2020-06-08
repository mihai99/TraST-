<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="stylesheet" type="text/css" href="styles/general.css">
        <link rel="stylesheet" type="text/css" href="styles/profile.css">
        <script src="javascript/admin_account/admin_account_handler.js"></script>
    </head>
    <body onload="getLoggedInUser()">
        <?php
            include_once 'header.php';
        ?>
        <iframe id="details-response-frame" name="details-response-frame"
                onload="changeDetailsResponseArrived()"></iframe>
        <iframe id="password-response-frame" name="password-response-frame"
                onload="changePasswordResponseArrived()"></iframe>
        <div class="search">
            <div class="input">
                <label for="search">Cauta un utilizator:</label>
                <input type="text" name="search" id="searchUsers" onkeyup="getSearchedUsers(this.value)">
            </div>
            <div class="serach-result">
            </div>
        </div>
        <div class="user">
            <div class="details">
                <div class="img">
                    <img src="images/profiles/default.png" id="profile-image" alt="">
                </div>
                <div class="user-details">
                    <div id="user-name"></div>
                    <div id="user-username"></div>
                    <div id="user-phone"></div>
                    <div id="user-email"></div>
                    <div class="buttons">
                        <button class="main-button" onclick="showChangeDetailsModal()">Change details</button>
                        <button class="main-button" onclick="showChangePasswordModal()">Change password</button>
                    </div>
                </div>
            </div>
        </div>

        <?php
            if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
                echo '<div class="admin-panel">
            <div class="left-admin-panel">
                <div class="delete-user-container">
                    <label for="delete-user-input">Sterge utilizator:</label>
                    <input type="text" name="delete-user-input" id="delete-user-input">
                    <button class="main-button" onclick="deleteUser()">Sterge!</button>
                    <span id="delete-user-response"></span>
                </div>
                <div class="create-admin-container">
                    <label for="create-admin-input">Creeaza admin:</label>
                    <input type="text" name="create-admin-input" id="create-admin-input">
                    <button class="main-button" onclick="createAdmin()">Creeaza</button>
                    <span id="create-admin-response"></span>
                </div>
                <div class="delete-admin-container">
                    <label for="delete-admin-input">Elimina drepturi de admin:</label>
                    <input type="text" name="delete-admin-input" id="delete-admin-input">
                    <button class="main-button" onclick="deleteAdmin()">Elimina</button>
                    <span id="delete-admin-response"></span>
                </div>
            </div>
            <div class="right-admin-panel">
                <div class="add-question-container">
                    <h3>Adauga o noua intrebare</h3>
                    <label for="question-text-input">
                        Intrebarea:
                    </label>
                    <textarea id="question-text-input"></textarea>

                    <label for="question-answer1">Prima varianta de raspuns:</label>
                    <input type="text" name="question-answer1" id="question-answer1">

                    <label for="question-answer2">A doua varianta de raspuns:</label>
                    <input type="text" name="question-answer2" id="question-answer2">

                    <label for="question-answer3">A treia varianta de raspuns:</label>
                    <input type="text" name="question-answer3" id="question-answer3">

                    <div class="answer-options">
                        <p>Raspuns corect: </p>
                        <label for="option-A">A</label>
                        <input type="radio" name="answer-option" id="option-A" checked="true">

                        <label for="option-B">B</label>
                        <input type="radio" name="answer-option" id="option-B">

                        <label for="option-C">C</label>
                        <input type="radio" name="answer-option" id="option-C">
                    </div>

                    <div class="difficulty-option">
                        <p>Dificultate:</p>

                        <label for="dif1">1</label>
                        <input type="radio" name="difficulty-option" id="dif1" checked="true">

                        <label for="dif2">2</label>
                        <input type="radio" name="difficulty-option" id="dif2">

                        <label for="dif3">3</label>
                        <input type="radio" name="difficulty-option" id="dif3">
                    </div>
                    <button class="main-button" onclick="addQuestion()">Adauga intrebarea</button>
                    <span id="add-question-response"></span>
                </div>
            </div>
        </div>';
            }
        ?>

        <div class="modals hidden" onclick="closeModals()">
            <form action="php_scripts/ChangeUserDetails.php" method="post" enctype="multipart/form-data"
                  target="details-response-frame" class="modal change-details-modal"
                  onclick="shopClickPropagation(event, this)">
                <div class="detail">
                    <p>Photo:</p>
                    <input type="file" id="photo-upload" name="imageToUpload" placeholder="browse">
                </div>
                <div class="detail">
                    <p>Name:</p>
                    <input type="text" id="name-upload" name="name" placeholder="enter new name">
                </div>
                <div class="detail">
                    <p>Email:</p>
                    <input type="text" id="email-upload" name="email" placeholder="enter new email">
                </div>
                <div class="detail">
                    <p>Username:</p>
                    <input type="text" id="username-upload" name="username" placeholder="enter new username">
                </div>
                <div class="detail">
                    <p>Phone number:</p>
                    <input type="text" id="phone-upload" name="phone" placeholder="enter new phone number">
                </div>
                <p id="change-details-response-p"></p>
                <div class="buttons">
                    <input type="submit" name="submit" class="main-button" value="Change">
                    <button class="secondary-button" onclick="closeModals()">Cancel</button>
                </div>
            </form>
            <form action="php_scripts/ChangePassword.php" method="post" enctype="multipart/form-data"
                  target="password-response-frame" class="modal change-password-modal"
                  onclick="shopClickPropagation(event, this)">
                <div class="detail">
                    <p>Current password:</p>
                    <input type="text" id="current-password" name="current-password">
                </div>
                <div class="detail">
                    <p>New password:</p>
                    <input type="text" id="new-password" name="new-password">
                </div>
                <div class="detail">
                    <p>Repeat new password:</p>
                    <input type="text" id="repeat-password" name="repeat-password">
                </div>
                <p id="change-password-response-p"></p>
                <div class="buttons">
                    <input type="submit" name="submit" class="main-button" value="Change password">
                    <button class="secondary-button" onclick="closeModals()">Cancel</button>
                </div>
        </div>
        </div>
        <script src="javascript/modal-handler.js"></script>
        <script src="javascript/ajax/users-handler.js"></script>
    </body>
</html>