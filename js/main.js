let submitForm = document.querySelector('.form-container')
let mail =	document.getElementById('email')

function ValidateEmail (mail) {
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
    return (true)
  }
  return (false)
}

function ValidationPassWord () {
  var testLetter = false
  var testMajuscule = false
  var testNumber = false

  var password = document.getElementById('password').value
  for (let char of password) {
    if ((char >= 'a') && (char <= 'z')) { testLetter = true }

    if ((char >= '0') && (char <= '9')) { testNumber = true }

    if ((char >= 'A') && (char <= 'Z')) { testMajuscule = true }
  }
  if (testLetter && testNumber && testMajuscule) { return true } else {
    return false
  }
}

submitForm.onsubmit = function (event) {
  event.preventDefault()
  let firstname =	document.getElementById('first-name')
  let lastname =	document.getElementById('last-name')
  let adress =	document.getElementById('address')
  let mail =	document.getElementById('email')
  let passwor =	document.getElementById('password')
  let commen =	document.getElementById('comment')

  if (firstname.value.trim() == '') {
    alert('first name empty!')
  } else if (lastname.value.trim() == '') {
  	alert('lastname empty!')
  } else if (adress.value.trim() == '') {
  	alert('adress empty!')
  } else if (mail.value.trim() == '') {
  	alert('mail empty!')
  } else if (!ValidateEmail(mail.value)) {
    alert('You have entered an invalid email address!')
  } else if (passwor.value.trim() == '') {
  	alert('password empty!')
  } else if (!ValidationPassWord(passwor.value)) {
  	alert('The password must be a combination of charatacters , numbers and at least a capital letter')
  } else if (commen.value.trim() == '') {
  	alert('comment empty!')
  }
}
