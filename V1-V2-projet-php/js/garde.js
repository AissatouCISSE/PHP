// document.getElementById("formulaire").addEventListener("submit", function(e){
// 	e.preventDefault();
// 	var erreur;
// 	var numeroagence = document.getElementById("numeroagence");
// 	var numerocompte = document.getElementById("numerocompte");
// 	var clerib = document.getElementById("clerib");
// 	var email = document.getElementById("email");
// 	var salire = document.getElementById("salaire");
// 	var nomemployeur = document.getElementById("nomemployeur");
// 	var adressemployeur = document.getElementById("adressemployeur");
// 	var rs = document.getElementById("rs");
// 	var id = document.getElementById("id");
// 	var typeclient =document.getElementById("typeclient");


// 	if ((typeclient.value!="Client Physique") || (typeclient.value!="Client Moral") ) {
// 		alert("Veuillez choisir le type de client!");
// 	}
// 	// if (typeclient.value=="ClientPhysique"){
// 	// 	document.getElementById("formulaire").style.visibility = "visible";
// 	// }else{
// 	// 	document.getElementById("formulaire").style.visibility = "hidden";
// 	// }


// 	 if((!nom.value) || isNaN(nom.value)==false){
// 		alert("Veuillez renseignez correctement le nom!");
// 	}else  if((!prenom.value) || isNaN(prenom.value)==false){
// 		alert("Veuillez renseignez correctement le prenom!");
// 	}else if(!adresse.value){
// 		alert("Veuillez renseignez correctement l'adresse'!");

// 	}else if (!email.value){
// 		alert("Veuillez renseignez votre email !");
// 		e.preventDefault();
// 	}else if((!numtel.value) || isNaN(numtel.value)){
// 		alert("Veuillez renseignez correctement le numero de telephone!");
// 	}

// 	//employeur

// 	var status = document.getElementById("processedCheckBox").checked;
//    if (status) {
//       alert("Es-tu salarié(e) ?: Si oui cliquez sur ok Sinon veuillez decochez la case (Es-tu salarié(e) ?)!");
//       document.getElementById("infosemploi").style.visibility = "visible";
//       if((!salaire.value) || isNaN(salaire.value)){
// 		alert("Veuillez renseignez correctement votre salaire!");
// 	}
// 	if((!nomemployeur.value) || isNaN(nomemployeur.value)==false){
// 		alert("Veuillez renseignez correctement le nom de l'employeur!");
// 	}
// 	if((!adressemployeur.value) || isNaN(adressemployeur.value)==false){
// 		alert("Veuillez renseignez correctement l'adresse' de l'employeur!");
// 	}
// 	if((!rs.value) || isNaN(rs.value)==false){
// 		alert("Veuillez renseignez la raison sociale de l'entreprise!");
// 	}
// 	 if((!id.value) || isNaN(id.value)){
// 		alert("Veuillez renseignez l'identification de l'entreprise!");
// 	}	

//    } else {
//    			alert("No");
//       document.getElementById("infosemploi").style.visibility = "hidden";
//    		salaire.value=null;
//    		// profession.value="null";
//    		nomemployeur.value=null;
//    		adressemployeur.value=null;
//    		rs.value=null;
//    		id.value=null;
      
//    }

//    	if (!numeroagence.value){
// 		alert("Veuillez renseignez le numero de l'agence!");
// 		e.preventDefault();
// 	}
// 	if(isNaN(numeroagence.value)){
// 		alert("le numero de l'agence doit etre uniquement des valeurs numeriques");
// 	}


// 	if (!numerocompte.value){
// 		alert("Veuillez renseignez le numero du compte!");
		
// 	}
// 	if(isNaN(numerocompte.value)){
// 		alert("le numero du compte doit etre uniquement des valeurs numeriques");
// 	}

// 	if (!clerib.value){
//                  // document.getElementById("msg").innerHTML="Entrez uniquement une valeur numérique";
//          alert("Veuillez renseignez le clerib:Entrez uniquement une valeur numérique");
               
//              }
//     if(isNaN(clerib.value)){
// 		alert("la cle RIB doit etre uniquement des valeurs numeriques");
// 	}
// 	if(clerib.value<1) {
// 		alert("la cle RIB doit etre etre comprise entre 01 et 97");
// 	}
// 	if(clerib.value>97){
// 		alert("la cle RIB doit etre etre comprise entre 01 et 97");
// 	}
	
// });