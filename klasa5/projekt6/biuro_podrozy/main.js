const login = document.getElementsByClassName['login'];
const headerHeight = document.getElementsByTagName["header"].clientHeight;
const footerHeight = document.getElementsByClassName['footer'].clientHeight;

console.log(headerHeight)
console.log(footerHeight)

login.style.height = `100vh - ${headerHeight + footerHeight}`;

console.log(login.style.clientHeight)