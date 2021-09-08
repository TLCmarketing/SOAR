console.log("connected")

var properties = document.getElementById('property-info')
var pClick = properties.getElementsByClassName('property-name')
var getProperty
// var propertyList = ["Black Rock", "Coryell Commons", "Monarch", "Promenade Commons", "Tera Vera", "Veranda Vistas"];
var propertyList

getInfo();


function getInfo() {
    for(i = 0; i <pClick.length; i++) {
        console.log(pClick[i].innerHTML)
        propertyList = pClick[i].innerHTML
        pClick[i].addEventListener('mouseover', applyBtn)
        pClick[i].addEventListener('mouseout', btnOut)
    }

 
}

function applyBtn(e) {
    console.log(e.target)
    var getProperty = e.target
    getProperty.style.backgroundColor = "#f3b120";
    getProperty.innerHTML = "I'd Like More Information";
}

function btnOut(f) {
    f.target.style.backgroundColor = "#143c57";
    console.log(propertyList)
    // console.log(f.target)
    
}
