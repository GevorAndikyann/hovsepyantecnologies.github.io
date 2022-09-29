let userData = document.getElementById("userData");
let closedForm = document.getElementById("closedForm");
let orderBtn1 = document.querySelector(".charencProd");
let orderBtn2 = document.querySelector(".product2Order");
let orderBtn3 = document.querySelector(".product3Order");
let selectProdType = document.querySelector(".selectProdType");

orderBtn1.addEventListener('click', function (){
    userData.style.display = "flex";
    selectProdType.value = "Charents system";
});
orderBtn2.addEventListener('click', function (){
    userData.style.display = "flex";
    selectProdType.value = "Charents system";
});
orderBtn3.addEventListener('click', function (){
    userData.style.display = "flex";
    selectProdType.value = "Charents system";
});

closedForm.addEventListener('click', function (){
    userData.style.display = "none";
  });