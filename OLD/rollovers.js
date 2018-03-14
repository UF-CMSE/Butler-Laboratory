<!--
        if (document.images) {            // Active Images
            img1on = new Image();      
            img1on.src = "images/topnav1_01.gif"; 
            img2on = new Image(); 
            img2on.src = "images/topnav1_02.gif";  
            img3on = new Image();
            img3on.src = "images/topnav1_03.gif";
            img4on = new Image();
            img4on.src = "images/topnav1_04.gif";
            img5on = new Image();      
            img5on.src = "images/nav1_01.gif"; 
            img6on = new Image(); 
            img6on.src = "images/nav1_02.gif";  
            img7on = new Image();
            img7on.src = "images/nav1_03.gif";
            img8on = new Image();
            img8on.src = "images/nav1_04.gif";
            img9on = new Image();      
            img9on.src = "images/nav1_05.gif"; 
            img10on = new Image(); 
            img10on.src = "images/nav1_06.gif";  
            img11on = new Image();
            img11on.src = "images/nav1_07.gif";
            img12on = new Image();
            img12on.src = "images/nav1_09.gif";

            img1off = new Image(); 
            img1off.src = "images/topnav_01.gif"; 
            img2off = new Image();          
            img2off.src = "images/topnav_02.gif"; 
            img3off = new Image();
            img3off.src = "images/topnav_03.gif";
            img4off = new Image();
            img4off.src = "images/topnav_04.gif";
            img5off = new Image(); 
            img5off.src = "images/nav_01.gif"; 
            img6off = new Image();          
            img6off.src = "images/nav_02.gif"; 
            img7off = new Image();
            img7off.src = "images/nav_03.gif";
            img8off = new Image();
            img8off.src = "images/nav_04.gif";
            img9off = new Image(); 
            img9off.src = "images/nav_05.gif"; 
            img10off = new Image();          
            img10off.src = "images/nav_06.gif"; 
            img11off = new Image();
            img11off.src = "images/nav_07.gif";
            img12off = new Image();
            img12off.src = "images/nav_09.gif";

        }

// Function to 'activate' images.

function imgOn(imgName) {
        if (document.images) {
            document[imgName].src = eval(imgName + "on.src");
        }
}

// Function to 'deactivate' images.

function imgOff(imgName) {
        if (document.images) {
            document[imgName].src = eval(imgName + "off.src");
        }
}

//  -->
