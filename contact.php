<?php

    $importJsHead = [
        "validation.js"
    ];

    require_once "includes/header.php";
    require_file("/includes/nav.php");



?>


    <!--   contact     -->
    <div class="tittle">
        <h1>CONTACT</h1>
        </div>
        <div  class="formulaire-msg">
            <div class="contact1">
                <div class="placeh">
                    <input id="name" type="text" placeholder="nom*" >
                    <div id="mName" class="errors"> </div>
                </div>
                <div>
                    <input id="email" type="email" placeholder="email*" required>
                    <div id="mEmail" class="errors"> </div>
                </div>
            </div>
            <div class="contact1">
                <div>
                    <input id="phone" placeholder="telephone*">
                    <div id="mPhone" class="errors"> </div>
                </div>
                <div>
                    <input id="subject" placeholder="sujet*">
                    <div id="mSujet" class="errors">  </div>
    
                </div>
            </div>
            <div class="contact3">
                <div>
                <textarea placeholder="Message*" id="message"></textarea>
                <div id="mMessage" class="errors">  </div>
                </div>
            </div>
            <div class="evnvy" style="padding-bottom: 5%;">
                <button onclick="validateForm()" >Envoyer</button>
            </div> 
        </div>
        
    

<?php

    require_file("/includes/footer.php");
    
?>

