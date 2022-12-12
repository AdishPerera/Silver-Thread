  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCB8ru-IQNuA79gg_gzc-V5_R9dOKSwqQo",
    authDomain: "contactform-75eb7.firebaseapp.com",
    databaseURL: "https://contactform-75eb7-default-rtdb.firebaseio.com",
    projectId: "contactform-75eb7",
    storageBucket: "contactform-75eb7.appspot.com",
    messagingSenderId: "406459244436",
    appId: "1:406459244436:web:37ac6025eacfd6aa5d7981"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  
  // Reference messages collection
  let contactInfo = firebase.database().ref("infos");
  
  // Listen for form submit
  document.querySelector("contactForm").addEventListener("submit", submitForm);
  
  // Submit form
  function submitForm(e){
    e.preventDefault();
  
    //Get value
    let name = document.querySelector("name").value;
    let email = document.querySelector("email").value;
    let telephone = document.querySelector("telephone").value;
    let subject = document.querySelector("subject").value;
    let message = document.querySelector("message").value;
  
    saveContactInfo(name, email, telephone, subject, message);

    document.querySelector(".contact-form").reset();

    sendEmail(name, email, subject, message);
}

// Save infos to firebase
function saveContactInfo(name, email, telephone, subject, message){
    let newContactInfo = contactInfo.push();
    newContactInfo.set({
        name: name,
        email: email,
        telephone: telephone,
        subject: subject,
        message: message,
    });

    retrieveInfos();
}

//Retrieve Infos
function retrieveInfos(){
    let ref = firebase.database().ref("infos");
    ref.on("value", gotData);
}

function gotData(data){
    let info = data.val();
    let keys = Object.keys(info);

    for(let i = 0; i < keys.length; i++){
        let infoData = keys[i]
        let name = info[infoData].name
        let email = info[infoData].email
        let telephone = info[infoData].telephone
        let subject = info[infoData].subject
        let message = info[infoData].message
        console.log(name, email, subject, message);

        let infosResults = document.querySelector(".infosResults");

    //     infosResults.innerHTML += `<div>
    //     <p><strong>Name: <strong/>${name} <br/>
    //     <a><strong>Email: <strong/>${email} </a> <br/> 
    //     <a><strong>Subject: <strong/>${subject} </a> <br/> 
    //     <a><strong>Message: <strong/>${message} </a>
    //     </p>
    //     </div>`        
    }
}
//retrieveInfos();

//Send email Info
function sendEmail(name, email, subject, message){
    Email.send({
        Host: "smtp.gmail.com",
        Username: 'adishperera4@gmail.com',
        Password: "notthisone",
        To: 'ghostbatman4@gmail.com',
        From: 'adishperera4@gmail.com',
        Subject: `${name} sent you a message`,
        Body: `Name: ${name} <br/> Email: ${email} <br/> Subject: ${subject} <br/> Message: ${message}`,
    }).then((message) => alert("Your mail sent successfully!"));
}
  