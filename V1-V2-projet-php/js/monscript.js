function afficher() {
  var typeclient = document.getElementById("typeclient");
  var formulaire = document.getElementById("formulaire");
  var aicha = document.getElementById("aicha");
  var cha = document.getElementById("cha");
  var label = document.getElementById("label");
  var infosemploi = document.getElementById("infosemploi");
  var valider = document.getElementById("valider");
  var physique = document.getElementById("physique");
  var moral= document.getElementById("moral");
  
 
  if (document.form.typeclient.value == 2)
  {
  	window.location.replace('physique.php');
  	// onblur=AddPhysique();
  	// if(f.style.display=="none")
  	// 	f.style.display="block";

  	if (h4.style.display == "none")
		h4.style.display = "block";

  	if (aicha.style.display == "none")
		aicha.style.display = "block";
		
 
  	if (cha.style.display == "none")
		cha.style.display = "block";

	if (valider.style.display == "none")
		valider.style.display = "block";
	label.style.display = "none";	
	infosemploi.style.display = "none";
	chacha.style.display="none";
e.preventDefault();
	document.getElementById("formulaire").addEventListener("submit", function(e){
	

	var numeroagence = document.getElementById("numeroagence");
	var numerocompte = document.getElementById("numerocompte");
	var clerib = document.getElementById("clerib");
	var email = document.getElementById("email");
	var salire = document.getElementById("salaire");
	var typeclient =document.getElementById("typeclient");
	var cni = document.getElementById("cni");

	if((!nom.value) || isNaN(nom.value)==false){
		alert("Veuillez renseignez correctement le nom!");
	}else  if((!prenom.value) || isNaN(prenom.value)==false){
		alert("Veuillez renseignez correctement le prenom!");
	}else if(!adresse.value){
		alert("Veuillez renseignez correctement l'adresse'!");

	}else if (!email.value){
		alert("Veuillez renseignez votre email !");
		e.preventDefault();
	}else if((!numtel.value) || isNaN(numtel.value)){
		alert("Veuillez renseignez correctement le numero de telephone!");
	}else if(!cni.value){
		alert("Veuillez renseignez le numero d'identification national !");
	}

	});
  }
  else if (document.form.typeclient.value == 3)
  {

  	h4.style.display = "none";
  	aicha.style.display = "none";
	cha.style.display = "none";	
	label.style.display = "none";
	chacha.style.display="none";	
	infosemploi.style.display = "block";
	if (valider1.style.display == "none")
		valider1.style.display = "block";
	// valider1.style.display = "block";
	e.preventDefault();
	document.getElementById("formulaire").addEventListener("submit", function(e){

	var nomemployeur = document.getElementById("nomemployeur");
	var adressemployeur = document.getElementById("adressemployeur");
	var rs = document.getElementById("rs");
	var id = document.getElementById("id");

	if((!nomemployeur.value) || isNaN(nomemployeur.value)==false){
		alert("Veuillez renseignez correctement le nom de l'employeur!");
	}
	else if((!adressemployeur.value) || isNaN(adressemployeur.value)==false){
		alert("Veuillez renseignez correctement l'adresse' de l'employeur!");
	}
	else if((!rs.value) || isNaN(rs.value)==false){
		alert("Veuillez renseignez la raison sociale de l'entreprise!");
	}
	 else if((!id.value) || isNaN(id.value)){
		alert("Veuillez renseignez l'identification de l'entreprise!");
	}	
	});	
	

  }
  else{
  	valider.style.display = "none";
  	h4.style.display = "none";
  	aicha.style.display = "none";
	cha.style.display = "none";	
	label.style.display = "none";
	chacha.style.display="none";	
	infosemploi.style.display = "none";
	valider.style.display = "none";



  }


}


document.getElementById("formulaire").addEventListener("submit", function(e){
	

	var numeroagence = document.getElementById("numeroagence");
	var numerocompte = document.getElementById("numerocompte");
	var clerib = document.getElementById("clerib");
	var email = document.getElementById("email");
	var salire = document.getElementById("salaire");
	var typeclient =document.getElementById("typeclient");
	var cni = document.getElementById("cni");
	

	if((!nom.value) || isNaN(nom.value)==false){
		alert("Veuillez renseignez correctement le nom!");
		e.preventDefault();
	}else  if((!prenom.value) || isNaN(prenom.value)==false){
		alert("Veuillez renseignez correctement le prenom!");
		e.preventDefault();
	}else if(!adresse.value){
		alert("Veuillez renseignez correctement l'adresse'!");
		e.preventDefault();
	}else if (!email.value){
		alert("Veuillez renseignez votre email !");
		e.preventDefault();
	}else if((!numtel.value) || isNaN(numtel.value)){
		alert("Veuillez renseignez correctement le numero de telephone!");
		e.preventDefault();
	}else if(!cni.value){
		alert("Veuillez renseignez le numero d'identification national !");
		e.preventDefault();
	}

	});


document.getElementById("formulaire").addEventListener("submit", function(e){

	var nomemployeur = document.getElementById("nomemployeur");
	var raisonsociale = document.getElementById("raisonsociale");
	var rc = document.getElementById("rc");
	var ninea = document.getElementById("ninea");

	if((!nomemployeur.value) || isNaN(nomemployeur.value)==false){
		alert("Veuillez renseignez correctement le nom de l'employeur!");
		e.preventDefault();
	}
	else if((!raisonsociale.value) || isNaN(raisonsociale.value)==false){
		alert("Veuillez renseignez correctement la raison sociale de l'employeur!");
		e.preventDefault();
	}
	else if((!rc.value) || isNaN(rc.value)==false){
		alert("Veuillez rc de l'entreprise!");
		e.preventDefault();
	}
	 else if((!ninea.value) || isNaN(ninea.value)){
		alert("Veuillez renseignez le ninea de l'entreprise!");
		e.preventDefault();
	}	
	});	


