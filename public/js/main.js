/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/***/ (() => {

eval("$(document).ready(function () {\n  $(\"#refreshBtn\").on('click', function () {\n    console.log(\"Refreshed!\");\n    window.location.reload();\n  });\n  $(\"#coBtn\").on('click', function () {\n    var x = document.getElementById(\"co\");\n\n    if (x.style.display === \"block\") {\n      x.style.display = \"none\";\n    } else {\n      x.style.display = \"block\";\n    }\n  });\n  $(\"#tempBtn\").on('click', function () {\n    console.log(\"Temp!\");\n    var x = document.getElementById(\"temp\");\n\n    if (x.style.display === \"block\") {\n      console.log(\"Show None!\");\n      x.style.display = \"none\";\n    } else {\n      console.log(\"Show Block!\");\n      x.style.display = \"block\";\n    }\n  });\n  $(\"#humBtn\").on('click', function () {\n    var x = document.getElementById(\"hum\");\n\n    if (x.style.display === \"block\") {\n      x.style.display = \"none\";\n    } else {\n      x.style.display = \"block\";\n    }\n  });\n  $(\"#vocBtn\").on('click', function () {\n    var x = document.getElementById(\"voc\");\n\n    if (x.style.display === \"block\") {\n      x.style.display = \"none\";\n    } else {\n      x.style.display = \"block\";\n    }\n  });\n  $(\"#preBtn\").on('click', function () {\n    var x = document.getElementById(\"pre\");\n\n    if (x.style.display === \"block\") {\n      x.style.display = \"none\";\n    } else {\n      x.style.display = \"block\";\n    }\n  });\n  $(\"#outBtn\").on('click', function () {\n    var x = document.getElementById(\"out\");\n\n    if (x.style.display === \"block\") {\n      x.style.display = \"none\";\n    } else {\n      x.style.display = \"block\";\n    }\n  }); // Trying to be responsive\n\n  function myFunction() {\n    var x = document.getElementById(\"myTopnav\");\n\n    if (x.className === \"topnav\") {\n      x.style.visibility = \"visible\";\n      x.className += \" responsive\";\n    } else {\n      x.className = \"topnav\";\n    }\n  }\n\n  $(\"#tempValue\").on('hover', function () {// let x = this.innerHTML;\n    // let out = parseFloat(x);\n    // let co2 = 1400;\n    //\n    // if (out > 21.0) {\n    //     $('#heaterOn').css({\n    //         'background-color': 'blue',\n    //     })\n    // } else if (out < 18.0) {\n    //     $('#heaterOff').css({\n    //         'background-color': 'blue',\n    //     })\n    // } else if (out > 22.0 && co2 > 1500) {\n    //     $('#windowOpen').css({\n    //         'background-color': 'blue',\n    //     })\n    // } else if (out > 22.0 && co2 > 1500) {\n    //     $('#windowClose').css({\n    //       'background-color': 'blue',\n    //     })\n    // }\n  });\n  var intervalID = setInterval(recommendationColor, 2000, $(\"#tempValue\").html());\n\n  function recommendationColor(out) {\n    out = parseFloat(out);\n    var co2 = 1600;\n    console.log(out);\n    console.log(occupancy);\n\n    if (out > 21.0) {\n      $('#heaterOn').css({\n        'background-color': 'blue'\n      });\n      console.log('changed to blue');\n    } else if (out < 18.0) {\n      $('#heaterOff').css({\n        'background-color': 'red'\n      });\n      console.log('changed to red');\n    } else if (out > 22.0 && co2 > 1500) {\n      $('#windowOpen').css({\n        'background-color': 'yellow'\n      });\n      console.log('changed to yellow');\n    } else if (out > 22.0 && co2 > 1500) {\n      $('#windowClose').css({\n        'background-color': 'green'\n      });\n      console.log('changed to green');\n    }\n  }\n\n  var occupancy = $('#occupValue').val();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbWFpbi5qcz9mZGFjIl0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5Iiwib24iLCJjb25zb2xlIiwibG9nIiwid2luZG93IiwibG9jYXRpb24iLCJyZWxvYWQiLCJ4IiwiZ2V0RWxlbWVudEJ5SWQiLCJzdHlsZSIsImRpc3BsYXkiLCJteUZ1bmN0aW9uIiwiY2xhc3NOYW1lIiwidmlzaWJpbGl0eSIsImludGVydmFsSUQiLCJzZXRJbnRlcnZhbCIsInJlY29tbWVuZGF0aW9uQ29sb3IiLCJodG1sIiwib3V0IiwicGFyc2VGbG9hdCIsImNvMiIsIm9jY3VwYW5jeSIsImNzcyIsInZhbCJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBWTtBQUUxQkYsRUFBQUEsQ0FBQyxDQUFDLGFBQUQsQ0FBRCxDQUFpQkcsRUFBakIsQ0FBb0IsT0FBcEIsRUFBNkIsWUFBVTtBQUNuQ0MsSUFBQUEsT0FBTyxDQUFDQyxHQUFSLENBQVksWUFBWjtBQUNBQyxJQUFBQSxNQUFNLENBQUNDLFFBQVAsQ0FBZ0JDLE1BQWhCO0FBQ0gsR0FIRDtBQUtBUixFQUFBQSxDQUFDLENBQUMsUUFBRCxDQUFELENBQVlHLEVBQVosQ0FBZSxPQUFmLEVBQXdCLFlBQVU7QUFDOUIsUUFBSU0sQ0FBQyxHQUFHUixRQUFRLENBQUNTLGNBQVQsQ0FBd0IsSUFBeEIsQ0FBUjs7QUFDQSxRQUFJRCxDQUFDLENBQUNFLEtBQUYsQ0FBUUMsT0FBUixLQUFvQixPQUF4QixFQUFpQztBQUM3QkgsTUFBQUEsQ0FBQyxDQUFDRSxLQUFGLENBQVFDLE9BQVIsR0FBa0IsTUFBbEI7QUFDSCxLQUZELE1BRU87QUFDSEgsTUFBQUEsQ0FBQyxDQUFDRSxLQUFGLENBQVFDLE9BQVIsR0FBa0IsT0FBbEI7QUFDSDtBQUNKLEdBUEQ7QUFTQVosRUFBQUEsQ0FBQyxDQUFDLFVBQUQsQ0FBRCxDQUFjRyxF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QVIsQ0FBWSxnQkFBWjtBQUNILEtBTE0sTUFLQSxJQUFJZSxHQUFHLEdBQUcsSUFBTixJQUFjRSxHQUFHLEdBQUcsSUFBeEIsRUFBOEI7QUFDakN0QixNQUFBQSxDQUFDLENBQUMsYUFBRCxDQUFELENBQWlCd0IsR0FBakIsQ0FBcUI7QUFDakIsNEJBQW9CO0FBREgsT0FBckI7QUFHQXBCLE1BQUFBLE9BQU8sQ0FBQ0MsR0FBUixDQUFZLG1CQUFaO0FBQ0gsS0FMTSxNQUtBLElBQUllLEdBQUcsR0FBRyxJQUFOLElBQWNFLEdBQUcsR0FBRyxJQUF4QixFQUE4QjtBQUNqQ3RCLE1BQUFBLENBQUMsQ0FBQyxjQUFELENBQUQsQ0FBa0J3QixHQUFsQixDQUFzQjtBQUNsQiw0QkFBb0I7QUFERixPQUF0QjtBQUdBcEIsTUFBQUEsT0FBTyxDQUFDQyxHQUFSLENBQVksa0JBQVo7QUFDSDtBQUNKOztBQUVELE1BQUlrQixTQUFTLEdBQUd2QixDQUFDLENBQUMsYUFBRCxDQUFELENBQWlCeUIsR0FBakIsRUFBaEI7QUFFSCxDQXRJRCIsInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcclxuXHJcbiAgICAkKFwiI3JlZnJlc2hCdG5cIikub24oJ2NsaWNrJywgZnVuY3Rpb24oKXtcclxuICAgICAgICBjb25zb2xlLmxvZyhcIlJlZnJlc2hlZCFcIik7XHJcbiAgICAgICAgd2luZG93LmxvY2F0aW9uLnJlbG9hZCgpO1xyXG4gICAgfSk7XHJcblxyXG4gICAgJChcIiNjb0J0blwiKS5vbignY2xpY2snLCBmdW5jdGlvbigpe1xyXG4gICAgICAgIGxldCB4ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJjb1wiKTtcclxuICAgICAgICBpZiAoeC5zdHlsZS5kaXNwbGF5ID09PSBcImJsb2NrXCIpIHtcclxuICAgICAgICAgICAgeC5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgeC5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG5cclxuICAgICQoXCIjdGVtcEJ0blwiKS5vbignY2xpY2snLCBmdW5jdGlvbigpe1xyXG4gICAgICAgIGNvbnNvbGUubG9nKFwiVGVtcCFcIik7XHJcbiAgICAgICAgbGV0IHggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInRlbXBcIik7XHJcbiAgICAgICAgaWYgKHguc3R5bGUuZGlzcGxheSA9PT0gXCJibG9ja1wiKSB7XHJcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKFwiU2hvdyBOb25lIVwiKTtcclxuICAgICAgICAgICAgeC5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgY29uc29sZS5sb2coXCJTaG93IEJsb2NrIVwiKTtcclxuICAgICAgICAgICAgeC5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG5cclxuICAgICQoXCIjaHVtQnRuXCIpLm9uKCdjbGljaycsIGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgbGV0IHggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImh1bVwiKTtcclxuICAgICAgICBpZiAoeC5zdHlsZS5kaXNwbGF5ID09PSBcImJsb2NrXCIpIHtcclxuICAgICAgICAgICAgeC5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgeC5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG5cclxuICAgICQoXCIjdm9jQnRuXCIpLm9uKCdjbGljaycsIGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgbGV0IHggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInZvY1wiKTtcclxuICAgICAgICBpZiAoeC5zdHlsZS5kaXNwbGF5ID09PSBcImJsb2NrXCIpIHtcclxuICAgICAgICAgICAgeC5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgeC5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG5cclxuICAgICQoXCIjcHJlQnRuXCIpLm9uKCdjbGljaycsIGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgbGV0IHggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInByZVwiKTtcclxuICAgICAgICBpZiAoeC5zdHlsZS5kaXNwbGF5ID09PSBcImJsb2NrXCIpIHtcclxuICAgICAgICAgICAgeC5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgeC5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG5cclxuICAgICQoXCIjb3V0QnRuXCIpLm9uKCdjbGljaycsIGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgbGV0IHggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm91dFwiKTtcclxuICAgICAgICBpZiAoeC5zdHlsZS5kaXNwbGF5ID09PSBcImJsb2NrXCIpIHtcclxuICAgICAgICAgICAgeC5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgeC5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG5cclxuICAgIC8vIFRyeWluZyB0byBiZSByZXNwb25zaXZlXHJcbiAgICBmdW5jdGlvbiBteUZ1bmN0aW9uKCkge1xyXG4gICAgICAgIHZhciB4ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJteVRvcG5hdlwiKTtcclxuICAgICAgICBpZiAoeC5jbGFzc05hbWUgPT09IFwidG9wbmF2XCIpIHtcclxuICAgICAgICAgICAgeC5zdHlsZS52aXNpYmlsaXR5PVwidmlzaWJsZVwiO1xyXG4gICAgICAgICAgICB4LmNsYXNzTmFtZSArPSBcIiByZXNwb25zaXZlXCI7XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgeC5jbGFzc05hbWUgPSBcInRvcG5hdlwiO1xyXG4gICAgICAgIH1cclxuICAgIH1cclxuXHJcbiAgICAkKFwiI3RlbXBWYWx1ZVwiKS5vbignaG92ZXInLCBmdW5jdGlvbiAoKXtcclxuICAgICAgICAvLyBsZXQgeCA9IHRoaXMuaW5uZXJIVE1MO1xyXG4gICAgICAgIC8vIGxldCBvdXQgPSBwYXJzZUZsb2F0KHgpO1xyXG4gICAgICAgIC8vIGxldCBjbzIgPSAxNDAwO1xyXG4gICAgICAgIC8vXHJcbiAgICAgICAgLy8gaWYgKG91dCA+IDIxLjApIHtcclxuICAgICAgICAvLyAgICAgJCgnI2hlYXRlck9uJykuY3NzKHtcclxuICAgICAgICAvLyAgICAgICAgICdiYWNrZ3JvdW5kLWNvbG9yJzogJ2JsdWUnLFxyXG4gICAgICAgIC8vICAgICB9KVxyXG4gICAgICAgIC8vIH0gZWxzZSBpZiAob3V0IDwgMTguMCkge1xyXG4gICAgICAgIC8vICAgICAkKCcjaGVhdGVyT2ZmJykuY3NzKHtcclxuICAgICAgICAvLyAgICAgICAgICdiYWNrZ3JvdW5kLWNvbG9yJzogJ2JsdWUnLFxyXG4gICAgICAgIC8vICAgICB9KVxyXG4gICAgICAgIC8vIH0gZWxzZSBpZiAob3V0ID4gMjIuMCAmJiBjbzIgPiAxNTAwKSB7XHJcbiAgICAgICAgLy8gICAgICQoJyN3aW5kb3dPcGVuJykuY3NzKHtcclxuICAgICAgICAvLyAgICAgICAgICdiYWNrZ3JvdW5kLWNvbG9yJzogJ2JsdWUnLFxyXG4gICAgICAgIC8vICAgICB9KVxyXG4gICAgICAgIC8vIH0gZWxzZSBpZiAob3V0ID4gMjIuMCAmJiBjbzIgPiAxNTAwKSB7XHJcbiAgICAgICAgLy8gICAgICQoJyN3aW5kb3dDbG9zZScpLmNzcyh7XHJcbiAgICAgICAgLy8gICAgICAgJ2JhY2tncm91bmQtY29sb3InOiAnYmx1ZScsXHJcbiAgICAgICAgLy8gICAgIH0pXHJcbiAgICAgICAgLy8gfVxyXG5cclxuICAgIH0pXHJcblxyXG4gICAgdmFyIGludGVydmFsSUQgPSBzZXRJbnRlcnZhbChyZWNvbW1lbmRhdGlvbkNvbG9yLCAyMDAwLCAkKFwiI3RlbXBWYWx1ZVwiKS5odG1sKCkpO1xyXG5cclxuICAgIGZ1bmN0aW9uIHJlY29tbWVuZGF0aW9uQ29sb3Iob3V0KVxyXG4gICAge1xyXG4gICAgICAgIG91dCA9IHBhcnNlRmxvYXQob3V0KTtcclxuICAgICAgICBsZXQgY28yID0gMTYwMDtcclxuICAgICAgICBjb25zb2xlLmxvZyhvdXQpO1xyXG4gICAgICAgIGNvbnNvbGUubG9nKG9jY3VwYW5jeSk7XHJcblxyXG4gICAgICAgIGlmIChvdXQgPiAyMS4wKSB7XHJcbiAgICAgICAgICAgICQoJyNoZWF0ZXJPbicpLmNzcyh7XHJcbiAgICAgICAgICAgICAgICAnYmFja2dyb3VuZC1jb2xvcic6ICdibHVlJyxcclxuICAgICAgICAgICAgfSlcclxuICAgICAgICAgICAgY29uc29sZS5sb2coJ2NoYW5nZWQgdG8gYmx1ZScpO1xyXG4gICAgICAgIH0gZWxzZSBpZiAob3V0IDwgMTguMCkge1xyXG4gICAgICAgICAgICAkKCcjaGVhdGVyT2ZmJykuY3NzKHtcclxuICAgICAgICAgICAgICAgICdiYWNrZ3JvdW5kLWNvbG9yJzogJ3JlZCcsXHJcbiAgICAgICAgICAgIH0pXHJcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKCdjaGFuZ2VkIHRvIHJlZCcpO1xyXG4gICAgICAgIH0gZWxzZSBpZiAob3V0ID4gMjIuMCAmJiBjbzIgPiAxNTAwKSB7XHJcbiAgICAgICAgICAgICQoJyN3aW5kb3dPcGVuJykuY3NzKHtcclxuICAgICAgICAgICAgICAgICdiYWNrZ3JvdW5kLWNvbG9yJzogJ3llbGxvdycsXHJcbiAgICAgICAgICAgIH0pXHJcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKCdjaGFuZ2VkIHRvIHllbGxvdycpO1xyXG4gICAgICAgIH0gZWxzZSBpZiAob3V0ID4gMjIuMCAmJiBjbzIgPiAxNTAwKSB7XHJcbiAgICAgICAgICAgICQoJyN3aW5kb3dDbG9zZScpLmNzcyh7XHJcbiAgICAgICAgICAgICAgICAnYmFja2dyb3VuZC1jb2xvcic6ICdncmVlbicsXHJcbiAgICAgICAgICAgIH0pXHJcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKCdjaGFuZ2VkIHRvIGdyZWVuJyk7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG5cclxuICAgIHZhciBvY2N1cGFuY3kgPSAkKCcjb2NjdXBWYWx1ZScpLnZhbCgpO1xyXG5cclxufSk7XHJcbiJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvbWFpbi5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/main.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/main.js"]();
/******/ 	
/******/ })()
;