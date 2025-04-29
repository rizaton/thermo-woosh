// function getCookieValue(cookieName) {
//     const match = document.cookie.match(
//         new RegExp("(^| )" + cookieName + "=([^;]+)")
//     );
//     if (!match) return null;
//     return decodeURIComponent(match[2]);
// }

// function getCookie(name) {
//     let match = document.cookie.match(new RegExp("(^| )" + name + "=([^;]+)"));
//     if (match) return decodeURIComponent(match[2]);
//     return null;
// }

// function setCookie(name, value, days = 30) {
//     const d = new Date();
//     d.setTime(d.getTime() + days * 24 * 60 * 60 * 1000);
//     document.cookie =
//         name +
//         "=" +
//         encodeURIComponent(value) +
//         ";expires=" +
//         d.toUTCString() +
//         ";path=/";
// }

// function setStudentNavigation(studentName, studentClass) {
//     document.getElementById("studentName").textContent = studentName;
//     document.getElementById("studentClass").textContent = studentClass;
// }

// document.addEventListener("DOMContentLoaded", () => {
//     const userName = getCookie("studentName");
//     const userClass = getCookie("studentClass");

//     if (!userName || !userClass) {
//         document.getElementById("userModal").classList.remove("hidden");
//         document.getElementById("userModal").classList.add("flex");
//     } else {
//         setStudentNavigation(userName, userClass);
//     }
// });

// document.addEventListener("DOMContentLoaded", function () {
//     const studentName = getCookieValue("studentName");
//     const studentClass = getCookieValue("studentClass");

//     const nameElement = document.getElementById("student-name");
//     const classElement = document.getElementById("student-class");

//     if (nameElement && studentName) {
//         nameElement.textContent = studentName;
//     }
//     if (classElement && studentClass) {
//         classElement.textContent = studentClass;
//     }
// });

// document.getElementById("skipButton").addEventListener("click", (e) => {
//     e.preventDefault();
//     const userName = getCookie("studentName");
//     const userClass = getCookie("studentClass");

//     if (!userName && !userClass) {
//         setCookie("studentName", "Anonim");
//         setCookie("studentClass", "AnonimClass");
//         setStudentNavigation("Anonim", "AnonimClass");
//     }
//     setStudentNavigation(userName, userClass);
//     document.getElementById("userModal").classList.add("hidden");
//     document.getElementById("userModal").classList.remove("flex");
// });
// document.getElementById("saveButton").addEventListener("click", (e) => {
//     e.preventDefault();
//     const userName = document.getElementById("studentName").value.trim();
//     const userClass = document.getElementById("studentClass").value.trim();

//     if (name && userClass) {
//         setCookie("studentName", userName);
//         setCookie("studentClass", userClass);
//         setStudentNavigation(userName, userClass);
//         document.getElementById("userModal").classList.add("hidden");
//         document.getElementById("userModal").classList.remove("flex");
//     } else {
//         if (!userName && !userClass) {
//             document
//                 .getElementById("alertStudentName")
//                 .classList.remove("hidden");
//             document
//                 .getElementById("alertStudentClass")
//                 .classList.remove("hidden");
//         } else if (!userName) {
//             document
//                 .getElementById("alertStudentName")
//                 .classList.remove("hidden");
//             document
//                 .getElementById("alertStudentClass")
//                 .classList.add("hidden");
//         } else if (!userClass) {
//             document
//                 .getElementById("alertStudentClass")
//                 .classList.remove("hidden");
//             document.getElementById("alertStudentName").classList.add("hidden");
//         }
//     }
// });

// function changeUser() {
//     document.getElementById("userModal").classList.remove("hidden");
//     document.getElementById("userModal").classList.add("flex");
// }
