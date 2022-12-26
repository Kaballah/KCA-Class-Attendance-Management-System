function darkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}
  
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll/height) * 100;

    document.getElementById('myBar').style.width = scrolled + "%";
}

function myFunctionCert() {
    document.getElementById("cert").classList.toggle("show");
}

function myFunctionDip() {
    document.getElementById("dip").classList.toggle("show");
}

function myFunctionBach() {
    document.getElementById("bach").classList.toggle("show");
}

function myFunctionMast() {
    document.getElementById("mast").classList.toggle("show");
}

function bisf() {
    document.getElementById("units").classList.toggle("show");
}
  
// Close the dropdown menu if the user clicks outside of it

window.onclick = function(event) {
    if (!event.target.matches('.dropdown-btn')) {
      var dropdowns = document.getElementsByClassName("dropdown-container");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
}

// JQuery for the Popup Menu

$(function() {
	// OPEN
	$('[data-popup-open]').on('click', function(e) {
		var targeted_popup_class = jQuery(this).attr('data-popup-open');
		$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

		e.preventDefault();
	});

	// CLOSE
	$('[data-popup-close]').on('click', function(e) {
		var targeted_popup_class = jQuery(this).attr('data-popup-close');
		$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

		e.preventDefault();
	});
});

// JQuery Search Option

// $(document).ready(function() {
//     $("#myInput").on("keyup", function() {
//         var value = $(this).val().toLowerCase();
//         $("#button button").filter(function() {
//             $(this).toggle($(this).text()
//             .toLowerCase().indexOf(value) > -1)
//         });
//     });
// });

// $(document).ready(function() {
//     $("#myInput").on("keyup", function() {
//         var value = $(this).val().toLowerCase();
//         $("#button1 button").filter(function() {
//             $(this).toggle($(this).text()
//             .toLowerCase().indexOf(value) > -1)
//         });
//     });
// });

// Search Option 1

function search_unit() {
    let input = document.getElementById('myInput').value
    input = input.toLowerCase();
    let div = document.getElementById('button')
    let x = div.getElementsByTagName('button');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}

// Search Option 2

function search_unit_2() {
    let input = document.getElementById('myInput2').value
    input = input.toLowerCase();
    let div = document.getElementById('button2')
    let x = div.getElementsByTagName('button');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}

// Search Option 3

function search_unit_3() {
    let input = document.getElementById('myInput3').value
    input = input.toLowerCase();
    let div = document.getElementById('button3')
    let x = div.getElementsByTagName('button');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}

// Search Option 4

function search_unit_4() {
    let input = document.getElementById('myInput4').value
    input = input.toLowerCase();
    let div = document.getElementById('button4')
    let x = div.getElementsByTagName('button');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}

// Search Option 5

function search_unit_5() {
    let input = document.getElementById('myInput5').value
    input = input.toLowerCase();
    let div = document.getElementById('button5')
    let x = div.getElementsByTagName('button');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}

// Search Option 6

function search_unit_6() {
    let input = document.getElementById('myInput6').value
    input = input.toLowerCase();
    let div = document.getElementById('button6')
    let x = div.getElementsByTagName('button');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}

// Search Option 7

function search_unit_7() {
    let input = document.getElementById('myInput7').value
    input = input.toLowerCase();
    let div = document.getElementById('button7')
    let x = div.getElementsByTagName('button');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}

// Search Option 8

function search_unit_8() {
    let input = document.getElementById('myInput8').value
    input = input.toLowerCase();
    let div = document.getElementById('button9')
    let x = div.getElementsByTagName('button');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}

// Search Option 9

function search_unit_9() {
    let input = document.getElementById('myInput9').value
    input = input.toLowerCase();
    let div = document.getElementById('button9')
    let x = div.getElementsByTagName('button');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}

// Search Option 10

function search_unit_10() {
    let input = document.getElementById('myInput10').value
    input = input.toLowerCase();
    let div = document.getElementById('button10')
    let x = div.getElementsByTagName('button');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}

// Search Option 11

function search_unit_11() {
    let input = document.getElementById('myInput11').value
    input = input.toLowerCase();
    let div = document.getElementById('button11')
    let x = div.getElementsByTagName('button');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}

// Search Option 12

function search_unit_12() {
    let input = document.getElementById('myInput12').value
    input = input.toLowerCase();
    let div = document.getElementById('button12')
    let x = div.getElementsByTagName('button');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}