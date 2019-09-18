//
//function addHiddenClass(element) {
//    element.classList.toggle("hidden");
//}
//
//contactForm = document.getElementById("form1");
//orderForm = document.getElementById("form2");
//
//contactCheckbox = document.getElementById("contact-checkbox");
//orderCheckbox = document.getElementById("order-checkbox");
//
//contactCheckbox.addEventListener("click", function(){addHiddenClass(orderForm);});
//orderCheckbox.addEventListener("click", function(){addHiddenClass(contactForm);});
//
//formButton = document.getElementById("toggle-button");
//formButton.addEventListener("click", function(){addHiddenClass(contactForm);});
//

function addClass(element, className) {
    element.classList.add(className);
}

function removeClass(element, className) {
    element.classList.remove(className);
}

function changeVisibleForm(checkbox, form1, form2) {
    if (checkbox.checked) {
        alert("This is executed");
        form1.style.display = none;
        form2.style.display = none;
        radios.style.backgroundColor = "red";
    } else {
        form1.style.display = none;
        form2.style.display = block;
    }
}

formButton = document.getElementById("toggle-button");

contactForm = document.getElementById("form1");
orderForm = document.getElementById("form2");

contactCheckbox = document.getElementById("radio-contact");
orderCheckbox = document.getElementById("order-checkbox");

radios = document.getElementById("radios");
//radios.addEventListener("click", function(){checkRadiosValues(contactCheckbox, orderCheckbox, contactForm, orderForm);});
formButton.addEventListener("click", function(){
    changeVisibleForm(contactCheckbox, contactForm, orderForm);
    //alert("Work done!");
});

//changeVisibleForm(contactCheckbox, contactForm, orderForm);
function getRed(elt) {
    elt.style.backgroundColor = "red";
}

//contactCheckbox.addEventListener("click", function(){addHiddenClass(orderForm);});
//orderCheckbox.addEventListener("click", function(){addHiddenClass(contactForm);});

