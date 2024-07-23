function before44(){
  let x=document.getElementById('fourth').style.backgroundImage
  if(x.matchAll('after4.png'))
  {
    document.getElementById('fourth').style.backgroundImage="url(before4.png)"
    document.getElementById('p4').innerHTML="<h3>Before:Enhancements are made</h3>"
  }
}
function after44(){
  let x=document.getElementById('fourth').style.backgroundImage
if(x.matchAll('before4.png')){
document.getElementById('fourth').style.backgroundImage="url(after4.png)"
document.getElementById('p4').innerHTML="<h3>After:Enhancements are made</h3>"
}
}
function before33(){
  let x=document.getElementById('third').style.backgroundImage
  if(x.matchAll('after3.png'))
  {
    document.getElementById('third').style.backgroundImage="url(before3.png)"
    document.getElementById('p3').innerHTML="<h3>Before:Enhancements are made</h3>"
  }
}
function after33(){
  let x=document.getElementById('third').style.backgroundImage
if(x.matchAll('before3.png')){
document.getElementById('third').style.backgroundImage="url(after3.png)"
document.getElementById('p3').innerHTML="<h3>After:Enhancements are made</h3>"
}
}
  function before22(){
    let x=document.getElementById('second').style.backgroundImage
    if(x.matchAll('after2.png'))
    {
      document.getElementById('second').style.backgroundImage="url(before2.png)"
      document.getElementById('p2').innerHTML="<h3>Before:Enhancements are made</h3>"
    }
  }
  function after22(){
    let x=document.getElementById('second').style.backgroundImage
 if(x.matchAll('before2.png')){
  document.getElementById('second').style.backgroundImage="url(after2.png)"
  document.getElementById('p2').innerHTML="<h3>After:Enhancements are made</h3>"
}
  }
  function before11(){
    let x=document.getElementById('first').style.backgroundImage
    if(x.matchAll('after1.png'))
    {
      document.getElementById('first').style.backgroundImage="url(before1.png)"
      document.getElementById('p1').innerHTML="<h3>Before:Enhancements are made</h3>"
    }
  }
  function after11(){
    let x=document.getElementById('first').style.backgroundImage
 if(x.matchAll('before1.png')){
  document.getElementById('first').style.backgroundImage="url(after1.png)"
  document.getElementById('p1').innerHTML="<h3>After:Enhancements are made</h3>"
}
  }
  
  function signup()
  {
   
      var radios = document.forms['frm1']['Gender'];
      var isChecked = false;
    
      for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
          isChecked = true;
          break;
        }
      }
    
      if (!isChecked) {
        alert("Please select your gender.");
        return false;
      }
    
      return true;
    }
    
  