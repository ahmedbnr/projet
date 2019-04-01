

function verifierLivreur(event)
{
    var debut = document.getElementById("debut").value;
    var email = document.getElementById("email").value;
    var cin = document.getElementById("cin").value;
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var date = document.getElementById("date").value;
    var region = document.getElementById("region").value;
    var code = document.getElementById("code").value;
    var fin = document.getElementById("fin").value;
    var ville = document.getElementById("ville").value;
    var diplome = document.getElementById("diplome").value;

    //

    if(debut == "") {
        document.getElementById("alertDateDeb").style.display = 'block';
        event.preventDefault();
    }
    else{
        document.getElementById("alertDateDeb").style.display = 'none';
    }

    if(email == ""){
        document.getElementById("alertEmail").style.display = 'block';
        event.preventDefault();
    }
    else{

        document.getElementById("alertEmail").style.display = 'none';
    }

    if(fin == ""){
        document.getElementById("alertDateFin").style.display = 'block';
        event.preventDefault();
    }
    else{
        document.getElementById("alertDateFin").style.display = 'none';
    }

    if(cin == ""){
        document.getElementById("alertCin").style.display = 'block';
        event.preventDefault();
    }
    else{
        document.getElementById("alertCin").style.display = 'none';
    }

    if(nom == "")
    {
        document.getElementById("alertNom").style.display = 'block';
        event.preventDefault();
    }
    else{
        document.getElementById("alertNom").style.display = 'none';
    }

    if(prenom == "")
    {
        document.getElementById("alertPrenom").style.display = 'block';
        event.preventDefault();
    }

    else{
        document.getElementById("alertPrenom").style.display = 'none';
    }
    if(ville == "")
    {
        document.getElementById("alertVille").style.display = 'block';
        event.preventDefault();
    }
    else{
        document.getElementById("alertVille").style.display = 'none';
    }

    if(region == "")
    {
        document.getElementById("alertRegion").style.display = 'block';
        event.preventDefault();
    }
    else{
        document.getElementById("alertRegion").style.display = 'none';
    }

    if(code == "")
    {
        document.getElementById("alertCode").style.display = 'block';
        event.preventDefault();
    }
    else{
        document.getElementById("alertCode").style.display = 'none';
    }

    if(date == "")
    {
        document.getElementById("alertDate").style.display = 'block';
        event.preventDefault();
    }
    else{
        document.getElementById("alertDate").style.display = 'none';
    }

    if(diplome == "")
    {
        document.getElementById("alertDiplome").style.display = 'block';
        event.preventDefault();
    }
    else{
        document.getElementById("alertDiplome").style.display = 'none';
    }

}

function validUsername()
{
    var username = document.getElementById("username").value;
    if(username.length == 0)
    {
        document.getElementById("alertUsername").style.display = 'block';
        document.getElementById("ajoutLivreur").disabled = true;
    }
    else
    {
        document.getElementById("alertUsername").style.display = 'none';
        document.getElementById("ajoutLivreur").disabled = false;
    }
}

function validCin()
{
    var cin = document.getElementById("cin").value;
    if(cin.length != 8 || isNaN(cin))
    {
        document.getElementById("alertCin").style.display = 'block';
        document.getElementById("ajoutLivreur").disabled = true;
    }
    else
    {
        document.getElementById("alertCin").style.display = 'none';
        document.getElementById("ajoutLivreur").disabled = false;
    }

    //alertUsername
}

