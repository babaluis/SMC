/*JS on the site*/

document.getElementById('menuToggle').addEventListener('click', function () {
  const navLinks = document.querySelector('.nav-links');
  navLinks.classList.toggle('nav-active');
  
});

//webservice JS code start 
     // Web Service 1
     fetch('https://ipapi.co/8.8.8.8/country/')
     .then(function(response) {
       response.text().then(txt => {
         console.log('ola', txt);
         document.getElementById('service1').textContent = `Country: ${txt}`;
       });
     })
     .catch(function(error) {
       console.log(error)
     });
     
     
         // Web Service 2
         fetch('https://ipapi.co/8.8.8.8/city/')
     .then(function(response) {
       response.text().then(txt => {
         console.log('currency', txt);
         document.getElementById('service2').textContent = `City: ${txt}`;
       });
     })
//webservice Js Code END


//modal to appear code start
document.addEventListener('DOMContentLoaded', function () {
  const modal = document.getElementById('loginmodal');
  const openModalBtn = document.getElementById('loginModalBtn');
  const closeModalBtn = document.getElementById('closeModalBtn');

  openModalBtn.addEventListener('click', function () {
      modal.style.display = 'block';
  });

  closeModalBtn.addEventListener('click', function () {
      modal.style.display = 'none';
  });

  // Close modal when clicking outside of it
  window.addEventListener('click', function (event) {
      if (event.target === modal) {
          modal.style.display = 'none';
      }
  });
});


//modal code end

//login/registration modal details start
document.addEventListener('DOMContentLoaded', function () {
  const modal = document.getElementById('loginmodal');
  const register = document.getElementById('registrationmodal');
  const openModalBtn = document.getElementById('loginModalBtn');
  const registerModalBtn = document.getElementById('registerModalBtn');
  const closeModalBtn = document.getElementById('closeModalBtn');
  const closeregModalBtn = document.getElementById('closeregModalBtn');

  openModalBtn.addEventListener('click', function () {
      modal.style.display = 'block';
      register.style.display = 'none';
  });
  registerModalBtn.addEventListener('click', function () {
    register.style.display = 'block';
    modal.style.display = 'none';
  });

  closeModalBtn.addEventListener('click', function () {
      modal.style.display = 'none';
  });
  closeregModalBtn.addEventListener('click', function () {
      register.style.display = 'none';
  });

  // Close modal when clicking outside of it
  window.addEventListener('click', function (event) {
      if (event.target === modal  ) {
          modal.style.display = 'none';
      }
      if (event.target === register  ) {
          register.style.display = 'none';
      }
  });
});
