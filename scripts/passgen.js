// var strSymbols = "~!@#$%^&*(){}?><`=-|][";
// for (i = 0; i < strSymbols.length; i++) {
//   console.log(String.fromCharCode(strSymbols.charCodeAt(i)));
// }
var maxAlphabet = 26;
var symbolsandletter = "~!^@#><n$%&*?|][";
for (i = 0; i < symbolsandletter.length; i++) {
  console.log(String.fromCharCode(symbolsandletter.charCodeAt(i) + getRand(maxAlphabet)));
}
function getRand(max) {
  return Math.floor(Math.random() * max);
}