function validateEmail(email)
{
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function validEmail()
{
    var email = document.getElementById("email").value;

    if(email.length == 0)
    {
        document.getElementById("alertEmail").style.display = 'block';
        document.getElementById("ajoutLivreur").disabled = true;
    }
    else
    {
        document.getElementById("alertEmail").style.display = 'none';
        if(!validateEmail(email))
        {
            document.getElementById("alertEmailNotValid").style.display = 'block';
            document.getElementById("ajoutLivreur").disabled = true;
        }
        else
        {
            document.getElementById("alertEmailNotValid").style.display = 'none';
            document.getElementById("ajoutLivreur").disabled = false;
        }

    }
}

function validName()
{
    var nom = document.getElementById("nom").value;

    if(nom.length == 0)
        document.getElementById("alertNom").style.display = 'block';
    else
        document.getElementById("alertNom").style.display = 'none';
}

function validRegion()
{
    var region = document.getElementById("region").value;

    if(region.length == 0)
    {
        document.getElementById("ajoutLivreur").disabled = true;
        document.getElementById("alertRegion").style.display = 'block';
    }
    else
    {
        document.getElementById("ajoutLivreur").disabled = false;
        document.getElementById("alertRegion").style.display = 'none';
    }

}

function validVille()
{
    var ville = document.getElementById("ville").value;

    if(ville.length == 0)
    {
        document.getElementById("ajoutLivreur").disabled = true;
        document.getElementById("alertVille").style.display = 'block';
    }
    else
    {
        document.getElementById("ajoutLivreur").disabled = false;
        document.getElementById("alertVille").style.display = 'none';
    }

}

function validPrenom()
{
    var prenom = document.getElementById("prenom").value;
    if(prenom.length == 0)
    {
        document.getElementById("ajoutLivreur").disabled = true;
        document.getElementById("alertPrenom").style.display = 'block';
    }

    else
    {
        document.getElementById("ajoutLivreur").disabled = false;
        document.getElementById("alertPrenom").style.display = 'none';
    }

}

function validPhone()
{
    var num = document.getElementById("num").value;

    console.log(num);
    if(num.length == 0)
    {
        document.getElementById("ajoutLivreur").disabled = true;
        document.getElementById("alertPhone").style.display = 'block';
    }
    else
    {
        document.getElementById("alertPhone").style.display = 'none';
        if(num.length != 8 || isNaN(num))
        {
            document.getElementById("ajoutLivreur").disabled = true;
            document.getElementById("alertPhoneNotValid").style.display = 'block';
        }
        else
        {
            document.getElementById("ajoutLivreur").disabled = false;
            document.getElementById("alertPhoneNotValid").style.display = 'none';
        }
    }

}

function validCode()
{
    var code = document.getElementById("code").value;
    console.log(code);
    if(code.length == 0)
    {
        document.getElementById("ajoutLivreur").disabled = true;
        document.getElementById("alertCode").style.display = 'block';
    }
    else
    {
        document.getElementById("alertCode").style.display = 'none';
        if(code.length != 4 || isNaN(code)){
            document.getElementById("ajoutLivreur").disabled = true;
            document.getElementById("alertCodeNotValid").style.display = 'block';
        }
        else
        {
            document.getElementById("alertCodeNotValid").style.display = 'none';
            document.getElementById("ajoutLivreur").disabled = false;
        }

    }

}

function validateDate()
{
    var today = new Date();
    var dateN = document.getElementById("date").value;
    var dateNaissance = new Date(dateN);
    if(today <= dateNaissance || dateN.length == 0)
    {
        document.getElementById("ajoutLivreur").disabled = true;
        document.getElementById("alertDate").style.display = "block";
    }
    else{
        document.getElementById("ajoutLivreur").disabled = false;
        document.getElementById("alertDate").style.display = "none";
    }

}


function validateDateDeb()
{
    var today = new Date();
    var date = document.getElementById("debut").value;
    var dateDeb = new Date(date);
    console.log("date deb");
    if(today > dateDeb || date.length == 0)
    {
        document.getElementById("ajoutLivreur").disabled = true;
        document.getElementById("alertDateDeb").style.display = "block";
    }
    else{
        document.getElementById("ajoutLivreur").disabled = false;
        document.getElementById("alertDateDeb").style.display = "none";
    }

}


function validateDateFin()
{
    var Fin = document.getElementById("fin").value;
    var Debut = document.getElementById("debut").value;
    var dateDebut = new Date(Debut);
    var dateFin = new Date(Fin);
    if(dateFin <= dateDebut || Fin.length == 0)
    {
        document.getElementById("ajoutLivreur").disabled = true;
        document.getElementById("alertDateFin").style.display = "block";
    }
    else{
        document.getElementById("ajoutLivreur").disabled = false;
        document.getElementById("alertDateFin").style.display = "none";
    }
}

function validDiplome()
{
    var diplome = document.getElementById("diplome").value;
    if(diplome.length == 0)
    {
        document.getElementById("ajoutLivreur").disabled = true;
        document.getElementById("alertDiplome").style.display = 'block';
    }
    else{
        document.getElementById("ajoutLivreur").disabled = false;
        document.getElementById("alertDiplome").style.display = 'none';
    }
}