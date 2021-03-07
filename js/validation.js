function validateForm() 
{
    var name = document.getElementById("name");
    var subject = document.getElementById("subject");
    var phone = document.getElementById("phone");
    var email = document.getElementById("email");
    var message = document.getElementById("message");
    var mailformat = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)$/;
    var nameVer = /^[a-zA-Z\s]+$/;
    var phoneno = /^\d{10}$/;
    var i=0;
    
    
    if(name.value == "" )
    {
        document.getElementById('mName').innerHTML = "saisir  votre nom";
    }else if (name.value.match(nameVer)){
        document.getElementById('mName').innerHTML = "";
        i++;
    }else{
        document.getElementById('mName').innerHTML = "nom incorrect"
    }

    if(email.value == "" )
    {
        document.getElementById('mEmail').innerHTML = "saisir votre email";
    }else if(email.value.match(mailformat)){
        document.getElementById('mEmail').innerHTML = "";
        i++;
    }else{
        document.getElementById('mEmail').innerHTML = "completé votre email"
    }

    if(phone.value == "" )
    {
        document.getElementById('mPhone').innerHTML = "saisir votre numero ";
    }else if((phone.value.match(phoneno))){
        document.getElementById('mPhone').innerHTML = "";
        i++;
    }else {
        document.getElementById('mPhone').innerHTML = "saisir des numeros"
    }

    if(subject.value == "" )
    {
        document.getElementById('mSujet').innerHTML = "saisir le sujet ";
    }else {
        document.getElementById('mSujet').innerHTML = "";
        i++;
    }

    if(message.value == "" )
    {
        document.getElementById('mMessage').innerHTML = "taper votre message";
    }else if (message.value.length >= 50){
        document.getElementById('mMessage').innerHTML = ""; 
        i++; 
    }else{
        document.getElementById('mMessage').innerHTML = "characters doit etre superieur a 50";
    }
    
    if (i>=5){
        alert('votre message a été envoyer');
        message.value = "";
        subject.value = "";
        phone.value = "";
        email.value = "";
        name.value = "";
    }

}