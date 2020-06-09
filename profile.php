<!DOCTYPE html>
<html lang="ro">

    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="stylesheet" type="text/css" href="styles/general.css">
        <link rel="stylesheet" type="text/css" href="styles/profile.css">
    </head>

    <body>
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
            <div class="serach-result hide-item" id="searchedUsers">
            </div>
        </div>
        <div class="content">
            <div id="user" class="localUser">

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

                <div class="admin-panel" id="admin-panel">
                    <div class="left-admin-panel">
                        <div class="delete-user-container admin-input">
                            <div class="top">
                                <div class="right">
                                    <label for="delete-user-input">Sterge utilizator:</label>
                                    <input type="text" name="delete-user-input" id="delete-user-input">
                                </div>
                                <button class="main-button" onclick="deleteUser()">Sterge!</button>
                            </div>
                            <span id="delete-user-response"></span>
                        </div>
                        <div class="create-admin-container admin-input">
                            <div class="top">
                                <div class="right">
                                    <label for="create-admin-input">Creeaza admin:</label>
                                    <input type="text" name="create-admin-input" id="create-admin-input">
                                </div>
                                <button class="main-button" onclick="createAdmin()">Creeaza</button>
                            </div>

                            <span id="create-admin-response"></span>
                        </div>
                        <div class="delete-admin-container  admin-input">
                            <div class="top">
                                <div class="right">
                                    <label for="delete-admin-input">Elimina drepturi de admin:</label>
                                    <input type="text" name="delete-admin-input" id="delete-admin-input">
                                </div>
                                <button class="main-button" onclick="deleteAdmin()">Elimina</button>
                            </div>

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
                            <div class="input">
                                <label for="question-answer1">Prima varianta de raspuns:</label>
                                <input type="text" name="question-answer1" id="question-answer1">
                            </div>
                            <div class="input">
                                <label for="question-answer2">A doua varianta de raspuns:</label>
                                <input type="text" name="question-answer2" id="question-answer2">
                            </div>
                            <div class="input">
                                <label for="question-answer3">A treia varianta de raspuns:</label>
                                <input type="text" name="question-answer3" id="question-answer3">
                            </div>

                            <div class="answer-options">
                                <p>Raspuns corect: </p>
                                <label for="option-A">A</label>
                                <input type="radio" name="answer-option" id="option-A" checked=checked>

                                <label for="option-B">B</label>
                                <input type="radio" name="answer-option" id="option-B">

                                <label for="option-C">C</label>
                                <input type="radio" name="answer-option" id="option-C">
                            </div>

                            <div class="difficulty-option">
                                <p>Dificultate:</p>

                                <label for="dif1">1</label>
                                <input type="radio" name="difficulty-option" id="dif1" checked=checked>

                                <label for="dif2">2</label>
                                <input type="radio" name="difficulty-option" id="dif2">

                                <label for="dif3">3</label>
                                <input type="radio" name="difficulty-option" id="dif3">
                            </div>
                            <button class="main-button" onclick="addQuestion()">Adauga intrebarea</button>
                            <span id="add-question-response"></span>
                        </div>
                    </div>
                </div>

                <div class="graphs">
                    <div id="tests-graph" class="tests-graph graph">
                        <canvas id="tests-graph-canvas" style="border:1px solid #d3d3d3;"> Your browser does not support
                            the HTML canvas tag.
                        </canvas>
                        <p>Progresul testelor</p>
                        <p>Verticala: numarul de teste</p>
                        <p>Orizontala: ultimele 14 zile</p>
                        <p>Linia verde: teste reusite</p>
                        <p>Linia rosie: teste esuate</p>
                    </div>
                    <div id="learning-graph" class="tests-graph graph">
                        <canvas id="invatare-graph-canvas" style="border:1px solid #d3d3d3;"> Your browser does not
                            support the HTML canvas tag.
                        </canvas>
                        <p>Progresul mediului de invatare</p>
                        <p>Verticala: numarul de intrebari parcurse</p>
                        <p>Orizontala: ultimele 14 zile</p>
                        <p>Linia verde: progres</p>
                        <p>Linia rosie: se putea si mai bine</p>
                    </div>
                </div>
            </div>
            <div id="compare" class="compare-user hide-item">
                <div class="user">
                    <div class="details">
                        <div class="img">
                            <img src="/images/profiles/default.png" id="compare-image" alt="">
                        </div>
                        <div class="user-details">
                            <div id="compare-name">sdaS</div>
                            <div id="compare-phone">dasd</div>
                            <div id="compare-email">dsad</div>
                        </div>
                    </div>
                </div>
                <div class="graphs">
                    <div id="test-graph" class="tests-graph graph">
                        <canvas id="compare-tests-graph-canvas" style="border:1px solid #d3d3d3;"> Browserul nu suporta
                            canvasuri
                        </canvas>
                        <p>Progresul testelor</p>
                        <p>Verticala: numarul de teste</p>
                        <p>Orizontala: ultimele 14 zile</p>
                        <p>Linia verde: teste reusite</p>
                        <p>Linia rosie: teste esuate</p>
                    </div>
                    <div id="learning-graph" class="tests-graph graph">
                        <canvas id="compare-invatare-graph-canvas" style="border:1px solid #d3d3d3;"> Browserul nu
                            suporta canvasuri
                        </canvas>
                        <p>Progresul mediului de invatare</p>
                        <p>Verticala: numarul de intrebari parcurse</p>
                        <p>Orizontala: ultimele 14 zile</p>
                        <p>Linia verde: progres</p>
                        <p>Linia rosie: se putea si mai bine</p>
                    </div>
                </div>
            </div>
        </div>
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
                    <input type="password" id="current-password" name="current-password">
                </div>
                <div class="detail">
                    <p>New password:</p>
                    <input type="password" id="new-password" name="new-password">
                </div>
                <div class="detail">
                    <p>Repeat new password:</p>
                    <input type="password" id="repeat-password" name="repeat-password">
                </div>
                <p id="change-password-response-p"></p>
                <div class="buttons">
                    <input type="submit" name="submit" class="main-button" value="Change password">
                    <button class="secondary-button" onclick="closeModals()">Cancel</button>
                </div>
        </div>
        <button class="main-button hide-item" id="hide-comparing" onclick="hideComparing()">Hide compare</button>
        <script src="javascript/modal-handler.js"></script>
        <script src="javascript/ajax/users-handler.js"></script>
        <script src="javascript/profile-graphs-handler.js"></script>
        <script src="javascript/ajax/graph-handler.js"></script>
        <script src="javascript/compare-handler.js"></script>
        <script src="javascript/admin_account/admin_account_handler.js"></script>
        <script>
            getTestsProgress();
            getLearningProgress();
            getLoggedInUser();
            window.onload = function () {
                var hideMe = document.getElementById('searchedUsers');
                document.onclick = function (e) {
                    if (e.target.id !== 'searchedUsers') {
                        hideMe.classList.add("hide-item");
                    }
                };
            };
        </script>
        <?php
            if (!(isset($_SESSION['admin']) && $_SESSION['admin'] == true)) {
                echo "<script>
                document.getElementById('admin-panel').innerHTML = null;
                document.getElementById('admin-panel').style.display = 'none';
            </script>";
            }
        ?>
    </body>

</html>