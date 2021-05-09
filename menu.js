function getRandomItem(menuObj){
    var items = menuObj.menuItems;
    var flavors = menuObj.flavors;
    var result;
    
    // https://www.w3schools.com/js/js_random.asp
    // grabs a random element off the arrays
    var randomItem = items[Math.floor(Math.random() * items.length)];
    var randomFlavor = flavors[Math.floor(Math.random() * flavors.length)];
    
    switch(randomItem){
            // these two items have specific flavors, so don't include flavors with them in the string
        case 'Red Bull Float':
        case 'Brownie Sundae':
            result = randomItem;
            break;
        default:
            // concatenate string with item and flavor to show on screen
            result = randomItem + ' with ' + randomFlavor + " flavored ice cream";
            break;
    }  
    $("#randomItemResponse").html("Try a " + result + "!");  
}

// Professor Wergeles AJAX code
function getMenu() {
    var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            menuObj = JSON.parse(this.responseText);
            getRandomItem(menuObj);
      }
    };
    
    xmlhttp.open("GET", "menuData.php", true);
    xmlhttp.send();
}


