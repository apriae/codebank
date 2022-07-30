// Fungsi Membalik Text/String
// Menggunakan Javascript
function reverseText(text){
  var result = "";
  for(let i=(text.length-1);i>=0;i--){
    result += text.substr(i, 1);
  }
  return result;
}

var text = "wwww.linkedin.com";
console.log(reverseText(text));

// Input: wwww.linkedin.com
// Output: moc.nideknil.wwww