<style>
    <?php
    include_once 'styles/footer.css';
    ?>
</style>

<footer class="site-footer">

    <div class="row">
        <ul class="footer-links">
            <li>
                <a href="https://www.facebook.com/ciubotariu.vlad99">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" class="svg-inline--fa fa-facebook fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                        </path>
                    </svg>
                </a>
                <a href="mailto:ciubotariuvlad99@yahoo.com">Ciubotariu Vlad-Calin </a>
            </li>
            <li>
                <a href="https://www.facebook.com/mihai.blaga.963">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" class="svg-inline--fa fa-facebook fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                        </path>
                    </svg>

                </a>
                <a href="mailto:mihaiblaga_99@yahoo.com">Blaga Mihai-Andrei </a>
            </li>
        </ul>
    </div>
    <div class="container">
        <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by us
        </p>
    </div>
</footer>
<div id="modal-background" onclick="closeBackground()">
    <div class="inputs-modal" id="login-modal" onclick="shopClickPropagation(event, this)">
        <div class="close" onclick="closeBackground()">x</div>
        <div class="inputs">
            <div class="input-group">
                <label for="username-login">Username:</label>
                <input id="username-login" type="text" class="input">
            </div>
            <div class="input-group">
                <label for="password-login">Password:</label>
                <input id="password-login" type="password" class="input">
            </div>
        </div>
        <div id="login-response"></div>

        <div class="buttons">
            <button class="main-button" onclick="showRegisterModal()">Register</button>
            <button class="main-button" onclick="login()">Login</button>
        </div>
    </div>
    <div class="inputs-modal" id="register-modal" onclick="shopClickPropagation(event, this)">
        <div class="close" onclick="closeBackground()">x</div>
        <div class="inputs">
            <div class="input-group">
                <label for="name-register">Name*:</label>
                <input id="name-register" type="text" class="input">
            </div>
            <div class="input-group">
                <label for="username-register">Username*:</label>
                <input id="username-register" type="text" class="input">
            </div>
            <div class="input-group">
                <label for="password-register">Password*:</label>
                <input id="password-register" type="password" class="input">
            </div>
            <div class="input-group">
                <label for="repeat-password-register">Repeat-password*:</label>
                <input id="repeat-password-register" type="password" class="input">
            </div>
            <div class="input-group">
                <label for="email-register">Email number*:</label>
                <input id="email-register" type="text" class="input">
            </div>
            <div class="input-group">
                <label for="phone-register">Phone number*:</label>
                <input id="phone-register" type="text" class="input">
            </div>
        </div>
        <div id="register-response"></div>
        <div class="buttons">
            <button class="main-button" onclick="showLoginModal()">Login</button>
            <button class="main-button" onclick="register()"> Register</button>
        </div>
        </form>
    </div>
</div>