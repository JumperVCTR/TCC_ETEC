    function validate(){
        with(profile){
            if(name.value.length < 2){
                document.getElementById("errorvl").innerHTML="O campo nome não possui caracteres suficiente.";
                name.focus();
                return false;
            }
            if(surname.value.length < 2){
                document.getElementById("errorvl").innerHTML="O campo sobrenome não possui caracteres suficiente.";
                surname.focus();
                return false;
            }

            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
                if(!email.value.match(mailformat))
                {  
                    document.getElementById("errorvl").innerHTML="O campo e-mail é inválido.";  
                    email.focus();  
                    return false;  
                }
        }
        return true;
    }