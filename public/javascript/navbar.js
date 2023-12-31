// Apparition navbar en mode mobile

const navHamburger = document.querySelector(".btn-hamburger");
const navigation = document.querySelector(".navigation");

navHamburger.addEventListener("click", () => {
  navHamburger.classList.toggle("nav-visible");
  navigation.classList.toggle("nav-visible");
});

//modale de contact

const btnModalContact2 = document.querySelector("#contact-loc"); //sur page location
const btnModalContact = document.querySelector(".modal-contact");
const fermerModalContact = document.querySelector(".fermerModaleContact");
const fenetreModale = document.querySelector(".fenetre-modale");
const overlayContact = document.querySelector(".overlay-contact");

btnModalContact.addEventListener("click", () => {
  fenetreModale.classList.toggle("dnone");
});
fermerModalContact.addEventListener("click", () => {
  fenetreModale.classList.toggle("dnone");
});
overlayContact.addEventListener("click", () => {
  fenetreModale.classList.toggle("dnone");
});

if (btnModalContact2) {
  btnModalContact2.addEventListener("click", () =>
    fenetreModale.classList.toggle("dnone")
  );
  btnModalContact2.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}

// loading contact

const contactForm = document.querySelector("#contactForm");

contactForm.addEventListener("submit", () => {
  document.getElementById("contact-loading-animation").style.display = "block";

  setTimeout(function () {
    document.getElementById("contact-loading-animation").style.display = "none";
    window.location.href =
      "http://localhost:8090/Gaston/velo_expresso%20-%20White/accueil";
  }, 3000);
});

// Slider accueil


// liste des images et btn
let img_slider = document.querySelectorAll(".img-slider");
let precedent = document.querySelector("#previous");
let suivant = document.querySelector("#next");

// taille de la liste des images
let nb_img = img_slider.length;

// on affiche l'image avec id=1
let etape = 0;

if (suivant) {
  suivant.addEventListener("click", () => {
    img_slider[etape].classList.add("dnone");
    etape++;
    if (etape >= nb_img) {
      etape = 0;
    }
    img_slider[etape].classList.remove("dnone");
  });

  precedent.addEventListener("click", () => {
    img_slider[etape].classList.add("dnone");
    etape--;
    if (etape < 0) {
      etape = nb_img - 1;
    }
    img_slider[etape].classList.remove("dnone");
  });

  // pour défilement automatique :
  setInterval(function () {
    img_slider[etape].classList.add("dnone");
    etape++;
    if (etape >= nb_img) {
      etape = 0;
    }
    img_slider[etape].classList.remove("dnone");
  }, 5000);
}

// partenaires

const animPartners = document.querySelectorAll(".bgc-rotate")

gsap.to(animPartners, {
  rotation : 360,
  duration : 6,
  repeat : -1
})

// pour faire apparaitre fiche détaillée vélo

const btn_velo_plus = document.querySelectorAll(".plus_form_velo_plus");

if (btn_velo_plus) {
  btn_velo_plus.forEach((btn) => {
    btn.addEventListener("click", () => {
      const num = btn.getAttribute("data-num");
      document.getElementById("form_velo_plus" + num).submit();
      console.log(num);
    });
  });

  // btn_velo_plus.addEventListener("click", ()=>{
  //   form_velo_plus.submit()
  //   console.log(data-num)
  // })
}

// affichage mdp

const mdpMasque = document.querySelector(".fa-eye-slash");
const mdpVisible = document.querySelector(".fa-eye");
const passwordAdmin = document.getElementById("password");

if (mdpMasque) {
  mdpMasque.addEventListener("click", () => {
    mdpMasque.classList.add("dnone");
    mdpVisible.classList.remove("dnone");
    passwordAdmin.type = "text";
  });
  mdpVisible.addEventListener("click", () => {
    mdpMasque.classList.remove("dnone");
    mdpVisible.classList.add("dnone");
    passwordAdmin.type = "password";
  });
}
