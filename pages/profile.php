<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../styles/general.css">
    <link rel="stylesheet" type="text/css" href="../styles/porfile.css">
    
</head>
<body>
    <div class="search">
        <div class="input">
            <label for="search">Cauta un utilizator:</label>
            <input type="text" name="search">
        </div>
        <div class="serach-result">
            <div class="person">
                <div class="name">AAA</div>
                <button class="secondary-button">Compara progresia</button>
            </div>
            <div class="person">
                <div class="name">AAA</div>
                <button class="secondary-button">Compara progresia</button>
            </div>
            <div class="person">
                <div class="name">AAA</div>
                <button class="secondary-button">Compara progresia</button>
            </div>
            <div class="person">
                <div class="name">AAA</div>
                <button class="secondary-button">Compara progresia</button>
            </div>
        </div>
    </div>
    <div class="user">
        <div class="details">
           <div class="img">
               <img src="./../images/profiles/8e1d8897b0476dbcfaac84824fd97298.jpg" alt="">
           </div> 
           <div class="user-details">
               <div class="name">dasd dasasd</div>
               <div class="username">dsadasd</div>
               <div class="phone">32132</div>
               <div class="email">dasdas@fdasfd.csa</div>
                <div class="buttons">
                    <button class="main-button" onclick="showChangeDetailsModal()">Change details</button>
                    <button class="main-button" onclick="showChangePasswordModal()">Change password</button>
                </div>
           </div>
        </div>
    </div>


    <div class="modals hidden" onclick="closeModals()">
        <div class="modal change-details-modal" onclick="shopClickPropagation(event, this)">
            <div class="detail">
                <p>Photo:</p>
                <input type="file" placeholder="browse">
            </div>
            <div class="detail">
                <p>Name:</p>
                <input type="text" placeholder="enter new name">
            </div>
            <div class="detail">
                <p>Email:</p>
                <input type="text" placeholder="enter new email">
            </div>
            <div class="detail">
                <p>Username:</p>
                <input type="text" placeholder="enter new username">
            </div>
            <div class="detail">
                <p>Phone number:</p>
                <input type="text" placeholder="enter new phone number">
            </div>
            <div class="buttons">
                <button class="main-button">Change</button>
                <button class="secondary-button" onclick="closeModals()">Cancel</button>
            </div>
        </div>
        <div class="modal change-password-modal"  onclick="shopClickPropagation(event, this)">
            <div class="detail">
                <p>Current password:</p>
                <input type="text">
            </div>
            <div class="detail">
                <p>New password:</p>
                <input type="text" >
            </div>
            <div class="detail">
                <p>Repeat new password:</p>
                <input type="text" >
            </div>
            <p class="response">Passwords do not match</p>
            <div class="buttons">
                <button class="main-button">Change password</button>
                <button class="secondary-button" onclick="closeModals()">Cancel</button>
            </div>
        </div>
    </div>
    <script src="../javascript/modal-handler.js"></script>
</body>
</html>