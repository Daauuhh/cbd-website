



/* IP */
fetch('https://api.ipify.org?format=json')
.then(resultat => resultat.json())
.then(json => {
    const ip = json.ip

/* PAYS */    

const ip_key = "e1b26f38dcfbfe5ace5e2a992ad1daca "
fetch('http://api.ipstack.com/' + ip + '?access_key=' + ip_key)
.then(resultat => resultat.json())
     .then (json =>{
         const pays = json.country_name
         
    

         
let navigateur = navigator.appCodeName;

let plateforme = navigator.platform;


if (pays === 'France'){
 /* alert("Tu habite en : "+ pays + "\n Ton navigateur est : "+ navigateur + "\n Ton systeme d'exploitation est : " + plateforme);*/
  document.getElementById('bandeau').className='rgpd'
 
}

$('#opencredits').click(function(){
  window.open('https://www.deshoulieres-avocats.com/politique-de-confidentialite/', '_blank');;
});

$('#accept').click(function(){
  $('#bandeau').fadeToggle('slow');
});





})

})


